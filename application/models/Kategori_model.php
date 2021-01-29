<?php

class Kategori_model extends CI_Model {

    public function dptKategori()
    {
        $query = $this->db->query("SELECT * FROM kategori")->result_array();
        return $query;
    }
    
    public function tambahKategori()
    {
        $data = [
            "nama_toko" => $this->input->post('nama_toko', true),
            "alamat_toko" => $this->input->post('alamat_toko', true),
        ];

        $this->db->insert('kategori', $data);
    }

    public function hapusKategori($id)
    {
        $this->db->delete('kategori', ['id' => $id]);
    }

    public function dptKategoriById($id)
    {
        return $this->db->get_where('kategori', ['id' => $id])->row_array();
    }

    public function ubahKategori()
    {
        $data = [
            "nama_toko" => $this->input->post('nama_toko', true),
            "alamat_toko" => $this->input->post('alamat_toko', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('kategori', $data);
    }

    public function hitungKategori()
    {
        $query = $this->db->get('kategori');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        }
        else
        {
            return 0;
        }
    }

}