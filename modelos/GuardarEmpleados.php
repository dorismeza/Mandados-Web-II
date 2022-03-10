<?php

include('../BD/dbC.php');

if (isset($_POST['GuardarEmpleados'])) {
  $Nombre = $_POST['NombreEmpleado'];
  $Apellido = $_POST['ApellidoEmpleado'];
  $Telefono = $_POST['TelefonoEmpleado'];
  $Direccion = $_POST['CorreoEmpleado'];
  $query = "INSERT INTO empleado(NombreEmpleado,ApellidoEmpleado,TelefonoEmpleado,CorreoEmpleado) VALUES ('$NombreEmpleado','$ApellidoEmpleado','$TelefonoEmpleado', '$CorreoEmpleado')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Guardado Exitoso!';
  $_SESSION['message_type'] = 'success';
  header('Location:../plantilla/paginaEmpleado.php');

}

?>
