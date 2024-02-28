<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hapus2 extends CI_Controller {

	public function index()
	{
		$this->load->view('data_input/hapus');
	}
	

	

	function reload()
	{
		redirect(base_url("index.php/inputwarga"));
	}
}
