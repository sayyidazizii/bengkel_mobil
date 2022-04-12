<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Officer extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
    }
    public function index()
    {
        $this->load->view('auth/login');
    }
    public function Auth()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($this->m_user->Checkuser($username, $password) == true) {
            $row = $this->m_user->getbyusername($username);
            $data_user = array(
                'username'  => $username,
                'password'  => $password,
                'id_user'   => $row->id_user,
                'nama_user' => $row->nama,
                'level'     => $row->id_level,
                'is_login'  => true
            );
            $this->session->set_userdata($data_user);

            //helper log aktivitas
            // helper_log("login", "telah login");

            //alert 
            $this->session->set_flashdata('sukses','login berhasil');
            redirect('Dashboard');
            //var_dump($data_user);
            exit;
        } else {
            $this->session->set_flashdata('pesan','login gagal');
            redirect('Officer');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        //contoh panggil helper log
        // helper_log("logout", "logout");
        redirect('Officer');
    }
}
