<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('subscribers_model');
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
        $data = array(
            'show_main_sliders' => 1
        );
        $this->load->view('home', $data);
    }

    public function subscribe() {
        if (isset($_POST) && !empty($_POST)) {
            $subscriber = $_POST['subscriber'];
            return $this->subscribers_model->add_subscriber($subscriber);
        }
    }

    public function about() {
        $data = array(
            'show_main_sliders' => 0
        );
        $this->load->view('about', $data);
    }

    public function projects($id = NULL) {
        $data = array(
            'show_main_sliders' => 0
        );
        if (!is_null($id)) {
            $this->load->view('project', $data);
        } else {
            $this->load->view('projects', $data);
        }
    }

    public function contact() {
        $data = array(
            'show_main_sliders' => 0
        );
        $this->load->view('contact', $data);
    }

}
