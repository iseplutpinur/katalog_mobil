<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DaftarHarga extends CI_Controller
{
  public function index()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['title_page'] = "My Profile";
    $this->load->view('templates/sitemain/header', $data);
    $this->load->view('templates/sitemain/sidebar', $data);
    $this->load->view('templates/sitemain/topbar', $data);
    $this->load->view('user/page/profile', $data);
    $this->load->view('templates/sitemain/footer');
  }

  public function insert()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('', '');
    $this->form_validation->set_rules('title', 'Title', 'trim|required');
    $this->form_validation->set_rules('id_produk', 'Id Produk', 'trim|required|numeric');
    $this->form_validation->set_rules('harga', 'Harga', 'trim|required');
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
      $title = $this->input->post('title');
      $status = $this->input->post('status');
      $harga = $this->input->post('harga');
      $return =  $this->model->insert($id_produk, $title, $status, $harga);
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
    $this->form_validation->set_rules('title', 'Title', 'trim|required');
    $this->form_validation->set_rules('id_produk', 'Id Produk', 'trim|required|numeric');
    $this->form_validation->set_rules('harga', 'Harga', 'trim|required');
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
      $title = $this->input->post('title');
      $status = $this->input->post('status');
      $harga = $this->input->post('harga');
      $return =  $this->model->update($id, $id_produk, $title, $status,  $harga);
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
    $this->load->model("admin/DaftarHargaModel", 'model');
  }
}
