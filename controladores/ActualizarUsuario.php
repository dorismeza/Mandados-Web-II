<?php
include_once('../controladores/conexion.php');
include_once('../modelos/modeloUsuarios.php');
    
    
    $Usuario = $_POST['Usuario'];
    $Contrasena = $_POST['Contrasena'];
    $TipoUsuario = $_POST['TipoUsuario'];
    $IdUsuario = $_POST['IdUsuario'];

    $datos = array(
        $Usuario,
        $Contrasena,
        $TipoUsuario,
        $IdUsuario
    );

    $obj = new Usuario();
    if($obj -> actualizar($datos) == 1){
        header("location:../plantilla/pagina.php");
    }else{
        echo "Error al agregar Datos";
    }

?>
