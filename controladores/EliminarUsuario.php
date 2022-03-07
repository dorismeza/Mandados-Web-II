<?php

$id = $_GET['IdUsuario'];

include_once('../controladores/conexion.php');
include_once('../modelos/modeloUsuarios.php');

    $obj = new Usuario();
    if($obj -> eliminar($id) == 1){
        Header("Location:../plantilla/paginaListarUsuarios.php");
    }
?>