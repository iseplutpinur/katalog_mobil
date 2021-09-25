<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NotFound extends CI_Controller
{
  public function index()
  {
    $data['title_page'] = "Produk";
    $this->load->view('front/temp/header', $data);
    $this->load->view('front/temp/notfound', $data);
    $this->load->view('front/temp/footer', $data);
    header("HTTP/1.1 404 Not Found");
  }
}
