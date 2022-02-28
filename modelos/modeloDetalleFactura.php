<?php
class DetalleFactura {
    
    private $detallefactura;
    private $db;

    public function __construct() {
        $this->detallefactura = array();
        //tipo de conexion
        $this->db = new PDO('mysql:host=localhost;dbname=mandaditos');
        //PDO se utiliza para diferentes gestores de datos
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function getDetalleFactura() {

        self::setNames();//
        $sql = "SELECT Id, Fecha, EmpleadoId, ClienteId, Cantidad,Impuesto,Subtotal,Total FROM detallefactura";
        foreach ($this->db->query($sql) as $res) {
            $this->detallefactura[] = $res;
        }
        return $this->detallefactura;
        $this->db = null;
    }

    public function setGuardar($Fecha, $EmpleadoId, $ClienteId, $Cantidad,$Impuesto,$Subtotal,$Total,$IdFactura) {

        self::setNames();
        $sql = "INSERT INTO detallefactura(Fecha, EmpleadoId, ClienteId, Cantidad,Impuesto,Subtotal,Total,IdFactura) VALUES ('$Fecha', '$EmpleadoId','$ClienteId','$Cantidad','$Impuesto','$Subtotal','$Total','$IdFactura')";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    //  $FechaEmision,$EstadoFactura,$IdDetallePedido
    public function setActualizar($Fecha, $Cantidad,$Impuesto,$Subtotal,$Total) {

        self::setNames();
        $sql = "UPDATE detallefactura set Fecha='$Fecha',Cantidad='$Cantidad',Impuesto='$Impuesto',Subtotal='$Subtotal' WHERE Id=$Id";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function setEliminar($Id) {

        self::setNames();
        $sql = "DELETE FROM detallefactura WHERE Id=$Id";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function getBuscarDetalleFactura($filtro) {

        self::setNames();
        $sql = "SELECT Id, Fecha, EmpleadoId, ClienteId, Cantidad,Impuesto,Subtotal,Total FROM detallefactura WHERE ClienteId like '%$filtro%' OR Total like '$filtro'";
        foreach ($this->db->query($sql) as $res) {
            $this->detallefactura[] = $res;
        }
        return $this->detallefactura;
        $this->db = null;
    }
    public function getBuscarId($Id) {
        
        self::setUsers();
        $sql = "SELECT Id, ClienteId, Total FROM detallefactura WHERE  Id= $Id ";
        foreach ($this->db->query($sql) as $res) {
            $this->detallefactura[] = $res;
        }
        return $this->detallefactura;
        $this->db = null;
    }
}
?>