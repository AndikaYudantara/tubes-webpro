<?php

class Profile extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Profil');
	}

	public function index(){
		$data['title'] = 'tiket.com | Hotel, Pesawat, Kereta Api, Sewa Mobil, Konser';
		$this->load->view('templates/header', $data);
		if($this->session->userdata('username') == NULL){
			$this->load->view('templates/login_navbar');
		}else{
			$this->load->view('templates/default_navbar');			
		}
		
		$this->load->view('Profile/index');
		$this->load->view('templates/footer_login');
	}

	public function update(){
		$data =[
			'username' => $this->input->post('uname', TRUE)
		];
			$this->Profil->update($this->session->userdata('username'),$data);
			$this->session->sess_destroy();
			redirect(base_url('/Login'));
			
	}
	
}
?>