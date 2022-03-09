<?php  
//session_start();
include_once('../iniciosesion.php');

/*if(isset($_REQUEST["cerrar"])){
    session_unset("usuarios");
}

if(isset($_SESSION["usuarios"])){
    header("location:../plantilla/pagina.php");
}
else{*/
?>
    <main>
        <div class="contenedor">
            <div class="form-login">
                <form action="" method="POST">
                <p id="titulo">Inicio de sesión</p>
                <input class="caja" type="text" name="usuario" id="nombre" placeholder="Nombre de usuario">
                <input class="caja" type="password" name="contrasena" id="contrasena" placeholder="Contraseña">
                <p style="color: red; font-size: 14px;"  >
                <?php
                   if(isset($errorLogin)){
                       echo '*'.$errorLogin;
                    }else{
                        if(isset($_REQUEST["btnIniciar"])){
                            $nombre = $_POST['usuario'];
                            $_SESSION["Usuarios"] = $nombre;
    
                            if(isset($_COOKIE[$nombre])){
                                $cont = $_COOKIE[$nombre];
                                setcookie($nombre,$cont + 1,time()+3600);
                            }else{
                                setcookie($nombre,1,time()+3600);
                            }
                            header("location: plantilla/pagina.php");
                        }
                    }
               ?>
            </p>
                <input type="submit" class="boton" id="btnIngresar" value="Iniciar Sesion" name="btnIniciar">
                <a href = "../plantilla/paginaAgregarUsuario.php"> Registrarse </a>
                </form>
            </div>
        </div>
    </main>
    <?php
       // }
    ?>