<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //pengecekan sesi
        if ($this->session->userdata('is_login') != true) {
            redirect('Auth');
        }
        $this->load->model('m_user');
    }
    public function index()
    {
        $query = $this->m_user->data();
        $data  = array('data' => $query);
        $this->load->view('user/index', $data);
        // var_dump($data);
    }
    public function tambahuser()
    {
        //pengecekan sesi
        if ($this->session->userdata('level') != 1) {
            redirect('User');
        }
        $this->load->view('user/tambahuser');
    }
    public function tambahdata()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');
        $id_level = $this->input->post('id_level');

        $Arrinsert = array(
            'username' => $username,
            'password' => $password,
            'nama' => $nama,
            'id_level' => $id_level
        );
        $this->session->set_flashdata('tambah','berhasil');
        $this->m_user->insert($Arrinsert);

         //contoh panggil helper log
        //  helper_log("add", "menambahkan data user");
         //silahkan di ganti2 aja kalimatnya
         
        redirect('User');
    }
    public function edituser($id_user)
    {
         //pengecekan sesi
         if ($this->session->userdata('level') != 1) {
            redirect('User');
        }

        $query = $this->m_user->getbyid($id_user);
        $data  = array('user' => $query);
        $this->load->view('user/edituser', $data);
        // var_dump($data);
    }
    public function editdata()
    {
        $id_user = $this->input->post('id_user');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');
        $id_level = $this->input->post('id_level');

        $Arrupdate = array(
            'id_user' => $id_user,
            'username' => $username,
            'password' => $password,
            'namar' => $nama,
            'id_level' => $id_level
        );
        $this->session->set_flashdata('edit','berhasil');
        $this->m_user->editmenu($id_user, $Arrupdate);
        Redirect('User');
        // var_dump($Arrupdate);
    }

    //supplier
    public function supplier()
    {
        $data['data'] = $this->m_user->datasuplay();
        $this->load->view('user/supplier', $data);
        //var_dump($data);
    }
    public function tambahsupplier()
    {
        //pengecekan sesi
        if ($this->session->userdata('level') != 1) {
            redirect('User/supplier');
        }
        $this->load->view('user/tambahsupplier');
    }
    public function tambahsuplay()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');
        $id_level = $this->input->post('id_level');

        $Arrinsert = array(
            'username' => $username,
            'password' => $password,
            'nama' => $nama,
            'id_level' => $id_level
        );
        $this->session->set_flashdata('tambah','berhasil');
        $this->m_user->insert($Arrinsert);
         redirect('User/supplier');
    }
    public function edit($id_user)
    {
        //pengecekan sesi
        if ($this->session->userdata('level') != 1) {
            redirect('User/supplier');
        }

        $query = $this->m_user->getbyid($id_user);
        $data  = array('user' => $query);
        $this->load->view('user/edit', $data);
        // var_dump($data);
    }
    public function hapussuplay($id)
    {
         //pengecekan sesi
         if ($this->session->userdata('level') != 1) {
            redirect('User/supplier');
        }
        
        $this->m_user->hapus($id);
        $this->session->set_flashdata('hapus','berhasil');
        redirect('User/supplier');
    }



    public function hapus($id)
    {
         //pengecekan sesi
         if ($this->session->userdata('level') != 1) {
            redirect('User');
        }
        
        $this->m_user->hapus($id);
        $this->session->set_flashdata('hapus','berhasil');
        redirect('User');
    }
}
