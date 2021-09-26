<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jumbotron extends CI_Controller
{
  public function index()
  {
    $data['title_page'] = "List Jumbotron";
    $data['plugins'] = ['datatable', 'ckeditor'];
    $data['nav_select'] = 'nav-jumbotron';
    $data['javascript'] = "admin/jumbotron/list";
    $this->load->view('admin/sitemain/header', $data);
    $this->load->view('admin/jumbotron/list', $data);
    $this->load->view('admin/sitemain/footer');
  }

  public function datatable()
  {
    $order = ['order' => $this->input->post('order'), 'columns' => $this->input->post('columns')];
    $start = $this->input->post('start');
    $draw = $this->input->post('draw');
    $draw = $draw == null ? 1 : $draw;
    $length = $this->input->post('length');
    $cari = $this->input->post('search');

    $date_start = $this->input->post('date_start');
    $date_end = $this->input->post('date_end');
    $admin = $this->input->post('admin');
    $sales = $this->input->post('sales');
    $status = $this->input->post('status');

    $filter = [
      'date' => [
        'start' => $date_start,
        'end' => $date_end,
      ],
      'admin' => $admin,
      'sales' => $sales,
      'status' => $status,
    ];

    if (isset($cari['value'])) {
      $_cari = $cari['value'];
    } else {
      $_cari = null;
    }

    $data = $this->model->getAllData($draw, $length, $start, $_cari, $order, $filter)->result_array();
    $count = $this->model->getAllData(null, null,    null,   $_cari, $order, $filter)->num_rows();

    echo json_encode(['recordsTotal' => $count, 'recordsFiltered' => $count, 'draw' => $draw, 'search' => $_cari, 'data' => $data]);
    header('Content-Type: application/json; charset=utf-8');
  }

  public function insert()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('', '');
    $this->form_validation->set_rules('title', 'Title', 'trim|required');
    $this->form_validation->set_rules('detail', 'Detail', 'trim|required');
    $this->form_validation->set_rules('sub_judul', 'Sub Judul', 'trim|required');
    $this->form_validation->set_rules('sub_detail', 'Sub Detail', 'trim|required');
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
      $sub_judul = $this->input->post('sub_judul');
      $sub_detail = $this->input->post('sub_detail');
      $return =  $this->model->insert($title, $status, $detail, $sub_judul, $sub_detail);
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
    $this->form_validation->set_rules('sub_judul', 'Sub Judul', 'trim|required');
    $this->form_validation->set_rules('sub_detail', 'Sub Detail', 'trim|required');
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
      $status = $this->input->post('status');
      $detail = $this->input->post('detail');
      $sub_judul = $this->input->post('sub_judul');
      $sub_detail = $this->input->post('sub_detail');
      $return =  $this->model->update($id, $title, $status, $detail, $sub_judul, $sub_detail);
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

  public function get()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('', '');
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
      $data = $this->model->get($id);
      $count = $data == null ? 0 : 1;
      $code = $data == null ?
        404
        : 200;
      $status = $data != null;

      // send response
      echo json_encode([
        'status' => $status,
        'length' =>  $count,
        'data' => $data
      ], $code);
    }
    header('Content-Type: application/json; charset=utf-8');
  }

  function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model("admin/JumbotronModel", 'model');
  }
}
