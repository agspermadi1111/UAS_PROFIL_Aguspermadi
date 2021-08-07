<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendidikan_admin extends CI_Controller
{
 public function __construct()
 {
  parent::__construct();
  $this->load->model('PendidikanModel');
 }
   
    public function index()
    {
   $data['Allsd'] = $this->PendidikanModel->get_all_sd();
  $data['Allsmp'] = $this->PendidikanModel->get_all_smp();
  $data['Allsma'] = $this->PendidikanModel->get_all_sma();
  $data['Alluniv'] = $this->PendidikanModel->get_all_univ();
        $this->load->view('template_admin/header.php');
        $this->load->view('template_admin/sidebar.php');
        $this->load->view('template_admin/topbar.php');
        $this->load->view('pendidikan_admin/index.php',$data);
        $this->load->view('template_admin/footer.php');
    }

 public function edit($id_sd)
 {
  $data['sd'] = $this->db->get_where('tb_sd', ['id_sd' => $id_sd])->row_array();
  $this->load->view('template_admin/header.php');
  $this->load->view('template_admin/sidebar');
  $this->load->view('template_admin/topbar.php');
  $this->load->view('pendidikan_admin/editsd.php', $data);
  $this->load->view('template_admin/footer.php');
 }
 public function editsd()
 {

  $this->db->set('nama', $this->input->post('nama'));
  $this->db->set('alamat', $this->input->post('alamat'));
  $this->db->set('thn_masuk', $this->input->post('thn_masuk'));
  $this->db->set('thn_lulus', $this->input->post('thn_lulus'));
  $this->db->where('id_sd', $this->input->post('id_sd'));
  $this->db->update('tb_sd');

  redirect('pendidikan_admin');
 }
 public function edit1($id_smp)
 {
  $data['smp'] = $this->db->get_where('tb_smp', ['id_smp' => $id_smp])->row_array();
  $this->load->view('template_admin/header.php');
  $this->load->view('template_admin/sidebar');
  $this->load->view('template_admin/topbar.php');
  $this->load->view('pendidikan_admin/editsmp.php', $data);
  $this->load->view('template_admin/footer.php');
 }
 public function editsmp()
 {

  $this->db->set('nama', $this->input->post('nama'));
  $this->db->set('alamat', $this->input->post('alamat'));
  $this->db->set('thn_masuk', $this->input->post('thn_masuk'));
  $this->db->set('thn_lulus', $this->input->post('thn_lulus'));
  $this->db->where('id_smp', $this->input->post('id_smp'));
  $this->db->update('tb_smp');

  redirect('pendidikan_admin');
 }
 public function edit2($id_sma)
 {
  $data['sma'] = $this->db->get_where('tb_sma', ['id_sma' => $id_sma])->row_array();
  $this->load->view('template_admin/header.php');
  $this->load->view('template_admin/sidebar');
  $this->load->view('template_admin/topbar.php');
  $this->load->view('pendidikan_admin/editsma.php', $data);
  $this->load->view('template_admin/footer.php');
 }
 public function editsma()
 {

  $this->db->set('nama', $this->input->post('nama'));
  $this->db->set('alamat', $this->input->post('alamat'));
  $this->db->set('thn_masuk', $this->input->post('thn_masuk'));
  $this->db->set('thn_lulus', $this->input->post('thn_lulus'));
  $this->db->where('id_sma', $this->input->post('id_sma'));
  $this->db->update('tb_sma');

  redirect('pendidikan_admin');
 }
 public function edit3($id_univ)
 {
  $data['univ'] = $this->db->get_where('tb_univ', ['id_univ' => $id_univ])->row_array();
  $this->load->view('template_admin/header.php');
  $this->load->view('template_admin/sidebar');
  $this->load->view('template_admin/topbar.php');
  $this->load->view('pendidikan_admin/edituniv.php', $data);
  $this->load->view('template_admin/footer.php');
 }
 public function edituniv()
 {

  $this->db->set('nama', $this->input->post('nama'));
  $this->db->set('alamat', $this->input->post('alamat'));
  $this->db->set('alamat', $this->input->post('alamat'));
  $this->db->set('thn_masuk', $this->input->post('thn_masuk'));
  $this->db->set('thn_lulus', $this->input->post('thn_lulus'));
  $this->db->where('id_univ', $this->input->post('id_univ'));
  $this->db->update('tb_univ');

  redirect('pendidikan_admin');
 }
   }