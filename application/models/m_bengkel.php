<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_bengkel extends CI_Model
{

    public $table = 'bengkel';

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
    public function insert($bengkel)
    {
        $this->db->insert($this->table, $bengkel);
    }
    public function getbyid($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('bengkel');
        return $query->row();
    }
    public function edit($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('bengkel', $data);
    }
    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }

    // Fungsi untuk melakukan proses upload file
    public function upload()
    {
        $config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']  = '2048';
        $config['remove_space'] = TRUE;

        $this->load->library('upload', $config); // Load konfigurasi uploadnya
        if ($this->upload->do_upload('logo')) { // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }

    // Fungsi untuk menyimpan data ke database
    public function save($upload)
    {
        $data = array(
            'id' => $this->input->post('id'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'logo' => $upload['file']['file_name'],
        );

        $this->db->update('bengkel', $data);
    }
}
