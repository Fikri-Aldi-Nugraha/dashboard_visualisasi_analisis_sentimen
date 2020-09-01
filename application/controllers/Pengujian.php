<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengujian extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('M_pengujian');
	}

	public function index(){
		$this->load->view('pengujian');
	}

	function hasil(){
		$positif = $this->M_pengujian->hasil_teks('positif')->row('total');
		$negatif = $this->M_pengujian->hasil_teks('negatif')->row('total');

		$hasil = $positif > $negatif ? 'POSITIF' : 'NEGATIF';
		$hasil = $positif == $negatif ? 'NETRAL' : $hasil;
		echo $hasil;
	}
}
