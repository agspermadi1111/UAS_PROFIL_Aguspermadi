<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendidikan extends CI_Controller
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
        $this->load->view('template_tampil/header.php');
        $this->load->view('pendidikan/index.php',$data);
        $this->load->view('template_tampil/footer.php');
    }
}
