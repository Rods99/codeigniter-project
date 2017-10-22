<?php

/**
 *
 */
class Project_model extends CI_Model
{
    public function get_project($id)
    {
        return $this->db->get_where('projects', ['id' => $id])->row();
    }

    public function get_projects()
    {
        return $this->db->get('projects')->result();
    }
}
