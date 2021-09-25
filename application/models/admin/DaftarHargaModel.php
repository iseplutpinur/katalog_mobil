<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DaftarHargaModel extends CI_Model
{

  public function getAllData($draw = null, $show = null, $start = null, $cari = null, $order = null, $filter = null)
  {
    // select tabel
    $this->db->select("id, title, harga, IF(status = '0' , 'Nonactive', IF(status = '1' , 'Active', 'Unknown')) as status_str, status");
    $this->db->from("ktm_daftar_harga");
    // $this->db->where("status <> 0");

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

    // filter
    if ($filter != null) {
      // filter date
      if ($filter['date']['start'] != null && $filter['date']['end'] != null) {
        $this->db->where("(a.created_at >= '{$filter['date']['start']} 00:00:00' and a.created_at <= '{$filter['date']['end']} 23:59:59')");
      }

      // filter admin
      if ($filter['admin'] != '') {
        $this->db->where("a.id_penanggung_jawab", $filter['admin']);
      }

      if ($filter['id_produk'] != '') {
        $this->db->where("id_produk", $filter['id_produk']);
      }
    }

    // pencarian
    if ($cari != null) {
      $this->db->where("(
                  id LIKE '%$cari%' or
                  title LIKE '%$cari%' or
                  IF(status = '0' , 'Nonactive', IF(status = '1' , 'Active', 'Unknown')) LIKE '%$cari%' or
                  harga LIKE '%$cari%'
              )");
    }

    // pagination
    if ($show != null && $start != null) {
      $this->db->limit($show, $start);
    }

    $result = $this->db->get();
    return $result;
  }

  public function insert($id_produk, $title, $status, $harga)
  {
    $return = $this->db->insert('ktm_daftar_harga', [
      'id_produk' => $id_produk,
      'title' => $title,
      'status' => $status,
      'harga' => $harga
    ]);
    return [
      'status' => true,
      'data' => $this->db->insert_id(),
      'message' => $return ? 'Success' : 'Failed'
    ];
  }

  public function update($id, $id_produk, $title, $status,  $harga)
  {
    $this->db->where('id', $id);
    $return = $this->db->update('ktm_daftar_harga', [
      'id_produk' => $id_produk,
      'title' => $title,
      'status' => $status,
      'harga' => $harga,
      'updated_at' => Date('Y-m-d H:i:s')
    ]);

    return [
      'status' => true,
      'data' => $this->db->insert_id(),
      'message' => $return ? 'Success' : 'Failed'
    ];
  }

  public function delete($id)
  {
    return $this->db->delete('ktm_daftar_harga', ['id' => $id]);
  }

  public function get_list($id = null, $cari = null): ?array
  {
    $status_status = 1;
    $this->db->select("id, title, detail");
    $this->db->from('ktm_daftar_harga');
    $this->db->where('status', $status_status);
    $this->db->order_by('created_at', 'desc');

    if ($cari != null) {
      $this->db->where("(
      id LIKE '%$cari%' or
      title LIKE '%$cari%' or
      detail LIKE '%$cari%' or
      created_at LIKE '%$cari%' or
      updated_at LIKE '%$cari%'
      )");
    }

    if ($id == null) {
      $db = $this->db->get();
      $length = $db->num_rows();
      $return = $db->result_array();
    } else {
      $this->db->where('id', $id);
      $db = $this->db->get();
      $length = $db->num_rows();
      $return = $db->row_array();
    }

    $return = ['data' => $return, 'length' => $length];
    return $return;
  }
}
