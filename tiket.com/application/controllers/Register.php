<?php

class Register extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index(){
		$data['title'] = 'tiket.com | Hotel, Pesawat, Kereta Api, Sewa Mobil, Konser';
		$this->load->view('templates/header', $data);
		if($this->session->userdata('username') == NULL){
			$this->load->view('templates/login_navbar');
		}else{
			$this->load->view('templates/default_navbar');			
		}
		$this->load->view('register/index');
		$this->load->view('templates/footer');
	}

	public function insert(){

		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('password_conf', 'password_conf', 'required');
		$this->form_validation->set_rules('email', 'email', 'is_unique[user.email]');
		$this->form_validation->set_rules('password_conf', 'Password_conf', 'matches[password]');

		if($this->form_validation->run() == FALSE){
			redirect(base_url('Register'));
		}else{
			$data = [
				"username" =>$this->input->post('username', TRUE),
				"email" =>$this->input->post('email', TRUE),
				"password" =>$this->input->post('password', TRUE),
			];

			$this->User_model->insert($data);
			redirect(base_url());
		}
	}

}
?>