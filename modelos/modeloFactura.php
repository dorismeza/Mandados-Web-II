<?php

class Factura {
    private $factura;
    private $db;


    public function __construct() {
        $this->factura = array();
        $this->db = new PDO('mysql:host=localhost;dbname=mandaditos', "doris", "123456");
    }
   
    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function getFactura() {

        self::setNames();//
        $sql = "SELECT IdFactura, NumeroFactura, FechaEmision, EstadoFactura, IdDetallePedido FROM factura";
        foreach ($this->db->query($sql) as $res) {
            $this->factura[] = $res;
        }
        return $this->factura;
        $this->db = null;
    }

    public function setGuardar($NumeroFactura, $FechaEmision, $EstadoFactura, $IdDetallePedido) {

        self::setNames();
        $sql = "INSERT INTO factura(NumeroFactura, FechaEmision, EstadoFactura, IdDetallePedido) VALUES ('$NumeroFactura', '$FechaEmision','$EstadoFactura','$IdDetallePedido')";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    //  $FechaEmision,$EstadoFactura,$IdDetallePedido
    public function setActualizar($IdFactura, $EstadoFactura) {

        self::setNames();
        $sql = "UPDATE factura set EstadoFactura='$EstadoFactura' WHERE IdFactura=$IdFactura";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function setEliminar($IdFactura) {

        self::setNames();
        $sql = "DELETE FROM factura WHERE IdFactura=$IdFactura";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function getBuscarFactura($filtro) {

        self::setNames();
        $sql = "SELECT IdFactura, NumeroFactura, FechaEmision, EstadoFactura, IdDetallePedido FROM factura WHERE NumeroFactura like '%$filtro%' OR FechaEmision like '$filtro'";
        foreach ($this->db->query($sql) as $res) {
            $this->factura[] = $res;
        }
        return $this->factura;
        $this->db = null;
    }
}
?>