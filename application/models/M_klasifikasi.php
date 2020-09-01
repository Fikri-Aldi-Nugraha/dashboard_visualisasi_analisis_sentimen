<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_klasifikasi extends CI_Model {

	function get_data_klasifikasi($jenis=""){
		$this->db->select('count(sentimen) as total, sentimen');
		$this->db->group_by('sentimen');
		if($jenis == 'pd'){
			return $this->db->get('hasil_predict_phydis')->result();
		}else if($jenis == 'sd'){
			return $this->db->get('hasil_predict_socdis')->result();
		}
	}

	function get_data($jenis=""){
		if($jenis == 'pd'){
			return $this->db->get('hasil_predict_phydis')->result();
		}else if($jenis == 'sd'){
			return $this->db->get('hasil_predict_socdis')->result();
		}
	}
}
