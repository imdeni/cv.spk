<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetakadmin extends CI_Controller {
	public function index()
	
	{	
		
		$this->load->view('data_warga/printadmin.php');
		
	}
}
