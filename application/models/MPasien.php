<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MPasien extends CI_Model
{
    public function getPasien()
    {
        $query = $this->db->get('pasien');
        $data = $query->result_array();
        return $data;
    }

    public function tambahPasien($post)
    {
        // ambil data pasien 
        $this->db->order_by('id_pasien', 'desc');
        $ambil = $this->db->get('pasien', 1);
        if ($ambil->num_rows() == 0) {
            $post['nomer_pasien'] == "P001";
        }else{
            $data = $ambil->row_array();
            $kode_terakhir = $data['nomer_pasien'];
            // substr memotong angka p 001
            $angka_terakhir = substr($kode_terakhir, 1, 3);
            $angka_baru = $angka_terakhir + 1;
            // jumlah 001, depan harus 0
            $post['nomer_pasien'] = "P".str_pad($angka_baru, 3, 0, STR_PAD_LEFT);
        }
        $this->db->insert('pasien', $post);
    }

    public function hapusPasien($id)
    {
        $this->db->where('id_pasien', $id);
        $this->db->delete('pasien');
    }

    public function ambilPasien($id)
    {
        $this->db->where('id_pasien', $id);
        $query = $this->db->get('pasien');
        $data = $query->row_array();
        return $data;
    }

    public function ubahPasien($post, $id)
    {
        $this->db->where('id_pasien', $id);
        $this->db->update('pasien', $post);
    }
}