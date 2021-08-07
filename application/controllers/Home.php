<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


	public function index()
	{
		$this->load->view('template_tampil/header.php');
		$this->load->view('home/index.php');
		$this->load->view('template_tampil/footer.php');
	}
}
