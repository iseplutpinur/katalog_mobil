<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aplikasi extends CI_Controller
{
  public function index()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['title_page'] = "Pengaturan Aplikasi";
    $data['plugins'] = ['datatable', 'mansonry'];
    $data['nav_select'] = 'nav-aplikasi';
    $data['javascript'] = "admin/aplikasi/index";
    $data['navigation'] = "admin/aplikasi/index";
    $data['aplikasi'] = $this->aplikasi->getBackAttr();

    $data['apps'] = $this->aplikasi->getBackAttr();
    $this->load->view('admin/sitemain/header', $data);
    $this->load->view('admin/aplikasi/index', $data);
    $this->load->view('admin/sitemain/footer', $data);
  }

  public function update_tampilan()
  {
    $nav_icon = $this->input->post('nav_icon');
    $nav_icon_status = $this->input->post('nav_icon_status');
    $logo_title = $this->input->post('logo_title');
    $copyright = $this->input->post('copyright');
    $nav_time_status = $this->input->post('status');
    echo $this->aplikasi->update_tampilan(
      $nav_icon,
      $nav_icon_status,
      $logo_title,
      $copyright,
      $nav_time_status
    );
  }

  public function update_user()
  {
    $old_email = $this->session->userdata('email');
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    echo $this->aplikasi->update_user($old_email,  $email, $password);
  }

  public function __construct()
  {
    parent::__construct();
    $this->load->model("admin/AplikasiModel", 'aplikasi');
    is_logged_in();
  }
}
