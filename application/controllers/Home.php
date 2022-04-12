<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct()
    {
            parent::__construct();
            // //pengecekan sesi
			// if($this->session->userdata('is_login') != true){
			// 	redirect(base_url(''));
			// }
            $this->load->model('m_mekanik');
            
    }
    public function index()
    {
        $this->load->view('frontend/home');
    }
    public function profil()
    {
        $sesi = $this->session->userdata();
        var_dump($sesi);
    }
    
    
}
