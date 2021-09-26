<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  public function index()
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['title_page'] = "Edit Profile";
    $data['nav_select'] = 'nav-profile';
    $data['javascript'] = "admin/user/profile";
    $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    if ($this->form_validation->run() == false) {
      $this->load->view('admin/sitemain/header', $data);
      $this->load->view('admin/user/profile', $data);
      $this->load->view('admin/sitemain/footer');
    } else {
      $id = $this->input->post('id');
      $name = $this->input->post('name');

      $file_upload = $_FILES['image'];
      if ($file_upload['name'] != '') {
        $config['upload_path'] = './assets/img/profile/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2000';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
          $old_image = $data['user']['image'];
          if ($old_image != 'default.png') {
            unlink(FCPATH . 'assets/img/profile/' . $old_image);
          }
          $new_image = $this->upload->data('file_name');
          $this->db->set('image', $new_image);
        } else {
          $this->Flasher_model->flashdata($this->upload->display_errors(), 'Failed', 'danger');
          redirect('user/edit');
        }
      }
      $this->db->set('name', $name);
      $this->db->where('id', $id);
      $this->db->update('user');
      $this->Flasher_model->flashdata('Your profile has been updated', 'Success', 'success');
      redirect('user');
    }
  }
}
