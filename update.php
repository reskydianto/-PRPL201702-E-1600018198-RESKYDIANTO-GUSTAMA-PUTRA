<?php
	$db = new mysqli("localhost","root","","restoran");
	
	if(isset($_POST['edit'])){
	$id_pelanggan = $_POST['Updateid_pelanggan'];
	$nama = $_POST['Updatenama'];
	$email = $_POST['Updateemail'];
	$alamat = $_POST['Updatealamat'];
	$No_HP = $_POST['UpdateNo_HP'];
	$jenis_pesanan = $_POST['Updatejenis_pesanan'];

	$sql = "UPDATE pemesanan SET id_pelanggan='$id_pelanggan',nama='$nama',email='$email',alamat='$alamat',No_HP='$No_HP',jenis_pesanan='$jenis_pesanan'";
	$query = $db->query($sql);
	if($query){
		echo "Data berhasil diupdate";
	}else{
		echo "Data gagal diupdate".$db->error;
	}
}
	echo "<td><a href='tampil.php'> Tampilkan</a></td>";
?>