<?php

class Admins_model extends CI_Model {

    public function __construct() {
        $this->load->database();
        $this->load->helper(array('date'));
        $this->load->library(array('session'));
    }

    public function authenticate($email, $password) {
        $password = do_hash($password);
        $authenticate = $this->db->query("SELECT * FROM admins WHERE email='" . $email . "' AND password='" . $password . "'");
        if ($authenticate->num_rows() == 1) {
            foreach ($authenticate->result() as $admin) {
                $this->session->set_userdata('admin_id', $admin->id);
                $this->session->set_userdata('admin', $admin->fname . ' ' . $admin->lname);
                $login_ip = $this->input->ip_address();
                $curr_login_ips = $admin->current_login_ips;
                foreach (explode(',', $admin->current_login_ips) as $cli) {
                    if ($cli != $login_ip) {
                        $curr_login_ips .= ',' . $login_ip;
                    }
                }
                $data = array(
                    'last_login_ip' => $login_ip,
                    'last_login_at' => mdate('%Y-%m-%d %h:%i:%s', time()),
                    'current_login_ips' => $curr_login_ips,
                    'updated_at' => mdate('%Y-%m-%d %h:%i:%s', time())
                );

                $this->db->set($data);
                $this->db->where('id', $admin->id);
                $this->db->update('admins');
            }
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function logout() {
        $authenticate = $this->db->get_where('admins', array('id' => $_SESSION['admin_id']));
        foreach ($authenticate->result() as $admin) {
            $login_ip = $this->input->ip_address();
            $curr_login_ips = $admin->current_login_ips;
            $curr_login_ips_arr = explode(',', $curr_login_ips);
            foreach ($curr_login_ips_arr as $cli) {
                if ($cli == $login_ip) {
                    $key = array_search($cli, $curr_login_ips_arr);
                    unset($curr_login_ips_arr[$key]);
                }
            }
            $curr_login_ips = implode(',', $curr_login_ips_arr);
            $data = array(
                'current_login_ips' => $curr_login_ips,
                'updated_at' => mdate('%Y-%m-%d %h:%i:%s', time())
            );

            $this->db->set($data);
            $this->db->where('id', $admin->id);
            $this->db->update('admins');
        }
    }

}
