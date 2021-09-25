<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Navigation extends CI_Controller
{
  public function index()
  {
    $data['title_page'] = "List Slider";
    $data['plugins'] = ['datatable'];
    $data['nav_select'] = 'nav-slider';
    $data['javascript'] = "admin/slider/list";
    $this->load->view('admin/sitemain/header', $data);
    $this->load->view('admin/slider/list', $data);
    $this->load->view('admin/sitemain/footer');
  }

  public function insert()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('', '');
    $this->form_validation->set_rules('id_produk', 'Id Produk', 'trim|required|numeric');
    $this->form_validation->set_rules('sort', 'sort', 'trim|required');
    $this->form_validation->set_rules('status', 'status', 'trim|required|numeric');
    if ($this->form_validation->run() == FALSE) {
      echo json_encode([
        'status' => false,
        'message' => validation_errors(),
        'data' => null,
        'code' => 400
      ]);
    } else {
      $id_produk = $this->input->post('id_produk');
      $status = $this->input->post('status');
      $sort = $this->input->post('sort');
      $return =  $this->model->insert($id_produk, $status, $sort);
      echo json_encode([
        'status' => $return['status'],
        'data' => $return['data'],
        'message' => $return['message'],
        'code' => $return['status'] ? 200 : 400
      ]);
    }
    header('Content-Type: application/json; charset=utf-8');
  }

  public function update()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('id_produk', 'Id Produk', 'trim|required|numeric');
    $this->form_validation->set_rules('sort', 'sort', 'trim|required');
    $this->form_validation->set_rules('status', 'status', 'trim|required|numeric');
    $this->form_validation->set_rules('id', 'id', 'trim|required|numeric');
    if ($this->form_validation->run() == FALSE) {
      echo json_encode([
        'status' => false,
        'message' => validation_errors(),
        'data' => null,
        'code' => 400
      ]);
    } else {
      $id = $this->input->post('id');
      $id_produk = $this->input->post('id_produk');
      $status = $this->input->post('status');
      $sort = $this->input->post('sort');
      $return =  $this->model->update($id, $id_produk,  $status,  $sort);
      echo json_encode([
        'status' => $return['status'],
        'data' => $return['data'],
        'message' => $return['message'],
        'code' => $return['status'] ? 200 : 400
      ]);
    }
    header('Content-Type: application/json; charset=utf-8');
  }

  public function delete($id = false)
  {
    $return =  $this->model->delete($id);
    echo json_encode([
      'status' => $return,
      'data' => null,
      'message' => $return ? 'Success' : 'Failed',
      'code' => $return ? 200 : 400
    ]);
    header('Content-Type: application/json; charset=utf-8');
  }

  public function get_list()
  {
    $id = $this->input->get('id');
    $cari = $this->input->get('cari');
    $data = $this->model->get_list($id, $cari);
    $code = $data['data'] == null ?
      404
      : 200;
    $status = $data['data'] != null;

    // send response
    echo json_encode([
      'status' => $status,
      'length' => $data['length'],
      'data' => $data['data']
    ], $code);
    header('Content-Type: application/json; charset=utf-8');
  }

  function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model("admin/NavigationModel", 'model');
  }
}
