<?php

/**
 * User's controller.
 */
class Users extends CI_Controller
{
    public function register()
    {
<<<<<<< Updated upstream
        $this->form_validation->set_rules('first_name', 'First name', 'trim|required|min_length[2]');
        $this->form_validation->set_rules('last_name', 'Last name', 'trim|required|min_length[2]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[2]');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[2]');
=======
        $this->session->set_userdata(['sup' => 'what up']);
>>>>>>> Stashed changes
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[2]');

        if ($this->form_validation->run() == false) {
            $data['main_view'] = 'users/register_view';
            $this->load->view('layouts/main', $data);
        } else {
            if ($this->user_model->create_user()) {
                $this->session->set_flashdata('flash_success', 'Your account has been created');
                redirect('home');
            } else {
            }
        }
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[2]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[2]');

        if ($this->form_validation->run() == false) {
<<<<<<< Updated upstream
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
                $this->session->set_flashdata('flash_danger', 'Invalid username or password');
            }
=======
            // echo validation_errors();
            // die();
            $this->session->set_flashdata(['errors', validation_errors()]);
            redirect('home');
>>>>>>> Stashed changes
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
