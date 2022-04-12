<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_mekanik');
    }
    public function index()
    {
        $this->load->view('frontend/login');
    }
    public function Auth()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($this->m_mekanik->Checkuser($username, $password) == true) {
            $row = $this->m_mekanik->getbyusername($username);
            $data_user = array(
                'username'  => $username,
                'password'  => $password,
                'id_mekanik'   => $row->id_mekanik,
                'nama_user' => $row->nama_user,
                'is_login'  => true
            );
            $this->session->set_userdata($data_user);

            //helper log aktivitas
            // helper_log("login", "telah login");

            //alert 
            $this->session->set_flashdata('sukses','login berhasil');
            redirect('Home');
            //var_dump($data_user);
            exit;
        } else {
            $this->session->set_flashdata('pesan','login gagal');
            redirect('Auth');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        //contoh panggil helper log
        // helper_log("logout", "logout");
        redirect('Home');
    }
}
