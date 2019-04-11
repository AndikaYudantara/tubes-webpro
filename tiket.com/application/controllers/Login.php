<?php

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index(){
		#$this->session->sess_destroy();
		$data['title'] = 'tiket.com | Hotel, Pesawat, Kereta Api, Sewa Mobil, Konser';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('login/index');
		$this->load->view('templates/footer');
	}

	public function validate(){
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if($this->form_validation->run() == FALSE){
			redirect(base_url(''));
		}else if($this->User_model->validate($this->input->post('email'), $this->input->post('password')) == TRUE){
			$this->session->set_userdata('email', $this->input->post('email'));
			redirect(base_url());
		}else{
			redirect(base_url());
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
?>