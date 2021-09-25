<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title_page'] = "Produk";
        $this->load->view('front/temp/header', $data);
        $this->load->view('front/home', $data);
        $this->load->view('front/temp/footer', $data);
    }

    public function detail($produk = null)
    {
        $data['title_page'] = $produk;
        $this->load->view('front/temp/header', $data);
        $this->load->view('front/produkDetail', $data);
        $this->load->view('front/temp/footer', $data);
    }
}
