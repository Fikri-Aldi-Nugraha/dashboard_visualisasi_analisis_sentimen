<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datatrain extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('M_data_train');
	}

	public function index(){
		$data['train']= $this->M_data_train->tampildata()->result();
		$this->load->view('datra', $data);
	}
}
