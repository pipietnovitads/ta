<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MHasil extends CI_Model {

public function ambilHasilDiagnosa($id_diagnosa)
{
	$this->db->join('penyakit', 'penyakit.id_penyakit = hasil.id_penyakit', 'left');
	$this->db->where('id_diagnosa', $id_diagnosa);
	$ambil = $this->db->get('hasil');
	return $ambil->result_array();
}
	
	public function tambahHasilDiagnosa($id_diagnosa, $inputan)
	{
		$inputan_baru['id_diagnosa'] = $id_diagnosa;
		foreach ($inputan as $id_penyakit => $nilai_hasil) {
			$inputan_baru['id_penyakit'] = $id_penyakit;
			$inputan_baru['nilai_hasil'] = $nilai_hasil;
			$this->db->insert('hasil', $inputan_baru);
		}
	}
}

/* End of file MHasil.php */
/* Location: ./application/models/MHasil.php */