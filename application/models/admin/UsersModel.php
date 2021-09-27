<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UsersModel extends CI_Model
{

  public function getAllData($draw = null, $show = null, $start = null, $cari = null, $order = null, $filter = null)
  {
    // select tabel
    $this->db->select("id, name, email, is_active as status, IF(is_active = '0' , 'Nonactive', IF(is_active = '1' , 'Active', 'Unknown')) as status_str");
    $this->db->from("user a");
    $this->db->where('email <> ', $this->session->userdata('email'));

    // order by
    if ($order['order'] != null) {
      $columns = $order['columns'];
      $dir = $order['order'][0]['dir'];
      $order = $order['order'][0]['column'];
      $columns = $columns[$order];

      $order_colum = $columns['data'];
      $this->db->order_by($order_colum, $dir);
    }

    // initial data table
    if ($draw == 1) {
      $this->db->limit(10, 0);
    }

    // pencarian
    if ($cari != null) {
      $this->db->where("(
                  a.name LIKE '%$cari%' or
                  a.email LIKE '%$cari%'
              )");
    }

    // pagination
    if ($show != null && $start != null) {
      $this->db->limit($show, $start);
    }

    $result = $this->db->get();
    return $result;
  }

  public function insert($name, $email, $password, $status)
  {
    $return = $this->db->insert('user', [
      'name' => $name,
      'email' => $email,
      'is_active' => $status,
      'role_id' => 1,
      'password' => password_hash($password, PASSWORD_DEFAULT)
    ]);
    return [
      'status' => true,
      'data' => $this->db->insert_id(),
      'message' => $return ? 'Success' : 'Failed'
    ];
  }

  public function update($id, $name, $email, $password, $status)
  {
    $data = [
      'name' => $name,
      'email' => $email,
      'is_active' => $status
    ];
    if ($password != '') {
      $data['password'] = password_hash($password, PASSWORD_DEFAULT);
    }

    $this->db->where('id', $id);
    $return = $this->db->update('user', $data);

    return [
      'status' => true,
      'data' => $this->db->insert_id(),
      'message' => $return ? 'Success' : 'Failed'
    ];
  }

  public function delete($id)
  {
    return $this->db->delete('user', ['id' => $id]);
  }
}
