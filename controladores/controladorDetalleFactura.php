<?php
include_once('../modelos/modeloDetalleFactura.php');
function listar(){
    $modeloDetalleFactura = new DetalleFactura();
    return $modeloDetalleFactura ->getDetalleFactura();
}
function guardar(){
    $modeloDetalleFactura  = new DetalleFactura();
    return $modeloDetalleFactura ->setGuardar();
}
function actualizar(){
    $modeloDetalleFactura  = new DetalleFactura();
    return $modeloDetalleFactura ->setActualizar();
}
function eliminar(){
    $modeloDetalleFactura  = new DetalleFactura();
    return $modeloDetalleFactura ->setEliminar();
}
function buscar(){
    $modeloDetalleFactura  = new DetalleFactura();
    return $modeloDetalleFactura ->getBuscarDetalleFactura();
}
function buscar(){
    $modeloDetalleFactura  = new DetalleFactura();
    return $modeloDetalleFactura ->getBuscarId();
}
?>
