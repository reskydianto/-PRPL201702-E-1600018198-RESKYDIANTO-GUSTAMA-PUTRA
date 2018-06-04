<?php
	$db = new mysqli("localhost","root","","restoran");
	

	$sql = "create table pemesanan(id_pelanggan varchar(10) not null primary key, nama varchar(15), email varchar(35), alamat varchar(50), 
	No_HP varchar(15), jenis_pesanan varchar(20))";

	$query = $db->query($sql);
	if($query){
		echo "Tabel berhasil dibuat	";
	}else{
		echo "Tabel gagal dibuat";
	}


?>