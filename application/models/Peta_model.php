<?php

class Peta_model extends CI_Model {

    public function dptPeta()
    {
        $query = $this->db->query("SELECT * FROM peta")->result_array();
        return $query;
    }
    
    public function tambahPeta()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "kategori" => $this->input->post('kategori', true),
            "lat" => $this->input->post('lat', true),
            "lng" => $this->input->post('lng', true),
            "file" => $_FILES['file']['name'],
        ];

        $this->db->insert('peta', $data);
    }

    public function hapusPeta($id)
    {
        $this->db->delete('peta', ['id' => $id]);
    }

    public function dptPetaById($id)
    {
        return $this->db->get_where('peta', ['id' => $id])->row_array();
    }

    public function ubahPeta()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "kategori" => $this->input->post('kategori', true),
            "lat" => $this->input->post('lat', true),
            "lng" => $this->input->post('lng', true),
            "file" => $_FILES['file']['name'],
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('peta', $data);
    }

    public function hitungPeta()
    {
        $query = $this->db->get('peta');
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