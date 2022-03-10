<?php
include("BD/dbC.php");



if  (isset($_GET['IdEmpleado'])) {
  $IdEmpleado = $_GET['IdEmpleado'];
  $query = "SELECT * FROM empleado WHERE IdEmpleado=$IdEmpleado";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Nombre = $row['NombreEmpleado'];
    $Apellido = $row['ApellidoEmpleado'];
    $Telefono = $row['TelefonoEmpleado'];
    $Direccion = $row['CorreoEmpleado'];
  }
}

if (isset($_POST['update'])) {
  $IdEmpleado = $_GET['IdEmpleado'];
    $Nombre =  $_POST['NombreEmpleado'];
    $Apellido =  $_POST['ApellidoEmpleado'];
    $Telefono =  $_POST['TelefonoEmpleado'];
    $Direccion =  $_POST['CorreoEmpleado'];

  $query = "UPDATE empleado set NombreEmpleado = '$NombreEmpleado', ApellidoEmpleado = '$ApellidoEmpleado' , TelefonoEmpleado= '$TelefonoEmpleado', CorreoEmpleado = '$CorreoEmpleado' WHERE IdEmpleado=$IdEmpleado";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Empleado actualizado con exito!';
  $_SESSION['message_type'] = 'warning';
  header('Location: plantilla/paginaEmpleado.php');
}

?>
<?php include('plantilla/encabezado.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="ActualizarEmpleados.php?IdEmpleado=<?php echo $_GET['IdEmpleado']; ?>" method="POST">
        <div class="form-group">
          <input name="Nombre" type="text"  required="" pattern="[a-zA-Z]+" class="form-control" value="<?php echo $Nombre; ?>" placeholder="Update Nombre">
        </div>
        <div class="form-group">
          <input name="Apellido" type="text"  required="" pattern="[a-zA-Z]+" class="form-control" value="<?php echo $Apellido; ?>" placeholder="Update Apellido">
        </div>
        <div class="form-group">
          <input name="Telefono" type="text"  required="" pattern="[0-9]+"class="form-control" value="<?php echo $Telefono; ?>" placeholder="Update Telefono">
        </div>
        <div class="form-group">
        <textarea name="Direccion" required="" class="form-control" cols="30" rows="10"><?php echo $Direccion;?></textarea>
        </div>
        <button class="btn-success" name="update">
          Actualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
