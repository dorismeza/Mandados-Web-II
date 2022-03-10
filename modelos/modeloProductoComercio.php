<?php

class Producto {
    private $producto;
    private $db;


    public function __construct() {
        $this->producto = array();
        $this->db = new PDO('mysql:host=localhost;dbname=mandaditos', "root", "Fenix2022");
    }
   
    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function getProducto() {

        self::setNames();//
        $sql =  "SELECT a.IdProductos,b.NombreComercio,a.NombreProducto
        ,a.CategoriaProducto, a.descripcion ,a.precio,a.foto
        from productoscomercio a
        INNER JOIN comercio b
        ON a.IdComercio = b.IdComercio ";

        foreach ($this->db->query($sql) as $res) {
            $this->producto[] = $res;
        }
        return $this->producto;
        $this->db = null;
    }

    public function setGuardar($IdComercio,$NombreProducto,$CategoriaProducto,
    $descripcion,$precio) {

        self::setNames();
        $sql = "INSERT INTO productoscomercio(IdComercio ,NombreProducto,CategoriaProducto,
        descripcion ,precio 
        values('$IdComercio','$NombreProducto','$CategoriaProducto',
                                        '$descripcion','$precio')";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function setActualizar($IdProductos) {

        self::setNames();
        $sql = "UPDATE productoscomercio set EstadoFactura='$EstadoFactura' WHERE IdFactura=$IdFactura";
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