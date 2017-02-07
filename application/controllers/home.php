<?php
class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		 
		$this->load->model('m_kasus_online');
		$this->load->helper('url');
	}	
	function pengaduan_baru()
	{
		$data['kecamatan'] = $this->m_kasus_online->tampil_kecamatan()->result();
		$data['kelurahan'] = $this->m_kasus_online->tampil_kelurahan()->result();
		$data['kekerasan']=$this->m_kasus_online->tampil_kekerasan()->result();
		$this->load->view('pengaduan_baru', $data);
	}
	function lihat_status()
	{
		$data=array(
		'no_peng'=>$this->input->post('nomor_pengaduan')
		);
		$this->load->view('pengaduan_status',$data);
	}

	function tambah_kasus_online()
	{	
		$nomor_pengaduan = mt_rand(100000, 999999);
		$nik_pelapor=$this->input->post('nik_pelapor');
		$nama_pelapor=$this->input->post('nama_pelapor');
		$alamat_rumah=$this->input->post('$alamat_rumah');
		$nomor_telp=$this->input->post('nomor_telp');
		$email=$this->input->post('email');
		$verifikasi='0';
		$tanggal_lapor=date("Y-m-d");
		$kecamatan_id=$this->input->post('kecamatan_id');
		$kelurahan_id=$this->input->post('kelurahan_id');
		$jenis_kasus=$this->input->post('jenis_kasus');
		$ket=$this->input->post('ket');


		$nik_korban = $this->input->post('nik_korban');
		$nama_korban = $this->input->post('nama_korban');
		$alamat_korban = $this->input->post('alamat_korban');
		$jk_korban = $this->input->post('jk_korban');
		$usia_korban = $this->input->post('usia_korban');
		$pendidikan_korban = $this->input->post('pendidikan_korban');
		$pekerjaan = $this->input->post('pekerjaan');
		$perkawinan_korban = $this->input->post('perkawinan_korban');
		$difabel = $this->input->post('difabel');
		$tempat_kejadian = $this->input->post('tempat_kejadian');
		$tanggal_kejadian = $this->input->post('tanggal_kejadian');

		$nik_pelaku = $this->input->post('nik_pelaku');
		$nama_pelaku = $this->input->post('nama_pelaku');
		$jk_pelaku = $this->input->post('jk_pelaku');
		$usia_pelaku = $this->input->post('usia_pelaku');
		$pendidikan_pelaku = $this->input->post('pendidikan_pelaku');
		$pekerjaan_pelaku = $this->input->post('pekerjaan_pelaku');
		$hubungan_pelaku = $this->input->post('hubungan_pelaku');
		$kebangsaan = $this->input->post('kebangsaan');



		$data=array (
			'nomor_pengaduan'=>$nomor_pengaduan,
			'nik_pelapor'=>$nik_pelapor,
			'nama_pelapor'=>$nama_pelapor,
			'alamat_rumah'=>$alamat_rumah,
			'nomor_telp'=>$nomor_telp,
			'email'=>$email,
			'verifikasi'=>$verifikasi,
			'tanggal_lapor'=>$tanggal_lapor,
			'kecamatan_id'=>$kecamatan_id,
			'kelurahan_id'=>$kelurahan_id,
			'jenis_kasus'=>$jenis_kasus,
			'ket'=>$ket
			);


		$ganteng = $this->m_kasus_online->input_kasus_online_l_kasus($data,'tb_laporan_kasus');
		if ($ganteng) {
			# code...
			$surti = $this->db->query("SELECT MAX(id_kasus) AS kid FROM tb_laporan_kasus");
			foreach ($surti->result_array() as $row)
			{
			        $kasus = $row['kid'];
			}
			$data=array (
			'id_kasus' => $kasus,
			'nik_korban' => $nik_korban,
			'nama_korban' => $nama_korban,
			'alamat_korban' => $alamat_korban,
			'jk_korban' => $jk_korban,
			'usia_korban' => $usia_korban,
			'pendidikan_korban' => $pendidikan_korban,
			'pekerjaan' => $pekerjaan,
			'perkawinan_korban' => $perkawinan_korban,
			'difabel' => $difabel,
			'tempat_kejadian' => $tempat_kejadian,
			'tanggal_kejadian' => $tanggal_kejadian
			);
			$data2=array (
			'id_kasus' => $kasus,
			'nik_pelaku'=>$nik_pelaku,
			'nama_pelaku'=>$nama_pelaku,
			'jk_pelaku'=>$jk_pelaku,
			'usia_pelaku'=>$usia_pelaku,
			'pendidikan_pelaku'=>$pendidikan_pelaku,
			'pekerjaan_pelaku'=>$pekerjaan_pelaku,
			'hubungan_pelaku'=>$hubungan_pelaku,
			'kebangsaan'=>$kebangsaan			 
			 );

			$this->m_kasus_online->input_kasus_online_korban($data,'tb_ciri_korban');
			$this->m_kasus_online->input_kasus_online_pelaku($data2,'tb_ciri_pelaku');
		
				# code...
				$jumlah = count($this->input->post('item'));
				for($i=0; $i < $jumlah; $i++) 
				{
						$id_item=$this->input->post('item')[$i];
						$data3=array(
							'kasus_id'=>$kasus,
							'kekerasan_id'=>$id_item
							);
						$this->m_kasus_online->input_kasus_online_kekerasan($data3,'tb_kekerasan'); 
				} 
			


			redirect (base_url('home/pengaduan_baru'));
		}
		//redirect (base_url('home/lihat_status'));
		//echo "<script>alert('Ganteng')</script>";
		//$id_kasus = '10';

		

		// //var_dump($data);

	}
}