<?php
class M_kasus_online extends CI_Model{
	function tampil_kekerasan()
	{
		return $this->db->get('ref_kekerasan');
	}
	function tampil_kecamatan()
	{
		return $this->db->get('ref_kecamatan');
	}
	function tampil_kelurahan()
	{
		return $this->db->get('ref_kelurahan');
	}
	function input_kasus_online_l_kasus($data,$table)
	{
		return $this->db->insert($table,$data);
	}

	function input_kasus_online_korban($data,$table)
	{
		return $this->db->insert($table,$data);
	}
	function input_kasus_online_pelaku($data,$table)
	{
		return $this->db->insert($table,$data);
	}
	function input_kasus_online_kekerasan($data,$table)
	{
		return $this->db->insert($table,$data);
	}
}