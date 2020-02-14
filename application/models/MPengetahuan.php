<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MPengetahuan extends CI_Model
{

	public function getPengetahuan()
	{
		$this->db->join('penyakit', 'penyakit.id_penyakit = pengetahuan.id_penyakit', 'left');
		$query = $this->db->get('pengetahuan');
		$data = $query->result_array();
		return $data;
	}

	public function tambahPengetahuan($post)
	{
		// ambil data terakhir 
		$this->db->order_by('id_pengetahuan', 'desc');
		$ambil = $this->db->get('pengetahuan', 1);
		if ($ambil->num_rows() == 0) {
			$post['nama_pengetahuan'] = "R1";
		}else{
			$data = $ambil->row_array();
			$kode_terakhir = $data['nama_pengetahuan'];
			$angka_terakhir = substr($kode_terakhir, 1);
			$angka_baru = $angka_terakhir+1;
			$post['nama_pengetahuan'] = "R".$angka_baru;
		}
		$this->db->insert('pengetahuan', $post);
	}

	public function hapusPegetahuan($id)
	{
		$this->db->where('id_pengetahuan', $id);
		$this->db->delete('pengetahuan');
	}

	public function ambilPengetahuan($id)
	{
		$this->db->where('id_pengetahuan', $id);
		$query = $this->db->get('pengetahuan');
		$data = $query->row_array();
		return $data;
	}

	public function ubahPengetahuan($inputan, $id)
	{
		$this->db->where('id_pengetahuan', $id);
		$this->db->update('pengetahuan', $inputan);
	}

	public function getDetail($id)
	{
	 	$this->db->join('pengetahuan', 'pengetahuan.id_pengetahuan = detail_pengetahuan.id_pengetahuan', 'left');
	 	$this->db->join('gejala', 'gejala.id_gejala = detail_pengetahuan.id_gejala', 'left');
	 	$this->db->where('detail_pengetahuan.id_pengetahuan', $id);

	 	$query = $this->db->get('detail_pengetahuan');
	 	$data = $query->result_array();
	 	return $data;
	}

	public function hapusDetail($id)
	{
		$this->db->where('id_detail_pengetahuan', $id);
		$this->db->delete('detail_pengetahuan');
	}

	public function ambilDetail($id)
	{
		$this->db->where('id_detail_pengetahuan', $id);
		$query = $this->db->get('detail_pengetahuan');
		$data = $query->row_array();
		return $data;
	}

	public function ubahDetail($inputan, $id)
	{
		$this->db->where('id_detail_pengetahuan', $id);
		$this->db->update('detail_pengetahuan', $inputan);
	}

	public function tambahDetail($post)
	{
		$this->db->insert('Detail_pengetahuan', $post);
	}
	
}

/* End of file MPengetahuan.php */
/* Location: ./application/models/MPengetahuan.php */