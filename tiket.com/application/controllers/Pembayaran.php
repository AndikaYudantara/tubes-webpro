<?php

class Pembayaran extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('kereta_model');
		$this->load->model('Penumpang_model');
	}

	public function index($id){
		$data['title'] = 'Metode Pembayaran';
		$data['kereta'] = $this->kereta_model->cari_id($id);
		$data['penumpang'] = $this->Penumpang_model->getAll();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/Pembayaran_navbar');
		$this->load->view('pembayaran/index', $data);
		$this->load->view('templates/footer');
	}
}
?>