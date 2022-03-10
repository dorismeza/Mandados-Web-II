<?php
   session_start();
    if(isset($_SESSION['username'])){
        header("location: ../plantilla/paginaLogin.php" );
    }else{
?>
<?php include("../BD/dbL.php"); ?>



<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="../GuardarUsuario.php" method="POST">
          <div class="form-group">
            <input type="text" name="Usuario" required="" pattern="[a-zA-Z]+" class="form-control" placeholder="Usuario" autofocus>
          </div>
          <div class="form-group">
            <input type = "password" name="Contrasena" rows="2"  required="" pattern="[A-Za-z0-9]+" class="form-control" placeholder="Contrasena"></input>
          </div>
          <div class = "form-group">
            <select id="inputState" class="form-control" name="IdTipoUsuario">
              <option selected>Tipo...</option>
              <option>Empleado</option>
              <option>Administrador</option>
            </select>
          </div>


          <input type="submit" name="GuardarUsuario" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Id</th>
            <th>Usuario</th>
            <th>Tipo Usuario</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM usuarios";
          $result_tasks = mysqli_query($connL, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['IdUsuario']; ?></td>
            <td><?php echo $row['Usuario']; ?></td>
            <td><?php echo $row['IdTipoUsuario']; ?></td>
            <td>

              <a href="../ActualizarUsuario.php?IdUsuario=<?php echo $row['IdUsuario']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              <a href="../EliminarUsuario.php?IdUsuario=<?php echo $row['IdUsuario']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>
<?php
   }
?>

