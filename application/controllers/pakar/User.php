<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

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
        $data['user'] = $this->MUser->getUser();

        $this->load->view('pakar/header');
        $this->load->view('pakar/user/index', $data);
        $this->load->view('pakar/footer');
    }

    public function tambah()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username_user', 'Username', 'required|is_unique[user.username_user]');
        $this->form_validation->set_rules('nama_user', 'Nama', 'required');
        $this->form_validation->set_rules('password_user', 'Nama', 'required');
        $this->form_validation->set_rules('level_user', 'Nama', 'required');

        $this->form_validation->set_message("requires", "%s harus diisi");
        $this->form_validation->set_message("is_unique", "%s sudah ada. silahkan ganti");

        if ($this->form_validation->run() == TRUE) {

            $post = $this->input->post();
            $this->MUser->tambahUser($post);
            $this->session->set_flashdata('sukses', 'Data Berhasil Ditambah');
            redirect('pakar/user');
        }

        $this->load->view('pakar/header');
        $this->load->view('pakar/user/tambahUser');
        $this->load->view('pakar/footer');
    }

    public function hapus($id)
    {

        $this->MUser->hapusUser($id);
        $this->session->set_flashdata('sukses', 'Data Berhasil Dihapus');
        redirect('pakar/user');
    }

    public function ubah($id)
    {
        $data['user'] = $this->MUser->ambilUser($id);

        $inputan = $this->input->post();
        if ($inputan and $inputan['username_user'] == $data['user']['username_user']) {
            $this->MUser->ubahUser($inputan, $id);
            $this->session->set_flashdata('sukses', 'Data Berhasil Diubah');
            redirect('pakar/user', 'refresh');
        } else {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username_user', 'Username', 'required|is_unique[user.username_user]');
            $this->form_validation->set_message("required", "%s harus diisi");
            $this->form_validation->set_message("required", "%s sudah ada. silahkan ganti");

            if ($this->form_validation->run() == TRUE) {
                $this->MUser->ubahUser($inputan, $id);
                $this->session->set_flashdata('sukses', 'Data Berhasil diubah');
                redirect('pakar/user', 'refresh');
            }
        }

        $this->load->view('pakar/header');
        $this->load->view('pakar/user/ubahUser', $data);
        $this->load->view('pakar/footer');
    }
}