<?php
include_once('../modelos/modeloFactura.php');
function listar(){
    $modeloFactura = new Factura();
    return $modeloFactura->getFactura();
}
function guardar(){
    $modeloFactura = new Factura();
    return $modeloFactura->setGuardar();
}
function actualizar(){
    $modeloFactura = new Factura();
    return $modeloFactura->setActualizar();
}
function eliminar(){
    $modeloFactura = new Factura();
    return $modeloFactura->setEliminar();
}
function buscar(){
    $modeloFactura = new Factura();
    return $modeloFactura->getBuscarFactura();
}

?>
