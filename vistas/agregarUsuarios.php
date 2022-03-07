<?php
include_once('../controladores/conexion.php');
include_once('../modelos/modeloUsuarios.php');
?>

<body>
  <section class = "container bg-light rounded">
    <div class = "col-sm-12 col-md-12 col-lg-12">

    <form class = "formulario" action="../controladores/GuardarUsuario.php" method = "POST">
      <h3 class = "text-center"> Registro Usuario </h3>

          <div class="form-group">
            <label for="inputEmail4">Usuario</label>
            <input class="form-control" name="Usuario">
          </div>

          <div class="form-group">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" name="Contrasena">
          </div>

          <div class = "form-group">
          <label for="inputState">Tipo Usuario</label>
            <select id="inputState" class="form-control" name="TipoUsuario">
              <option selected>Tipo...</option>
              <option>Empleado</option>
              <option>Administrador </option>
            </select>
          </div>
          
          
          <div class = "form-group">
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>  
          </div>
            
        </div>
    </form>
  </section>



