<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function index()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['title_page'] = "Dashboard";
    $data['plugins'] = ['datatable'];
    $data['javascript'] = "admin/dashboard/index";
    $data['navigation'] = "admin/dashboard/index";
    $this->load->view('admin/sitemain/header', $data);
    $this->load->view('admin/dashboard/index', $data);
    $this->load->view('admin/sitemain/footer');
  }
}
