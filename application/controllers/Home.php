<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MobilModel', 'model');
    }

    public function index()
    {
        $data['title_page'] = "Home";
        $data['navs'] = $this->model->getNavigation();
        $data['sliders'] = $this->model->getSlider();
        $get = $this->model->dataFooter();
        $data = array_merge($data, $get);
        // var_dump($data);
        // die;
        $this->load->view('front/temp/header', $data);
        $this->load->view('front/home', $data);
        $this->load->view('front/temp/footer', $data);
    }
}
