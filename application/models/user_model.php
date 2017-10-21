<?php

/**
 *
 */
class User_model extends CI_Model
{
    public function get_users()
    {
        // $config['hostname'] = 'localhost';
        // $config['username'] = 'root';
        // $config['password'] = '';
        // $config['database'] = 'errand_db';
        //
        // $connection = $this->-database->($config);

        return $this->db->get('users')->result();
    }
}
