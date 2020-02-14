<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MGejala extends CI_Model
{

	public function getGejala()
	{
		$this->db->order_by('nama_gejala', 'asc');
		$query = $this->db->get('gejala');
		$data = $query->result_array();
		return $data;
	}

	public function tambahGejala($post)
	{
		$this->db->insert('gejala', $post);
	}

	public function hapusGejala($id)
	{
		$this->db->where('id_gejala', $id);
		$this->db->delete('gejala');
	}

	public function ambilGejala($id)
	{
		$this->db->where('id_gejala', $id);
		$query = $this->db->get('gejala');
		$data = $query->row_array();
		return $data;
	}

	public function ubahGejala($inputan, $id)
	{
		$this->db->where('id_gejala', $id);
		$this->db->update('gejala', $inputan);
	}


// Nilai detail gejala
	public function detailGejala($id)
	{
		$this->db->join('gejala', 'gejala.id_gejala = detail_gejala.id_gejala', 'left');
		// kolom yang akan ditampilkan.kolom
		$this->db->where('detail_gejala.id_gejala', $id);
		$query = $this->db->get('detail_gejala');
		$data = $query->result_array();
		return $data;
	}

	public function tambahDetailGejala($post)
	{
		$this->db->insert('detail_gejala', $post);
	}

	public function hapusDetailGejala($id)
	{
		$this->db->where('id_detail_gejala', $id);
		$this->db->delete('detail_gejala');
	}

	public function ambilDetail($id)
	{
		$this->db->where('id_detail_gejala', $id);
		$query = $this->db->get('detail_gejala');
		$data = $query->row_array();
		return $data;
	}

	public function ubahDetail($inputan, $id)
	{
		$this->db->where('id_detail_gejala', $id);
		$this->db->update('detail_gejala', $inputan);
	}

}

/* End of file MGejala.php */
/* Location: ./application/models/MGejala.php */