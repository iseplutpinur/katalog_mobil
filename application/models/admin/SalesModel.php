<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SalesModel extends CI_Model
{
  private $foto_path = './files/sales/';
  private $cache_name = 'sales';

  public function getAllData($draw = null, $show = null, $start = null, $cari = null, $order = null, $filter = null)
  {
    // select tabel
    $this->db->select("id, title, no_wa, foto, IF(status = '0' , 'Nonactive', IF(status = '1' , 'Active', 'Unknown')) as status_str, status");
    $this->db->from("ktm_sales");
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

    // // filter
    // if ($filter != null) {
    //   // filter date
    //   if ($filter['date']['start'] != null && $filter['date']['end'] != null) {
    //     $this->db->where("(a.created_at >= '{$filter['date']['start']} 00:00:00' and a.created_at <= '{$filter['date']['end']} 23:59:59')");
    //   }

    //   // filter admin
    //   if ($filter['admin'] != '') {
    //     $this->db->where("a.id_penanggung_jawab", $filter['admin']);
    //   }
    // }

    // pencarian
    if ($cari != null) {
      $this->db->where("(
                  id LIKE '%$cari%' or
                  title LIKE '%$cari%' or
                  no_wa LIKE '%$cari%' or
                  alamat LIKE '%$cari%' or
                  email LIKE '%$cari%' or
                  lainnya LIKE '%$cari%' or
                  IF(status = '0' , 'Nonactive', IF(status = '1' , 'Active', 'Unknown')) LIKE '%$cari%' or
                  foto LIKE '%$cari%'
              )");
    }

    // pagination
    if ($show != null && $start != null) {
      $this->db->limit($show, $start);
    }

    $result = $this->db->get();
    return $result;
  }

  public function insert(
    $title,
    $status,
    $alamat,
    $no_wa,
    $email,
    $lainnya
  ) {
    // insert foto
    $save_file = $this->saveFile();
    if ($save_file['status']) {
      // insert database
      $this->db->insert('ktm_sales', [
        'title' => $title,
        'status' => $status,
        'alamat' => $alamat,
        'no_wa' => $no_wa,
        'email' => $email,
        'lainnya' => $lainnya,
        'foto' => $save_file['data']
      ]);

      // hapus cache
      $this->cache->delete($this->cache_name);

      return [
        'status' => true,
        'data' => $this->db->insert_id(),
        'message' => $save_file['message']
      ];
    } else {
      return [
        'status' => false,
        'data' => null,
        'message' => $save_file['message']
      ];
    }
  }

  public function update(
    $id,
    $title,
    $status,
    $alamat,
    $no_wa,
    $email,
    $lainnya
  ) {
    $return = $this->db->select('foto')->from('ktm_sales')->where('id', $id)->get()->row_array();
    if ($return != null) {
      $data = [
        'title' => $title,
        'status' => $status,
        'alamat' => $alamat,
        'no_wa' => $no_wa,
        'email' => $email,
        'lainnya' => $lainnya,
        'updated_at' => Date('Y-m-d H:i:s')
      ];
      $res_foto = true;
      // cek apakah ada foto yang dikirim
      if ($_FILES['file']['name'] != '') {
        // simpan foto
        $save_file = $this->saveFile();
        // delete foto
        if ($return['foto'] != '' && $return['foto'] != null) {
          $res_foto = $this->deleteFile($this->foto_path . $return['foto']);
        }
        $data['foto'] = $save_file['data'];
      }

      // update database
      // save database
      $this->db->where('id', $id);
      $res_data = $this->db->update('ktm_sales', $data);

      // hapus cache
      $this->cache->delete($this->cache_name);
      $this->cache->delete($this->cache_name . "_" . $id);

      return [
        'status' => $res_foto == $res_data,
        'data' => null,
        'message' => $res_foto == $res_data ? 'success' : 'failed'
      ];
    } else {
      return [
        'status' => false,
        'data' => null,
        'message' => 'Data not found'
      ];
    }
  }

  public function delete($id)
  {
    $return = $this->db->select('foto')->from('ktm_sales')->where('id', $id)->get()->row_array();
    if ($return != null) {
      // delete foto
      $res_foto = $this->deleteFile($this->foto_path . $return['foto']);

      // from database foto
      if ($return['foto'] != '' && $return['foto'] != null) {
        $res_data = $this->db->delete('ktm_sales', ['id' => $id]);
      }
      $this->cache->delete($this->cache_name);
      $this->cache->delete($this->cache_name . "_" . $id);
      return $res_foto == $res_data;
    } else {
      return false;
    }
  }

  private function deleteFile($path)
  {
    $res_foto = true;
    if (file_exists($path)) {
      $res_foto = unlink($path);
    }
    return $res_foto;
  }

  private function saveFile()
  {
    $config['upload_path']          = $this->foto_path;
    $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|PNG|JPEG';
    $config['file_name']            = md5(uniqid("ktm_sales", true));
    $config['overwrite']            = true;
    $config['max_size']             = 8024;
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if ($this->upload->do_upload('file')) {
      return [
        'status' => true,
        'data' => $this->upload->data("file_name"),
        'message' => 'Success'
      ];
    } else {
      return [
        'status' => false,
        'data' => null,
        'message' => $this->upload->display_errors('', '')
      ];
    }
  }

  public function get($id)
  {

    return $this->db
      ->select("*")
      ->from('ktm_sales')
      ->where('id', $id)
      ->get()
      ->row_array();
  }

  public function get_list($id = null, $cari = null): ?array
  {
    $status_status = 1;
    $this->db->select("*");
    $this->db->from('ktm_sales');
    $this->db->where('status', $status_status);
    $this->db->order_by('created_at', 'desc');

    if ($cari != null) {
      $this->db->where("(
      id LIKE '%$cari%' or
      title LIKE '%$cari%' or
      foto LIKE '%$cari%' or
      created_at LIKE '%$cari%' or
      updated_at LIKE '%$cari%'
      )");
    }

    if ($id == null) {
      if (!$return = $this->cache->get($this->cache_name) && $cari == null) {
        $db = $this->db->get();
        $return = ['data' => $db->result_array(), 'length' => $db->num_rows()];

        // jika ada pencarian cache jangan di simpan
        if ($cari == null && $db->num_rows() > 0) {
          $this->cache->save($this->cache_name, $return);
        } else {
          $this->cache->delete($this->cache_name);
        }
        return $return;
      }

      if ($return = $this->cache->get($this->cache_name)) {
        return $return;
      }
    } else {
      $this->db->where('id', $id);
      $this->cache_name = "{$this->cache_name}_$id";

      if (!$return = $this->cache->get($this->cache_name) && $cari == null) {
        $db = $this->db->get();
        $return = ['data' => $db->result_array(), 'length' => $db->num_rows()];

        // jika ada pencarian cache jangan di simpan
        if ($cari == null && $db->num_rows() > 0) {
          $this->cache->save($this->cache_name, $return);
        } else {
          $this->cache->delete($this->cache_name);
        }
        return $return;
      }

      if ($return = $this->cache->get($this->cache_name)) {
        return $return;
      }
    }
  }

  public function __construct()
  {
    parent::__construct();
    $this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
  }
}
