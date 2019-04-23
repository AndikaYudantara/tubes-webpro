<?php

class Kereta_api extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Kereta_model');
		$this->load->model('Penumpang_model');
	}

	public function index(){
		$data['title'] = 'Tiket Kereta Api - Pesan Tiket KAI Online Harga Murah di tiket.com';
		$this->load->view('templates/header', $data);
		if($this->session->userdata('username') == NULL){
			$this->load->view('templates/login_navbar');
		}else{
			$this->load->view('templates/default_navbar');			
		}
		$this->load->view('kereta_api/index');
		$this->load->view('templates/footer_login');
	}

	public function cari(){
		$data['title'] = 'Cari jadwal kereta api | tiket.com';

		$this->form_validation->set_rules('stasiun_berangkat', 'stasiun_berangkat', 'required');
		$this->form_validation->set_rules('stasiun_tiba', 'stasiun_tiba', 'required');
		$this->form_validation->set_rules('tanggal_pergi', 'tanggal_pergi', 'required');
		$this->form_validation->set_rules('tanggal_pulang', 'tanggal_pulang', 'required');
		$this->form_validation->set_rules('jumlah_penumpang', 'jumlah_penumpang', 'required');

		if($this->form_validation->run() == FALSE){

			redirect(base_url('Kereta_api'));

		}else{

			$info_pencarian = array(
				'stasiun_berangkat' => $this->input->post('stasiun_berangkat'),
				'stasiun_tiba' => $this->input->post('stasiun_tiba'),
				'tanggal_pergi' => $this->input->post('tanggal_pergi'),
				'jumlah_penumpang' => $this->input->post('jumlah_penumpang'),
				'tanggal_pulang' => $this->input->post('tanggal_pulang')
			);
			$this->session->set_flashdata($info_pencarian);

			$data['kereta'] = $this->Kereta_model->getAll();

			if($this->input->post('stasiun_berangkat')){
				$data['kereta'] = $this->Kereta_model->cari($this->input->post('stasiun_berangkat'), $this->input->post('stasiun_tiba'), $this->input->post('tanggal_pergi'), $this->input->post('tanggal_pulang'), $this->input->post('jumlah_penumpang'));
			}
	
			$this->load->view('templates/header', $data);
			if($this->session->userdata('username') == NULL){
				$this->load->view('templates/login_navbar');
			}else{
				$this->load->view('templates/default_navbar');			
			}
			$this->load->view('kereta_api/cari', $data);
			$this->load->view('templates/footer');

		}
	}

	public function order($id){
		$data['title'] = 'tiket.com | Hotel, Pesawat, Kereta Api, Sewa Mobil, Konser';

		$data['kereta'] = $this->Kereta_model->cari_id($id);
		
		$this->session->set_flashdata('kereta', $data['kereta']);

		$this->load->view('templates/header', $data);
		if($this->session->userdata('username') == NULL){
			$this->load->view('templates/login_navbar');
		}else{
			$this->load->view('templates/default_navbar');			
		}
		$this->load->view('kereta_api/order', $data);
		$this->load->view('templates/footer_login');
	}

	public function tambah_penumpang($jumlah_penumpang){
		for ($i=1; $i <=$jumlah_penumpang ; $i++){ 
			$this->form_validation->set_rules('select'.$i, 'select'.$i, 'required');
			$this->form_validation->set_rules('nama_lengkap'.$i, 'nama_lengkap'.$i, 'required');
			$this->form_validation->set_rules('identitas'.$i, 'identitas'.$i, 'required');

			if($this->form_validation->run() == FALSE){
				redirect(base_url('Kereta_api'));
			}else{
				$data = [
					"titel" =>$this->input->post('select'.$i, TRUE),
					"nama" =>$this->input->post('nama_lengkap'.$i, TRUE),
					"identitas" =>$this->input->post('identitas'.$i, TRUE),
					"kereta" =>$this->session->userdata('kereta')->id
				];

				$this->Penumpang_model->insert($data);
			}
		}
		redirect(base_url('Pembayaran/index/'.$this->session->userdata('kereta')->id));
	}

	public function kelola(){
		$data['kereta'] = $this->Kereta_model->getAll();

		$data['title'] = 'Tiket Kereta Api - Pesan Tiket KAI Online Harga Murah di tiket.com';
		$this->load->view('templates/header', $data);
		if($this->session->userdata('username') == NULL){
			$this->load->view('templates/login_navbar');
		}else{
			$this->load->view('templates/default_navbar');			
		}
		$this->load->view('Profile_admin/kelola_kereta', $data);
		$this->load->view('templates/footer_login');
	}
		

	public function tambah_kereta(){

	}

	public function hapus_kereta(){

	}

	public function update_kereta(){
		
	}

}
?>