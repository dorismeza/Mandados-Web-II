<?php
   session_start();
    if(isset($_SESSION['username'])){
        header("location: ../plantilla/paginaLogin.php" );
    }else{

?>
<?php
include_once('../controladores/conexion.php');
include_once('../modelos/modeloUsuarios.php');
?>
<main class="container">
    <div class="form-contacto">
      <table class="table table-borderless">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Usuario</th>
            <th scope="col">Contrasena</th>
            <th scope="col">TipoUsuario</th>
          </tr>
        </thead>

        <?php
          $obj = new Usuario();
          $sql = "SELECT IdUsuario, Usuario, Contrasena, IdTipoUsuario FROM usuarios";
          $datos = $obj -> mostra($sql);
        ?>

        <tbody>
          <?php
          foreach($datos as $key){?>
          <tr>
            <th scope="row"><?php echo $key["IdUsuario"];?></th>
            <th scope="row"><?php echo $key["Usuario"];?></th>
            <th scope="row"><?php echo $key["Contrasena"];?></th>
            <th scope="row"><?php echo $key["IdTipoUsuario"];?></th>
            <th> <a href = "../plantilla/paginaActualizarUsuario.php?IdUsuario = <?php echo $key['IdUsuario']; ?>"> Editar </a></th>
            <th> <a href = "../controladores/EliminarUsuario.php?IdUsuario = <?php echo $key['IdUsuario']; ?>"> Eliminar </a></th>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

  </main>
  <?php
   }
?>