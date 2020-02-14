<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("Dokter")) {
			redirect('login','refresh');
		}
        $this->load->model('MPasien');
        $this->load->model('MDiagnosa');
        $this->load->model('MHasil');
        
    }

    public function index()
    {
        $data['pasien'] = $this->MPasien->getPasien();

        $this->load->view('pakar/header');
        $this->load->view('pakar/pasien/index', $data);
        $this->load->view('pakar/footer');
    }

    public function detail($id_pasien)
    {
        $data['hasil'] = $this->MDiagnosa->ambil_diagnosa_pasien($id_pasien);
        foreach ($data['hasil'] as $key => $value) {
            $data['hasil'][$key]['diagnosa'] = $this->MHasil->ambilHasilDiagnosa($value['id_diagnosa']);
            $data['hasil'][$key]['gejala'] = $this->MDiagnosa->ambil_detail_diagnosa($value['id_diagnosa']);
        }

        foreach ($data['hasil'] as $key => $value) {
            $data['hasil'][$key]['diagnosa'] = $this->MHasil->ambilHasilDiagnosa($value['id_diagnosa']);
        }
        $this->load->view('pakar/header');
        $this->load->view('pakar/pasien/detailPasien', $data);
        $this->load->view('pakar/footer');
    }
}