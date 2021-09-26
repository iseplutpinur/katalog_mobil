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

  public function insert_logo()
  {
    $return = $this->model->insert_logo();

    echo json_encode($return);
  }

  public function insert_email()
  {
    $icon = $this->input->post('icon');
    $title = $this->input->post('title');
    $value = $this->input->post('value');
    $status = $this->input->post('status');
    $return = $this->model->insert_email($icon, $title, $value, $status);

    echo json_encode($return);
  }

  public function insert_service()
  {
    $icon = $this->input->post('icon');
    $title = $this->input->post('title');
    $value = $this->input->post('value');
    $status = $this->input->post('status');
    $return = $this->model->insert_service($icon, $title, $value, $status);

    echo json_encode($return);
  }

  public function insert_call()
  {
    $icon = $this->input->post('icon');
    $title = $this->input->post('title');
    $value = $this->input->post('value');
    $status = $this->input->post('status');
    $return = $this->model->insert_call($icon, $title, $value, $status);

    echo json_encode($return);
  }

  public function insert_copyright()
  {
    $value = $this->input->post('value', false);
    $status = $this->input->post('status');
    $return = $this->model->insert_copyright($value, $status);

    echo json_encode($return);
  }

  public function insert_no_telp()
  {
    $value = $this->input->post('value', false);
    $status = $this->input->post('status');
    $return = $this->model->insert_no_telp($value, $status);

    echo json_encode($return);
  }

  public function insert_foot_email()
  {
    $value = $this->input->post('value', false);
    $status = $this->input->post('status');
    $return = $this->model->insert_foot_email($value, $status);

    echo json_encode($return);
  }

  public function insert_alamat()
  {
    $value = $this->input->post('value', false);
    $status = $this->input->post('status');
    $return = $this->model->insert_alamat($value, $status);

    echo json_encode($return);
  }

  public function insert_galeri()
  {
    $title = $this->input->post('title');
    $value = $this->input->post('value');
    $return = $this->model->insert_galeri($title, $value);

    echo json_encode($return);
  }

  public function insert_video()
  {
    $title = $this->input->post('title');
    $value = $this->input->post('value');
    $return = $this->model->insert_video($title, $value);

    echo json_encode($return);
  }

  public function insert_katalog()
  {
    $title = $this->input->post('title');
    $value = $this->input->post('value');
    $return = $this->model->insert_katalog($title, $value);

    echo json_encode($return);
  }

  public function insert_testimoni()
  {
    $title = $this->input->post('title');
    $value = $this->input->post('value');
    $return = $this->model->insert_testimoni($title, $value);

    echo json_encode($return);
  }

  public function insert_kontak()
  {
    $title = $this->input->post('title');
    $value = $this->input->post('value');
    $return = $this->model->insert_kontak($title, $value);

    echo json_encode($return);
  }


  public function __construct()
  {
    parent::__construct();
    $this->load->model("admin/DepanModel", 'model');
    $this->load->model('MobilModel', 'mobil');
    is_logged_in();
  }
}
