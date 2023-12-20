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
        $this->form_validation->set_rules('nip_nik', 'Nomor ID Kepegawaian', 'trim|required|is_unique[user.nip_nik]', ['required' => '%s Tidak boleh kosong', 'is_unique' => '%s sudah ada didalam database']);
        $this->form_validation->set_rules('username', 'Username', 'trim|required', ['required' => '%s Tidak boleh kosong']);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', ['required' => '%s Tidak boleh kosong']);
        $this->form_validation->set_rules('fullname', 'Nama Kempanjangan', 'trim|required', ['required' => '%s Tidak boleh kosong']);
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'trim|required', ['required' => '%s Tidak boleh kosong']);
        $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'trim|required', ['required' => '%s Tidak boleh kosong']);
        $this->form_validation->set_rules('nope', 'Nomor Hp', 'trim|required', ['required' => '%s Tidak boleh kosong']);
        $this->form_validation->set_rules('agama', 'Agama', 'trim|required', ['required' => '%s Tidak boleh kosong']);
        $this->form_validation->set_rules('hobi', 'Hobi', 'trim|required', ['required' => '%s Tidak boleh kosong']);
        $this->form_validation->set_rules('tmt_kerja', 'Tahun Mulai Tugas', 'trim|required', ['required' => '%s Tidak boleh kosong']);
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required', ['required' => '%s Tidak boleh kosong']);
        $this->form_validation->set_rules('unit', 'Unit', 'trim|required', ['required' => '%s Tidak boleh kosong']);
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required', ['required' => '%s Tidak boleh kosong']);
        $this->form_validation->set_rules('user_akses', 'Akses User', 'trim|required', ['required' => '%s Tidak boleh kosong']);
        $this->form_validation->set_rules('user_status', 'User Status', 'trim|required', ['required' => '%s Tidak boleh kosong']);

        if ($this->form_validation->run() == FALSE) {

            $this->session->set_flashdata('alert', 'Tidak dapat di proses, mohon lengkapi form pengisian');
            redirect('admin/user');
        } else {

            $this->session->set_flashdata('alert', 'data Berhasil di Tambahkan');
            $this->load->view("admin/user");
        }
    }

    public function edit()
    {
    }

    public function delete()
    {
    }
}
