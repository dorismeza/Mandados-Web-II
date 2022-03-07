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
          $sql = "SELECT IdUsuario, Usuario, Contrasena, TipoUsuario FROM usuarios";
          $datos = $obj -> mostra($sql);
        ?>

        <tbody>
          <?php
          for($i=0;$i<count($datos);$i++){?>
          <tr>
            <th scope="row"><?php echo $datos[$i]["IdUsuario"];?></th>
            <th scope="row"><?php echo $datos[$i]["Usuario"];?></th>
            <th scope="row"><?php echo $datos[$i]["Contrasena"];?></th>
            <th scope="row"><?php echo $datos[$i]["TipoUsuario"];?></th>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

  </main>