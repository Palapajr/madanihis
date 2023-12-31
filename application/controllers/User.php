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

        $this->load->model(['User_model', 'Users_model']);
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array(
            'title' => "Data User",
            'menu' => 'user',
            'user' => $this->User_model->all_data()
        );

        $this->load->view('admin/user', $data, false);
    }

    public function add()
    {
        $this->form_validation->set_rules('id_users', 'Nama User', 'required', ['required' => '%s Tidak boleh kosong']);
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => '%s Tidak boleh kosong']);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => '%s Tidak boleh kosong']);
        $this->form_validation->set_rules('fullname', 'Nama Kempanjangan', 'required', ['required' => '%s Tidak boleh kosong']);
        $this->form_validation->set_rules('user_akses', 'Akses User', 'required', ['required' => '%s Tidak boleh kosong']);
        $this->form_validation->set_rules('user_status', 'User Status', 'required', ['required' => '%s Tidak boleh kosong']);


        if ($this->form_validation->run() == FALSE) {

            $data = array(
                'title' => "Tambah User",
                'menu' => 'user',
                'users' => $this->Users_model->all_data()
            );

            $this->load->view('admin/form_user', $data, false);
        } else {

            $data = array(
                'id_users' => $this->input->post('id_users'),
                'username' => $this->input->post('username'),
                'password' => hash('sha2', $this->input->post('password')),
                'fullname' => $this->input->post('fullname'),
                'user_akses' => $this->input->post('user_akses'),
                'user_status' => $this->input->post('user_status')
            );

            $this->User_model->insert_data();
            redirect('admin/user');
        }
    }

    public function edit()
    {
    }

    public function delete()
    {
    }
}
