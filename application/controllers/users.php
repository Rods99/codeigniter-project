<?php

/**
 *
 */
class Users extends CI_Controller
{
    public function login()
    {
        $this->input->post('username');
    }
}
