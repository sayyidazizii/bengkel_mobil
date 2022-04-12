<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mobil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //pengecekan sesi
        if ($this->session->userdata('is_login') != true) {
            redirect('Auth');
        }
        $this->load->model('m_jenis');
    }
    public function index()
    {
        $query = $this->m_jenis->data();
        $data  = array('data' => $query);
        $this->load->view('mobil/index', $data);
        // var_dump($data);
    }
    public function tambah()
    {
        //pengecekan sesi
        if ($this->session->userdata('level') != 1) {
            redirect('mobil');
        }
        $this->load->view('mobil/tambah');
    }
    public function tambahdata()
    {
        $nama_jenis = $this->input->post('nama_jenis');
        $jumlah_jenis = $this->input->post('jumlah_jenis');

        $Arrinsert = array(
            'nama_jenis' => $nama_jenis,
            'jumlah_jenis' => $jumlah_jenis,
        );
        $this->session->set_flashdata('tambah','berhasil');
        $this->m_jenis->insert($Arrinsert);

         //contoh panggil helper log
        //  helper_log("add", "menambahkan data user");
         //silahkan di ganti2 aja kalimatnya
         
        redirect('Mobil');
    }
    public function edit($id)
    {
         //pengecekan sesi
         if ($this->session->userdata('level') != 1) {
            redirect('Sparepart');
        }

        $query = $this->m_jenis->getbyid($id);
        $data  = array('jenis' => $query);
        $this->load->view('mobil/edit', $data);
        // var_dump($data);
    }
    public function editdata()
    {
        $id = $this->input->post('id');
        $nama_jenis = $this->input->post('nama_jenis');
        $jumlah_jenis = $this->input->post('jumlah_jenis');

        $Arrupdate = array(
            'id' => $id,
            'nama_jenis' => $nama_jenis,
            'jumlah_jenis' => $jumlah_jenis,
        );
        $this->session->set_flashdata('edit','berhasil');
        $this->m_jenis->editdata($id, $Arrupdate);
        Redirect('Mobil');
        // var_dump($Arrupdate);
    }
    public function hapus($id)
    {
         //pengecekan sesi
         if ($this->session->userdata('level') != 1) {
            redirect('Dashboard');
        }
        
        $this->m_jenis->hapus($id);
        $this->session->set_flashdata('hapus','berhasil');
        redirect('Mobil');
    }


    //frontend
    public function resetpass($id)
    {
        $query = $this->m_mekanik->getbyid($id);
		$data = array('mekanik' => $query);
		$this->load->view('frontend/resetpass',$data);
        // var_dump($data);
    }
    public function editpass()
    {
        $id_mekanik = $this->input->post('id_mekanik');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $no_telepon = $this->input->post('no_telepon');

        $Arrupdate = array(
            'id_mekanik' => $id_mekanik,
            'username' => $username,
            'password' => $password,
            'no_telepon' => $no_telepon
        );
        $this->session->set_flashdata('edit','berhasil');
        $this->m_mekanik->editdata($id_mekanik, $Arrupdate);
        Redirect('Home');
        // var_dump($Arrupdate);
    }
}
