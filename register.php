<?php
session_start();
if(isset($_SESSION['usuario'])){
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Iniciar Sesion</title>
</head>

<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="cajaTrasera_login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia Sesion para Ingresar a la Página</p>
                    <button id="btn_iniciarSesion">Iniciar Sesión</button>
                </div>
                <div class="cajaTrasera_register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrate para Iniciar Sesión</p>
                    <button id="btn_Registrar">Registrarse</button>
                </div>
            </div>

            <div class="contenedor_login_register">
                <form action="php/login_usuario.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesion</h2>
                    <input type="text" name="correo"  placeholder="Correo Electronico">
                    <input type="password" name="contrasena"  placeholder="Contraseña">
                    <button>Entrar</button>
                </form>
                <form action="php/registro_usuario.php" method="POST" class="formulario__registro">
                    <h2>Registrarse</h2>
                    <input type="text"  placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text"  placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
<script src="assets/js/loginScript.js"></script>
</body>

</html>