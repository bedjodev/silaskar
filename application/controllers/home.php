<?php
class Home extends CI_Controller {

	function pengaduan_baru()
	{
		$this->load->view('pengaduan_baru');
	}
	function lihat_status()
	{
		$data=array(
		'no_peng'=>$this->input->post('nomor_pengaduan')
		);
		$this->load->view('pengaduan_status',$data);
	}
}