<?php

/**
 *
 */
class Task_model extends CI_Model
{
    public function create_task($data)
    {
        $this->db->insert('tasks', $data);

        return $this->db->get_where('tasks', ['id' => $this->db->insert_id()])->row();
    }

    public function get_tasks($user_id)
    {
        return $this->db->get_where('tasks', ['user_id' => $user_id])->result();
    }

    public function get_task($id, $user_id)
    {
        return $this->db->get_where('tasks', ['id' => $id, 'user_id' => $user_id])->row();
    }

    public function update_task($id, $data, $user_id)
    {
        return $this->db->where(['id' => $id, 'user_id' => $user_id])->update('tasks', $data);
    }

    public function delete_task($id, $user_id)
    {
        return $this->db->where(['id' => $id, 'user_id' => $user_id])->delete('tasks');
    }
}
