<?php
 session_start();
 $usuario = $_SESSION['username'];

  if(!isset($_SESSION['username'])){
    header("location: ../plantilla/paginaLogin.php ");
  }
  else{
      if(isset($_COOKIE['username'])){
          $cont = $_COOKIE[$usuario];
          setcookie($usuario,$cont + 1,time()+3600);
      }else{
          setcookie($usuario,1,time()+3600);
    }
?>
  <main class="contenedorIni">
    <div class="container" >
      <div>
      <h5 class="card-title"> Bienvenido(a); <?php 
        echo $usuario;
     ?></h5>

      </div>

     </div>

      <br>
      <div class="row row-cols-1 row-cols-md-2">
          <div class="col mb-6">
            <div class="card text-center"  style="background-color: rgb(239, 231, 182);">
              <img src="../plantilla/img/empleado.png" class="rounded mx-auto d-block" width="150px" height="150px">
              <div class="card-body">
                <h5 class="card-title"> Empleado</h5>
                <a class="btn btn-primary" href="../plantilla/paginaEmpleado.php" role="button">Registrar</a>
              </div>
            </div>
          </div>
  
          <div class="col mb-4">
            <div class="card text-center" style="background-color: rgb(239, 231, 182);">
              <img src="../plantilla/img/tienda.png" class="rounded mx-auto d-block" width="150px" height="150px">
              <div class="card-body">
                <h5 class="card-title">Comercio</h5>
                <a class="btn btn-primary" href="../plantilla/paginaComercio.php" role="button">Registrar</a>
              </div>
            </div>
          </div>
  
          <div class="col mb-4">
            <div class="card text-center" style="background-color: rgb(239, 231, 182);">
              <img src="../plantilla/img/Cliente.png" class="rounded mx-auto d-block" width="150px" height="150px">
              <div class="card-body">
                <h5 class="card-title">Clientes</h5>
               
                <a class="btn btn-primary" href="../plantilla/paginaCliente.php" role="button">Registrar</a>
              </div>
            </div>
          </div>
  
          <div class="col mb-4">
            <div class="card text-center" style="background-color: rgb(239, 231, 182);">
              <img src="../plantilla/img/registro.png" class="rounded mx-auto d-block" width="150px" height="150px">
              <div class="card-body">
                <h5 class="card-title">Usuario</h5>
                <a class="btn btn-primary" href="../plantilla/paginaUsuario.php" role="button">Registrar</a>
              </div>
            </div>
          </div>
      </div>
  </div>
  </main>
  <?php
  }
  ?>