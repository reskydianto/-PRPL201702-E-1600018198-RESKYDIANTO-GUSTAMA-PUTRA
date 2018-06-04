<html>
<head>
	<link rel="stylesheet" href="style.css" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<style type="text/css">
	hr{
		width: 50%;
	}
	body{
		background-image:url("polos.jpg");
		background-position:center;
		background-size:cover;
	}
	ul{
		margin:0;
		padding:5;
		overflow:hidden;
		background:rgba(0,204,204, 0.8);border-radius: 25px;
	}
	li{
		list-style-type:none;
		float:left;
	}
	li a{
		color:white;
		font-family:arial;
		display:block;
		color:white;
		text-align:center;
		padding:14px 16px;
		text-decoration:none;
	}
	li a:hover{
		background:rgba(0,204,204, 0.8);
		color:white;
	}
	table{
		background-color:white;
		border-radius: 10px;
		padding: 20px;
		margin-top: 20px;
	}

	</style>
</head>
<body>
	<div id="header">
     <div id="header_in">
        <h1><a href="index01.html"><b>Ma-NTAP</b> Restaurant</a></h1>
        <div id="menu">
         <ul>
            <li><a href="index01.html">Home</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="pemesanan.php">Pemesanan</a></li>
            <li><a href="kontak.php">Contact</a></li>            
         </ul>
        </div>   
    </div>
</div>
<center>
<?php
	$db =  new mysqli("localhost","root","","restoran");
	if($db->connect_error){
		echo "Belum connect ke database".$db->error;
	}else{
		echo " ";
	}

	$sql = "SELECT * FROM pemesanan";
	$data = $db->query($sql);
	echo "</br></br><h1><font face='arial black'> Daftar Tamu Restaurant</font><hr></h1>";
	echo "<table border='0' cellpadding='5' cellspacing='0'>";
	echo "<tr><td><center>No.</center></td><td><center>id_pelanggan</center></td><td><center>nama</center></td><td><center>email</center></td><td><center>alamat</center></td><td><center>No_HP</center></td><td><center>jenis_pesanan</center></td></tr>";
	if($data->num_rows > 0){
		$no = 1;
		while($row = $data->fetch_assoc()){
			echo "<tr>";
			echo "<td>".$no++."</td>";
			echo "<td>".$row['id_pelanggan']."</td>";
			echo "<td>".$row['nama']."</td>";	
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['alamat']."</td>";
			echo "<td>".$row['No_HP']."</td>";
			echo "<td>".$row['jenis_pesanan']."</td>";
			echo "<td><a href='update.php?id_pelanggan=".$row['id_pelanggan']."'> Edit </a></td>";
			echo "<td><a href='pemesanan.php?id_pelanggan=".$row['id_pelanggan']."'> Input </a></td>";
			echo "<td><a href='delete.php?id_pelanggan=".$row['id_pelanggan']."'> Delete </a></td>";
			echo "</tr>";	
		}
	}else{
		echo "Data Kosong";
	}
	echo "</table>";
	$db->close();
?>
</center>
</body>
</html>