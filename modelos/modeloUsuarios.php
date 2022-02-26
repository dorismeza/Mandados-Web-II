<?php

class Usuario {
    private $usuario;
    private $db;

    public function __construct(){
        $this -> usuario = array();
        $this -> db = new PDO('mysql:host=localhost;dbname=mandaditos');
    }

    private function setUsers() {
        return $this->db->query("SET USERS 'utf8'");
    }

    public function getUsuarios() {

        self::setUsers();
        $sql = "SELECT Idusuario, Usuario, IdTipoUsuario FROM usuarios";
        foreach ($this->db->query($sql) as $res) {
            $this->usuario[] = $res;
        }
        return $this->usuario;
        $this->db = null;
    }

    public function setGuardar($usuario, $contrasena, $idtipousuario) {

        self::setUsers();
        $sql = "INSERT INTO usuarios(Usuario, Contrasena, IdTipoUsuario) VALUES ('$usuario', '$contrasena', '$idtipousuario')";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function setActualizar($idusuario, $usuario, $contrasena) {

        self::setUsers();
        $sql = "UPDATE usuarios set Usuario='$usuario', Contrasena='$contrasena' WHERE Idusuario=$idusuario";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function setEliminar($idusuario) {

        self::setUsers();
        $sql = "DELETE FROM usuarios WHERE Idusuario=$idusuario";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getBuscarUsuario($filtro) {

        self::setUsers();
        $sql = "SELECT Idusuario, Usuario, IdTipoUsuario FROM tipousuario WHERE IdTipoUsuario like '%$filtro%'";
        foreach ($this->db->query($sql) as $res) {
            $this->persona[] = $res;
        }
        return $this->persona;
        $this->db = null;
    }

    public function getBuscarId($idusaurio) {
        
        self::setUsers();
        $sql = "SELECT Idusuario, Usuario FROM usuarios WHERE Idusuario = $idusaurio ";
        foreach ($this->db->query($sql) as $res) {
            $this->persona[] = $res;
        }
        return $this->persona;
        $this->db = null;
    }
}

?>