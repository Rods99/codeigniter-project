<?php

/**
 *
 */
class Users extends CI_Controller
{
    public function show()
    {
        $data['users'] = $this->user_model->get_users();
        $this->load->view('user_view', $data);
    }
}
