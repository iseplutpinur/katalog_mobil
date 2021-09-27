<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
  public function index()
  {
    $this->load->model("admin/AplikasiModel", 'aplikasi');
    $data['apps'] = $this->aplikasi->getBackAttr();
    $data['title_page'] = "List Users";
    $data['plugins'] = ['datatable', 'select2'];
    $data['nav_select'] = 'nav-users';
    $data['javascript'] = "admin/users/list";
    $data['products'] = $this->db->select('id, title as text')->from('ktm_produk')->where('status <> 2')->get()->result_array();
    $this->load->view('admin/sitemain/header', $data);
    $this->load->view('admin/users/list', $data);
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
    $id_produk = $this->input->post('id_produk');
    $not_status_produk = $this->input->post('not_status_produk');

    $filter = [
      'date' => [
        'start' => $date_start,
        'end' => $date_end,
      ],
      'admin' => $admin,
      'sales' => $sales,
      'status' => $status,
      'id_produk' => $id_produk,
      'not_status_produk' => $not_status_produk,
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
    $this->form_validation->set_rules('name', 'Name', 'trim|required');
    $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|is_unique[user.email]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    $this->form_validation->set_rules('status', 'status', 'trim|required|numeric');
    if ($this->form_validation->run() == FALSE) {
      echo json_encode([
        'status' => false,
        'message' => validation_errors(),
        'data' => null,
        'code' => 400
      ]);
    } else {
      $name = $this->input->post('name');
      $email = $this->input->post('email');
      $status = $this->input->post('status');
      $password = $this->input->post('password');
      $return =  $this->model->insert($name, $email, $password, $status);
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
    $this->form_validation->set_rules('name', 'Name', 'trim|required');
    $this->form_validation->set_rules('status', 'status', 'trim|required|numeric');
    $this->form_validation->set_rules('password', 'Password', 'trim');
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
      $name = $this->input->post('name');
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $status = $this->input->post('status');
      $return =  $this->model->update($id, $name, $email, $password, $status);
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

  function __construct()
  {
    parent::__construct();
    $this->load->model("admin/UsersModel", 'model');
    is_logged_in();
  }
}
