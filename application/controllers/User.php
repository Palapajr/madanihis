<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->load->model('User_model');

        // cek login user
        if ($this->session->userdata('logged') != TRUE) {
            $url = base_url('auth');
            redirect($url);
        };

        $this->load->model("User_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array(
            'title' => "Data User",
            'menu' => 'user'
        );

        $data["user"] = $this->User_model->getAll();

        $this->load->view('admin/user', $data);
    }

    public function add()
    {
        $user = $this->User_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/user");
    }

    public function edit()
    {
    }

    public function delete()
    {
    }
}
