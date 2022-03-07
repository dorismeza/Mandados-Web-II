<?php
include_once('../controladores/conexion.php');
include_once('../modelos/modeloUsuarios.php');
    
    $Usuario = $_POST['Usuario'];
    $Contrasena = $_POST['Contrasena'];
    $TipoUsuario = $_POST['TipoUsuario'];

    $datos = array(
        $Usuario,
        $Contrasena,
        $TipoUsuario
    );

    $obj = new Usuario();
    if($obj -> guardar($datos) == 1){
        header("location:../plantilla/pagina.php");
    }else{
        echo "Error al agregar Datos";
    }

?>