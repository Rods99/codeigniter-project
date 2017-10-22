<?php

/**
 * User's controller.
 */
class Users extends CI_Controller
{
    public function login()
    {
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[2]');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[2]');

        if ($this->form_validation->run() == false) {
            $this->session->keep_flashdata('errors', validation_errors());
            redirect('home');
        }
    }
}
