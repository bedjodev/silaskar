<?php
class M_petugas extends CI_Model{
	function tampil_petugas()
	{
		return $this->db->get('tb_user');
	}
	function tambah_petugas($data,$table)
	{
		return $this->db->insert($table,$data);
	}
	function hapus_petugas($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	function ubah_petugas($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	function update_petugas_aksi($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}