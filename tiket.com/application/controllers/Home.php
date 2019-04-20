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

	
}