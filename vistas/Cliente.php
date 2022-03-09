<?php
   session_start();
    if(isset($_SESSION['username'])){
        header("location: ../plantilla/paginaLogin.php" );
    }else{

?>
<?php include("../BD/dbC.php"); ?>



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
        <form action="../GuardarClientes.php" method="POST">
          <div class="form-group">
            <input type="text" name="Nombre" required="" pattern="[a-zA-Z]+" class="form-control" placeholder="Nombre" autofocus>
          </div>
          <div class="form-group">
            <input name="Apellido" rows="2"  required="" pattern="[a-zA-Z]+" class="form-control" placeholder="Apellido"></input>
          </div>
          <div class="form-group">
            <input name="Telefono" rows="2"  required="" pattern="[0-9]+" class="form-control" placeholder="Telefono"></input>
          </div>
          <div class="form-group">
            <textarea name="Direccion" rows="2" required="" class="form-control" placeholder="Direccion"></textarea>
          </div>
          <input type="submit" name="GuardarClientes" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM clientes";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Apellido']; ?></td>
            <td><?php echo $row['Telefono']; ?></td>
            <td><?php echo $row['Direccion']; ?></td>
            <td>

              <a href="../ActualizarClientes.php?Id=<?php echo $row['Id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="../EliminarCliente.php?Id=<?php echo $row['Id']?>" class="btn btn-danger">
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

