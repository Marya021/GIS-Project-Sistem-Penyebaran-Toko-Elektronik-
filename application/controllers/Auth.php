<?php

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {

        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('masuk');

        } else {
            $this->_login();
        }
    }

    function logout()
    {
      $this->session->sess_destroy();
      redirect('home');
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $admin = $this->db->get_where('admin', ['email' => $email])->row_array();

        if($email=='admin@elektro.com' && $password=='admin123') {
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Email atau Password Salah</div>');
            redirect('auth');
        }
    }

    public function komentar()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('subjek', 'Subject', 'required|trim');
        $this->form_validation->set_rules('komentar', 'Pesan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('home');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'subjek' => $this->input->post('subjek'),
                'komentar' => $this->input->post('komentar')
            ];
            $this->db->insert('komentar', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil terkirim.</div>');
            redirect('home');
        }
    }

}