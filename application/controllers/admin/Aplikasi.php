<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aplikasi extends CI_Controller
{
  public function index()
  {
    $data['title_page'] = "Pengaturan Aplikasi";
    $data['plugins'] = ['datatable', 'mansonry'];
    $data['nav_select'] = 'nav-aplikasi';
    $data['javascript'] = "admin/aplikasi/index";
    $data['navigation'] = "admin/aplikasi/index";
    $this->load->view('admin/sitemain/header', $data);
    $this->load->view('admin/aplikasi/index', $data);
    $this->load->view('admin/sitemain/footer', $data);
  }

  public function __construct()
  {
    parent::__construct();
    // $this->load->model("admin/AplikasiModel", 'model');
    is_logged_in();
  }
}
