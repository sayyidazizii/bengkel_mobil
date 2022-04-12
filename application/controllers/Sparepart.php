<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sparepart extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //pengecekan sesi
        if ($this->session->userdata('is_login') != true) {
            redirect('Auth');
        }
        $this->load->model('m_sparepart');
        $this->load->model('m_jenis');
    }
    public function index()
    {
        $query = $this->m_sparepart->data();
        $data  = array('data' => $query);
        $this->load->view('sparepart/index', $data);
        // var_dump($data);
    }
    public function tambah()
    {
        //pengecekan sesi
        if ($this->session->userdata('level') != 1) {
            redirect('Sparepart');
        }
        $data['jenis'] = $this->m_jenis->data();
        $this->load->view('sparepart/tambah',$data);
    }
    public function tambahdata()
    {
        $id_jenis = $this->input->post('id_jenis');
        $nama_part = $this->input->post('nama_part');
        $spesifikasi = $this->input->post('spesifikasi');
        $qty = $this->input->post('qty');
        $harga_satuan = $this->input->post('harga_satuan');

        $Arrinsert = array(
            'id_jenis' => $id_jenis,
            'nama_part' => $nama_part,
            'spesifikasi' => $spesifikasi,
            'qty' => $qty,
            'harga_satuan' => $harga_satuan,
        );
        $this->session->set_flashdata('tambah','berhasil');
        $this->m_sparepart->insert($Arrinsert);

         //contoh panggil helper log
        //  helper_log("add", "menambahkan data user");
         //silahkan di ganti2 aja kalimatnya
         
        redirect('Sparepart');
    }
    public function edit($id_part)
    {
         //pengecekan sesi
         if ($this->session->userdata('level') != 1) {
            redirect('Sparepart');
        }
        $jenis = $this->m_jenis->data();
        $query = $this->m_sparepart->getbyid($id_part);
        $data  = array('sparepart' => $query,
                        'jenis' => $jenis );
        $this->load->view('sparepart/edit', $data);
        // var_dump($data);
    }
    public function editdata()
    {
        $id_part = $this->input->post('id_part');
        $id_jenis = $this->input->post('id_jenis');
        $nama_part = $this->input->post('nama_part');
        $spesifikasi = $this->input->post('spesifikasi');
        $qty = $this->input->post('qty');
        $harga_satuan = $this->input->post('harga_satuan');

        $Arrupdate = array(
            'id_part' => $id_part,
            'id_jenis' => $id_jenis,
            'nama_part' => $nama_part,
            'spesifikasi' => $spesifikasi,
            'qty' => $qty,
            'harga_satuan' => $harga_satuan,
        );
        $this->session->set_flashdata('edit','berhasil');
        $this->m_sparepart->edit($id_part, $Arrupdate);
        Redirect('Sparepart');
        // var_dump($Arrupdate);
    }
    public function hapus($id)
    {
         //pengecekan sesi
         if ($this->session->userdata('level') != 1) {
            redirect('Dashboard');
        }
        
        $this->m_sparepart->hapus($id);
        $this->session->set_flashdata('hapus','berhasil');
        redirect('Sparepart');
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
