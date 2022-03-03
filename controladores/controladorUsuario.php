<?php
    include_once('../modelos/modeloUsuarios.php');
    function listar(){
        $modeloUsuario = new Usuario();
        return $modeloUsuario -> getUsuarios();
    }

    function guardar(){
        $modeloUsuario = new Usuario();
        return $modeloUsuario -> setGuardar();
    }

    function actualizar(){
        $modeloUsuario = new Usuario();
        return $modeloUsuario -> setActualizar();
    }
    
    function eliminar(){
        $modeloUsuario = new Usuario();
        return $modeloUsuario -> setEliminar();
    }   
?>