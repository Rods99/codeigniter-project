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

    public function create_project($data)
    {
        return $this->db->insert('projects', $data);
    }

    public function update_project($id, $data)
    {
        return $this->db->where('id', $id)->update('projects', $data);
    }

    public function delete_project($id)
    {
        return $this->db->where('id', $id)->delete('projects');
    }
}
