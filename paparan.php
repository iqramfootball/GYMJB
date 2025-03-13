<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paparan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<title>PAPARAN</title>
    <style>
		/* Body */
        *{
            text-align: center;
			box-sizing: content-box;
        }
		body{
			background-color: #FBA518;
		}
        /* Img */
        img {
            width: 800px;
            height: 350px;
        }
		table{
			background-color: #FBFBFB;
		}
		/* Tajuk Start */
		.tulis{
			font-style: oblique;
			font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
		}
		/* Tajuk End */

		 /* Style Navbar Start*/
		.navbar {
			background-color: #d50000;
		}
		.navbar-brand img {
			width: 100px;
			height: 100px;
		}
		.navbar-nav .nav-link {
			color: white !important;
			font-weight: bold;
			transition: 0.3s;
		}
		.navbar-nav .nav-link:hover {
			color: yellow !important;
		}
		.navbar-toggler {
			border: none;
		}
		.navbar-toggler:focus {
			box-shadow: none;
		}
		/* Style Navbar End */

		/* Footer */
		.footer {
            bottom: 0;
            width: 100%;
            background-color: coral;
            color: white;
            text-align: center;
            padding: 10px 0;
            font-weight: bold;
        }
    </style>
</head>
<body>
	<!-- Navbar Start -->
    <div class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">
            <img src="images/logo.jpg" alt="cat">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home🏠</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Service🛠</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact🤳</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Navbar End -->

	<!-- Tajuk start -->
	<div class="tulis" id="tulis">
		<h1>SENARAI PENGURUSAN GYM</h1>	
	</div>
	<!-- Tajuk end -->

    <!-- Images Start -->
	<img src="images/gymbanner1.jpg" onmouseover="cute(this)" onmouseout="ned(this)">
	<br>
	<br>	
	<br>
	<!-- Images End -->

	<!-- Jadual Start -->
	<table border="1" cellpadding="6" cellspacing="0" align="center">
		<tr>
			<th>Id Pekerja</th>
			<th>Nama Pekerja</th>
			<th>Nombor Telefon</th>
			<th>Nama Kad Pengenalan</th>   
			<th colspan="2">Tindakan</th>
		</tr>
	<!-- Jadual End -->

	<!-- Php Start -->
		<?php 
			include 'config.php';
			$display = mysqli_query($sambungan, "SELECT jadual_pekerja.idahli , jadual_pekerja.namapekerja , jadual_pekerja.notel , jadual_pekerja.noic 
            FROM jadual_pekerja");
			if(mysqli_num_rows($display)){
			while ($result=mysqli_fetch_array($display)) {
			echo "
				<tr>
				<td align='center'>".$result['idahli']."</td>
				<td align='center'>".$result['namapekerja']."</td>
				<td align='center'>".$result['notel']."</td>
				<td align='center'>".$result['noic']."</td>
				<td><a onclick='return padam()' href='padam.php? idahli=".$result['idahli']."'>Padam</a></td>
				</tr>
				";
			}
		}
			?>
		<!-- Php End -->

		<!-- JS Start -->
		</table>
		<br>
		<button onclick="Openwin()">DAFTAR PEKERJA</button>
		<button onclick="bmi()">KIRA BMI</button>
		<br>	
		<br>
		<!-- JS End -->

	    <!--Footer--> 
		<div class="footer"> 
            Copyright &copy; Gym JB, 2025  
        </div> 
</body>
<script src="fungsi.js"></script>
</html>