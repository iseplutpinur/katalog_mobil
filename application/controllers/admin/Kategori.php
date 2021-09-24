<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
  public function index()
  {
  }

  public function insert()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('', '');
    $this->form_validation->set_rules('title', 'Title', 'trim|required');
    $this->form_validation->set_rules('detail', 'Detail', 'trim');
    $this->form_validation->set_rules('status', 'status', 'trim|required|numeric');
    if ($this->form_validation->run() == FALSE) {
      echo json_encode([
        'status' => false,
        'message' => validation_errors(),
        'data' => null,
        'code' => 400
      ]);
    } else {
      $title = $this->input->post('title');
      $status = $this->input->post('status');
      $detail = $this->input->post('detail');
      $return =  $this->model->insert($title, $status, $detail);
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
    $this->form_validation->set_error_delimiters('', '');
    $this->form_validation->set_rules('title', 'Title', 'trim|required');
    $this->form_validation->set_rules('detail', 'Detail', 'trim|required');
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
      $title = $this->input->post('title');
      $detail = $this->input->post('detail');
      $status = $this->input->post('status');
      $return =  $this->model->update($id, $title, $status, $detail);
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
    $this->load->model("admin/KategoriModel", 'model');
  }
}
