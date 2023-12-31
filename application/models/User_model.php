<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    // cara padang tekno

    public function all_data()
    {
        $this->db->select('*');
        $this->db->from('user');
        return $this->db->get()->result();
    }

    public function insert_data($data)
    {
        $this->db->insert('user', $data);
    }
}



    // private $_table = "user";

    // public $id_user;
    // public $nip_nik;
    // public $username;
    // public $password;
    // public $fullname;
    // public $pendidikan;
    // public $gender;
    // public $nope;
    // public $agama;
    // public $hobi;
    // public $tmt_kerja;
    // public $jabatan;
    // public $unit;
    // public $alamat;
    // public $user_akses;
    // public $user_status;
    // public $foto = "default.jpg";

    // public function getAll()
    // {
    //     return $this->db->get($this->_table)->result();
    // }

    // public function getById($id)
    // {
    //     return $this->db->get_where($this->_table, ["id_user" => $id])->row();
    // }

    // public function save()
    // {
    //     $post = $this->input->post();
    //     $this->product_id = uniqid();
    //     $this->name = $post["name"];
    //     $this->price = $post["price"];
    //     $this->description = $post["description"];
    //     $this->db->insert($this->_table, $this);
    // }