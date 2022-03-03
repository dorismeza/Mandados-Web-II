<?php
    include_once('../modelos/modeloEmpleados.php');
    function listar(){
        $modeloEmpleado = new Empleado();
        return $modeloEmpleado -> getEmpleados();
    }

    function guardar(){
        $modeloEmpleado = new Empleado();
        return $modeloEmpleado -> setGuardar();
    }

    function actualizar(){
        $modeloEmpleado = new Empleado();
        return $modeloEmpleado -> setActualizar();
    }
    
    function eliminar(){
        $modeloEmpleado = new Empleado();
        return $modeloEmpleado -> setEliminar();
    }   
?>