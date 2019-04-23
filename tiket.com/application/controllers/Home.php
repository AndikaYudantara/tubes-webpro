<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Home_model');
	}

	public function index(){
		$data['title'] = 'tiket.com | Hotel, Pesawat, Kereta Api, Sewa Mobil, Konser';
		$this->load->view('templates/header', $data);
		if($this->session->userdata('username') == NULL){
			$this->load->view('templates/home_login_navbar');
		}else{
			$this->load->view('templates/home_default_navbar');			
		}
		$this->load->view('home/slide');
		 $this->load->view('home/search-box');
		 $this->load->view('home/body');
		$this->load->view('templates/footer');

	}

	public function cari_penerbangan(){
		$data['title'] = 'Cari jadwal kereta api | tiket.com';

		$this->form_validation->set_rules('dari', 'dari', 'required');
		$this->form_validation->set_rules('ke', 'ke', 'required');
		$this->form_validation->set_rules('tanggal_pergi', 'tanggal_pergi', 'required');
		$this->form_validation->set_rules('tanggal_pulang', 'tanggal_pulang', 'required');
		$this->form_validation->set_rules('penumpang', 'penumpang', 'required');
		$this->form_validation->set_rules('kelas_kabin', 'kelas_kabin', 'required');

		if($this->form_validation->run() == FALSE){

			redirect(base_url());

		}else{

			$info_pencarian = array(
				'dari' => $this->input->post('dari'),
				'ke' => $this->input->post('ke'),
				'tanggal_pergi' => $this->input->post('tanggal_pergi'),
				'tanggal_pulang' => $this->input->post('tanggal_pulang'),
				'penumpang' => $this->input->post('penumpang'),
				'kelas_kabin' => $this->input->post('kelas_kabin')
			);
			$this->session->set_flashdata($info_pencarian);

			$data['penerbangan'] = $this->Home_model->getAll();

			if($this->input->post('dari')){
				$data['penerbangan'] = $this->Home_model->cari(
				$this->input->post('dari'),
				$this->input->post('ke'), 
				$this->input->post('tanggal_pergi'), 
				$this->input->post('tanggal_pulang'), 
				$this->input->post('penumpang'), 
				$this->input->post('kelas_kabin'));
			}
	
			$this->load->view('templates/header', $data);
			if($this->session->userdata('username') == NULL){
				$this->load->view('templates/login_navbar');
			}else{
				$this->load->view('templates/default_navbar');			
			}
			$this->load->view('penerbangan/cari', $data);
			$this->load->view('templates/footer');

		}
	}


	public function cari_hotel(){

	}

	

}