<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengujian extends CI_Model {

	function hasil_teks($jenis=""){
		$this->db->select('count(*) as total');
		$this->db->where('sentimen', $jenis);
		$this->db->like('tweet', $this->input->post('input'), 'both');

		if($this->input->post('jenis') == 'physical'){
			return $this->db->get('hasil_predict_phydis');
		}else {
			return $this->db->get('hasil_predict_socdis');
		}
	}
	
}
