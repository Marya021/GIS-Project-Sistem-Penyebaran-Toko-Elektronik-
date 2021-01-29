<?php

class Komentar_model extends CI_Model {

    public function dptKomentar()
    {
        return $this->db->get('komentar')->result_array();
    }

    public function hapusKomentar($id)
    {
        $this->db->delete('komentar', ['id' => $id]);
    }

    public function hitungKomentar()
    {
        $query = $this->db->get('komentar');
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