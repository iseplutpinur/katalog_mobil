<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AplikasiModel extends CI_Model
{
  public function getBackAttr(): ?array
  {
    // get
    $check = $this->db->select('*')->from('ktm_pengaturan_belakang')->where('id', 1)->get();
    if ($check->num_rows() > 0) {
      return $check->row_array();
    } else {
      $this->db->insert('ktm_pengaturan_belakang', ['id' => 1]);
      return $this->db->select('*')->from('ktm_pengaturan_belakang')->where('id', 1)->get()->row_array();
    }
  }

  public function update_tampilan(
    $nav_icon,
    $nav_icon_status,
    $logo_title,
    $copyright,
    $nav_time_status
  ) {
    $this->db->where('id', 1);
    return $this->db->update('ktm_pengaturan_belakang', [
      'nav_logo_value' => $nav_icon,
      'nav_logo_status' => $nav_icon_status,
      'nav_logo_title' => $logo_title,
      'copyright' => $copyright,
      'nav_time_status' => $nav_time_status,
    ]);
  }
  public function update_user($old_email,  $email, $password)
  {
    $this->db->where('email', $old_email);
    $this->session->set_userdata(['email' => $email]);
    return $this->db->update(
      'user',
      [
        'password' => password_hash($password, PASSWORD_DEFAULT),
        'email' => $email
      ]
    );
  }
}
