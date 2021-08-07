<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pekerjaan_admin extends CI_Controller
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
        $this->load->view('template_admin/header.php');
        $this->load->view('template_admin/sidebar.php');
        $this->load->view('template_admin/topbar.php');
        $this->load->view('pekerjaan_admin/index.php',$data);
        $this->load->view('template_admin/footer.php');
    }
 public function edit($id_pekerjaan)
 {
  $data['pekerjaan'] = $this->db->get_where('pekerjaan', ['id_pekerjaan' => $id_pekerjaan])->row_array();
  $this->load->view('template_admin/header.php');
  $this->load->view('template_admin/sidebar');
  $this->load->view('template_admin/topbar.php');
  $this->load->view('pekerjaan_admin/editpekerjaan.php', $data);
  $this->load->view('template_admin/footer.php');
 }
 public function editpekerjaan()
 {

  $this->db->set('nama_pekerjaan', $this->input->post('nama_pekerjaan'));
  $this->db->set('nama_perusahaan', $this->input->post('nama_perusahaan'));
  $this->db->set('thn_masuk', $this->input->post('thn_masuk'));
  $this->db->set('thn_keluar', $this->input->post('thn_keluar'));
  $this->db->where('id_pekerjaan', $this->input->post('id_pekerjaan'));
  $this->db->update('pekerjaan');

  redirect('pekerjaan_admin');
 }
 public function edit1($id_pekerjaan)
 {
  $data['pekerjaan1'] = $this->db->get_where('pekerjaan1', ['id_pekerjaan' => $id_pekerjaan])->row_array();
  $this->load->view('template_admin/header.php');
  $this->load->view('template_admin/sidebar');
  $this->load->view('template_admin/topbar.php');
  $this->load->view('pekerjaan_admin/editpekerjaan1.php', $data);
  $this->load->view('template_admin/footer.php');
 }
 public function editpekerjaan1()
 {

  $this->db->set('nama_pekerjaan', $this->input->post('nama_pekerjaan'));
  $this->db->set('nama_perusahaan', $this->input->post('nama_perusahaan'));
  $this->db->set('thn_masuk', $this->input->post('thn_masuk'));
  $this->db->set('thn_keluar', $this->input->post('thn_keluar'));
  $this->db->where('id_pekerjaan', $this->input->post('id_pekerjaan'));
  $this->db->update('pekerjaan1');

  redirect('pekerjaan_admin');
 }
   }