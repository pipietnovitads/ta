<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MPenyakit extends CI_Model
{
	public function getPenyakit()
	{
		$query = $this->db->get('penyakit');
		$data = $query->result_array();
		return $data;
	}

	public function tambahPenyakit($post)
	{
		$this->db->insert('penyakit', $post);
	}

	public function hapusPenyakit($id)
	{
		$this->db->where('id_penyakit', $id);
		$this->db->delete('penyakit');
	}

	public function ambilPenyakit($id)
	{
		$this->db->where('id_penyakit', $id);
		$query = $this->db->get('penyakit');
		$data = $query->row_array();
		return $data;
	}

	public function ubahPenyakit($inputan, $id)
	{
		$this->db->where('id_penyakit', $id);
		$this->db->update('penyakit', $inputan);
	}
}

/* End of file MPenyakit.php */
/* Location: ./application/models/MPenyakit.php */