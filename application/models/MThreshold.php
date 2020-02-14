<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MThreshold extends CI_Model {

	public function getThreshold()
	{
		$ambil = $this->db->get('threshold');
		return $ambil->row_array();
	}

	public function ambilThreshold($id_threshold)
	{
		$this->db->where('id_threshold', $id_threshold);
		$query = $this->db->get('threshold');
		return $query->row_array();
	}

	public function ubahThreshold($inputan, $id_threshold)
	{
		$this->db->where('id_threshold', $id_threshold);
		$this->db->update('threshold', $inputan);
	}
	

}

/* End of file MThreshold.php */
/* Location: ./application/models/MThreshold.php */