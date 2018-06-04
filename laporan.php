<!DOCTYPE html>
<html>
<head>
	<script src="chart/Chart.bundle.js"></script>
	<link rel="stylesheet" href="reset.css" type="text/css">
	<link rel="stylesheet" href="style.css" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	    <style type="text/css">
            .container {
                width: 40%;
                margin: 10px auto;
            }
			body{
				background-color:white;
				background-position:center;
				background-size:cover;
			}
			ul{
				border-radius: 20px;
				margin:10;
				padding:5;
				overflow:hidden;
				background:rgba(0,204,204, 0.8);
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
        </style>
</head>
<body>
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

<!-- *********  laporan  ********** -->
        <div class="container">
            <canvas id="myChart" width="100" height="90"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Makan Ditempat", "Bawa Pulang"],
                    datasets: [{
                            label: '#of Votes',
                            data: [1, 1],
                            backgroundColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(154, 162, 235, 1)',
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(154, 162, 235, 1)',
                            ],
                            borderWidth: 0
                        }]
                },
                options: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    
                }
            });
        </script>
</body>
</html>