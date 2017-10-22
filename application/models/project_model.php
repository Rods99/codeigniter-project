<?php

/**
 *
 */
class Project_model extends CI_Model
{
    public function create_project($data)
    {
        return $this->db->insert('projects', $data);
    }

    public function get_projects($user_id)
    {
        return $this->db->get_where('projects', ['user_id' => $user_id])->result();
    }

    public function get_project($id, $user_id)
    {
        return $this->db->get_where('projects', ['id' => $id, 'user_id' => $user_id])->row();
    }

    public function update_project($id, $data, $user_id)
    {
        return $this->db->where(['id' => $id, 'user_id' => $user_id])->update('projects', $data);
    }

    public function delete_project($id, $user_id)
    {
        return $this->db->where(['id' => $id, 'user_id' => $user_id])->delete('projects');
    }
}
