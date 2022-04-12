<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

    public function __construct()
    {
            parent::__construct();
           
            $this->load->model('m_user');
            
    }
    public function index()
    {
         //pengecekan sesi
			if($this->session->userdata('is_login') != true){
				redirect('Officer');
			}
        $this->load->view('backend/dashboard');
    }
    public function profil()
    {
        $sesi = $this->session->userdata();
        var_dump($sesi);
    }
    public function resetpass($id)
    {
        $query = $this->m_user->getbyid($id);
		$data = array('user' => $query);
		$this->load->view('user/edituser',$data);
        // var_dump($data);
    }
}
