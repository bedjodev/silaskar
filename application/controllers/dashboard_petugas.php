<?php
class Dashboard_petugas extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status')!='login'){
			redirect(base_url('login_petugas'));
			
		}
		$this->load->model('m_petugas');
		$this->load->helper('url');
	}
	function home()
	{
		$this->load->view('dash_petugas');
	}
	function tambah_petugas()
	{
		$this->load->view('v_frm_petugas');
	}
	function tambah_petugas_aksi()
	{
		$nama=$this->input->post('nama');
		$kontak=$this->input->post('kontak');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$level=$this->input->post('level');
		
		$data=array(
			'nama'=>$nama,
			'kontak'=>$kontak,
			'username'=>$username,
			'password'=>$password,
			'level'=>$level
		);
		$this->m_petugas->tambah_petugas($data,'tb_user');
		redirect (base_url('dashboard_petugas/lihat_petugas'));
		
	}
	function lihat_petugas()
	{
		$data['petugas']=$this->m_petugas->tampil_petugas()->result();
		$this->load->view('v_detail_petugas',$data);
	}
	function hapus_petugas($id)
	{
		$where=array('id_user'=>$id);
		$this->m_petugas->hapus_petugas($where,'tb_user');
		redirect (base_url('dashboard_petugas/lihat_petugas'));
	}
	function ubah_petugas($id)
	{
		$where=array('id_user'=>$id);
		$data['petugas']=$this->m_petugas->ubah_petugas($where,'tb_user')->result();
		$this->load->view('v_frm_petugas_edit',$data);
	}
	function ubah_petugas_aksi()
	{
		$id=$this->input->post('id_user');
		$nama=$this->input->post('nama');
		$kontak=$this->input->post('kontak');
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$level=$this->input->post('level');
		$where=array(
			'id_user' => $id
			);
		if($password==''){
			$data=array(
				'id_user'=>$id,
				'nama'=>$nama,
				'kontak'=>$kontak,
				'username'=>$username,
				'level'=>$level
			);
		}else{
			$data=array(
				'id_user'=>$id,
				'nama'=>$nama,
				'kontak'=>$kontak,
				'username'=>$username,
				'password'=>md5($password),
				'level'=>$level
			);
		}
		$this->m_petugas->update_petugas_aksi($where,$data,'tb_user');
		redirect (base_url('dashboard_petugas/lihat_petugas'));
	}
}