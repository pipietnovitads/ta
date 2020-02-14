<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengetahuan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("Perawat")) {
            redirect('login','refresh');
        }
        $this->load->model('MPenyakit');
	}	
	public function index()
	{
		$data['penyakit'] = $this->MPenyakit->getPenyakit();

		$this->load->view('perawat/header');
		$this->load->view('perawat/pengetahuan/index', $data);
		$this->load->view('perawat/footer');
	}

}

/* End of file Pengetahuan.php */
/* Location: ./application/controllers/perawat/Pengetahuan.php */