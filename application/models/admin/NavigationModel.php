<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NavigationModel extends CI_Model
{
  public function getAllData($draw = null, $show = null, $start = null, $cari = null, $order = null, $filter = null)
  {
    // select tabel
    $this->db->select("a.id,
    b.id as id_produk,
    b.title as nama_produk,
    a.sort,
    IF(a.status = '0' ,'Nonactive', IF(a.status = '1' , 'Active', 'Unknown')) as status_str,
    a.status,
    ifnull(a.updated_at, a.created_at) as tanggal");
    $this->db->from("ktm_navigation a");
    $this->db->join('ktm_produk b', 'b.id = a.id_produk');


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
    }

    // pencarian
    if ($cari != null) {
      $this->db->where("(
                  a.id LIKE '%$cari%' or
                  a.title LIKE '%$cari%' or
                  a.sort LIKE '%$cari%' or
                  b.title LIKE '%$cari%' or
                  IF(a.status = '0' , 'Nonactive', IF(a.status = '1' , 'Active', 'Unknown')) LIKE '%$cari%' or
                  a.sort LIKE '%$cari%'
              )");
    }

    // pagination
    if ($show != null && $start != null) {
      $this->db->limit($show, $start);
    }

    $result = $this->db->get();
    return $result;
  }

  public function insert($id_produk, $status, $sort)
  {
    // insert foto
    $return = $this->db->insert('ktm_navigation', [
      'id_produk' => $id_produk,
      'status' => $status,
      'sort' => $sort
    ]);
    return [
      'status' => true,
      'data' => $this->db->insert_id(),
      'message' => $return ? 'Success' : 'Failed'
    ];
  }

  public function update($id, $id_produk, $status,  $sort)
  {
    $this->db->where('id', $id);
    $return = $this->db->update('ktm_navigation', [
      'id_produk' => $id_produk,
      'status' => $status,
      'sort' => $sort,
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
    return $this->db->delete('ktm_navigation', ['id' => $id]);
  }

  public function get_list($id = null, $cari = null): ?array
  {
    $status_status = 1;
    $this->db->select("id, title, detail");
    $this->db->from('ktm_navigation');
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
