<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pekerjaan extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('PekerjaanModel');
 }

 public function index()
 {
  $data['Allpekerjaan'] = $this->PekerjaanModel->get_all_pekerjaan();
  $data['Allpekerjaan1'] = $this->PekerjaanModel->get_all_pekerjaan1();
  $this->load->view('template_tampil/header.php');
  $this->load->view('pekerjaan/index.php',$data);
  $this->load->view('template_tampil/footer.php');
 }
}
