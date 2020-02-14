<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengetahuan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("Dokter")) {
			redirect('login','refresh');
		}
		$this->load->model('MPengetahuan');
		$this->load->model('MPenyakit');
		$this->load->model('MGejala');
	}

	public function index()
	{
		$data['pengetahuan'] = $this->MPengetahuan->getPengetahuan();

		$this->load->view('pakar/header');
		$this->load->view('pakar/pengetahuan/index', $data);
		$this->load->view('pakar/footer');
	}

	public function tambah()
	{
		$data['penyakit'] = $this->MPenyakit->getPenyakit();

		$this->load->library('form_validation');
		$this->form_validation->set_rules('id_penyakit', 'Penyakit', 'required');
		$this->form_validation->set_rules('cf_pengetahuan', 'Pengetahuan', 'required');
		$this->form_validation->set_message("required", "%s harus diisi");


		if ($this->form_validation->run() == TRUE) {
			$post = $this->input->post();
			$this->MPengetahuan->tambahPengetahuan($post);
			$this->session->set_flashdata('sukses', 'Data Berhasil Ditambahkan');
			redirect('pakar/pengetahuan');
		}

		$this->load->view('pakar/header');
		$this->load->view('pakar/pengetahuan/tambahPengetahuan', $data);
		$this->load->view('pakar/footer');
	}

	public function hapus($id)
	{
		$this->MPengetahuan->hapusPegetahuan($id);
		$this->session->set_flashdata('sukses', 'Data Berhasil Dihapus');
		redirect('pakar/pengetahuan');
	}

	public function ubah($id)
	{
		$data['penyakit'] = $this->MPenyakit->getPenyakit();
		$data['pengetahuan'] = $this->MPengetahuan->ambilPengetahuan($id);

			$this->load->library('form_validation');
			$this->form_validation->set_rules('id_penyakit', 'Penyakit', 'required');
			$this->form_validation->set_rules('cf_pengetahuan', 'Pengetahuan', 'required');
			
			$this->form_validation->set_message("required", "%s harus diisi");

			if ($this->form_validation->run() == TRUE) {
				$this->MPengetahuan->ubahPengetahuan($this->input->post(), $id);
				$this->session->set_flashdata('sukses', 'Data Berhasil Diubah');
				redirect('pakar/pengetahuan');
			}
		$this->load->view('pakar/header');
		$this->load->view('pakar/pengetahuan/ubahPengetahuan', $data);
		$this->load->view('pakar/footer');
	}

	// halaman detail
	public function detail($id)
	{
		$data['id_pengetahuan'] = $id;
		$data['detail'] = $this->MPengetahuan->getDetail($id);
		
		$this->load->view('pakar/header');
		$this->load->view('pakar/pengetahuan/detailPengetahuan', $data);
		$this->load->view('pakar/footer');

	}

	public function hapusDetail($id_pengetahuan, $id)
	{
		$this->MPengetahuan->hapusDetail($id);
		$this->session->set_flashdata('sukses', 'Data Berhasil Dihapus');
		redirect('pakar/pengetahuan/detail/'.$id_pengetahuan , 'refresh');
	}

	public function ubahDetail($id_pengetahuan, $id)
	{
		$data['id_pengetahuan'] = $id;
		// berdasarkan id pengetahuan
		$data['pengetahuan'] = $this->MPengetahuan->ambilPengetahuan($id_pengetahuan);
		$data['gejala'] = $this->MGejala->getGejala();
		// berdasarkan detail pengetahuan
		$data['detail'] = $this->MPengetahuan->ambilDetail($id);

		$inputan=$this->input->post();
		if($inputan)
		{
			// id kedua, yang ada didatabase
			$this->MPengetahuan->ubahDetail($inputan, $id);
			$this->session->set_flashdata('sukses', 'Data Berhasil Diubah');
			// ngambil yang id pertama 
			redirect('pakar/pengetahuan/detail/'.$id_pengetahuan,'refresh');
		}

		$this->load->view('pakar/header');
		$this->load->view('pakar/pengetahuan/ubahDetail', $data);
		$this->load->view('pakar/footer');

	}

	public function tambahDetail($id)
	{
		$data['id_pengetahuan'] = $id;
		$data['pengetahuan'] = $this->MPengetahuan->ambilPengetahuan($id);
		$data['gejala'] = $this->MGejala->getGejala();

		$this->load->library('form_validation');
		$this->form_validation->set_rules('id_gejala', 'Gejala', 'required');
		$this->form_validation->set_rules('status_pengetahuan', 'Status Pengetahuan', 'required');
		$this->form_validation->set_message("required", "%s harus diisi");

		if ($this->form_validation->run() == TRUE) {
			$post=$this->input->post();
			$this->MPengetahuan->tambahDetail($post);
			$this->session->set_flashdata('sukses', 'Data Berhasil Ditambah');
			redirect('pakar/pengetahuan/detail/'.$id, 'refreash');
		}

		$this->load->view('pakar/header');
		$this->load->view('pakar/pengetahuan/tambahDetail', $data);
		$this->load->view('pakar/footer');

	}
}

/* End of file Pengetahuan.php */
/* Location: ./application/controllers/pakar/Pengetahuan.php */