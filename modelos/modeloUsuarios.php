<?php

class Usuario {
    private $Usuario;
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
        $sql = "SELECT Idusuario, Usuario, Contrasena, IdTipoUsuario FROM usuarios";
        foreach ($this->db->query($sql) as $res) {
            $this->usuario[] = $res;
        }
        return $this->usuario;
        $this->db = null;
    }

    public function setGuardar($usuario, $contrasena, $idtipousuario) {

        self::setNames();
        $sql = "INSERT INTO usuarios(Usuario, Contrasena, IdTipoUsuario) VALUES ('$usuario', '$contrasena', '$idtipousuario')";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function setActualizar($idusuario, $usuario, $contrasena) {

        self::setNames();
        $sql = "UPDATE usuarios set Usuario='$usuario', Contrasena='$contrasena' WHERE Idusuario=$idusuario";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function setEliminar($idusuario) {

        self::setNames();
        $sql = "DELETE FROM usuarios WHERE Idusuario=$idusuario";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getBuscarUsuario($filtro) {

        self::setNames();
        $sql = "SELECT Idusuario, Usuario, IdTipoUsuario FROM tipousuario WHERE IdTipoUsuario like '%$filtro%'";
        foreach ($this->db->query($sql) as $res) {
            $this->persona[] = $res;
        }
        return $this->persona;
        $this->db = null;
    }

    public function getBuscarId($idusaurio) {
        
        self::setNames();
        $sql = "SELECT Idusuario, Usuario FROM usuarios WHERE Idusuario = $idusaurio ";
        foreach ($this->db->query($sql) as $res) {
            $this->persona[] = $res;
        }
        return $this->persona;
        $this->db = null;
    }
}

?>