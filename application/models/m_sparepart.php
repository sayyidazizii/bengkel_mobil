<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_sparepart extends CI_Model
{

    public $table = 'sparepart';

    public function __construct()
    {
        parent::__construct();
    }

   
    // User Crud
    public function data()
    {
        $query = $this->db->get($this->table);
        return  $query->result();
    }
    public function insert($sparepart)
    {
        $this->db->insert($this->table, $sparepart);
    }
    public function getbyid($id)
    {
        $this->db->where('id_part', $id);
        $query = $this->db->get('sparepart');
        return $query->row();
    }
    public function edit($id, $data)
    {
        $this->db->where('id_part', $id);
        $this->db->update('sparepart', $data);
    }
    public function hapus($id)
    {
        $this->db->where('id_part', $id);
        $this->db->delete($this->table);
    }
}
