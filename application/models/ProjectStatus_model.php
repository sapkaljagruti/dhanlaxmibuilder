<?php

class ProjectStatus_model extends CI_Model {

    public function __construct() {
        $this->load->database();
        $this->load->helper(array('date'));
        $this->load->library(array('session'));
    }

    public function getProjectStatus($id = NULL) {
        if (is_null($id)) {
            $project_status = $this->db->get('project_status');
        } else {
            $project_status = $this->db->get_where('project_status', array('id' => $id));
        }
        if ($project_status->num_rows() > 0) {
            return $project_status->result();
        } else {
            return FALSE;
        }
    }

    public function createProjectStatus($status, $id = NULL) {
        if (is_null($id)) {
            $data = array(
                'title' => $status
            );

            $this->db->insert('project_status', $data);
            $id = $this->db->insert_id();
            return $id;
        } else {
            $data = array(
                'title' => $status,
                'updated_at' => mdate('%Y-%m-%d %h:%i:%s', time())
            );

            $this->db->where('id', $id);
            $this->db->update('project_status', $data);
            return $id;
        }
    }

    public function deleteProjectStatus($id) {
        $this->db->where('id', $id);
        $this->db->delete('project_status');
        return TRUE;
    }

}
