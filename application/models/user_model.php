<?php

/**
 *
 */
class User_model extends CI_Model
{
    // public function get_users()
    // {
    //     return $this->db->get('users')->result();
    // }

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
