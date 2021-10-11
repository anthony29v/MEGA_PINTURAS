<?php

include 'conexion.php';

$nombreCompleto = $_POST['nombre_completo'];
$correoUsuario = $_POST['correo'];
$usuarioNombre = $_POST['usuario'];
$contrasenaUsuario = $_POST['contrasena'];

$query="INSERT INTO usuarios ( nombre, correo, usuario, contrasena)
 VALUES ('$nombreCompleto', '$correoUsuario', '$usuarioNombre', '$contrasenaUsuario')";

//Verificacion de repetidos en la BD

$verificar_correo =mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correoUsuario' ");

if(mysqli_num_rows($verificar_correo) > 0 ){
    
    echo' 
    <script>
    alert("Este correo ya esta registrado, Intenta nuevamente");
    window.location="../register.php"
    </script>
    ';
    exit();
}
//Verificacion de repetidos en la BD

$verificar_usuario =mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario= '$usuarioNombre' ");

if(mysqli_num_rows($verificar_usuario) > 0 ){
    
    echo' 
    <script>
    alert("Este usuario ya esta registrado, Intenta nuevamente");
    window.location="../register.php"
    </script>
    ';
    exit();
}

$ejecutar=mysqli_query($conexion, $query);
 
if($ejecutar){
    echo '
    <script>
    alert("Registrado con exito");
    window.location="../register.php"
    </script>
    ';
}else{
    echo '
    <script>
    alert("Intentalo de nuevo, usuario no almacenado");
    window.location="../register.php"
    </script>
    ';
}
mysqli_close($conexion);
?>