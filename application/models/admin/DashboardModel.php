<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardModel extends CI_Model
{
  public function getDataDashboard(): array
  {
    $kunjungan = $this->jumlahVisited();
    return [
      [
        'title' => 'Jumlah slider',
        'data' => $this->jumlah_slider(),
        'satuan' => 'Foto'
      ], [
        'title' => 'Jumlah Produk',
        'data' => $this->jumlah_produk(),
        'satuan' => 'Produk'
      ], [
        'title' => 'Jumlah daftar harga',
        'data' => $this->jumlah_daftar_harga(),
        'satuan' => 'Tipe'
      ], [
        'title' => 'Jumlah galeri',
        'data' => $this->jumlah_galeri(),
        'satuan' => 'Foto'
      ], [
        'title' => 'Jumlah interior',
        'data' => $this->jumlah_interior(),
        'satuan' => 'Foto'
      ], [
        'title' => 'Jumlah eksterior',
        'data' => $this->jumlah_eksterior(),
        'satuan' => 'Foto'
      ], [
        'title' => 'Jumlah warna',
        'data' => $this->jumlah_warna(),
        'satuan' => 'Foto'
      ], [
        'title' => 'Jumlah video',
        'data' => $this->jumlah_video(),
        'satuan' => 'video'
      ], [
        'title' => 'Jumlah sales',
        'data' => $this->jumlah_sales(),
        'satuan' => 'Sales'
      ], [
        'title' => 'Jumlah testimoni',
        'data' => $this->jumlah_testimoni(),
        'satuan' => 'Testimoni'
      ], [
        'title' => 'Jumlah Jumbotron',
        'data' => $this->jumlah_jumbotron(),
        'satuan' => 'Display'
      ], [
        'title' => 'Jumlah User',
        'data' => $this->jumlah_users(),
        'satuan' => 'Akun'
      ],[
        'title' => 'Kunjungan Hari ini',
        'data' => $kunjungan['hari'],
        'satuan' => 'Pengunjung'
      ],[
        'title' => 'Kunjungan Minggu ini',
        'data' => $kunjungan['minggu'],
        'satuan' => 'Pengunjung'
      ],[
        'title' => 'Kunjungan Bulan ini',
        'data' => $kunjungan['bulan'],
        'satuan' => 'Pengunjung'
      ],[
        'title' => 'Total Kunjungan',
        'data' => $kunjungan['total'],
        'satuan' => 'Pengunjung'
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

  private function jumlah_jumbotron(): int
  {
    $return = $this->db
      ->select('count(*) as jumlah')
      ->from('ktm_jumbotron')
      ->get()->row_array();
    return $return['jumlah'];
  }

  private function jumlah_sales(): int
  {
    $return = $this->db
      ->select('count(*) as jumlah')
      ->from('ktm_sales')
      ->get()->row_array();
    return $return['jumlah'];
  }

  private function jumlah_testimoni(): int
  {
    $return = $this->db
      ->select('count(*) as jumlah')
      ->from('ktm_testimoni')
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

  private function jumlah_users(): int
  {
    $return = $this->db
      ->select('count(*) as jumlah')
      ->from('user a')
      ->get()->row_array();
    return $return['jumlah'];
  }
  
  public function jumlahVisited()
  {
      $total = $this->db->query("SELECT SUM(jumlah) AS jumlah FROM visited")->row_array();
      $hari = $this->db->query("SELECT SUM(jumlah) AS jumlah FROM visited WHERE tanggal = DATE(NOW())")->row_array();
      $minggu = $this->db->query("SELECT SUM(jumlah) AS jumlah FROM visited WHERE tanggal BETWEEN DATE_ADD(NOW(), INTERVAL -7 DAY) AND DATE(NOW())")->row_array();
      $bulan = $this->db->query("SELECT SUM(jumlah) AS jumlah FROM visited WHERE tanggal BETWEEN DATE_ADD(NOW(), INTERVAL -30 DAY) AND DATE(NOW())")->row_array();
      $result = [
          "total" => $total['jumlah'],
          "hari" => $hari['jumlah'],
          "minggu" => $minggu['jumlah'],
          "bulan" => $bulan['jumlah'],
      ];
      
      return $result;
  }
}
