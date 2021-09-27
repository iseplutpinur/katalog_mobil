<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DepanModel extends CI_Model
{
  public function insert_logo()
  {

    // insert logo white
    $white = true;
    $logo_white = '';
    $config['upload_path']          = './files/front/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|PNG|JPEG';
    $config['file_name']            = 'white';
    $config['overwrite']            = true;
    $config['max_size']             = 8024;
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if ($this->upload->do_upload('light')) {
      $logo_white = $this->upload->data("file_name");
    } else {
      $white = false;
    }

    $dark = true;
    $logo_dark = '';
    $config['upload_path']          = './files/front/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|PNG|JPEG';
    $config['file_name']            = 'dark';
    $config['overwrite']            = true;
    $config['max_size']             = 8024;
    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if ($this->upload->do_upload('dark')) {
      $logo_dark = $this->upload->data("file_name");
    } else {
      $dark = false;
    }

    $data = [];
    if ($logo_white != '') {
      $data['logo_white'] = $logo_white;
    }
    if ($logo_dark != '') {
      $data['logo_dark'] = $logo_dark;
    }

    if (!empty($data)) {
      $this->db->where('id', 1);
      $this->db->update('ktm_pengaturan_depan', $data);
    }

    return $white && $dark;
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

  public function insert_galeri($title, $value)
  {
    $this->db->where('id', 1);
    $return = $this->db->update('ktm_pengaturan_depan', [
      'galeri_title' => $title,
      'galeri_value' => $value,
    ]);
    return $return;
  }

  public function insert_video($title, $value)
  {
    $this->db->where('id', 1);
    $return = $this->db->update('ktm_pengaturan_depan', [
      'video_title' => $title,
      'video_value' => $value,
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
