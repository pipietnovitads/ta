<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MDiagnosa extends CI_Model {

	public function tambahDiagnosa($post)
	{
		// memasukan ketabel diagnosa
		// mengambil id pasien yang diinputkan
		$inputan_diagnosa['id_pasien'] = $post['id_pasien'];
		// session dari login 
		$data_user = $this->session->userdata("Perawat");
		$inputan_diagnosa['id_user'] = $data_user['id_user'];
		$inputan_diagnosa['tgl_diagnosa'] = date('Y-m-d');
		$this->db->insert('diagnosa', $inputan_diagnosa);

		// insert kehalaman detail diagnosa
		// id yang baru saja dimasukan menggunakan insert_id
		$inputan_detail['id_diagnosa'] = $this->db->insert_id();
		// perulangan mengambil nilai detail 
		foreach ($post['id_detail'] as $inputan_detail['id_gejala'] => $inputan_detail['nilai_detail_diagnosa']) {
			$this->db->insert('detail_diagnosa', $inputan_detail);
		}
		//direturn kan untuk dilakukan perhitugan
		return $inputan_detail['id_diagnosa'];
	}

	public function ambil_detail_diagnosa($id_diagnosa)
	{
		// gejala
		$this->db->join('gejala', 'gejala.id_gejala = detail_diagnosa.id_gejala', 'left');
		$this->db->where('id_diagnosa', $id_diagnosa);
		// tabel detail diagnosa
		$ambil = $this->db->get('detail_diagnosa');
		return $ambil->result_array();
	}

	public function ambil_diagnosa($id_diagnosa)
	{
		$this->db->join('pasien', 'pasien.id_pasien = diagnosa.id_pasien', 'left');
		// $this->db->join('detail_diagnosa', 'detail_diagnosa.id_detail_diagnosa = diagnosa.id_', 'left');
		$this->db->where('diagnosa.id_diagnosa', $id_diagnosa);
		$ambil = $this->db->get('diagnosa');
		return $ambil->row_array();
	}

	public function ambil_diagnosa_pasien($id_pasien)
	{
		$this->db->join('pasien', 'pasien.id_pasien = diagnosa.id_pasien', 'left');
		$this->db->join('user', 'user.id_user = diagnosa.id_user', 'left');
		$this->db->where('diagnosa.id_pasien', $id_pasien);
		$ambil = $this->db->get('diagnosa');
		return $ambil->result_array();
	}

	public function hitung($id_diagnosa)
	{
		// mengambil semua data detail diagnosa, seperti id detail diagnosa (beda), id diagnosa (sama), id_gejala, nilai , nama gejala
		$detail_diagnosa = $this->ambil_detail_diagnosa($id_diagnosa);


		// mengelompokan data inputan 
		foreach ($detail_diagnosa as $key => $value) {
			// mengelompokan nilai dari inputan perawat : [id_gejala] = [nilai diagnosa inputan]
			$nilai_gejala_diagnosa[$value['id_gejala']] = $value['nilai_detail_diagnosa'];
			// mengelompokan id gejala dari perawat : [0] = [id_gejala inputan]
			$id_gejala_diagnosa[] = $value['id_gejala'];
		}

		// mengambil data penyakit yang mengandung inputan gejala
		$this->load->model('MPengetahuan');
		$pengetahuan = $this->MPengetahuan->getPengetahuan();

		// ini pengelompokan data dari pengetahuan 
		foreach ($pengetahuan as $key_p => $value_p) {
			// mengambil nilai cf di pengetahuan
			$cf_pengetahuan[$value_p['id_pengetahuan']] = $value_p['cf_pengetahuan'];
			// mengambil id penyakit di pengetahuan [3] = penyakit[1] 
			$penyakit_pengetahuan[$value_p['id_pengetahuan']] = $value_p['id_penyakit'];
			// mengambil semua gejala di tiap pengetahuan (perpengatahuan) 
			$detail = $this->MPengetahuan->getDetail($value_p['id_pengetahuan']);
			// proses mengambil pengetahuan yang gejalanya hanya ada diinputan misal inputan 123 maka akan mengambil pengetahuan data yang mengandung gejala 123
			foreach ($detail as $key_dp => $value_dp) {
				// in_array adalah fungsi untuk membandingkan string dengan array 
				// pengetahuan yang ada gejala inputan 
				if (in_array($value_dp['id_gejala'], $id_gejala_diagnosa)) {
					$data_pengetahuan[$key_p] = $value_p['id_pengetahuan'];
				}
			}

		}
		
		
		// mengelompokan gejala di tiap penyakit, dari if atas.
		foreach ($data_pengetahuan as $key_p => $id_pengetahuan) {
			$detail = $this->MPengetahuan->getDetail($id_pengetahuan);
			foreach ($detail as $key_dp => $value_dp) {
				// mendapatkan id gejala 
				$id_gejala = $value_dp['id_gejala'];
				// mengelompokan gejala per perngetahuan yang isinya status 
				$nilai_gejala_pengetahuan[$id_pengetahuan][$id_gejala] = $value_dp['status_pengetahuan'];
				// mengambil id gejala ditiap pengetahuan 
				$id_gejala_pengetahuan[$id_pengetahuan][] = $id_gejala;
				// jika gejalanya ada diinputan perawat, maka diisi inputan tersebut
				// jika tidak maka isinya 0 
				if (isset($nilai_gejala_diagnosa[$id_gejala])) {
					$nilai_inputan[$id_pengetahuan][$id_gejala] = $nilai_gejala_diagnosa[$id_gejala];
				}else{
					$nilai_inputan[$id_pengetahuan][$id_gejala] = 0;
				}
		
			}
		}
		// echo "<pre>";
		// print_r ($nilai_inputan);
		// echo "</pre>";

		// mencari apakah 1 pengetahuan memiliki AND+OR atau AND saja atau or saja 
		foreach ($nilai_gejala_pengetahuan as $id_pengetahuan => $value_p) {
			// jika and or maka 
			if (in_array("AND", $value_p) AND in_array("OR", $value_p)) {
				// mencari apakah ada yang beda
				// array_diff digunakan untuk membandingkan gejala dipengetahuan dengan gejala inputan perawat, lalu menghasilkan gejala dipengatahuan yang berbeda dengan perawat
				$banding = array_diff($id_gejala_pengetahuan[$id_pengetahuan], $id_gejala_diagnosa);

				// jika sama semua maka nilainya ya
				// jika tidak maka dicek lagi
				// kalo or gak ada tetep ditampilin, kalo and gak ada maka gak sesuai
				// ngecek and dan or
				if (empty($banding)) {
					$munculkan = "ya";
				}else{
					foreach ($value_p as $key_s => $value_s) {
						$x[] = $key_s." ".$value_s;
					}

					// implode untuk membuat array menjadi string 

					$w = implode($x, " ");

					//substr untuk memotong string agar tulisannya hilang, dihitungnnya mulai dari 0,-1,-2...
					$y = substr($w, 0, -5); 

			 		// explode mengubah string menjadi array
					$q = explode(" ", $y);

			 		// memecah aturan 
			 		// ini memecah and dan or di jodoh,jodohkan
					foreach ($q as $key_q => $value_q) {
						if ($key_q % 2 !== 0) {
							$kurang = $key_q - 1;
							$tambah = $key_q + 1;

							$v[$key_q][0] = $q[$kurang];
							$v[$key_q][1] = $q[$key_q];
							$v[$key_q][2] = $q[$tambah];

						}
					}

			 	// memutuskan apakah pengetahuan tersebut akan dihitung atau tidak
					foreach ($v as $key_v => $value_v) {
						if ($value_v[1]=="AND") {
			 			// jika pengetahuan and tersebut ada yang bernilai 0 maka pengetahuan tersebut tidak dijalankan 
							if (in_array($value_v[0], $banding) OR in_array($value_v[2], $banding)) {
								$munculkan = "tidak";
								break;
							}
						}elseif ($value_v[1] == "OR") {
			 			// jika pada operator or ada yang bernilai 0 maka akan tetap dijalankan 
							if (in_array($value_v[0], $banding) OR -in_array($value_v[2], $banding)) {
								$munculkan = "ya";
							}
						}
					}
				}

				if ($munculkan=="ya") {
					// menatukan gejala dan status 
					foreach ($value_p as $id_gejala => $status) {
						$aa[] = $id_gejala."".$status;
					}

					// menggabungkan semua gejala dan status 
					$bb = implode($aa, "");
					// menghilangkan then 
					$cc = substr($bb, 0, -4);
					// memecah data yang mengandung or
					$dd = explode("OR", $cc);
					// memecah data yang mengandung d
					foreach ($dd as $key_dd => $value_dd) {
						$ee[$key_dd] = explode("AND", $value_dd);
					}

					// memberi nilai inputan dari perawat
					foreach ($ee as $key_ee => $value_ee) {
						foreach ($value_ee as $key_ee2 => $id_gejala) {
							$ff[$key_ee][$key_ee2] = $nilai_inputan[$id_pengetahuan][$id_gejala];
						}
					}

					// mencari nilai cf
					foreach ($ff as $key_ee => $value_ee) {
						if (count($value_ee) > 1) {
							$n[$key_ee] = min($value_ee) * $cf_pengetahuan[$id_pengetahuan];
						} else {
							$n[$key_ee] = $value_ee[0] * $cf_pengetahuan[$id_pengetahuan];
						}
						
					}

					// echo "<pre>";
					// print_r ($n);
					// echo "</pre>";

				// menghitung cf kombinasi pengetahuan
					foreach ($n as $key_n => $value_n) {
						if ($key_n==0) {
							$key_1 = $key_n;
							$key_2 = $key_n+1;
							$key_cf = $key_n;

							$cf_1 = $n[$key_1];
							$cf_2 = $n[$key_2];

							if ($cf_1 >= 0 AND $cf_2 >= 0) {
								$cf_minmax[$key_cf] = $cf_1 + $cf_2 * (1 - $cf_1);
							} elseif ($cf_1 <= 0 AND $cf_2 <= 0) {
								$cf_minmax[$key_cf] = $cf_1 + $cf_2 * (1 + $cf_1);
							}else{
								$cf_minmax[$key_cf] = ($cf_1 + $cf_2) / (1 - min(abs($cf_1), abs($cf_2)));
							}
						}elseif ($key_n >1 ) {
							$key_1 = $key_n -2;
							$key_2 = $key_n;
							$key_cf = $key_n-1;

							if (isset($cf_minmax[$key_1])) {
								$cf_1 = $cf_minmax[$key_1];
								$cf_2 = $n[$key_2];

								if ($cf_1 >= 0 AND $cf_2 >= 0) {
									$cf_minmax[$key_cf] = $cf_1 + $cf_2 * (1 - $cf_1);
								} elseif ($cf_1 <= 0 AND $cf_2 <= 0) {
									$cf_minmax[$key_cf] = $cf_1 + $cf_2 * (1 + $cf_1);
								}else{
									$cf_minmax[$key_cf] = ($cf_1 + $cf_2) / (1 - min(abs($cf_1), abs($cf_2)));
								}
							}
						}
					}

					// echo "<pre>";
					// print_r ($cf_minmax);
					// echo "</pre>";

					$cf[$id_pengetahuan] = end($cf_minmax);
				}

			}elseif (in_array("AND", $value_p)) {
				// membandigkan gejala perawat dengan gejala pengetahuan 
				// array_diff akan mengembalikan nilai yang beda dari inputan perawat 
				$banding = array_diff($id_gejala_pengetahuan[$id_pengetahuan], $id_gejala_diagnosa);
				// jika data inputan perawat dengan pengetahuan tidak ada yang beda maka data tersebut diambil 
				if (empty($banding)) {
					// menghitung nilai cf
					$cf[$id_pengetahuan] = min ($nilai_inputan[$id_pengetahuan]) * $cf_pengetahuan[$id_pengetahuan];
				}
			}elseif (in_array("OR", $value_p)) {
				// semua nilai dipakai walaupun 0
				$cf[$id_pengetahuan] = max($nilai_inputan[$id_pengetahuan]) * $cf_pengetahuan[$id_pengetahuan];
			}else{
				// nilai langsung dikalikan dengan cf 
				$cf[$id_pengetahuan] = max($nilai_inputan[$id_pengetahuan]) * $cf_pengetahuan[$id_pengetahuan];
			}

		}

		if (isset($cf)) {

		// mengelompokan pengetahuan per tiap penyakit 
			foreach ($cf as $id_pengetahuan => $nilai_cf) {
				$cf_penyakit[$penyakit_pengetahuan[$id_pengetahuan]][] = $nilai_cf;
			}

			foreach ($cf_penyakit as $id_penyakit => $value_cfp) {
			// menghitung nilai kombinasi 
				if (count($value_cfp)>1) {
					foreach ($value_cfp as $key_cfp => $nilai_cfp) {
					// jika keycfp adalah index ke 0
						if ($key_cfp==0) {
							$key_1 = $key_cfp;
							$key_2 = $key_cfp+1;
							$key_cf = $key_cfp;

							$cf_1 = $value_cfp[$key_1];
							$cf_2 = $value_cfp[$key_2];

							if ($cf_1 >= 0 AND $cf_2 >= 0) {
							// cflama + cfbaru(1-cflama)
								$cf_kombinasi[$key_cf] = $cf_1 + $cf_2 * (1 - $cf_1);
							}elseif ($cf_1 < 0 AND $cf_2 < 0) {
							//  cflama +cfbaru(1+cflama)
								$cf_kombinasi[$key_cf] = $cf_1 + $cf_2 * (1 + $cf_1);
							}else{
								$cf_kombinasi[$key_cf] = ($cf_1 + $cf_2) / (1 - min(abs($cf_1), abs($cf_2)));
							}

						}elseif ($key_cfp > 1) {
							$key_1 = $key_cfp - 2;
							$key_2 = $key_cfp;
							$key_cf = $key_cfp - 1;

							if (isset($cf_kombinasi[$key_1])) {
								$cf_1 = $cf_kombinasi[$key_1];
								$cf_2 = $value_cfp[$key_2];
								if ($cf_1 >=0 AND $cf_2 >= 0) {
								// cflama + cfbaru(1-cflama)
									$cf_kombinasi[$key_cf] = $cf_1 + $cf_2 * (1 - $cf_1);
								}elseif ($cf_1 < 0 AND $cf_2 < 0 ) {
								// cflama + cfbaru(1+cflama)
									$cf_combinasi[$key_cf] = $cf_1 + $cf_2 * (1 + $cf_1);
								}else{
									$cf_kombinasi[$key_cf] = ($cf_1 + $cf_2) / (1 - min(abs($cf_1), abs($cf_2)));
								}
							}
						}
					}
					$cf_akhir[$id_penyakit] = end($cf_kombinasi);
				}else{
					$cf_akhir[$id_penyakit] = $value_cfp[0];
				}

			}

		// untuk threshold
			foreach ($cf_akhir as $id_penyakit => $value_cfa) {
				$this->load->model('MThreshold');
				$data_threshold = $this->MThreshold->getThreshold();
				// echo "<pre>";
				// print_r ($data_threshold);
				// echo "</pre>";
				if ($value_cfa >= $data_threshold['nilai_threshold']) {
					$cf_akhir_th[$id_penyakit] = $value_cfa;
				}
			}

			if(isset($cf_akhir_th)){	
		// mengurutkan dari nilai yang terbesar
				arsort($cf_akhir_th);
				return($cf_akhir_th);
			}else{
				return "";
			}
		}else{
			return "";
		}
	}


}

/* End of file MDiagnosa.php */
/* Location: ./application/models/MDiagnosa.php */