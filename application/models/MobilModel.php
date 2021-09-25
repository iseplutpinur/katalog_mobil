<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MobilModel extends CI_Model
{
  public function getDisplayProduk($id_produk): array
  {
    $produk = $this->db->select('*')->from('ktm_produk')->where('id', $id_produk)->get()->row_array();
    $daftar_harga = $this->db->select('*')->from('ktm_daftar_harga')->where('id_produk', $id_produk)->get()->result_array();
    $eksterior = $this->db->select('*')->from('ktm_eksterior')->where('id_produk', $id_produk)->get()->result_array();
    $interior = $this->db->select('*')->from('ktm_interior')->where('id_produk', $id_produk)->get()->result_array();
    $galeri = $this->db->select('*')->from('ktm_galeri')->where('id_produk', $id_produk)->get()->result_array();
    $video = $this->db->select('*')->from('ktm_video')->where('id_produk', $id_produk)->get()->result_array();
    $warna = $this->db->select('*')->from('ktm_warna')->where('id_produk', $id_produk)->get()->result_array();

    return [
      'produk' => $produk,
      'daftar_harga' => $daftar_harga,
      'eksterior' => $eksterior,
      'interior' => $interior,
      'galeri' => $galeri,
      'video' => $video,
      'warna' => $warna,
    ];
  }
}
