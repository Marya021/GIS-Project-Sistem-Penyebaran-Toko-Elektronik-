<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_model');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['kategori'] = $this->Kategori_model->dptKategori();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/kategori/kategori', $data, array('error' => ''));
        $this->load->view('admin/templates/footer');
    }

    public function tambah()
    {

        $this->form_validation->set_rules('nama_toko','Nama', 'required');
        $this->form_validation->set_rules('alamat_toko','Alamat', 'required');

        if($this->form_validation->run()==FALSE) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/kategori/tambah_kategori');
            $this->load->view('admin/templates/footer');

        } else {
            $this->upload();
            $this->Kategori_model->tambahKategori();
            $this->session->set_flashdata('flash', "Berhasil Ditambah!");  
            redirect('kategori');
            // var_dump($_FILES);
        }

    }

    public function hapus($id)
    {
        $this->Kategori_model->hapusKategori($id);
        $this->session->set_flashdata('flash', 'Berhasil Dihapus!');
        redirect('kategori');
    }

    public function ubah($id)
    {
        $data['kategori'] = $this->Kategori_model->dptKategoriById($id);

        $this->form_validation->set_rules('nama_toko','Nama', 'required');
        $this->form_validation->set_rules('alamat_toko','Alamat', 'required');

        if($this->form_validation->run()==FALSE) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/kategori/ubah_kategori', $data);
            $this->load->view('admin/templates/footer');

        } else {
            unlink("./uploads/".$data['kategori']['file']);
            $this->upload();
            $this->Kategori_model->ubahKategori();
            $this->session->set_flashdata('flash', "Berhasil Diubah!");  
            redirect('kategori');
            // var_dump($_FILES);
        }

    }

    public function upload()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            // $error = array('error' => $this->upload->display_errors());

            // $this->load->view('admin/pelanggan/tambah_pelanggan', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());

            // $this->load->view('admin/pelanggan/data_pelanggan', $data);
        }
    }

}