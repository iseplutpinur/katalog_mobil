<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mobil extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('MobilModel', 'model');
  }

  public function index($id_mobil = null)
  {
    // input
    $view = $this->input->get('view');

    $data['title_page'] = "Home";
    $data['navs'] = $this->model->getNavigation();
    $data['sliders'] = $this->model->getSlider();

    // get page data
    $data['mobil'] = $this->model->getDisplayProduk($id_mobil, $view);
    if ($data['mobil'] == null) {
      redirect('home');
      return;
    }

    $this->load->view('front/temp/header', $data);
    $this->load->view('front/produkDetail');
    // $this->load->view('front/home', $data);
    $this->load->view('front/temp/footer', $data);
  }
}
