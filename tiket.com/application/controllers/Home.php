<?php

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Home_model');
	}

	public function index(){
		$data['title'] = 'tiket.com | Hotel, Pesawat, Kereta Api, Sewa Mobil, Konser';
		$this->load->view('templates/header', $data);
		if($this->session->userdata('username') == NULL){
			$this->load->view('templates/login_navbar');
		}else{
			$this->load->view('templates/default_navbar');			
		}
		$this->load->view('home/index');
		$this->load->view('templates/footer');
	}

	

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
?>