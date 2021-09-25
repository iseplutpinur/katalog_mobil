<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mobil extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('MobilModel', 'mobil');
  }

  public function index($id_mobil = null)
  {
    $data = $this->mobil->getDisplayProduk($id_mobil);
    var_dump($data);
    die;
  }
}
