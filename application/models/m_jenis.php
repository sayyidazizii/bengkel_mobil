<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_jenis extends CI_Model
{

    public $table = 'jenis_mobil';

    public function __construct()
    {
        parent::__construct();
    }


    //  Crud
    public function data()
    {
        $query = $this->db->get($this->table);
        return  $query->result();
    }
    public function insert($user)
    {
        $this->db->insert($this->table, $user);
    }
    public function getbyid($id_user)
    {
        $this->db->where('id', $id_user);
        $query = $this->db->get('jenis_mobil');
        return $query->row();
    }
    public function editdata($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('jenis_mobil', $data);
    }
    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
}
