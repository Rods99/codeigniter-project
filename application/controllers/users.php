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
            $this->session->set_flashdata('errors', validation_errors());
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $user_id = $this->user_model->login_user($username, $password);

            if ($user_id) {
                $this->session->set_userdata([
                    'user_id' => $user_id,
                    'username' => $username,
                    'logged_in' => true,
                ]);
                $this->session->set_flashdata('flash_success', 'You are now logged in');
                $data['main_view'] = 'users/admin_view';

                return $this->load->view('layouts/main', $data);
            } else {
                $this->session->set_flashdata('flash_danger', 'Sorry, you are not logged in');
            }
        }
        redirect('home');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('flash_success', 'You are now logged out');
        redirect('home');
    }
}
