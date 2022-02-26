<?php
    include_once('modelos/modeloUsuario.php');
    function listar(){
        $modeloUsuario = new Usuario();
        return $modeloUsuario -> getUsuarios();
    }

    include_once('modelos/modeloUsuario.php');
    function guardar(){
        $modeloUsuario = new Usuario();
        return $modeloUsuario -> setGuardar();
    }

    include_once('modelos/modeloUsuario.php');
    function actualizar(){
        $modeloUsuario = new Usuario();
        return $modeloUsuario -> setActualizar();
    }

    include_once('modelos/modeloUsuario.php');
    function eliminar(){
        $modeloUsuario = new Usuario();
        return $modeloUsuario -> setEliminar();
    }
    
?>