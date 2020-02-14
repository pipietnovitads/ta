<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function index()
	{
		$this->session->unset_userdata("Perawat");
		redirect('login','refresh');
	}

}

/* End of file Logout.php */
/* Location: ./application/controllers/perawat/Logout.php */