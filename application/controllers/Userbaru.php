<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userbaru extends CI_Controller {
	public function index()
	{
		$this->load->view('newuser/index.php');
	}
	public function profile()
	{
		$this->load->view('newuser/profile.php');
	}
	public function isi()
	{
		$this->load->view('newuser/isi.php');
	}
	public function hasil()
	{
		$this->load->view('newuser/hasil.php');
	}
	public function edituser()
	{
		$this->load->view('newuser/edithasil.php');
	}
}
