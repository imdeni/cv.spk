<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Smart extends CI_Controller {
	public function index()
	{	
		$tmp2['content']=$this->load->view('layout2');
		$tmp['content']=$this->load->view('smart/smart.php',$tmp2);
		
	}
	public function print()
	{	
		
		$this->load->view('smart/print.php');
		
	}
}
