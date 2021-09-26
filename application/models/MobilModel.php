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

  public function getNavigation(): array
  {
    $return = $this->db->select('a.id, a.title as text')
      ->from('ktm_navigation b')
      ->join('ktm_produk a', 'a.id = b.id_produk')
      ->where('a.status', 1)
      ->where('b.status', 1)
      ->order_by('b.sort')
      ->get()->result_array();
    return $return ?? [];
  }

  public function getSlider(): array
  {
    $return = $this->db->select('a.id, a.title as text, a.foto as url, a.detail, a.sub_detail')
      ->from('ktm_slider a')
      ->where('a.status', 1)
      ->order_by('a.id')
      ->get()->result_array();
    return $return ?? [];
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
    $this->db->limit($limit);
    return $this->db->get()->result_array();
  }

  public function getListRecentGaleri(?int $limit = null): ?array
  {
    $limit = $limit ?? 9;
    $this->db->select('a.id, a.foto, a.title');
    $this->db->from('ktm_galeri a');
    $this->db->join('ktm_produk b', 'b.id = a.id_produk');
    $this->db->where('b.status', 1);
    $this->db->order_by('a.id', 'DESC');
    if ($limit != 0) {
      $this->db->limit($limit);
    }
    return $this->db->get()->result_array();
  }
}
