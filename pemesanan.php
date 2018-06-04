<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>PRPL-2017</title>
    
    <link rel="stylesheet" href="reset.css" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
        
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</head>

<body>
    
    <!-- *********  Header  ********** -->
    
    <div id="header">
     <div id="header_in">
        <h1><a href="index01.html"><b>Ma-NTAP</b> Restaurant</a></h1>
        <div id="menu">
         <ul>
            <li><a href="index01.html">Home</a></li>
            <li><a href="katalog.php">Menu</a></li>
            <li><a href="pemesanan.php">Pemesanan</a></li>
            <li><a href="kontak.php">Contact</a></li>            
         </ul>
        </div>   
    </div>
</div>

<!-- *********  Main part – headline ********** -->

<div id="main_part_inner">
    <div id="main_part_inner_in">
        <h2>Menu</h2>
        <div class="button_main">
            <a href="index01.html" class="button_dark">HOME</a>
        </div>
    </div>
</div>

<!-- *********  Form ******** -->

<center>
    <h3>Form Pemesanan</h3>
    <form method="post" action="insert.php">
        <table cellpadding="3" cellspacing="0">
            <div align="center"></div>
                <tr><td colspan="2"></td></tr>
                <tr><td width="254">
                    <pre>Id Pelanggan   <input class="idpelanggan" name="id_pelanggan" type="number" id="TxtId_pelanggan" size="50" maxlength="25" required></pre>
                </td></tr>
                <tr><td>
                    <pre>Nama           <input class="nama" name="nama" type="text" id="TxtNama" size="50" maxlength="35" required></pre>
                </td></tr>
                <tr><td>
                    <pre>E-Mail         <input class="email" name="email" type="email" id="TxtEmail" size="50" maxlength="30" required></pre>
                </td></tr>
                <tr><td>
                    <pre>Alamat         <input class="alamat" name="alamat" type="text" id="TxtAlamat" size="50" maxlength="30" required></pre>
                </td></tr>
                <tr><td>
                    <pre>No Handphone   <input class="notelp" name="No_HP" type="number" id="TxtNo_HP" size="50" maxlength="30" required></pre>
                </td></tr>
                <tr><td>
                    <pre>Jenis Pesanan  <select name="jenis_pesanan" style="width: 59%;padding-bottom: 10px;padding-top: 10px;margin: 8px 0;padding-left: 15px;display: inline-block;border: 1px solid #ccc;box-sizing: border-box;"></pre>
                    <option value="Makan ditempat">Makan Ditempat</option>
                    <option value="Bawa pulang">Bawa Pulang</option></select>
                </td></tr>
                <pre><tr><td colspan="2">
                    <div align="center">
                        <input class="button" type="submit" name="add" value="Accept" onClick="hasil()">    <input class="button" type="reset" value="Reset">
                    </div>
                </td></tr></pre>
            </table>
    </form>
</center>

<!-- *********  Footer  ********** -->
    
    <hr class="cleanit">
    
     <div id="footer">
        <div id="footer_in">
            
            <p>©Copyright 2018</p>

        </div>
    </div>
         
<script>
$(function() {
    $("ul.controls").tabs("div.testimonials > div");
});
</script>
         

</body>
</html>