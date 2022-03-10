<?php
session_start();

$connL = mysqli_connect(
  'localhost',
  'root',
  'Fenix2022',
  'mandaditos'
) or die(mysqli_erro($mysqli));

?>
