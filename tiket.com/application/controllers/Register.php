<?php

class Register extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index(){
		#$this->session->sess_destroy();
		$data['title'] = 'tiket.com | Hotel, Pesawat, Kereta Api, Sewa Mobil, Konser';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('register/index');
		$this->load->view('templates/footer');
	}

	public function insert(){

		$this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('konfirmasi_password', 'konfirmasi_password', 'required');

		if($this->form_validation->run() == FALSE){
			redirect(base_url('Register'));
		}else{
			$data = [
				"nama_lengkap" =>$this->input->post('nama_lengkap', TRUE),
				"email" =>$this->input->post('email', TRUE),
				"password" =>$this->input->post('password', TRUE),
			];

			$this->User_model->insert($data);
			redirect(base_url());
		}
	}

}
?>