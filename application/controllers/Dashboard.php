<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peta_model');
        $this->load->model('Komentar_model');
    }

    public function index()
    {
        $data['total_peta'] = $this->Peta_model->hitungPeta();
        $data['total_komentar'] = $this->Komentar_model->hitungKomentar();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/dashboard/index', $data);
        $this->load->view('admin/templates/footer');
    }

}