<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penyakit extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("Dokter")) {
			redirect('login','refresh');
		}
		$this->load->model('MPenyakit');
	}

	public function index()
	{
		$data['penyakit'] = $this->MPenyakit->getPenyakit();

		$this->load->view('pakar/header');
		$this->load->view('pakar/penyakit/index', $data);
		$this->load->view('pakar/footer');
	}

	public function tambah()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_penyakit', 'Nama Penyakit', 'required|is_unique[penyakit.nama_penyakit]');
		$this->form_validation->set_rules('solusi_penyakit', 'Solusi Penyakit', 'required');

		$this->form_validation->set_message("required", "%s harus diisi");
		$this->form_validation->set_message("is_unique", "%s sudah ada. Silahkan diinputkan kembali");

		if ($this->form_validation->run() == TRUE) {
			$post = $this->input->post();
			$this->MPenyakit->tambahPenyakit($post);
			$this->session->set_flashdata('sukses', 'Data Berhasil Ditambahkan');
			redirect('pakar/penyakit');
		}

		$this->load->view('pakar/header');
		$this->load->view('pakar/penyakit/tambah');
		$this->load->view('pakar/footer');
	}

	public function hapus($id)
	{
		$this->MPenyakit->hapusPenyakit($id);
		$this->session->set_flashdata('sukses', 'Data Berhasil Dihapuskan');
		redirect('pakar/penyakit');
	}

	public function ubah($id)
	{
		$data['penyakit'] = $this->MPenyakit->ambilPenyakit($id);

		$inputan = $this->input->post();
		if ($inputan and $inputan['nama_penyakit'] == $data['penyakit']['nama_penyakit']) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('solusi_penyakit', 'Solusi Penyakit', 'required');
			$this->form_validation->set_message("required", "%s harus diisi");

			if ($this->form_validation->run() == TRUE) {
				$this->MPenyakit->ubahPenyakit($inputan, $id);
				$this->session->set_flashdata('sukses', 'Data Berhasil Diubah');
				redirect('pakar/penyakit', 'refresh');
			}
		} else {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama_penyakit', 'Nama Penyakit', 'required|is_unique[penyakit.nama_penyakit]');
			$this->form_validation->set_rules('solusi_penyakit', 'Solusi Penyakit', 'required');
			$this->form_validation->set_message("required", "%s harus diisi");
			$this->form_validation->set_message("required", "%s sudah ada. Silahkan inputkan kembali");
			if ($this->form_validation->run() == TRUE) {
				$this->MPenyakit->ubahPenyakit($inputan, $id);
				$this->session->set_flashdata('sukses', 'Data Berhasil Diubah');
				redirect('pakar/penyakit', 'refresh');
			}
		}

		$this->load->view('pakar/header');
		$this->load->view('pakar/penyakit/ubahPenyakit', $data);
		$this->load->view('pakar/footer');
	}
}

/* End of file penyakit.php */
/* Location: ./application/controllers/pakar/penyakit.php */