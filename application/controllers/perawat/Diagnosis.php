<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosis extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("Perawat")) {
			redirect('login','refresh');
		}
		$this->load->model('MPasien');
		$this->load->model('MGejala');
		$this->load->model('MDiagnosa');
		$this->load->model('MPenyakit');
		$this->load->model('MHasil');

	}

	public function index()
	{
		$data['pasien'] = $this->MPasien->getPasien();
		$gejala = $this->MGejala->getGejala();
		foreach ($gejala as $key => $value) {
			// nama gejala untuk ditampilkan
			$data['gejala'][$value['id_gejala']]['nama'] = $value['nama_gejala'];
			// nilai dari detail gejala
			$data['gejala'][$value['id_gejala']]['detail'] = $this->MGejala->detailGejala($value['id_gejala']);
		}
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('id_pasien', 'Pasien', 'required');
		$this->form_validation->set_message("required", "%s harus pilih");

		if ($this->form_validation->run() == TRUE) {
			$post = $this->input->post();
			if (!isset($post['id_detail'])) {
				$this->session->set_flashdata('kosong', '<div class ="alert alert-danger">Gejala tidak boleh kosong </div>');
			}else{
			$id_diagnosa = $this->MDiagnosa->tambahDiagnosa($post);
			// ditampilkan dihalaman hasil
			redirect('perawat/diagnosis/pilih/'.$id_diagnosa,'refresh');
			}
		}

		$this->load->view('perawat/header');
		$this->load->view('perawat/diagnosis/index', $data);
		$this->load->view('perawat/footer');
	}

	// digunakan untuk perawat memilih penyakit diatas threshold
	public function pilih($id_diagnosa)
	{
		$hasil = $this->MDiagnosa->hitung($id_diagnosa);
		if (!empty($hasil)) {
			foreach ($hasil as $id_penyakit => $nilai_hasil) {
				$data['hasil'][$id_penyakit] = $this->MPenyakit->ambilPenyakit($id_penyakit);
				$data['hasil'][$id_penyakit]['nilai_hasil'] = $nilai_hasil;
			}
		}else{
			$data['hasil'] = "";
		}


		// menyimpan data penyakit
		$inputan = $this->input->post();
		if ($inputan) {
			$this->MHasil->tambahHasilDiagnosa($id_diagnosa, $inputan['hasil']);
			redirect('perawat/diagnosis/hasil/'.$id_diagnosa,'refresh');
		}

		$this->load->view('perawat/header');
		$this->load->view('perawat/diagnosis/pilih', $data);
		$this->load->view('perawat/footer');
	}

	public function hasil($id_diagnosa)
	{
		$data['diagnosa'] = $this->MDiagnosa->ambil_diagnosa($id_diagnosa);
		// pilihan penyakit dari perawat
		$data['detail'] = $this->MDiagnosa->ambil_detail_diagnosa($id_diagnosa);
		
		$data['hasil'] = $this->MHasil->ambilHasilDiagnosa($id_diagnosa);

		$this->load->view('perawat/header');
		$this->load->view('perawat/diagnosis/hasil', $data);
		$this->load->view('perawat/footer');	
	}

}

/* End of file Diagnosis.php */
/* Location: ./application/controllers/perawat/Diagnosis.php */