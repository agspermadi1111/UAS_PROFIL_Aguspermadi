<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AboutModel');
    }
    public function index()
    {
        $data['Allabout'] = $this->AboutModel->get_all_about();
        $this->load->view('template_admin/header.php');
        $this->load->view('template_admin/sidebar.php');
        $this->load->view('template_admin/topbar.php');
        $this->load->view('about_admin/index.php', $data);
        $this->load->view('template_admin/footer.php');
    }

    public function edit($id_about)
    {
        $data['about'] = $this->db->get_where('about', ['id_about' => $id_about])->row_array();
        $this->load->view('template_admin/header.php');
        $this->load->view('template_admin/sidebar');
        $this->load->view('template_admin/topbar.php');
        $this->load->view('about_admin/edit.php', $data);
        $this->load->view('template_admin/footer.php');
    }
    public function editabout()
    {

        $this->db->set('nama', $this->input->post('nama'));
        $this->db->set('profile', $this->input->post('profile'));
        $this->db->set('email', $this->input->post('email'));
        $this->db->set('phone', $this->input->post('phone'));
        $this->db->where('id_about', $this->input->post('id_about'));
        $this->db->update('about');

        redirect('about_admin');
    }
}
