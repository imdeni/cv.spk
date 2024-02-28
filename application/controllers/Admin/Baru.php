<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Baru extends CI_Controller {
	public function index()
	{
		$this->load->view('adminnew/index.php');
	}
	public function kriteria()
	{
		$this->load->view('adminnew/kriteria.php');
	}
	public function sub()
	{
		$this->load->view('adminnew/sub.php');
	}
	public function pengajuan()
	{
		$this->load->view('adminnew/pengajuan.php');
	}
	public function hasil()
	{
		$this->load->view('adminnew/hasil.php');
	}
	public function laporan()
	{
		$this->load->view('adminnew/laporan.php');
	}
	public function user()
	{
		$this->load->view('adminnew/user.php');
	}
	public function profile()
	{
		$this->load->view('adminnew/profile.php');
	}
	public function hapuskriteria()
	{
		$this->load->view('adminnew/hapuskriteria.php');
	}
	public function hapussub()
	{
		$this->load->view('adminnew/hapussub.php');
	}
	public function hapususer()
	{
		$this->load->view('adminnew/hapususer.php');
	}
	public function editk()
	{
		$this->load->view('adminnew/editk.php');
	}
	public function editsub()
	{
		$this->load->view('adminnew/editsub.php');
	}
	public function edituser()
	{
		$this->load->view('adminnew/edituser.php');
	}
	public function filter()
	{
		$this->load->view('adminnew/filter.php');
	}
	function reload()
	{
		redirect(base_url("index.php/baru/kriteria"));
	}

}
