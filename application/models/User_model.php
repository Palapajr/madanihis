<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "user";

    public $id_user;
    public $nip_nik;
    public $username;
    public $password;
    public $fullname;
    public $pendidikan;
    public $gender;
    public $nope;
    public $agama;
    public $hobi;
    public $tmt_kerja;
    public $jabatan;
    public $unit;
    public $alamat;
    public $user_akses;
    public $user_status;
    public $foto = "default.jpg";

    public function rules()
    {
        return [
            [
                'field' => 'nip_nik',
                'label' => 'Nip_nik',
                'rules' => 'numeric'
            ],

            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
            ],

            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required'
            ],

            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required'
            ],

            [
                'field' => 'fullname',
                'label' => 'Fullname',
                'rules' => 'required'
            ],

            [
                'field' => 'pendidikan',
                'label' => 'Pendidikan',
                'rules' => 'required'
            ],

            [
                'field' => 'gender',
                'label' => 'Gender',
                'rules' => 'required'
            ],

            [
                'field' => 'nope',
                'label' => 'Nope',
                'rules' => 'numeric'
            ],

            [
                'field' => 'agama',
                'label' => 'Agama',
                'rules' => 'required'
            ],

            [
                'field' => 'hobi',
                'label' => 'Hobi',
                'rules' => 'required'
            ],

            [
                'field' => 'tmt_kerja',
                'label' => 'Tmt_kerja',
                'rules' => 'required'
            ],

            [
                'field' => 'jabatan',
                'label' => 'Jabatan',
                'rules' => 'required'
            ],

            [
                'field' => 'unit',
                'label' => 'Unit',
                'rules' => 'required'
            ],

            [
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required'
            ],

            [
                'field' => 'user_akses',
                'label' => 'User_akses',
                'rules' => 'required'
            ],

            [
                'field' => 'user_status',
                'label' => 'User_status',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_user" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->product_id = uniqid();
        $this->name = $post["name"];
        $this->price = $post["price"];
        $this->description = $post["description"];
        $this->db->insert($this->_table, $this);
    }
}
