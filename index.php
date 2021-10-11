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



	<header class="carrusel">
		<div class="container-all">
			<input type="radio" name="image-slide" id="1" hidden>
			<input type="radio" name="image-slide" id="2" hidden>
			<input type="radio" name="image-slide" id="3" hidden>
			<div class="slide">
				<div class="item-slide">
					<img src="IMAGENES PROYECTO/inicio/m6.jpeg">
				</div>
				<div class="item-slide">
					<img src="IMAGENES PROYECTO/inicio/m5.jpeg">
				</div>
				<div class="item-slide">
					<img src="IMAGENES PROYECTO/inicio/m10.jpeg">
				</div>
			</div>
			<div class="pagination">
				<label class="pagination-item" for="1">
					<img src="IMAGENES PROYECTO/inicio/m6.jpeg">
				</label>
				<label class="pagination-item" for="2">
					<img src="IMAGENES PROYECTO/inicio/m5.jpeg">
				</label>
				<label class="pagination-item" for="3">
					<img src="IMAGENES PROYECTO/inicio/m10.jpeg">
				</label>
			</div>
		</div>

	</header>



	<div class="menu__side" id="menu_side">
		<div class="name__page">
			<i class="fas fa-paint-roller"></i>
			<h4>Mega Pinturas</h4>
		</div>
		<div class="options__menu">
			<a href="index.php" >
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

	<br><br> <br> <br>

	<main>
		<!-- Wrapper -->
		<div id="wrapper">



			<!-- Main -->
			<div id="main">
				<div class="inner">

					<section class="tiles">
						<article class="">
							<span class="image">
								<img style="border-radius: 20px;" src="IMAGENES PROYECTO/inicio/m1.jpeg" alt="" />
							</span>
						</article>
						<article class="">
							<span class="image">
								<img style="border-radius: 20px;" src="IMAGENES PROYECTO/inicio/m2.jpeg" alt="" />
							</span>

						</article>

						<article class="">
							<span class="image">
								<img style="border-radius: 20px;" src="IMAGENES PROYECTO/inicio/m3.jpeg" alt="" />
							</span>

						</article>

						<div class="contenido">
							<div class="fondoProducto">
								<br><br><br>

								<center>
									<h1>Pinturas </h1>
								</center>
								<a href="index3.html">
									<center><img src="IMAGENES PROYECTO/inicio/p1.jpg" alt=""></center>
								</a>
							</div>
						</div>
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

						<div class="contenido">
							<div class="fondoProducto">
								<br><br><br>

								<center>
									<h1>Funigadoras </h1>
								</center>
								<a href="index4.html">
									<center><img src="IMAGENES PROYECTO/inicio/p6.jpg" alt=""></center>
								</a>
							</div>
						</div>


						<article class="style2">
							<span class="image">
								<img src="IMAGENES PROYECTO/productos/p8.jpeg" alt="" />
							</span>
							<br>
							<h2>Bomba de Funigar</h2>
							<p>Bomba de Funigar</p>
							
							<center>
								<h3>$ 200,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							
						</article>


						<article class="style2">
							<span class="image">
								<img src="IMAGENES PROYECTO/productos/p15.jpeg" alt="" />
							</span>
							<br>
							<h2>Bomba Manual 4 ltr</h2>
							<p>DESCRIPCION</p>
							
							<center>
								<h3>$ 6,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							
						</article>

						<article class="style1">
							<span class="image">
								<img src="IMAGENES PROYECTO/productos/p7.jpeg" alt="" />
							</span>
							<br>
							<h2>Bomba de Precion</h2>
							<p>Bomba de Precion</p>
							
							<center>
								<h3>$ 200,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
						
						</article>





						<div class="contenido">
							<div class="fondoProducto">
								<br><br><br>

								<center>
									<h1>Pistolas y Accesorios </h1>
								</center>
								<a href="index5..html">
									<center><img src="IMAGENES PROYECTO/inicio/p3.jpg" alt=""></center>
								</a>
							</div>
						</div>

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


						<div class="contenido">
							<div class="fondoProducto">
								<br><br><br>

								<center>
									<h1>Mascarrillas y Accesorios </h1>
								</center>
								<a href="index6.html">
									<center><img src="IMAGENES PROYECTO/inicio/p5.jpg" alt=""></center>
								</a>
							</div>
						</div>

						<article class="style6">
							<span class="image">
								<img src="IMAGENES PROYECTO/productos/p27.jpeg" alt="" />
							</span>
							<br>
							<h2>Prefiltro Morado</h2>
							<p>Prefiltro Morado</p>

							<center>
								<h3>$ 20,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
					
						</article>

						<article class="style4">
							<span class="image">
								<img src="IMAGENES PROYECTO/productos/p4.jpeg" alt="" />
							</span>
							<br>
							<h2>Mascarrilla de Protector Normal</h2>
							<p>Mascarrilla de Protector Normal</p>
							<center>
								<h3>$ 35,00</h3>
								<input type="number" value="Cantidad">
							</center><br>
							


						</article>

						<article class="style2">
							<span class="image">
								<img src="IMAGENES PROYECTO/productos/p24.jpeg" alt="" />
							</span>
							<br>
							<h2>Mascarrilla 3M</h2>
							<p>Mascarrilla 3M</p>
							<center>
								<h3>$ 20,00</h3>
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
										class="label">Facebook</span></a>
							</li>
							<li><a href="#" class="icon brands style2 fa-instagram"><span
										class="label">Instagram</span></a>
							</li>
							<li><a href="#" class="icon brands style2 fa-dribbble"><span
										class="label">Dribbble</span></a>
							</li>
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