<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NotFound extends CI_Controller
{
  public function index()
  {
    $this->load->model('MobilModel', 'model');
    $data['title_page'] = "Produk";
    $data['navs'] = $this->model->getNavigation();
    $this->load->view('front/temp/header', $data);
    $this->load->view('front/temp/notfound', $data);
    $this->load->view('front/temp/footer', $data);
    header("HTTP/1.1 404 Not Found");
  }
}
