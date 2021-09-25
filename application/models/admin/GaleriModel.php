<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GaleriModel extends CI_Model
{
  private $foto_path = './files/galeri/';
  private $cache_name = 'galeri';

  public function getAllData($draw = null, $show = null, $start = null, $cari = null, $order = null, $filter = null)
  {
    // select tabel
    $this->db->select("id, title, foto, IF(status = '0' , 'Nonactive', IF(status = '1' , 'Active', 'Unknown')) as status_str, status");
    $this->db->from("ktm_galeri");
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

  public function insert($id_produk, $title, $status)
  {
    // insert foto
    $save_file = $this->saveFile();
    if ($save_file['status']) {
      // insert database
      $this->db->insert('ktm_galeri', [
        'id_produk' => $id_produk,
        'title' => $title,
        'status' => $status,
        'foto' => $save_file['data']
      ]);

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

  public function update($id, $id_produk, $title, $status)
  {
    $return = $this->db->select('foto')->from('ktm_galeri')->where('id', $id)->get()->row_array();

    if ($return != null) {
      $data = [
        'id_produk' => $id_produk,
        'title' => $title,
        'status' => $status,
        'updated_at' => Date('Y-m-d H:i:s')
      ];
      $res_foto = true;
      // cek apakah ada foto yang dikirim
      if ($_FILES['file']['name'] != '') {
        // simpan foto
        $save_file = $this->saveFile();
        // delete foto
        if ($return['foto'] != null && $return['foto'] != '') {
          $res_foto = $this->deleteFile($this->foto_path . $return['foto']);
        }
        $data['foto'] = $save_file['data'];
      }

      // update database
      // save database
      $this->db->where('id', $id);
      $res_data = $this->db->update('ktm_galeri', $data);

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
    $return = $this->db->select('foto')->from('ktm_galeri')->where('id', $id)->get()->row_array();
    if ($return != null) {
      // delete foto
      if ($return['foto'] != null && $return['foto'] != '') {
        $res_foto = $this->deleteFile($this->foto_path . $return['foto']);
      }

      // from database foto
      $res_data = $this->db->delete('ktm_galeri', ['id' => $id]);
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
    $config['file_name']            = md5(uniqid("ktm_home", true));
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

  public function get_list($id = null, $cari = null): ?array
  {
    $status_status = 1;
    $this->db->select("id, title, foto");
    $this->db->from('ktm_galeri');
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
      $db = $this->db->get();
      return  ['data' => $db->result_array(), 'length' => $db->num_rows()];
    } else {
      $this->db->where('id', $id);
      $db = $this->db->get();
      return  ['data' => $db->result_array(), 'length' => $db->num_rows()];
    }
  }
}
