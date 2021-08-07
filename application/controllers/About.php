<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AboutModel');
    }
    public function index()
    {
        $data['Allabout'] = $this->AboutModel->get_all_about();
        $this->load->view('template_tampil/header.php');
        $this->load->view('about/index.php', $data);
        $this->load->view('template_tampil/footer.php');
    }
}
