<?php
require 'conexion.php';
session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['contrasena'];

$q = "SELECT COUNT(*) as contar FROM usuarios WHERE Usuario = '$usuario' AND Contrasena = '$clave'";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $q1 = "SELECT NombreEmpleado, Usuario FROM empleado e
    INNER JOIN usuarios u ON e.IdUsuario = u.IdUsuario
    WHERE usuario = '$usuario'
    ORDER BY NombreEmpleado DESC";
    $consulta1 = mysqli_query($conexion,$q1);
    $array1 = mysqli_fetch_array($consulta1);
    $nombre;
    $_SESSION['username'] = $array1['NombreEmpleado'];

    header("location: ../plantilla/pagina.php");
}else{
    $errorLogin = "Nombre de usuario y/o contraseña es incorrecto";

    header("location: ../plantilla/paginaLogin.php");
}

?>