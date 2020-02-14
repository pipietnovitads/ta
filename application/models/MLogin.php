<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MLogin extends CI_Model 
{
 public function login($inputan)
 {
 	// user diambi dari form
 	$this->db->where('username_user', $inputan['user']);
 	$this->db->where('password_user', sha1($inputan['pass']));
 	$this->db->where('level_user', "Dokter");

 	$ambil = $this->db->get('user');
 	// menghitung hasil yang diambil
 	$hasil = $ambil->num_rows();
 	if ($hasil == 1) {
 		// yang dijadikan array adalah ambil yaitu data
 		$data = $ambil->row_array();
 		// membuat session yang bernama "dokter" dan isinya adalah $data
 		$this->session->set_userdata( "Dokter", $data);
 		return "dokter";
 	}else{
 		$this->db->where('username_user', $inputan['user']);
 		$this->db->where('password_user', sha1($inputan['pass']));
 		$this->db->where('level_user', "Perawat");

 		$ambil = $this->db->get('user');
 		$hasil = $ambil->num_rows();
 		if ($hasil == 1) {
 			$data = $ambil->row_array();
 			$this->session->set_userdata("Perawat", $data);
 			return "perawat";
 		}else{
 			return "gagal";
 		}
 	}
 }
	

}

/* End of file MLogin.php */
/* Location: ./application/models/MLogin.php */