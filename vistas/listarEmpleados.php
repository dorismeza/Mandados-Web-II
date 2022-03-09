<?php
   session_start();
    if(isset($_SESSION['username'])){
        header("location: ../plantilla/paginaLogin.php" );
    }else{

?>
<?php
    include_once('../controladores/controladorEmpleado.php');
?>
<main class="container">
    <div class="form-contacto">
      <table class="table table-borderless">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $lista=listar();
          for($i=0;$i<count($lista);$i++){?>
          <tr>
            <th scope="row"><?php echo $lista[$i]["IdEmpleado"];?></th>
            <th scope="row"><?php echo $lista[$i]["NombreEmpleado"];?></th>
            <th scope="row"><?php echo $lista[$i]["ApellidoEmpleado"];?></th>
            <th scope="row"><?php echo $lista[$i]["TelefonoEmpleado"];?></th>
            <th scope="row"><?php echo $lista[$i]["CorreoEmpleado"];?></th>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

  </main>
  <?php
   }
?>