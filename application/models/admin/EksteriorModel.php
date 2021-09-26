<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EksteriorModel extends CI_Model
{
  private $foto_path = './files/eksterior/';
  private $cache_name = 'eksterior';
  public function getAllData($draw = null, $show = null, $start = null, $cari = null, $order = null, $filter = null)
  {
    // select tabel
    $this->db->select("a.id,
      b.id as id_produk,
      b.jumbotron_foto as foto_produk,
      a.title,
      b.title as nama_produk,
      a.foto,
      IF(a.status = '0' ,'Nonactive', IF(a.status = '1' , 'Active', 'Unknown')) as status_str,
      a.status,
      ifnull(a.updated_at, a.created_at) as tanggal");
    $this->db->from("ktm_eksterior a");
    $this->db->join('ktm_produk b', 'b.id = a.id_produk');

    // order by
    if ($order['order'] != null) {
      $columns = $order['columns'];
      $dir = $order['order'][0]['dir'];
      $order = $order['order'][0]['column'];
      $columns = $columns[$order];

      $order_colum = $columns['data'];
      if ($order_colum != 'nama_produk') {
        $this->db->order_by('b.title', 'asc');
      }
      $this->db->order_by($order_colum, $dir);
    } else {
      $this->db->order_by('b.title', 'asc');
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

      if ($filter['not_status_produk'] != '') {
        $this->db->where("b.status <>", $filter['not_status_produk']);
      }
    }

    // pencarian
    if ($cari != null) {
      $this->db->where("(
        a.id LIKE '%$cari%' or
        a.title LIKE '%$cari%' or
        b.title LIKE '%$cari%' or
        IF(a.status = '0' , 'Nonactive', IF(a.status = '1' , 'Active', 'Unknown')) LIKE '%$cari%' or
        a.foto LIKE '%$cari%'
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
      $this->db->insert('ktm_eksterior', [
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
    $return = $this->db->select('foto')->from('ktm_eksterior')->where('id', $id)->get()->row_array();

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
      $res_data = $this->db->update('ktm_eksterior', $data);

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
    $return = $this->db->select('foto')->from('ktm_eksterior')->where('id', $id)->get()->row_array();
    if ($return != null) {
      // delete foto
      if ($return['foto'] != null && $return['foto'] != '') {
        $res_foto = $this->deleteFile($this->foto_path . $return['foto']);
      }

      // from database foto
      $res_data = $this->db->delete('ktm_eksterior', ['id' => $id]);
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
    $this->db->from('ktm_eksterior');
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
