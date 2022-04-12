<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bengkel extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //pengecekan sesi
        if ($this->session->userdata('is_login') != true) {
            redirect('Auth');
        }
        $this->load->model('m_bengkel');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $query = $this->m_bengkel->data();
        $data  = array('data' => $query);
        $this->load->view('bengkel/index', $data);
        // var_dump($data);
    }


    public function edit($id)
    {
         //pengecekan sesi
         if ($this->session->userdata('level') != 1) {
            redirect('Bengkel');
        }

        $query = $this->m_bengkel->getbyid($id);
        $data  = array('bengkel' => $query);
        $this->load->view('bengkel/edit', $data);
        // var_dump($data);
    }
    public function tambah(){
        $data = array();
        
        if($this->input->post('submit')){ // Jika user menekan tombol Submit (Simpan) pada form
          // lakukan upload file dengan memanggil function upload yang ada di model.php
          $upload = $this->m_bengkel->upload();
          
          if($upload['result'] == "success"){ // Jika proses upload sukses
             // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
            $this->m_bengkel->save($upload);
            
            redirect('bengkel'); // Redirect kembali ke halaman awal / halaman view data
          }else{ // Jika proses upload gagal
            $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
          }
        }
        
        $this->load->view('bengkel/edit/1', $data);
      }
}
