<?php
    include_once('encabezado.php');
?>
<body>
<section>
<header>
  <div class="submenu1">
  
  </div>
  <div class="contenedor">
    
      <a href="./index.html" id="Logo"><img src="./img/man.png" alt="logo" width="400px" height="90px"></a>
      <input type="checkbox" name="" id="menuBar">
            <label class="icon-menu" for="menuBar"></label>
      <nav class="menu">
          <a href="#">Inicio</a>
          <a href="">Clientes</a>
          <a href="">Empleados</a>
          <a href="">Ordenes</a>
          <a href="">Comercio</a>
      </nav>

  </div>
</header>
</section>

<?php
    include_once('../vistas/login.php');
?>

<?php
    include_once('pie.php');
?>