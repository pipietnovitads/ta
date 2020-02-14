 <?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gejala extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("Dokter")) {
			redirect('login','refresh');
		}
		$this->load->model('MGejala');
	}

	public function index()
	{

		$data['gejala'] = $this->MGejala->getGejala();

		$this->load->view('pakar/header');
		$this->load->view('pakar/gejala/index', $data);
		$this->load->view('pakar/footer');
	}

	public function tambah()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_gejala', 'Nama Gejala', 'required|is_unique[gejala.nama_gejala]');
		$this->form_validation->set_message("required", "%s harus diisi");
		$this->form_validation->set_message("is_unique", "%s sudah ada. Silahkan input lagi");

		if ($this->form_validation->run() == TRUE) {
			$post = $this->input->post();
			$this->MGejala->tambahGejala($post);
			$this->session->set_flashdata('sukses', 'Data Berhasil Ditambah');
			redirect('pakar/gejala');
		}

		$this->load->view('pakar/header');
		$this->load->view('pakar/gejala/tambahGejala');
		$this->load->view('pakar/footer');
	}

	public function hapus($id)
	{

		$this->MGejala->hapusGejala($id);
		$this->session->set_flashdata('sukses', 'Data Berhasil Dihapus');
		redirect('pakar/gejala');
	}

	public function ubah($id)
	{

		$data['gejala'] = $this->MGejala->ambilGejala($id);

		$inputan = $this->input->post();
		if ($inputan and $inputan['nama_gejala'] == $data['gejala']['nama_gejala']) {
			$this->MGejala->ubahGejala($inputan, $id);
			$this->session->set_flashdata('sukses', 'Data Berhasil diubah');
			redirect('pakar/gejala', 'refresh');
		} else {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama_gejala', 'Nama Gejala', 'required|is_unique[gejala.nama_gejala]');
			$this->form_validation->set_message("required", "%s harus diisi");
			$this->form_validation->set_message("is_unique", "%s sudah ada. Silahkan input lagi");

			if ($this->form_validation->run() == TRUE) {
				$this->MGejala->ubahGejala($inputan, $id);
				$this->session->set_flashdata('sukses', 'Data Berhasil Diubah');
				redirect('pakar/gejala', 'refresh');
			}
		}
		$this->load->view('pakar/header');
		$this->load->view('pakar/gejala/ubahGejala', $data);
		$this->load->view('pakar/footer');
	}

	// halaman Detail gejala
	public function detail($id)
	{
		$data['id_gejala'] = $id;
		$data['detail'] = $this->MGejala->detailGejala($id);
		
		$this->load->view('pakar/header');
		$this->load->view('pakar/gejala/nilaiGejala', $data);
		$this->load->view('pakar/footer');

	}

	public function tambahDetailGejala($id)
	{
		$data['id_gejala'] = $id;
		$data['gejala'] = $this->MGejala->ambilGejala($id);

		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_detail_gejala', 'Detail Gejala', 'required');
		$this->form_validation->set_rules('nilai_detail_gejala', 'Nilai Detail Gejala', 'required');
		$this->form_validation->set_message("required", "%s harus diisi");

		if ($this->form_validation->run() == TRUE) {
			$post = $this->input->post();
			$this->MGejala->tambahDetailGejala($post);
			$this->session->set_flashdata('sukses', 'Data Berhasi Ditambahkan');
			redirect('pakar/gejala/detail/'.$id,'refresh');	
		}
		
		$this->load->view('pakar/header');
		$this->load->view('pakar/gejala/tambahNilaiGejala', $data);
		$this->load->view('pakar/footer');
	}

	public function hapusDetailGejala($id_gejala, $id)
	{
		$this->MGejala->hapusDetailGejala($id);
		$this->session->set_flashdata('sekses', 'Data Berhasil Dihapus');
		redirect('pakar/gejala/detail/'.$id_gejala,'refresh');
	}

	public function ubahDetailGejala($id_gejala, $id)
	{
		$data['id_gejala'] = $id;
		$data['gejala'] = $this->MGejala->ambilGejala($id_gejala);
		$data['detail'] = $this->MGejala->ambilDetail($id);

		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_detail_gejala', 'Detail Gejala', 'required');
		$this->form_validation->set_rules('nilai_detail_gejala', 'Nilai Gejala', 'required');
		$this->form_validation->set_message("required", "%s harus diisi");

		if ($this->form_validation->run() == TRUE) {
			$inputan=$this->input->post();
			$this->MGejala->ubahDetail($inputan, $id);
			$this->session->set_flashdata('sukses', 'Data Berhasil Diubah');
			redirect('pakar/gejala/detail/'.$id_gejala,'refresh');
		}

		// if ($inputan) {
		// }

		$this->load->view('pakar/header');
		$this->load->view('pakar/gejala/ubahNilaiGejala', $data);
		$this->load->view('pakar/footer');
	}
}

/* End of file Gejala.php */
/* Location: ./application/controllers/pakar/Gejala.php */