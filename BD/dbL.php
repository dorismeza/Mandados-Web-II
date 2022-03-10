<?php
session_start();

$connL = mysqli_connect(
  'localhost',
  'root',
  'hola1901',
  'mandaditos'
) or die(mysqli_erro($mysqli));

?>
