<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Depan extends CI_Controller
{
  public function index()
  {
    $data['title_page'] = "Pengaturan Halaman Depan";
    $data['plugins'] = ['datatable', 'mansonry'];
    $data['nav_select'] = 'nav-depan';
    $data['javascript'] = "admin/depan/index";
    $data['navigation'] = "admin/depan/index";
    $data['depan'] = $this->mobil->getFrontAttr();
    $this->load->view('admin/sitemain/header', $data);
    $this->load->view('admin/depan/index', $data);
    $this->load->view('admin/sitemain/footer');
  }

  public function __construct()
  {
    parent::__construct();
    $this->load->model("admin/DepanModel", 'model');
    $this->load->model('MobilModel', 'mobil');
    is_logged_in();
  }
}
