<?php 

function foto_sidebar($nama_session)
{
	// untuk memanggil fungsi-fungsi ci
	$CI =& get_instance();
	$data_session = $CI->session->userdata($nama_session);
	return $data_session['gambar_user'];
}

	function nama_sidebar($nama_session)
	{
		$CI =& get_instance();
		$data_session = $CI->session->userdata($nama_session);
		return $data_session['nama_user'];

	}

	function level_sidebar($nama_session)
	{
		$CI =& get_instance();
		$data_session = $CI->session->userdata($nama_session);
		return $data_session['level_user'];

	}
 ?>