<?php

/**
 *
 */
class Projects extends CI_Controller
{
    public function __construct(Type $foo = null)
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            $this->session->set_flashdata('flash_danger', 'Please login to view this page');
            redirect('home');
        }
    }

    public function index()
    {
        $this->load->view('layouts/main', [
            'projects' => $this->project_model->get_projects(),
            'main_view' => 'projects/index',
        ]);
    }

    public function show($id)
    {
        $this->load->view('layouts/main', [
            'project' => $this->project_model->get_project($id),
            'main_view' => 'projects/show',
        ]);
    }
}
