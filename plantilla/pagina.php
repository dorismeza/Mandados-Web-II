<?php
    include_once('encabezado.php');
    
?>
<body>
<section>
<header>
  <div class="submenu1">
      
  <a href="../login/salir.php" id="nombreUsuarioActivo"><img src="./img/cerrar.png"  alt=""> Cerrar Sesion</a>
  </div>
  <div class="contenedor">
    
      <a href="pagina.php" id="Logo"><img src="./img/man.png" alt="logo" width="400px" height="90px"></a>
      <input type="checkbox" name="" id="menuBar">
            <label class="icon-menu" for="menuBar"></label>
      <nav class="menu">
          <a href="pagina.php">Inicio</a>
          <a href="paginaCliente.php">Clientes</a>
          <a href="">Empleados</a>
          <a href="">Productos</a>
      </nav>
  </div>
</header>
</section>
<?php
    include_once('../vistas/paginaPrincipal.php');
?>

<?php
    include_once('pie.php');
?>
