<?php

$host     = 'localhost';
$bd       = 'mandaditos';
$usuario    = 'root';
$clave = 'Fenix2022';

$conexion = mysqli_connect($host,$usuario,$clave,$bd);
$conection = @mysqli_connect($host,$usuario , $clave $bd);
if(!$conection){
    echo"Error en la conexion:";
    }
?>