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

    public function actualizar($datos){
        $c = new conexion();
        $conexion = $c -> conexion();

        $sql = "UPDATE usuarios SET Usuario = '$datos[0]', 
                                    Contrasena = '$datos[1]',
                                    TipoUsuario = '$datos[2]'
                                    WHERE IdUsuario = '$datos[3]'";
        return $result = mysqli_query($conexion, $sql);
    }

    public function eliminar($id){
        $c = new conexion();
        $conexion = $c -> conexion();
        $sql = "DELETE FROM usuarios WHERE IdUsuario = '$id'";

        return $result = mysqli_query($conexion, $sql);
    }
    
}
?>