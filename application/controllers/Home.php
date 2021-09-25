<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title_page'] = "Home";
        $this->load->view('front/temp/header', $data);
        $this->load->view('front/home', $data);
        $this->load->view('front/temp/footer', $data);
    }
}
