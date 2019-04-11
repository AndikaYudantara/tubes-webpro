<?php

class Penerbangan extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Kota_model');
		$this->load->model('Maskapai_model');
		$this->load->model('Penerbangan_model');
	}

	public function index(){
		$data['title'] = 'Harga Tiket Pesawat Murah - Cari & Pesan Tiket Online di tiket.com';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('penerbangan/index');
		$this->load->view('templates/footer');
	}

}
?>