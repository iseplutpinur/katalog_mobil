<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DepanModel extends CI_Model
{
  public function insert_logo()
  {
    return true;
  }

  public function insert_email($icon, $title, $value, $status)
  {
    $this->db->where('id', 1);
    $return = $this->db->update('ktm_pengaturan_depan', [
      'email_icon' => $icon,
      'email_title' => $title,
      'email_value' => $value,
      'email_status' => $status,
    ]);
    return $return;
  }

  public function insert_service($icon, $title, $value, $status)
  {
    $this->db->where('id', 1);
    $return = $this->db->update('ktm_pengaturan_depan', [
      'service_icon' => $icon,
      'service_title' => $title,
      'service_value' => $value,
      'service_status' => $status,
    ]);
    return $return;
  }

  public function insert_call($icon, $title, $value, $status)
  {
    $this->db->where('id', 1);
    $return = $this->db->update('ktm_pengaturan_depan', [
      'call_icon' => $icon,
      'call_title' => $title,
      'call_value' => $value,
      'call_status' => $status,
    ]);
    return $return;
  }

  public function insert_copyright($value, $status)
  {
    $this->db->where('id', 1);
    $return = $this->db->update('ktm_pengaturan_depan', [
      'copyright_value' => $value,
      'copyright_status' => $status,
    ]);
    return $return;
  }

  public function insert_no_telp($value, $status)
  {
    $this->db->where('id', 1);
    $return = $this->db->update('ktm_pengaturan_depan', [
      'no_telp_value' => $value,
      'no_telp_status' => $status,
    ]);
    return $return;
  }

  public function insert_foot_email($value, $status)
  {
    $this->db->where('id', 1);
    $return = $this->db->update('ktm_pengaturan_depan', [
      'foot_email_value' => $value,
      'foot_email_status' => $status,
    ]);
    return $return;
  }

  public function insert_alamat($value, $status)
  {
    $this->db->where('id', 1);
    $return = $this->db->update('ktm_pengaturan_depan', [
      'alamat_value' => $value,
      'alamat_status' => $status,
    ]);
    return $return;
  }

  public function insert_katalog($title, $value)
  {
    $this->db->where('id', 1);
    $return = $this->db->update('ktm_pengaturan_depan', [
      'katalog_title' => $title,
      'katalog_value' => $value,
    ]);
    return $return;
  }

  public function insert_testimoni($title, $value)
  {
    $this->db->where('id', 1);
    $return = $this->db->update('ktm_pengaturan_depan', [
      'testimoni_title' => $title,
      'testimoni_value' => $value,
    ]);
    return $return;
  }

  public function insert_kontak($title, $value)
  {
    $this->db->where('id', 1);
    $return = $this->db->update('ktm_pengaturan_depan', [
      'kontak_title' => $title,
      'kontak_value' => $value,
    ]);
    return $return;
  }
}
