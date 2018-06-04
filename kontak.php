<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>PRPL-2017</title>
    <script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
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
        
            <h2>Contact</h2>
            
            <div class="button_main">
                <a href="index01.html" class="button_dark">HOME</a>
            </div>
            
            </div>
            
        </div>
        
        
        <!-- *********  Konten  ********** -->
        
        <div id="content_inner">
            
            <!-- *** kontak form *** -->
            
           <h3>Leave a message</h3>
           
           <form action="#" method="post" class="formit">
                <input type="text" name="name" placeholder="YOUR NAME"/>
                <input type="text" name="email" placeholder="EMAIL"/>
                <input type="text" name="url" placeholder="WEBSITE (OPTIONAL)"/>
                <textarea name="message" placeholder="Leave your message here..."></textarea>
                <input type="submit" class="button_submit" value="SEND A MESSAGE">
            </form>

            <div class="cara"></div> 
        </div>
        
    
    
    <!-- *********  Footer  ********** -->
    
    <hr class="cleanit">
    
     <div id="footer">
        <div id="footer_in">

            <p>Copyright 2018</p>

        </div>
    </div>
         
<script>
$(function() {
    $("ul.controls").tabs("div.testimonials > div");
});
</script>

</body>
</html>
