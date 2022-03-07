<?php

class Usuario {
    public function mostra($sql){
        $c = new conexion();
        $conexion = $c -> conexion();
        $result = mysqli_query($conexion, $sql);

        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function guardar($datos){
        $c = new conexion();
        $conexion = $c -> conexion();

        $sql = "INSERT INTO usuarios (Usuario, Contrasena, TipoUsuario)
                VALUES ('$datos[0]', '$datos[1]', '$datos[2]')";
        
        return $result = mysqli_query($conexion, $sql);
    }
    
}
?>