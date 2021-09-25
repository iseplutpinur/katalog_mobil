<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProdukModel extends CI_Model
{
  private $foto_path = './files/produk/';
  private $cache_name = 'produk';

  public function getAllData($draw = null, $show = null, $start = null, $cari = null, $order = null, $filter = null)
  {
    // select tabel
    $this->db->select("id, title, IF(status = '0' , 'Nonactive', IF(status = '1' , 'Active', 'Unknown')) as status_str, status");
    $this->db->from("ktm_produk");
    $this->db->where("status <> 2");

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
                  IF(status = '0' , 'Nonactive', IF(status = '1' , 'Active', 'Unknown')) LIKE '%$cari%'
              )");
    }

    // pagination
    if ($show != null && $start != null) {
      $this->db->limit($show, $start);
    }

    $result = $this->db->get();
    return $result;
  }

  public function newProduk()
  {
    $check = $this->db->select("*")->from("ktm_produk")->where('status', 2)->get();
    if ($check->num_rows() > 0) {
      return $check->row_array();
    } else {
      $this->db->insert('ktm_produk', ['status' => 2]);
      $new_produk = $this->db->insert_id();
      return $this->db->select("*")->from("ktm_produk")->where('id', $new_produk)->get()->row_array();
    }
  }

  public function insert(
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
  ) {
    // insert foto
    $save_file = $this->saveFile();
    if ($save_file['status']) {
      $this->db->insert('ktm_produk', [
        'title' => $title,
        'jumbotron_title' => $jumbotron_title,
        'jumbotron_detail' => $jumbotron_detail,
        'promo_title' => $promo_title,
        'promo_harga_mulai' => $promo_harga_mulai,
        'promo_paket_kredit' => $promo_paket_kredit,
        'promo_tenor_kerdit' => $promo_tenor_kerdit,
        'promo_detail' => $promo_detail,
        'informasi_spesifikasi' => $informasi_spesifikasi,
        'informasi_spesifikasi_status' => $informasi_spesifikasi_status,
        'keterangan_pembelian' => $keterangan_pembelian,
        'keterangan_pembelian_status' => $keterangan_pembelian_status,
        'status' => $status,
        'jumbotron_foto' => $save_file['data']
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

  public function update(
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
  ) {
    $return = $this->db->select('jumbotron_foto')->from('ktm_produk')->where('id', $id)->get()->row_array();
    if ($return != null) {
      $return = $return ?? ['jumbotron_foto' => null];
      $data = [
        'title' => $title,
        'jumbotron_title' => $jumbotron_title,
        'jumbotron_detail' => $jumbotron_detail,
        'promo_title' => $promo_title,
        'promo_harga_mulai' => $promo_harga_mulai,
        'promo_paket_kredit' => $promo_paket_kredit,
        'promo_tenor_kerdit' => $promo_tenor_kerdit,
        'promo_detail' => $promo_detail,
        'informasi_spesifikasi' => $informasi_spesifikasi,
        'informasi_spesifikasi_status' => $informasi_spesifikasi_status,
        'keterangan_pembelian' => $keterangan_pembelian,
        'keterangan_pembelian_status' => $keterangan_pembelian_status,
        'status' => $status,
        'updated_at' => Date('Y-m-d H:i:s')
      ];

      $res_foto = true;
      // cek apakah ada foto yang dikirim
      if (!empty($_FILES)) {
        // simpan foto
        $save_file = $this->saveFile();
        // delete foto
        if ($return['jumbotron_foto'] != null) {
          $res_foto = $this->deleteFile($this->foto_path . $return['jumbotron_foto']);
        }
        $data['jumbotron_foto'] = $save_file['data'];
      }

      // update database
      // save database
      $this->db->where('id', $id);
      $res_data = $this->db->update('ktm_produk', $data);

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
    $return = $this->db->select('jumbotron_foto')->from('ktm_produk')->where('id', $id)->get()->row_array();
    if ($return != null) {
      $res_foto = null;
      // delete foto
      if ($return['jumbotron_foto'] != null) {
        $res_foto = $this->deleteFile($this->foto_path . $return['jumbotron_foto']);
      }

      // from database foto
      $res_data = $this->db->delete('ktm_produk', ['id' => $id]);
      return $res_foto == $res_data;
    } else {
      return false;
    }
  }

  public function get_list($id = null, $cari = null): ?array
  {
    $status_active = 1;
    $this->db->select("id, title, detail");
    $this->db->from('ktm_produk');
    $this->db->where('active', $status_active);
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
}
