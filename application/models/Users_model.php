<?php defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{
    // cara padang tekno

    public function all_data()
    {
        $this->db->select('*');
        $this->db->from('users');
        return $this->db->get()->result();
    }
}
