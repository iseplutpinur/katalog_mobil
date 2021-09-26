<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function index()
  {
    $data['title_page'] = "Dashboard";
    $data['plugins'] = ['datatable'];
    $data['javascript'] = "admin/dashboard/index";
    $data['navigation'] = "admin/dashboard/index";
    $data['datas'] = $this->model->getDataDashboard();
    $this->load->view('admin/sitemain/header', $data);
    $this->load->view('admin/dashboard/index', $data);
    $this->load->view('admin/sitemain/footer');
  }

  public function __construct()
  {
    parent::__construct();
    $this->load->model("admin/DashboardModel", 'model');
    is_logged_in();
  }
}
