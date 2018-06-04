<?php
	$db = new mysqli("localhost","root","");
	$sql = "create database restoran";
	$query = $db->query($sql);
	if($query){
		echo "Database Berhasil Dibuat	";
	}
	else{
		echo "Database Gagal Dibuat".$db->error;
	}
?>