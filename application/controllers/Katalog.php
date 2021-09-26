<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Katalog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MobilModel', 'model');
    }

    public function index()
    {
        $data['navs'] = $this->model->getNavigation();
        $data['title_page'] = "Katalog Harga";
        $this->load->view('front/temp/header', $data);
        $this->load->view('front/katalog', $data);
        $this->load->view('front/temp/footer', $data);
    }
}
