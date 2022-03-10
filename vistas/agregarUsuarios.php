
<?php
   session_start();
    if(!isset($_SESSION['username'])){
        header("location: ../plantilla/paginaLogin.php" );
    }else{

?>
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

          <!--<div class = "form-group">
          <label for="inputState">Tipo Usuario</label>
          <input class="form-control" name="IdTipoUsuario">
            <select id="inputState" class="form-control" name="IdTipoUsuario">
              <option selected>Tipo...</option>
              <option>1</option>
              <option>2</option>
            </select>
            
          </div>-->


          <form class="form-group">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Tipo Usuario</label>
              <select class="custom-select my-1 mr-sm-2" name="IdTipoUsuario">
                <option selected>Elige...</option>
                <option>Administrador</option>
                <option>Usuario</option>
              </select>
          
          
          <div class = "form-group">
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>  
          </div>
            
        </div>
    </form>
  </section>
  <?php
   }
?>


