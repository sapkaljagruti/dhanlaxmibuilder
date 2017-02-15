<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->library(array('session'));
        $this->authenticate();
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
    public function authenticate() {
        if (!($this->session->has_userdata('admin_id'))) {
            redirect('/admin/login');
        }
    }

    public function dashboard() {
        $data = array(
            'page' => 'dashboard'
        );
        $this->load->view('admin/header', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/footer');
    }

    public function projectStatus() {
        if ($this->input->is_ajax_request()) {
            $this->load->model('projectstatus_model');
            $id = $this->input->post('id');
            $project_status = $this->projectstatus_model->getProjectStatus($id);
            $response = [];
            foreach ($project_status as $ps) {
                $response['id'] = $ps->id;
                $response['title'] = $ps->title;
                $response['created_at'] = $ps->created_at;
                $response['updated_at'] = $ps->updated_at;
            }
            $this->output->set_content_type('application/json');
            $this->output->set_output(json_encode($response));
        } else {
            $this->load->model('projectstatus_model');
            $data = array(
                'page' => 'project status'
            );
            $project_status = $this->projectstatus_model->getProjectStatus();
            if ($project_status) {
                $data['project_status'] = $project_status;
            }
            $this->load->view('admin/header', $data);
            $this->load->view('admin/project_status', $data);
            $this->load->view('admin/footer');
        }
    }

    public function createProjectStatus() {
        if ($this->input->is_ajax_request()) {
            $this->load->model('projectstatus_model');
            if (is_null($this->input->post('id'))) {
                $status = $this->input->post('status');
                $project_status = $this->projectstatus_model->createProjectStatus($status);
            } else {
                $id = $this->input->post('id');
                $status = $this->input->post('status');
                $project_status = $this->projectstatus_model->createProjectStatus($status, $id);
            }
            echo $project_status;
        }
    }

    public function deleteProjectStatus() {
        if ($this->input->is_ajax_request()) {
            $this->load->model('projectstatus_model');
            if (is_array($this->input->post('id'))) {
                $ids = $this->input->post('id');
                foreach ($ids as $id) {
                    $project_status = $this->projectstatus_model->deleteProjectStatus($id);
                }
            } else {
                $id = $this->input->post('id');
                $project_status = $this->projectstatus_model->deleteProjectStatus($id);
            }
            echo TRUE;
        }
    }

    public function projects() {
        $data = array(
            'page' => 'projects'
        );
        $this->load->view('admin/header', $data);
        $this->load->view('admin/projects', $data);
        $this->load->view('admin/footer');
    }

}
