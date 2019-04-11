<?php

class Register extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index(){
		$data['title'] = 'tiket.com | Hotel,Pesawat,Kereta';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('register/index');
		$this->load->view('templates/footer');
	}

	public function insert(){

		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('pass', 'pass', 'required');
		$this->form_validation->set_rules('re-pass', 're-pass', 'required');

		if($this->form_validation->run() == FALSE){
			redirect(base_url('Register'));
		}else{
			$data = [
				"nama_lengkap" =>$this->input->post('nama', TRUE),
				"email" =>$this->input->post('email', TRUE),
				"password" =>$this->input->post('pass', TRUE),
			];

			$this->User_model->insert($data);
			redirect(base_url());
		}
	}

}
?>