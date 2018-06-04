<html>
<head>
	<style type="text/css">
body {
    background-image:url("polos.jpg");
    background-size:cover;
}

h1 {
    font-family:arial;
    font-size:40;
    color:white;
}

h2 {
    font-family:segoe print;
    font-size:20;
    color:white;
}

pre {
    font-family:arial;
    color:white;
}

li a:hover {
    background-color:#888888;
}
li {
    list-style-type:none;
    float:right;
}

li a {
    color:white;
    font-family:arial;
    display:block;
    color:white;
    text-align:center;
    padding:14px 16px;
    font-size:17;
    text-decoration:none;
}

img {
    border-radius:10%;
}

.button { 
    background: #df4231;
    color: #ffffff;
    width: 80px;
    margin-top: 10px;
    height: 40px;
    border: 1px solid #c9c9c9;
    border-radius: 5px; 
    transition: 1s all;
    -moz-transition: 1s all;
    -o-transition: 1s all;
}

.button:hover {
    background: #19B5FE;    
    transition: 1s all; 
    -moz-transition: 1s all;
    -o-transition: 1s all;
}
	</style>
</head>
	
<body>
	<li><a href="kontak.php">CONTACT</a></li>
	<li><a href="pemesanan.php">PEMESANAN</a></li>
	<li><a href="index01.html">HOME</a></li></br></br>
</body>
	
</html>
<?php
	$db = new mysqli("localhost","root","","restoran");
	
	if(isset($_POST['add'])){
		$id_pelanggan = $_POST['id_pelanggan'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$alamat = $_POST['alamat'];
		$No_HP = $_POST['No_HP'];
		$jenis_pesanan = $_POST['jenis_pesanan'];

		$sql="INSERT INTO pemesanan VALUES ('$id_pelanggan','$nama','email','$alamat','$No_HP','$jenis_pesanan')";
		$query=$db->query($sql);
		if($query){
			echo"<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
			echo "<center><h1>Data berhasil ditambah</h1></center>";
		}else{
			echo"<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
			echo "<center><h1>Data gagal ditambah</h1></center> ".$db->error;
		}
	}
	echo "<center><h2><a href='pemesanan.php'> Lanjut Input Data Lagi </a></h2></center>";
?>