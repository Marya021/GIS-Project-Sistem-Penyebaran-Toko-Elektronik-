<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peta extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peta_model');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['peta'] = $this->Peta_model->dptPeta();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/peta/peta', $data, array('error' => ''));
        $this->load->view('admin/templates/footer');
    
    }

    public function tambah()
    {

        $this->form_validation->set_rules('nama','Nama', 'required');
        $this->form_validation->set_rules('alamat','Alamat', 'required');
        $this->form_validation->set_rules('kategori','kategori', 'required');
        $this->form_validation->set_rules('lat','Lat', 'required|numeric');
        $this->form_validation->set_rules('lng','Lng', 'required|numeric');

        if($this->form_validation->run()==FALSE) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/peta/tambah_peta');
            $this->load->view('admin/templates/footer');

        } else {
            $this->upload();
            $this->Peta_model->tambahPeta();
            $this->session->set_flashdata('flash', "Berhasil Ditambah!");  
            redirect('peta');
        }

    }

    public function hapus($id)
    {
        $this->Peta_model->hapusPeta($id);
        $this->session->set_flashdata('flash', 'Berhasil Dihapus!');
        redirect('peta');
    }

    public function ubah($id)
    {
        $data['peta'] = $this->Peta_model->dptPetaById($id);

        $this->form_validation->set_rules('nama','Nama', 'required');
        $this->form_validation->set_rules('alamat','Alamat', 'required');
        $this->form_validation->set_rules('kategori','kategori', 'required');
        $this->form_validation->set_rules('lat','Lat', 'required|numeric');
        $this->form_validation->set_rules('lng','Lng', 'required|numeric');

        if($this->form_validation->run()==FALSE) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/peta/ubah_peta', $data);
            $this->load->view('admin/templates/footer');

        } else {
            unlink("./uploads/".$data['peta']['file']);
            $this->upload();
            $this->Peta_model->ubahPeta();
            $this->session->set_flashdata('flash', "Berhasil Diubah!");  
            redirect('peta');
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