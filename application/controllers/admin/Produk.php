<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
  public function index()
  {
  }

  public function insert()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('', '');
    $this->form_validation->set_rules('title', 'Title', 'trim|required');
    $this->form_validation->set_rules('jumbotron_title', 'Title Jumbotron', 'trim');
    $this->form_validation->set_rules('jumbotron_detail', 'Detail Jumbotron', 'trim');
    $this->form_validation->set_rules('promo_title', 'Title Pormo', 'trim');
    $this->form_validation->set_rules('promo_harga_mulai', 'Promo Harga Mulai', 'trim');
    $this->form_validation->set_rules('promo_paket_kredit', 'Promo Paket Kredit', 'trim');
    $this->form_validation->set_rules('promo_tenor_kerdit', 'Promo Tenor Kredit', 'trim');
    $this->form_validation->set_rules('promo_detail', 'Promo Detail', 'trim');
    $this->form_validation->set_rules('informasi_spesifikasi', 'Informasi Spesifikasi', 'trim');
    $this->form_validation->set_rules('informasi_spesifikasi_status', 'Informasi Spesifikasi Status', 'trim|required|numeric');
    $this->form_validation->set_rules('keterangan_pembelian', 'Keterangan Pembelian', 'trim');
    $this->form_validation->set_rules('keterangan_pembelian_status', 'Keterangan Pembelian Status', 'trim|required|numeric');
    $this->form_validation->set_rules('status', 'Active', 'trim|required|numeric');
    if ($this->form_validation->run() == FALSE) {
      echo json_encode([
        'status' => false,
        'message' => validation_errors(),
        'data' => null,
        'code' => 400
      ]);
    } else {
      $title = $this->input->post('title');
      $jumbotron_title = $this->input->post('jumbotron_title');
      $jumbotron_detail = $this->input->post('jumbotron_detail');
      $promo_title = $this->input->post('promo_title');
      $promo_harga_mulai = $this->input->post('promo_harga_mulai');
      $promo_paket_kredit = $this->input->post('promo_paket_kredit');
      $promo_tenor_kerdit = $this->input->post('promo_tenor_kerdit');
      $promo_detail = $this->input->post('promo_detail');
      $informasi_spesifikasi = $this->input->post('informasi_spesifikasi');
      $informasi_spesifikasi_status = $this->input->post('informasi_spesifikasi_status');
      $keterangan_pembelian = $this->input->post('keterangan_pembelian');
      $keterangan_pembelian_status = $this->input->post('keterangan_pembelian_status');
      $status = $this->input->post('status');
      $return =  $this->model->insert(
        $title,
        $jumbotron_title,
        $jumbotron_detail,
        $promo_title,
        $promo_harga_mulai,
        $promo_paket_kredit,
        $promo_tenor_kerdit,
        $promo_detail,
        $informasi_spesifikasi,
        $informasi_spesifikasi_status,
        $keterangan_pembelian,
        $keterangan_pembelian_status,
        $status
      );
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
    $this->form_validation->set_rules('id', 'ID', 'trim|required|numeric');
    $this->form_validation->set_rules('title', 'Title', 'trim|required');
    $this->form_validation->set_rules('jumbotron_title', 'Title Jumbotron', 'trim');
    $this->form_validation->set_rules('jumbotron_detail', 'Detail Jumbotron', 'trim');
    $this->form_validation->set_rules('promo_title', 'Title Pormo', 'trim');
    $this->form_validation->set_rules('promo_harga_mulai', 'Promo Harga Mulai', 'trim');
    $this->form_validation->set_rules('promo_paket_kredit', 'Promo Paket Kredit', 'trim');
    $this->form_validation->set_rules('promo_tenor_kerdit', 'Promo Tenor Kredit', 'trim');
    $this->form_validation->set_rules('promo_detail', 'Promo Detail', 'trim');
    $this->form_validation->set_rules('informasi_spesifikasi', 'Informasi Spesifikasi', 'trim');
    $this->form_validation->set_rules('informasi_spesifikasi_status', 'Informasi Spesifikasi Status', 'trim|required|numeric');
    $this->form_validation->set_rules('keterangan_pembelian', 'Keterangan Pembelian', 'trim');
    $this->form_validation->set_rules('keterangan_pembelian_status', 'Keterangan Pembelian Status', 'trim|required|numeric');
    $this->form_validation->set_rules('status', 'Active', 'trim|required|numeric');
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
      $jumbotron_title = $this->input->post('jumbotron_title');
      $jumbotron_detail = $this->input->post('jumbotron_detail');
      $promo_title = $this->input->post('promo_title');
      $promo_harga_mulai = $this->input->post('promo_harga_mulai');
      $promo_paket_kredit = $this->input->post('promo_paket_kredit');
      $promo_tenor_kerdit = $this->input->post('promo_tenor_kerdit');
      $promo_detail = $this->input->post('promo_detail');
      $informasi_spesifikasi = $this->input->post('informasi_spesifikasi');
      $informasi_spesifikasi_status = $this->input->post('informasi_spesifikasi_status');
      $keterangan_pembelian = $this->input->post('keterangan_pembelian');
      $keterangan_pembelian_status = $this->input->post('keterangan_pembelian_status');
      $status = $this->input->post('status');
      $return =  $this->model->update(
        $id,
        $title,
        $jumbotron_title,
        $jumbotron_detail,
        $promo_title,
        $promo_harga_mulai,
        $promo_paket_kredit,
        $promo_tenor_kerdit,
        $promo_detail,
        $informasi_spesifikasi,
        $informasi_spesifikasi_status,
        $keterangan_pembelian,
        $keterangan_pembelian_status,
        $status
      );
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
    $this->load->model("admin/ProdukModel", 'model');
  }
}
