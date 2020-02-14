<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata("Perawat")) {
            redirect('login','refresh');
        }
        $this->load->model('MPasien');
        $this->load->model('MDiagnosa');
        $this->load->model('MHasil');
    }

    public function index()
    {
        $data['pasien'] = $this->MPasien->getPasien();

        $this->load->view('perawat/header');
        $this->load->view('perawat/pasien/index', $data);
        $this->load->view('perawat/footer');
    }

    public function tambah()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'required');
        $this->form_validation->set_rules('tgl_lahir_pasien', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('telp_pasien', 'Telp pasien', 'required|numeric|min_length[10]|max_length[12]');

        $this->form_validation->set_message("required", "%s harus diisi");
        $this->form_validation->set_message("is_unique", "%s sudah ada. Silahkan masukkan lagi");   
        $this->form_validation->set_message("numeric", "%s harus angka");  
        $this->form_validation->set_message("min_length[10]", "%s minimal 10 karakter");  
        $this->form_validation->set_message("max_length[12]", "%s maksimal 12 karakter");  

        if ($this->form_validation->run() == TRUE) {
            $post = $this->input->post();
            $this->MPasien->tambahPasien($post);
            $this->session->set_flashdata('sukses', 'Data Berhasil Ditambahkan');
            redirect('perawat/pasien');
        } 


        $this->load->view('perawat/header');
        $this->load->view('perawat/pasien/tambahPasien');
        $this->load->view('perawat/footer');
    }

    public function hapus($id)
    {
        $this->MPasien->hapusPasien($id);
        $this->session->set_flashdata('sukses', 'Data Berhasil Dihapus');
        redirect('perawat/pasien');
    }

    public function ubah($id)
    {
        $data['pasien'] = $this->MPasien->ambilPasien($id);

        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_pasien', 'Nama Pasien', 'required');
        $this->form_validation->set_rules('tgl_lahir_pasien', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('telp_pasien', 'Telp pasien', 'required|numeric|min_length[10]|max_length[12]');

        $this->form_validation->set_message("required", "%s harus diisi");
        $this->form_validation->set_message("is_unique", "%s sudah ada. Silahkan masukkan lagi");   
        $this->form_validation->set_message("is_natural", "%s harus angka");  
        $this->form_validation->set_message("min_length[10]", "%s minimal 10 karakter");  
        $this->form_validation->set_message("max_length[12]", "%s maksimal 12 karakter"); 

        if ($this->form_validation->run() == TRUE) {
            $post = $this->input->post();
            $this->MPasien->ubahPasien($post, $id);
            $this->session->set_flashdata('sukses', 'Data Berhasil Diubah');
            redirect('perawat/pasien', 'refresh');
        }
        $this->load->view('perawat/header');
        $this->load->view('perawat/pasien/ubahPasien', $data);
        $this->load->view('perawat/footer');
    }

    public function detail($id_pasien)
    {
        $data['hasil'] = $this->MDiagnosa->ambil_diagnosa_pasien($id_pasien);
        foreach ($data['hasil'] as $key => $value) {
            $data['hasil'][$key]['diagnosa'] = $this->MHasil->ambilHasilDiagnosa($value['id_diagnosa']);
            $data['hasil'][$key]['gejala'] = $this->MDiagnosa->ambil_detail_diagnosa($value['id_diagnosa']);
        }

        $this->load->view('perawat/header');
        $this->load->view('perawat/pasien/detailPasien', $data);
        $this->load->view('perawat/footer');
    }
}