<?php

class Subscribers_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function add_subscriber($subscriber) {
        $is_exist = $this->db->query("SELECT * FROM subscribers WHERE email='" . $subscriber . "'");
        if ($is_exist->num_rows() > 0) {
            echo "This email id has already been registered for subscription.";
        } else {
            $ip = $this->input->ip_address();
            $data = array(
                'email' => $subscriber,
                'ip' => $ip
            );
            $this->db->insert('subscribers', $data);
            echo 'You have successfully registered for our newsletter subscription.';
        }
    }

}
