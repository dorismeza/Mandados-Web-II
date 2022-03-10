<?php

include("BD/dbL.php");

if(isset($_GET['IdUsuario'])) {
  $IdUsuario = $_GET['IdUsuario'];
  $query = "DELETE FROM usuarios WHERE IdUsuario = $IdUsuario";
  $result = mysqli_query($connL, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'El campo se elimino con exito!';
  $_SESSION['message_type'] = 'danger';
  header('Location: plantilla/paginaUsuario.php');
}

?>