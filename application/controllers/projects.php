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
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('body', 'Description', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('layouts/main', ['main_view' => 'projects/create']);
        } else {
            $data = [
                'user_id' => $this->session->userdata('user_id'),
                'name' => $this->input->post('name'),
                'body' => $this->input->post('body'),
            ];
            $project = $this->project_model->create_project($data);

            if ($project) {
                $this->session->set_flashdata('flash_success', 'Your project has been created');
                redirect('projects/show/'.$project->id);
            }
        }
    }

    public function edit($id)
    {
        $project = $this->project_model->get_project($id);
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('body', 'Description', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('layouts/main', ['main_view' => 'projects/edit', 'project' => $project]);
        } else {
            $data = [
                'user_id' => $this->session->userdata('user_id'),
                'name' => $this->input->post('name'),
                'body' => $this->input->post('body'),
            ];
            if ($this->project_model->update_project($id, $data)) {
                $this->session->set_flashdata('flash_success', 'Your project has been updated');
                redirect('projects/show/'.$project->id);
            }
        }
    }

    public function show($id)
    {
        $this->load->view('layouts/main', [
            'main_view' => 'projects/show',
            'project' => $this->project_model->get_project($id),
        ]);
    }

    public function delete($id)
    {
        $this->project_model->delete_project($id);
        $this->session->set_flashdata('flash_success', 'Your project has been deleted');
        redirect('projects');
    }
}
