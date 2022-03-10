<?php

include("BD/dbC.php");

if(isset($_GET['IdEmpleado'])) {
  $IdEmpleado = $_GET['IdEmpleado'];
  $query = "DELETE FROM empleado WHERE IdEmpleado = $IdEmpleado";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'El campo se elimino con exito!';
  $_SESSION['message_type'] = 'danger';
  header('Location: plantilla/paginaEmpleado.php');
}

?>
