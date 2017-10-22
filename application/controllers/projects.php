<?php

/**
 * This controller handles project management.
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
            'main_view' => 'projects/index',
            'projects' => $this->project_model->get_projects(),
        ]);
    }

    public function create()
    {
        $this->form_validation->set_rules('name', 'Project Name', 'trim|required]');
        $this->form_validation->set_rules('body', 'Project Description', 'trim|required]');
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('errors', validation_errors());
        } else {
            return $this->load->view('layouts/main', ['main_view' => 'projects/create']);
        }
    }

    public function show($id)
    {
        $this->load->view('layouts/main', [
            'main_view' => 'projects/show',
            'project' => $this->project_model->get_project($id),
        ]);
    }
}
