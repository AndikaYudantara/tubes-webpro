<?php
	class Home_model extends CI_Model{
		public function getAll(){
			$data = $this->db->get('penerbangan')->result_array();
			foreach($data as $penerbangan => $dummy){
				$data[$penerbangan]['durasi'] = date_create_from_format('H:i:s', $data[$penerbangan]['waktu_tiba'])->diff(date_create_from_format('H:i:s', $data[$penerbangan]['waktu_berangkat']))->format('%hj %im');
			}
			return $data;
		}

		public function cari($dari, $ke, $tanggal_pergi, $tanggal_pulang, $penumpang, $kelas_kabin){
			$this->db->where('id_kota_berangkat', $dari);
			$this->db->where('id_kota_tiba', $ke);
			
			$data = $this->db->get('penerbangan')->result_array();

			foreach($data as $penerbangan => $dummy){
				$data[$penerbangan]['durasi'] = date_create_from_format('H:i:s', $data[$penerbangan]['waktu_tiba'])->diff(date_create_from_format('H:i:s', $data[$penerbangan]['waktu_berangkat']))->format('%hj %im');
			}
			return $data;
		}

		public function cari_id($id){
				$this->db->where('id', $id);
				return $this->db->get('penerbangan')->row();
		}
	}
?>