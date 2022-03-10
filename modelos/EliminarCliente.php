<?php

include("../BD/dbC.php");

if(isset($_GET['Id'])) {
  $Id = $_GET['Id'];
  $query = "DELETE FROM clientes WHERE Id = $Id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'El campo se elimino con exito!';
  $_SESSION['message_type'] = 'danger';
  header('Location: ../plantilla/paginaCliente.php');
}

?>
