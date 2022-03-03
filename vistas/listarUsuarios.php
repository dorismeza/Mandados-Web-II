<?php
    include_once('../controladores/controladorUsuario.php');
?>
<main class="container">
    <div class="form-contacto">
      <table class="table table-borderless">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Usuario</th>
            <th scope="col">Contrasena</th>
            <th scope="col">IdTipoUsuario</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $lista=listar();
          for($i=0;$i<count($lista);$i++){?>
          <tr>
            <th scope="row"><?php echo $lista[$i]["Idusuario"];?></th>
            <th scope="row"><?php echo $lista[$i]["Usuario"];?></th>
            <th scope="row"><?php echo $lista[$i]["Contrasena"];?></th>
            <th scope="row"><?php echo $lista[$i]["IdTipoUsuario"];?></th>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

  </main>