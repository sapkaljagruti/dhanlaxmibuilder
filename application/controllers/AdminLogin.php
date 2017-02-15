<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminLogin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('url', 'form', 'security'));
        $this->load->library(array('session'));
        $this->load->model('admins_model');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        if ($this->session->has_userdata('admin_id')) {
            redirect('admin');
        } else {
            if (!empty($this->input->post())) {
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                if ($this->admins_model->authenticate($email, $password)) {
                    redirect('admin');
                } else {
                    $data = [
                        'error' => 'These credentials do not match our records. Please try again later.',
                        'email' => $email,
                        'password' => $password
                    ];
                    $this->load->view('admin/login', $data);
                }
            } else {
                $this->load->view('admin/login');
            }
        }
    }

    public function logout() {
        $this->admins_model->logout();
        unset($_SESSION['admin_id']);
        redirect('admin');
    }

}
