<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data_train extends CI_Model {

	function tampildata(){
			return $this->db->get('data_train');
	}
}
