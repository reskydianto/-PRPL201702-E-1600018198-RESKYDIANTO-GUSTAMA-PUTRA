<?php
	$db =  new mysqli("localhost","root","","restoran");
	if($db->connect_error){
		echo "Belum terhubung ke database ".$db->error;
	}else{
		echo "Sudah terhubung ke database ";
	}

	$Plat = @$_GET['id_pelanggan'];
	$sql = "DELETE from pemesanan where id_pelanggan='$id_pelanggan'";

	$query = $db->query($sql);
	if($query){
		echo "Data Berhasil Dihapus";
	}else{
		echo "Data Gagal Dihapus".$db->error;
	}
	echo "<td><a href='tampil.php'> Tampilkan</a> <a href ='/tugasprpl/'>   Balik Menu</a></td>";
?>