<?php

class Empleados {
    private $Empleado;
    private $db;

    public function __construct(){
        $this -> usuario = array();
        $this -> db = new PDO('mysql:host=localhost;dbname=mandaditos', "root", "hola1901");
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function getUsuarios() {

        self::setNames();
        $sql = "SELECT IdEmpleado, NombreEmpleado, ApellidoEmpleado, TelefonoEmpleado, CorreoEmpleado FROM empleados";
        foreach ($this->db->query($sql) as $res) {
            $this->empleado[] = $res;
        }
        return $this->usuario;
        $this->db = null;
    }

    public function setGuardar($nombreempleado, $apellidoempleado, $telefonoempleado, $correoempleado) {

        self::setNames();
        $sql = "INSERT INTO empleados(NombreEmpleado, ApellidoEmpleado, TelefonoEmpleado, CorreoEmpleado) VALUES ('$nombreempleado', '$apellidoempleado', '$telefonoempleado', '$correoempleado')";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function setActualizar($nombreempleado, $apellidoempleado, $telefonoempleado, $correoempleado) {

        self::setNames();
        $sql = "UPDATE empleados set Empleado='$empleado', NombreEmpleado='$nombreempleado' WHERE IdEmpleado=$idempleado";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function setEliminar($idempleaado) {

        self::setNames();
        $sql = "DELETE FROM empleados WHERE IdEmpleado=$idempleado";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }


    public function getBuscarId($idempleado) {
        
        self::setNames();
        $sql = "SELECT IdEmpleado, NombreEmpleado, ApellidoEmpleado, TelefonoEmpleado, CorreoEmpleado FROM usuarios WHERE Idusuario = $idusaurio ";
        foreach ($this->db->query($sql) as $res) {
            $this->persona[] = $res;
        }
        return $this->persona;
        $this->db = null;
    }
}

?>