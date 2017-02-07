<?php 
/*$db=new mysqli ("localhost","root","","siakad");
if ($db->connect_errno) {
	# code...
	echo "Terjadi kesalahan karena ".$db->connect_error;
}*/
$conn=mysqli_connect("localhost","root","","db_silaskar_fix");
//coneksinya di cek
if (mysqli_connect_errno())
{
echo "Gagal koneksi db: " .mysqli_connect_error();
}

 ?>
<?php
include "../koneksi/koneksi.php";
$id_kelurahan = isset($_REQUEST["id_kelurahan"])?$_REQUEST["id_kelurahan"]:'';
	
$sel_kel="select * from ref_kelurahan where kecamatan_id='".$_POST["kecamatan_id"]."'";
$q=mysqli_query($conn,$sel_kel);
echo"<option>--Sesuaikan kelurahan--</option>";
while($data_kel=mysqli_fetch_array($q)){
?>
<option value="<?php echo $data_kel["id_kelurahan"] ?>"
<?php if (isset($id_kelurahan) AND $id_kelurahan==$data_kel["id_kelurahan"]) echo " selected";?>>
<?php echo $data_kel["nama_kelurahan"] ?></option>
<?php
}
?>