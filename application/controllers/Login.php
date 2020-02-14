<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
    	$inputan = $this->input->post();

    	if ($inputan) {
    		$this->load->model('MLogin');
    		// data dari return model
    		$hasil = $this->MLogin->login($inputan);
    		if ($hasil=="dokter") {
    			redirect('pakar/dashboard','refresh');
    		}elseif ($hasil=="perawat") {
                redirect('perawat/dashboard','refresh');
            }else{
    			$this->session->set_flashdata('gagal', 'Gagal Login. Password atau Username salah');
    		}
    	}
        $this->load->view('login');
    }
}