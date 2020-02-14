<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("Dokter")) {
			redirect('login','refresh');
		}
		$this->load->model('MUser');
	}
	public function index()
	{
		$data['profil'] = $this->session->userdata("Dokter");
		$this->load->view('pakar/header');		
		$this->load->view('pakar/profil/index', $data);		
		$this->load->view('pakar/footer');		
	}

	public function ubah()
	{
		$data['profil'] = $this->session->userdata("Dokter");
		$inputan = $this->input->post();

		$inputan = $this->input->post();
        if ($inputan and $inputan['username_user'] == $data['profil']['username_user']) {
            $this->MUser->ubahProfil($inputan, $data['profil']['id_user'], "Dokter");
            $this->session->set_flashdata('berhasil', 'Data Perawat Berhasil Diubah');
            redirect('pakar/Dashboard','refresh');
        }else{
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username_user', 'Username', 'required|is_unique[user.username_user]');
            $this->form_validation->set_rules('nama_user', 'Nama', 'required');

            $this->form_validation->set_message("requires", "%s harus diisi");
            $this->form_validation->set_message("is_unique", "%s sudah ada. silahkan ganti");

            if ($this->form_validation->run() == TRUE) {
                $this->MUser->ubahProfil($inputan, $data['profil']['id_user'], "Dokter");
                $this->session->set_flashdata('berhasil', 'Data Perawat Berhasil Diubah');
                redirect('pakar/Dashboard','refresh');
            }
        }

		$this->load->view('pakar/header');
		$this->load->view('pakar/profil/ubahProfil', $data);
		$this->load->view('pakar/footer');
	}

	public function ubahPassword()
	{
		$data['profil'] = $this->session->userdata("Dokter");
        $inputan = $this->input->post();

        if($inputan){
            $hasil = $this->MUser->ubahPassword($inputan, $data['profil']['id_user'], "Dokter");
            if ($hasil=="sukses") {
                redirect('pakar/dashboard','refresh');
            }elseif ($hasil=="p_lama_salah") {
                $this->session->set_flashdata('gagal', '<div class="alert alert-danger">Password Lama Salah </div>');
            }elseif ($hasil=="p_konfirmasi_salah") {
                $this->session->set_flashdata('gagal', '<div class="alert alert-danger">Password Konfirmasi Salah </div>');
            }elseif ($hasil=="p_kosong") {
                $this->session->set_flashdata('gagal', '<div class="alert alert-danger">Password Baru Kosong </div>');
            }
        }
        $this->load->view('pakar/header');
        $this->load->view('pakar/profil/ubahPassword');
        $this->load->view('pakar/footer');
	}


}

/* End of file Dashboard.php */
/* Location: ./application/controllers/pakar/Dashboard.php */