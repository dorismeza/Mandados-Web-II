<?php
session_start();

session_destroy();

header("location: ../plantilla/paginaLogin.php");
exit();

?>