<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mekanik extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //pengecekan sesi
        if ($this->session->userdata('is_login') != true) {
            redirect('Auth');
        }
        $this->load->model('m_mekanik');
    }
    public function index()
    {
        $query = $this->m_mekanik->data();
        $data  = array('data' => $query);
        $this->load->view('mekanik/index', $data);
        // var_dump($data);
    }
    public function tambahuser()
    {
        //pengecekan sesi
        if ($this->session->userdata('level') != 1) {
            redirect('Mekanik');
        }
        $this->load->view('mekanik/tambahuser');
    }
    public function tambahdata()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $no_telepon = $this->input->post('no_telepon');

        $Arrinsert = array(
            'username' => $username,
            'password' => $password,
            'no_telepon' => $no_telepon
        );
        $this->session->set_flashdata('tambah','berhasil');
        $this->m_mekanik->insert($Arrinsert);

         //contoh panggil helper log
        //  helper_log("add", "menambahkan data user");
         //silahkan di ganti2 aja kalimatnya
         
        redirect('Mekanik');
    }
    public function edituser($id_user)
    {
         //pengecekan sesi
         if ($this->session->userdata('level') != 1) {
            redirect('User');
        }

        $query = $this->m_mekanik->getbyid($id_user);
        $data  = array('mekanik' => $query);
        $this->load->view('mekanik/edituser', $data);
        // var_dump($data);
    }
    public function editdata()
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
        Redirect('Mekanik');
        // var_dump($Arrupdate);
    }
    public function hapus($id)
    {
         //pengecekan sesi
         if ($this->session->userdata('level') != 1) {
            redirect('Mekanik');
        }
        
        $this->m_mekanik->hapus($id);
        $this->session->set_flashdata('hapus','berhasil');
        redirect('Mekanik');
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
