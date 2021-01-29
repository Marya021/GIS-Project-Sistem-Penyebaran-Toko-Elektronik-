<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Komentar extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Komentar_model');
    }

    public function index()
    {
        $data['komentar'] = $this->Komentar_model->dptKomentar();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/komentar/komentar', $data);
        $this->load->view('admin/templates/footer');
    }

    public function hapus($id)
    {
        $this->Komentar_model->hapusKomentar($id);
        $this->session->set_flashdata('flash', 'Berhasil Dihapus!');
        redirect('komentar');
    }

}