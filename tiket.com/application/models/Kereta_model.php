<?php

class Kereta_model extends CI_model{

	public function getAll(){
		$data = $this->db->get('kereta')->result_array();

		foreach($data as $kereta => $dummy){
			$data[$kereta]['durasi'] = date_create_from_format('H:i:s', $data[$kereta]['waktu_tiba'])->diff(date_create_from_format('H:i:s', $data[$kereta]['waktu_berangkat']))->format('%hj %im');
		}

		return $data;

	}

	public function cari($stasiun_berangkat, $stasiun_tiba, $tanggal_pergi, $tanggal_pulang, $jumlah_penumpang){
		$this->db->where('stasiun_berangkat', $stasiun_berangkat);
		$this->db->where('stasiun_tiba', $stasiun_tiba);
		$this->db->where('tanggal', $tanggal_pergi);
		$this->db->where('kursi >=', $jumlah_penumpang);
		
		$data = $this->db->get('kereta')->result_array();

		foreach($data as $kereta => $dummy){
			$data[$kereta]['durasi'] = date_create_from_format('H:i:s', $data[$kereta]['waktu_tiba'])->diff(date_create_from_format('H:i:s', $data[$kereta]['waktu_berangkat']))->format('%hj %im');
		}

		return $data;

	}

	public function cari_id($id){
		$this->db->where('id', $id);
		return $this->db->get('kereta')->row();
	}


	public function insert($data){
		$this->db->insert('kereta', $data);
	}

	public function delete($id){
		$this->db->where('id',$id);
		return $this->db->delete('kereta');
	}

	public function update($id,$data){
		$this->db->where('id',$id);
		return $this->db->update('kereta',$data);
	}
}

?>