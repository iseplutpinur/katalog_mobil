<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardModel extends CI_Model
{
  public function getDataDashboard(): array
  {
    return [
      [
        'title' => 'Jumlah slider',
        'data' => $this->jumlah_slider(),
        'satuan' => 'Foto'
      ],
      [
        'title' => 'Jumlah Produk',
        'data' => $this->jumlah_produk(),
        'satuan' => 'Produk'
      ],
      [
        'title' => 'Jumlah daftar harga',
        'data' => $this->jumlah_daftar_harga(),
        'satuan' => 'Tipe'
      ],
      [
        'title' => 'Jumlah galeri',
        'data' => $this->jumlah_galeri(),
        'satuan' => 'Foto'
      ],
      [
        'title' => 'Jumlah interior',
        'data' => $this->jumlah_interior(),
        'satuan' => 'Foto'
      ],
      [
        'title' => 'Jumlah eksterior',
        'data' => $this->jumlah_eksterior(),
        'satuan' => 'Foto'
      ],
      [
        'title' => 'Jumlah warna',
        'data' => $this->jumlah_warna(),
        'satuan' => 'Foto'
      ],
      [
        'title' => 'Jumlah video',
        'data' => $this->jumlah_video(),
        'satuan' => 'Video'
      ],
    ];
  }

  private function jumlah_produk(): int
  {
    $return = $this->db
      ->select('count(*) as jumlah')
      ->from('ktm_produk')
      ->where('status <>', 2)
      ->get()->row_array();
    return $return['jumlah'];
  }

  private function jumlah_slider(): int
  {
    $return = $this->db
      ->select('count(*) as jumlah')
      ->from('ktm_slider')
      ->get()->row_array();
    return $return['jumlah'];
  }

  private function jumlah_galeri(): int
  {
    $return = $this->db
      ->select('count(*) as jumlah')
      ->from('ktm_galeri a')
      ->join('ktm_produk b', 'a.id_produk = b.id')
      ->where('b.status <>', 2)
      ->get()->row_array();
    return $return['jumlah'];
  }

  private function jumlah_video(): int
  {
    $return = $this->db
      ->select('count(*) as jumlah')
      ->from('ktm_video a')
      ->join('ktm_produk b', 'a.id_produk = b.id')
      ->where('b.status <>', 2)
      ->get()->row_array();
    return $return['jumlah'];
  }

  private function jumlah_warna(): int
  {
    $return = $this->db
      ->select('count(*) as jumlah')
      ->from('ktm_warna a')
      ->join('ktm_produk b', 'a.id_produk = b.id')
      ->where('b.status <>', 2)
      ->get()->row_array();
    return $return['jumlah'];
  }

  private function jumlah_daftar_harga(): int
  {
    $return = $this->db
      ->select('count(*) as jumlah')
      ->from('ktm_daftar_harga a')
      ->join('ktm_produk b', 'a.id_produk = b.id')
      ->where('b.status <>', 2)
      ->get()->row_array();
    return $return['jumlah'];
  }

  private function jumlah_eksterior(): int
  {
    $return = $this->db
      ->select('count(*) as jumlah')
      ->from('ktm_eksterior a')
      ->join('ktm_produk b', 'a.id_produk = b.id')
      ->where('b.status <>', 2)
      ->get()->row_array();
    return $return['jumlah'];
  }

  private function jumlah_interior(): int
  {
    $return = $this->db
      ->select('count(*) as jumlah')
      ->from('ktm_interior a')
      ->join('ktm_produk b', 'a.id_produk = b.id')
      ->where('b.status <>', 2)
      ->get()->row_array();
    return $return['jumlah'];
  }
}
