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
		$this->form_validation->set_rules('uname', 'uname', 'required');
		if($this->form_validation->run() == TRUE){
		$data =[
			'username' => $this->input->post('uname', TRUE)
		];
			$this->Profil->update($this->session->userdata('username'),$data);
			$this->session->sess_destroy();
			redirect(base_url('/Login'));
		}else{
			redirect(base_url('/Profile'));
			
	}
	}

	public function delete(){
		$this->Profil->delete($this->session->userdata('username'));
		$this->session->sess_destroy();
			redirect(base_url('/Login'));
	}
	
}
?>