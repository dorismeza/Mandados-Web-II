<?php

    class conexion{
        private $servidor = "localhost";
        private $usuario = "root";
        private $bd = "mandaditos";
        private $contrasena = "hola1901";

        public function conexion(){
            $conexion = mysqli_connect($this -> servidor,
                                       $this -> usuario,
                                       $this -> contrasena,
                                       $this -> bd);
            return $conexion;
        }
    }
?>