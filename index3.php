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
			<a href="index.php"><img src="images/logo.jpeg" alt="MEGA-PINTURAS"></a>
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
			<a href="index.php" class="selected">
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
									<center><img src="images/P2.jpg"></center>
								</a>
							</div>
						</div>

						<article class="style4">
							<span class="image">
								<img src="IMAGENES PROYECTO/p22.jpeg" />
							</span>
							<br>
							<h2>Pintura Esmalte </h2>
							<p>Es una pintura para interiores y exteriores acavado brillante con dilucion base thinner.
							</p>
							<center>
								<h3>$ 18,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style5">
							<span class="image">
								<img src="IMAGENES PROYECTO/p23.jpeg" alt="" /></span>
							<br>
							<h2>Anti Corocivo </h2>
							<p>De acavado mate para extructuras metalicas dilucion base thinner.</p>

							<center>
								<h3>$ 13,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							
						</article>
						<article class="style6">
							<span class="image">
								<img src="IMAGENES PROYECTO/p26.jpeg" alt="" />
							</span>
							<br>
							<h2>Latex tipo 1</h2>
							<p>Pintura lavable para interiores y exteriores.</p>

							<center>
								<h3>$ 18,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style1">
							<span class="image">
								<img src="IMAGENES PROYECTO/p27.jpeg" />
							</span>
							<br>
							<h2>Latex Satinado</h2>
							<p>Es pintura lavable para interiores y exteriores.</p>

							<center>
								<h3>$ 28,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style2">
							<span class="image">
								<img src="IMAGENES PROYECTO/p39.jpeg" alt="" />

							</span>
							<br>
							<h2>Macilla para Retoque</h2>
							<p>Macilla para endderesador.</p>

							<center>
								<h3>$ 22,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style3">
							<span class="image">
								<img src="IMAGENES PROYECTO/p24.jpeg" alt="" />
							</span>
							<br>
							<h2>Sellador para Madera </h2>
							<p>Cellador para la linea de carpiteria.</p>

							<center>
								<h3>$ 22,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style4">
							<span class="image">
								<img src="IMAGENES PROYECTO/p28.jpg" alt="" />
							</span>
							<br>
							<h2>Latex Supremo</h2>
							<p>Pintura lavable para interior y exteriores.</p>

							<center>
								<h3>$ 18,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style5">
							<span class="image">
								<img src="IMAGENES PROYECTO/p29.jpg" alt="" />
							</span>
							<br>
							<h2>Unico Latex</h2>
							<p>Pintura para interiores </p>
							<center>
								<h3>$ 8,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							

						</article>

						<article class="style6">
							<span class="image">
								<img src="IMAGENES PROYECTO/p30.jpg" alt="" />
							</span>
							<br>
							<h2>Latex Economico</h2>
							<p>Pintura para interiores</p>
							<center>
								<h3>$ 8,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style1">
							<span class="image">
								<img src="IMAGENES PROYECTO/p41.jpg" alt="" />
							</span>
							<br>
							<h2>Esmalte cintetico industrial</h2>
							<p>Cintetico uso profecional </p>
							<center>
								<h3>$ 22,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style2">
							<span class="image">
								<img src="IMAGENES PROYECTO/p42.jpg" alt="" />
							</span>
							<br>
							<h2>Cointetico Auto</h2>
								<p>Usu profecional</p>
								<center>
									<h3>$ 22,00</h3>
									<input type="number" value="Cantidad">
								</center><br>
								
						</article>

						<article class="style3">
							<span class="image">
								<img src="IMAGENES PROYECTO/p16.jpg" alt="" />
							</span>
							<br>
							<h2>Unifil 1000</h2>
							<p>Impermialisante del losas </p>
							<center>
								<h3>$ 25,00</h3>
							<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style4">
							<span class="image">
								<img src="IMAGENES PROYECTO/p39.jpeg" alt="" />
							</span>
							<br>
							<h2>Macilla para pintar</h2>
							<p>Macilla de Enderesador</p>
							<center>
								<h3>$ 24,00</h3>
							<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style5">
							<span class="image">
								<img src="IMAGENES PROYECTO/p50.jpeg" alt="" />
							</span>
							<br>
							<h2>Fondo Foscovinilico</h2>
							<p>Fondo para lata de aderencia </p>
							<center>
								<h3>$ 15,00</h3>
							<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style6">
							<span class="image">
								<img src="IMAGENES PROYECTO/p46.jpeg" alt="" />
							</span>
							<br>
							<h2>Thinner Poliuretano</h2>
							<p>Diluyente profecional</p>
							<center>
								<h3>$ 12,00</h3>
							<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style1">
							<span class="image">
								<img src="IMAGENES PROYECTO/p19.jpg" height="230x" />>
							</span>
							<br>
							<h2>Varnis Glasurit</h2>
							<p>Brillo Aleman</p>
							<center>
								<h3>$ 35,00</h3>
							<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style2">
							<span class="image">
								<img src="IMAGENES PROYECTO/p20.jpg" alt="" />
							</span>
							<br>
							<h2>Varnit Grinice</h2>
							<p>Brillo Chino</p>
							<center>
								<h3>$ 20,00</h3>
							<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style3">
							<span class="image">
								<img src="IMAGENES PROYECTO/p21.jpg" alt="" />
							</span>
							<br>
							<h2>Varnit General</h2>
							<p>Brillo Español</p>
							<center>
								<h3>$ 35,00</h3>
							<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style4">
							<span class="image">
								<img src="IMAGENES PROYECTO/p43.jpg" alt="" />
							</span>
							<br>
							<h2>Thinner Unidas </h2>
							<p>Diluyente Poliuretano</p>
							<center>
								<h3>$ 4,00</h3>
							<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style5">
							<span class="image">
								<img src="IMAGENES PROYECTO/p44.jpg" alt="" />
							</span>
							<br>
							<h2>Thinner Ciclon</h2>
							<p>Diluyente Español</p>
							<center>
								<h3>$ 7,00</h3>
							<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style6">
							<span class="image">
								<img src="IMAGENES PROYECTO/productos/p49.jpg" height="300px" />
							</span>
							<br>
							<h2>Anticorocivo Unidas </h2>
							<p>Pintura para metal Mecanica </p>
							<center>
								<h3>$ 15,00</h3>
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