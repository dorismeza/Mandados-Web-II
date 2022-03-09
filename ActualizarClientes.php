<?php
include("BD/dbC.php");


$title = '';
$description= '';

if  (isset($_GET['Id'])) {
  $Id = $_GET['Id'];
  $query = "SELECT * FROM clientes WHERE Id=$Id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Nombre = $row['Nombre'];
    $Apellido = $row['Apellido'];
    $Telefono = $row['Telefono'];
    $Direccion = $row['Direccion'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['Id'];
    $Nombre =  $_POST['Nombre'];
    $Apellido =  $_POST['Apellido'];
    $Telefono =  $_POST['Telefono'];
    $Direccion =  $_POST['Direccion'];

  $query = "UPDATE clientes set Nombre = '$Nombre', Apellido = '$Apellido' , Telefono= '$Telefono', Direccion = '$Direccion' WHERE Id=$Id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Cliente actualizado con exito!';
  $_SESSION['message_type'] = 'warning';
  header('Location: plantilla/paginaCliente.php');
}

?>
<?php include('plantilla/encabezado.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="ActualizarClientes.php?Id=<?php echo $_GET['Id']; ?>" method="POST">
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
