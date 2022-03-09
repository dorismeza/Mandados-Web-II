<?php
include_once('BD/db.php');

class User extends DB{

   private $nombre;
    private $username;

    public function userExists($user, $pass){
        $md5pass = $pass;

        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE Usuario = :user AND Contrasena = :pass');
        $query->execute(['user' => $user, 'pass' => $md5pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT NombreEmpleado, Usuario FROM empleado e
        INNER JOIN usuarios u ON e.IdUsuario = u.IdUsuario
        WHERE usuario = :user
        ORDER BY NombreEmpleado DESC');
        $query->execute(['user' => $user]);

        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['NombreEmpleado'];
            $this->username = $currentUser['Usuario'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
}


?>