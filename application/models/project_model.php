<?php

/**
 *
 */
class Project_model extends CI_Model
{
    public function get_projects()
    {
        return $this->db->get('projects')->result();
    }
}
