<?php
defined('BASEPATH') or exit('No direct script access allowed');

class VideoModel extends CI_Model
{
  public function insert($id_produk, $status, $url)
  {
    // insert foto
    $return = $this->db->insert('ktm_navigation', [
      'id_produk' => $id_produk,
      'status' => $status,
      'url' => $url
    ]);
    return [
      'status' => true,
      'data' => $this->db->insert_id(),
      'message' => $return ? 'Success' : 'Failed'
    ];
  }

  public function update($id, $id_produk, $status,  $url)
  {
    $this->db->where('id', $id);
    $return = $this->db->update('ktm_navigation', [
      'id_produk' => $id_produk,
      'status' => $status,
      'url' => $url,
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
