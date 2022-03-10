<?php

include('BD/dbL.php');

if (isset($_POST['GuardarUsuario'])) {
  $Usuario = $_POST['Usuario'];
  $Contrasena = $_POST['Contrasena'];
  $Contrasena = hash ('sha512', $Contrasena);
  $IdTipoUsuario = $_POST['IdTipoUsuario'];
  $query = "INSERT INTO usuarios(Usuario,Contrasena,IdTipoUsuario) VALUES ('$Usuario','$Contrasena','$IdTipoUsuario')";
  $result = mysqli_query($connL, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Guardado Exitoso!';
  $_SESSION['message_type'] = 'success';
  header('Location: plantilla/paginaUsuario.php');

}

?>