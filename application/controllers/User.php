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
            'menu' => 'user',
            'user' => $this->User_model->all_data()
        );

        $this->load->view('admin/user', $data, false);
    }

    public function add()
    {
        $this->form_validation->set_rules('id_users', 'User', 'trim|required', ['required' => '%s Tidak boleh kosong']);
        $this->form_validation->set_rules('username', 'Username', 'trim|required', ['required' => '%s Tidak boleh kosong']);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', ['required' => '%s Tidak boleh kosong']);
        $this->form_validation->set_rules('fullname', 'Nama Kempanjangan', 'trim|required', ['required' => '%s Tidak boleh kosong']);
        $this->form_validation->set_rules('user_akses', 'Akses User', 'trim|required', ['required' => '%s Tidak boleh kosong']);
        $this->form_validation->set_rules('user_status', 'User Status', 'trim|required', ['required' => '%s Tidak boleh kosong']);


        if ($this->form_validation->run() == FALSE) {

            $data = array(
                'title' => "Tambah User",
                'menu' => 'user'
            );

            $this->load->view('admin/form_user', $data, false);
        } else {

            // $this->session->set_flashdata('alert', 'data Berhasil di Tambahkan');
            // $this->load->view("admin/user");
        }
    }

    public function edit()
    {
    }

    public function delete()
    {
    }
}
