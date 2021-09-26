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
    $data['title_page'] = "Produk";
    // get page data
    $data['mobil'] = $this->model->getDisplayProduk($id_mobil, $view);
    if ($data['mobil'] == null) {
      redirect('home');
      return;
    }

    $data['title_page'] = $data['mobil']['produk']['title'];
    $data['attr'] = $this->model->getFrontAttr();
    $data['navs'] = $this->model->getNavigation();
    $data['testimoni'] = $this->model->getListTestimonial();
    $data['sales'] = $this->model->getListSales();
    $data['products'] = $this->model->getListRecentProduct();

    $this->load->view('front/temp/header', $data);
    $this->load->view('front/produkDetail');
    // $this->load->view('front/home', $data);
    $this->load->view('front/temp/footer', $data);
  }
}
