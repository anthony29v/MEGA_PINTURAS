<?php
include 'php/conexion.php';
session_start();

/*
if(!isset($_SESSION['usuario'])){
	echo'
	<script>
	alert("Inicie Sesión primero")
	window.location="register.php"
	</script>
	';
	session_destroy();
	die();
}
*/
error_reporting(0);
$iduser = $_SESSION['usuario'];
$sql="SELECT usuario FROM usuarios WHERE correo='$iduser'";
$resultado=$conexion->query($sql);
$row=$resultado->fetch_assoc();
?>


<!DOCTYPE HTML>

<html>

<head>
	<title>MEGA-PINTURAS</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
	<script src="https://kit.fontawesome.com/47456c9a20.js" crossorigin="anonymous"></script>

</head>

<body class="is-preload" id="body">



	<header id="header">
		<div class="container__header">
			<div class="icon_menu">
				<i class="fas fa-bars" id="btnOpen"><span>Más Productos</span></i>
			</div>
			<div class="contenedor__logo">
			<a href="index.php"><img src="images/logo.jpeg" alt=""></a>
			</div>
			<div class="contenedor__nav">
				<nav>
					<ul>
						<li class="select">
							<a href="register.php">
								<div><i class="fas fa-user-plus"></i></div>
							</a>
						</li>
				
						<li class="select">
							<a onclick="ubicacion()">
								<div><i class="fas fa-map-marked-alt"></i></div>
							</a>
						</li>
					</ul>
				</nav>
			</div>


		</div>

	</header>
	<article class="contSaludo">
		<div class="saludo">
			
			<p> <h6>&nbsp&nbsp&nbsp&nbspBienvenido: <?php if(!isset($row)){ echo'';}else{echo utf8_decode($row['usuario']);}?> </h6></p>
			
		</div>
	</article>


	<div class="menu__side" id="menu_side">
		<div class="name__page">
			<i class="fas fa-paint-roller"></i>
			<h4>Mega Pinturas</h4>
		</div>
		<div class="options__menu">
			<a href="index.php">
				<div class="option">
					<i class="fas fa-home" title="Inicio"></i>
					<h4>Inicio</h4>
				</div>
			</a>
			<a href="index3.php">
				<div class="option">
					<i class="fas fa-brush" title="Pinturas"></i>
					<h4>Pinturas</h4>
				</div>
			</a>
			<a href="index4.php">
				<div class="option">
					<i class="fas fa-tools" title="Funigadoras"></i>
					<h4>Funigadoras</h4>
				</div>
			</a>
			<a href="index5.php">
				<div class="option">
					<i class="fas fa-screwdriver" title="Pistolas"></i>
					<h4>Pistolas</h4>
				</div>
			</a>
			<a href="index6.php">
				<div class="option">
					<i class="fas fa-head-side-mask" title="Mascarrillas"></i>
					<h4>Mascarrillas</h4>
				</div>
			</a>

			<a href="#">
				<div class="option">
					<i class="fas fa-id-card" title="Contacto"></i>
					<h4>Contacto</h4>
				</div>
			</a>
		</div>
	</div>

	<main>
		<!-- Wrapper -->
		<div id="wrapper">



			<!-- Main -->
			<div id="main">
				<div class="inner">

					<section class="tiles">
						<div class="contenido">
							<div class="fondoProducto">
								<a href="#">
									<center><img src="images/P1.jpg"></center>
								</a>
							</div>
						</div>

						<article class="style1">
							<span class="image">
								<img src="IMAGENES PROYECTO/p35.jpeg" alt="" />
							</span>
							<br>
							<h2>Pistola para Embrear</h2>
							<p>Pistola para aplicar batepiedra</p>
							<center>
								<h3>$ 20,00</h3>
								<input type="number" value="Cantidad">
							</center><br>

						</article>

						<article class="style2">
							<span class="image">
								<img src="IMAGENES PROYECTO/p36.jpeg" alt="" />
							</span>
							<br>
							<h2>Pistola para Uso Multiple</h2>
							<p>Pistola para pintar</p>
							<center>
								<h3>$ 12,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style3">
							<span class="image">
								<img src="IMAGENES PROYECTO/productos/p31.jpeg" alt="" />
							</span>
							<br>
							<h2>Pistola Profecinal </h2>
							<p>Pistola para pintar carror</p>
							<center>
								<h3>$ 45,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style4">
							<span class="image">
								<img src="IMAGENES PROYECTO/productos/p28.jpeg" />
							</span>
							<br>
							<h2>Repisto para aire</h2>
							<p>Repuesto para Compresor</p>
							<center>
								<h3>$ 5,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style5">
							<span class="image">
								<img src="IMAGENES PROYECTO/productos/p32.jpeg" alt="" />
							</span>
							<br>
							<h2>Repuesto pata Mangera</h2>
							<p>Repuesto para Mangera</p>
							<center>
								<h3>$ 5,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style6">
							<span class="image">
								<img src="IMAGENES PROYECTO/productos/p33.jpeg" alt="" />
							</span>
							<br>
							<h2>Repuesto Inflador </h2>
							<p>Inflador de Llantas </p>
							<center>
								<h3>$ 5,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
					
						</article>

						<article class="style1">
							<span class="image">
								<img src="IMAGENES PROYECTO/productos/p35.jpeg" alt="" />
							</span>
							<br>
							<h2>Repuesto de Mangera</h2>
							<p>Repuesto para Mangera</p>
							<center>
								<h3>$ 5,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style2">
							<span class="image">
								<img src="IMAGENES PROYECTO/productos/p36.jpeg" alt="" />
							</span>
							<br>
							<h2>Repuesto para Compresor</h2>
							<p>Repuesto de Compresor</p>
							<center>
								<h3>$ 5,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style3">
							<span class="image">
								<img src="IMAGENES PROYECTO/productos/p37.jpeg" alt="" />
							</span>
							<br>
							<h2>Repuesto para Mangera</h2>
							<p>Repuesto para Mangera</p>
							<center>
								<h3>$ 5,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style4">
							<span class="image">
								<img src="IMAGENES PROYECTO/productos/p38.jpeg" alt="" />
							</span>
							<br>
							<h2>Manometro de Pistola</h2>
							<p>Manometro de Pistola/p>
								<center>
									<h3>$ 12,00</h3>
									<input type="number" value="Cantidad">
								</center><br>
								
						</article>

						<article class="style5">
							<span class="image">
								<img src="IMAGENES PROYECTO/productos/p39.jpeg" alt="" />
							</span>
							<br>
							<h2>Acople para Pistola </h2>
							<p>Acomple para Pistola</p>
							<center>
								<h3>$ 12,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style6">
							<span class="image">
								<img src="IMAGENES PROYECTO/productos/p40.jpeg" alt="" />
							</span>
							<br>
							<h2>Trampa de Agua </h2>
							<p>Trapa de Agua </p>
							<center>
								<h3>$ 10,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style1">
							<span class="image">
								<img src="IMAGENES PROYECTO/productos/p41.jpeg" alt="" />
							</span>
							<br>
							<h2>T</h2>
							<p>Repuesto para Mangera</p>
							<center>
								<h3>$ 5,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style2">
							<span class="image">
								<img src="IMAGENES PROYECTO/productos/p42.jpeg" alt="" />
							</span>
							<br>
							<h2>Union </h2>
							<p>Union para Mangera</p>
							<center>
								<h3>$ 5,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style3">
							<span class="image">
								<img src="IMAGENES PROYECTO/productos/p46.jpeg" alt="" />
							</span>
							<br>
							<h2>Repuesto de Mangera </h2>
							<p>Repuesto de Mangera </p>
							<center>
								<h3>$ 5,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style4">
							<span class="image">
								<img src="IMAGENES PROYECTO/productos/p47.jpeg" alt="" />
							</span>
							<br>
							<h2>Repuesto de Ligadora </h2>
							<p>Repuesto de Ligadora</p>
							<center>
								<h3>$ 8,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style5">
							<span class="image">
								<img src="IMAGENES PROYECTO/productos/p48.jpeg" alt="" />
							</span>
							<br>
							<h2>Inflador de Llantas </h2>
							<p>Inflador de Llantas</p>
							<center>
								<h3>$ 5,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style6">
							<span class="image">
								<img src="IMAGENES PROYECTO/productos/p44.jpeg" alt="" />
							</span>
							<br>
							<h2>Mangera de Aire </h2>
							<p>Mangera de Aire</p>
							<center>
								<h3>$ 20,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style1">
							<span class="image">
								<img src="IMAGENES PROYECTO/productos/p29.jpeg" alt="" />
							</span>
							<br>
							<h2>Pistola de Aire </h2>
							<p>Pistola de Aire</p>
							<center>
								<h3>$ 10,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
						
						</article>

						<article class="style2">
							<span class="image">
								<img src="IMAGENES PROYECTO/productos/p43.jpeg" alt="" />
							</span>
							<br>
							<h2>Manometro de Inflador </h2>
							<p>Manometro de Inflador</p>
							<center>
								<h3>$ 12,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style3">
							<span class="image">
								<img src="IMAGENES PROYECTO/productos/p45.jpeg" alt="" />
							</span>
							<br>
							<h2>Pistola de Aire </h2>
							<p>Pistola de Aire</p>
							<center>
								<h3>$ 10,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
						
						</article>



					</section>
				</div>
			</div>

			<!-- Footer -->
			<footer id="footer">
				<div>
					<a href="php/cerrarSesion.php">
									<div>&nbsp&nbsp&nbsp&nbsp Cerrar Sesión&nbsp&nbsp&nbsp&nbsp <i class="fas fa-sign-out-alt"></i></div>
								</a>
					</div>
					<br>
					<br>
				<div class="inner">
					<section>
						<h2>Get in touch</h2>
						<form method="post" action="#">
							<div class="fields">
								<div class="field half">
									<input type="text" name="name" id="name" placeholder="Name" />
								</div>
								<div class="field half">
									<input type="email" name="email" id="email" placeholder="Email" />
								</div>
								<div class="field">
									<textarea name="message" id="message" placeholder="Message"></textarea>
								</div>
							</div>
							<ul class="actions">
								<li><input type="submit" value="Send" class="primary" /></li>
							</ul>
						</form>
					</section>
					<section>
						<h2>Follow</h2>
						<ul class="icons">
							<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a>
							</li>
							<li><a href="#" class="icon brands style2 fa-facebook-f"><span
										class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands style2 fa-instagram"><span
										class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands style2 fa-dribbble"><span
										class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon brands style2 fa-github"><span class="label">GitHub</span></a>
							</li>
							<li><a href="#" class="icon brands style2 fa-500px"><span class="label">500px</span></a>
							</li>
							<li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
							<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a>
							</li>
						</ul>
					</section>

				</div>

				<div class="imgFooter">
					<img src="images/logo.jpeg" alt="">
				</div>
			</footer>

		</div>

	</main>
	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/menu.js"></script>
	<script src="assets/js/navegador.js"></script>
</body>

</html>