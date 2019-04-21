<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		//$this->load->model('Home_model');
		$data['title'] = 'tiket.com | Hotel, Pesawat, Kereta Api, Sewa Mobil, Konser';
		$this->load->view('templates/header', $data);
		if($this->session->userdata('username') == NULL){
			$this->load->view('templates/login_navbar');
		}else{
			$this->load->view('templates/default_navbar');			
		}
		$this->load->view('home/slide');
		$this->load->view('home/search-box');
		$this->load->view('home/body');
		$this->load->view('templates/footer');
	}

	public function cari_penerbangan(){
		$data = array(
			'dari' => $_POST['dari'],
			'ke' => $_POST['ke'],
			'tgl_pergi' => $_POST['tanggal_pergi'],
			'tgl_pulang' => $_POST['tanggal_pulang'],
			'penumpang' => $_POST['penumpang'],
			'kelas_kabin' => $_POST['kelas_kabin']
		);
		switch($data['dari']) {
		  case "Bandung":
		    $data['dari'] = 1;
		    break;
		  case "Jakarta":
		    $data['dari'] = 2;
		    break;
		  default:
		    // code block
		}
		switch($data['ke']) {
		  case "Bandung":
		    $data['ke'] = 1;
		    break;
		  case "Jakarta":
		    $data['ke'] = 2;
		    break;
		  default:
		    // code block
		}
	}


	public function cari_hotel(){

	}

}