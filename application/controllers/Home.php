<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('home');
    }

    public function rute()
    {
        $this->load->view('rute');    
    }

    public function kategori()
    {
        $this->load->view('kategori');
    }
    public function peta()
    {
        $this->load->view('peta');
    }
    public function radius()
    {
        $this->load->view('radius');
    }

}