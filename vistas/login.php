<?php
   session_start();
    if(isset($_SESSION['username'])){
        header("location: ../plantilla/paginaLogin.php" );
    }else{

?>
    <main>
        <div class="contenedor">
            <div class="form-login">
                <form action="../login/loguear.php" method="POST">
                <p id="titulo">Inicio de sesión</p>
                <input class="caja" type="text" name="usuario" id="nombre" placeholder="Nombre de usuario">
                <input class="caja" type="password" name="contrasena" id="contrasena" value="" placeholder="Contraseña">
                
                <p style="color: red; font-size: 14px;">
                <?php
                
               ?>
                </p>
                <input type="submit" class="boton" id="btnIngresar" value="Iniciar Sesion" name="btnIniciar">
                </form>
            </div>
        </div>
    </main>
<?php
   }
?>