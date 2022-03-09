<?php

include('BD/dbC.php');

if (isset($_POST['GuardarClientes'])) {
  $Nombre = $_POST['Nombre'];
  $Apellido = $_POST['Apellido'];
  $Telefono = $_POST['Telefono'];
  $Direccion = $_POST['Direccion'];
  $query = "INSERT INTO clientes(Nombre,Apellido,Telefono,Direccion) VALUES ('$Nombre','$Apellido','$Telefono', '$Direccion')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Guardado Exitoso!';
  $_SESSION['message_type'] = 'success';
  header('Location: plantilla/paginaCliente.php');

}

?>
