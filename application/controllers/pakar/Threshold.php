<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Threshold extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("Dokter")) {
			redirect('login','refresh');
		}

		$this->load->model('MThreshold');
	}

	public function index()
	{
		$data['threshold'] = $this->MThreshold->getThreshold();

		$this->load->view('pakar/header');
		$this->load->view('pakar/threshold/index', $data);
		$this->load->view('pakar/footer');

	}

	public function ubah($id_threshold)
	{
		$data['threshold'] = $this->MThreshold->ambilThreshold($id_threshold);

		$inputan = $this->input->post();
		if 	($inputan) {
			$this->MThreshold->ubahThreshold($inputan, $id_threshold);
			$this->session->set_flashdata('sukses', 'Data Thresold Berhasil Diubah');
			redirect('pakar/threshold','refresh');
		}
		$this->load->view('pakar/header');
		$this->load->view('pakar/threshold/ubahThreshold', $data);
		$this->load->view('pakar/footer');
	}

}

/* End of file Threshold.php */
/* Location: ./application/controllers/pakar/Threshold.php */