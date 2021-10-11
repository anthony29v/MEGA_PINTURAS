<?php

session_start();

include 'conexion.php';


$correoUsuario=$_POST['correo'];
$contrasenaUsuario=$_POST['contrasena'];

$validarLogin=mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correoUsuario' AND contrasena='$contrasenaUsuario'");

    if(mysqli_num_rows($validarLogin) > 0 ){

        $_SESSION['usuario']=$correoUsuario;

        header("location: ../index.php");
        exit; 
    }else{
    echo'
    <script>
    alert("Este usuario no existe verifique los datos")
    window.location="../register.php";
    </script>
    
    ';

    exit;
    }




?>