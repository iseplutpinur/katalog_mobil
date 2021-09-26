<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MobilModel extends CI_Model
{
  public function getDisplayProduk($id_produk, $view = null): ?array
  {
    $produk = $this->db->select('*')
      ->from('ktm_produk')
      ->where('id', $id_produk);
    if ($view != 1) {
      $produk = $produk->where('status', 1);
    }
    $produk = $produk->get()->row_array();
    if ($produk == null) {
      return null;
    }

    $daftar_harga = $this->db->select('*')
      ->from('ktm_daftar_harga')
      ->where('id_produk', $id_produk)
      ->get()->result_array();
    $eksterior = $this->db->select('*')
      ->from('ktm_eksterior')
      ->where('id_produk', $id_produk)
      ->get()->result_array();
    $interior = $this->db->select('*')
      ->from('ktm_interior')
      ->where('id_produk', $id_produk)
      ->get()->result_array();
    $galeri = $this->db->select('*')
      ->from('ktm_galeri')
      ->where('id_produk', $id_produk)
      ->get()->result_array();
    $video = $this->db->select('*')
      ->from('ktm_video')
      ->where('id_produk', $id_produk)
      ->get()->result_array();
    $warna = $this->db->select('*')
      ->from('ktm_warna')
      ->where('id_produk', $id_produk)
      ->get()->result_array();

    return [
      'produk' => $produk,
      'daftar_harga' => $daftar_harga,
      'eksterior' => $eksterior,
      'interior' => $interior,
      'galeri' => $galeri,
      'video' => $video,
      'warna' => $warna,
      'list_produk' => $this->getListRecentProduct()
    ];
  }

  public function getNavigation(): ?array
  {
    $return = $this->db->select('a.id, a.title as text')
      ->from('ktm_navigation b')
      ->join('ktm_produk a', 'a.id = b.id_produk')
      ->where('a.status', 1)
      ->where('b.status', 1)
      ->order_by('b.sort')
      ->get()->result_array();
    return $return;
  }

  public function getSlider(): ?array
  {
    $return = $this->db->select('a.id, a.title as text, a.foto as url, a.detail, a.sub_detail')
      ->from('ktm_slider a')
      ->where('a.status', 1)
      ->order_by('a.id')
      ->get()->result_array();
    return $return;
  }

  public function getJubmotron(): ?array
  {
    $return = $this->db->select('a.id, a.title as text, a.foto as url, a.detail, a.sub_detail, a.sub_judul')
      ->from('ktm_jumbotron a')
      ->where('a.status', 1)
      ->order_by('a.id')
      ->get()->result_array();
    return $return;
  }

  public function getListRecentProduct(?int $limit = null): ?array
  {
    $limit = $limit ?? 9;
    $this->db->select('id,
    jumbotron_foto as foto,
    title,
    promo_harga_mulai as harga_mulai,
    promo_paket_kredit as paket_kredit');
    $this->db->from('ktm_produk');
    $this->db->where('status', 1);
    $this->db->order_by('id', 'DESC');
    if ($limit != 0) {
      $this->db->limit($limit);
    }
    return $this->db->get()->result_array();
  }

  public function getListTestimonial(): ?array
  {
    $this->db->select('*');
    $this->db->from('ktm_testimoni');
    $this->db->where('status', 1);
    $this->db->order_by('id', 'DESC');
    return $this->db->get()->result_array();
  }

  public function getListSales(): ?array
  {
    $this->db->select('*');
    $this->db->from('ktm_sales');
    $this->db->where('status', 1);
    $this->db->order_by('id', 'DESC');
    return $this->db->get()->result_array();
  }

  public function getListRecentGaleri(?int $limit = null, $view = null): ?array
  {
    $limit = $limit ?? 9;
    $this->db->select('a.id, a.foto, a.title');
    $this->db->from('ktm_galeri a');
    $this->db->join('ktm_produk b', 'b.id = a.id_produk');
    $this->db->where('a.status', 1);
    if ($view != 1) {
      $this->db->where('b.status', 1);
    }
    $this->db->order_by('a.id', 'DESC');
    if ($limit != 0) {
      $this->db->limit($limit);
    }
    return $this->db->get()->result_array();
  }

  public function getListRecentVideo(?int $limit = null, $view = null): ?array
  {
    $limit = $limit ?? 9;
    $this->db->select('a.id, a.url, a.title');
    $this->db->from('ktm_video a');
    $this->db->join('ktm_produk b', 'b.id = a.id_produk');
    $this->db->where('a.status', 1);
    if ($view != 1) {
      $this->db->where('b.status', 1);
    }
    $this->db->order_by('a.id', 'DESC');
    if ($limit != 0) {
      $this->db->limit($limit);
    }
    return $this->db->get()->result_array();
  }

  public function dataFooter(): array
  {
    return [
      'galeris' => $this->getListRecentGaleri(),
      'videos' => $this->getListRecentVideo(),
      'testimoni' => $this->getListTestimonial(),
      'sales' => $this->getListSales(),
      'products' => $this->getListRecentProduct(),
    ];
  }

  public function getFrontAttr(): ?array
  {
    // get
    $check = $this->db->select('*')->from('ktm_pengaturan_depan')->where('id', 1)->get();
    if ($check->num_rows() > 0) {
      return $check->row_array();
    } else {
      $this->db->insert('ktm_pengaturan_depan', ['id' => 1]);
      return $this->db->select('*')->from('ktm_pengaturan_depan')->where('id', 1)->get()->row_array();
    }
  }
}
