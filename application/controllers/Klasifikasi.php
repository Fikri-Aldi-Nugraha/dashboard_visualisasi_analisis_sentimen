<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klasifikasi extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('M_klasifikasi');
	}

	public function pd(){
		$data['klasifikasi']= $this->M_klasifikasi->get_data_klasifikasi('pd');
		$data['data'] 		= $this->M_klasifikasi->get_data('pd');
		$this->load->view('pd', $data);
	}

	public function sd(){
		$data['klasifikasi']= $this->M_klasifikasi->get_data_klasifikasi('sd');
		$data['data'] 		= $this->M_klasifikasi->get_data('sd');
		$this->load->view('sd', $data);
	}
}
