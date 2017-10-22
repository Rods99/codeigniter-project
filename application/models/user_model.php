<?php

/**
 *
 */
class User_model extends CI_Model
{
    public function create_user()
    {
        return $this->db->insert('users', [
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
        ]);
    }

    public function login_user($username, $password)
    {
        $this->db->where(['username' => $username, 'password' => $password]);
        $result = $this->db->get('users');
        if ($result->num_rows() == 1) {
            return $result->row(0)->id;
        } else {
            return false;
        }
    }
}
