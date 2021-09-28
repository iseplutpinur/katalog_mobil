<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MobilModel', 'model');
        $this->load->model('Home_model', 'homes');
    }

    public function index()
    {
        $data['attr'] = $this->model->getFrontAttr();
        $data['title_page'] = "Home";
        $data['navs'] = $this->model->getNavigation();
        $data['sliders'] = $this->model->getSlider();
        $data['jumbotrons'] = $this->model->getJubmotron();
        $get = $this->model->dataFooter();
        $data = array_merge($data, $get);

        $ip = $this->get_client_ip();
        $this->homes->visited($ip);


        $this->load->view('front/temp/header', $data);
        $this->load->view('front/home', $data);
        $this->load->view('front/temp/footer', $data);
    }

    // function get ip
    function get_client_ip() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   //check ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {   //to check ip is pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

}
