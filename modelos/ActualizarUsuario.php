<?php
include("../BD/dbL.php");


$title = '';
$description= '';

if  (isset($_GET['IdUsuario'])) {
  $IdUsuario = $_GET['IdUsuario'];
  $query = "SELECT Usuario, IdTipoUsuario FROM usuarios WHERE IdUsuario=$IdUsuario";
  $result = mysqli_query($connL, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Usuario = $row['Usuario'];
    $IdTipoUsuario = $row['IdTipoUsuario'];
  }
}

if (isset($_POST['update'])) {
  $IdUsuario = $_GET['IdUsuario'];
    $Usuario =  $_POST['Usuario'];
    $IdTipoUsuario =  $_POST['IdTipoUsuario'];

  $query = "UPDATE usuarios set Usuario = '$Usuario', IdTipoUsuario= '$IdTipoUsuario' WHERE IdUsuario=$IdUsuario";
  mysqli_query($connL, $query);
  $_SESSION['message'] = 'Usuario actualizado con exito!';
  $_SESSION['message_type'] = 'warning';
  header('Location: ../plantilla/paginaUsuario.php');
}

?>
<?php include('../plantilla/encabezado.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="ActualizarUsuario.php?IdUsuario=<?php echo $_GET['IdUsuario']; ?>" method="POST">
        <div class="form-group">
          <input name="Usuario" type="text"  required="" pattern="[a-zA-Z]+" class="form-control" value="<?php echo $Usuario; ?>" placeholder="Update Usuario">
        </div>

        <div class = "form-group">
            <select class="form-control" name="IdTipoUsuario" value="<?php echo $IdTipoUsuario; ?>">
              <option selected>Tipo...</option>
              <option>Empleado</option>
              <option>Administrador</option>
            </select>
          </div>
<!--
        <div class="form-group">
          <input name="IdTipoUsuario" type="text"  required="" pattern="[a-zA-Z]+"class="form-control" value="" placeholder="Update Tipo Usuario">
        </div>
-->
        <button class="btn-success" name="update">
          Actualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>