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
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT, ['cost' => 10]),
        ]);
    }

    public function login_user($username, $password)
    {
        $this->db->where(['username' => $username]);
        $result = $this->db->get('users');
        $db_password = $result->row(0)->password;

        if (password_verify($password, $db_password)) {
            return $result->row(0)->id;
        } else {
            return false;
        }
    }
}
