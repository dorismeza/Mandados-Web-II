
<?php
   session_start();
    if(isset($_SESSION['username'])){
        header("location: ../plantilla/paginaLogin.php" );
    }else{

?>
<?php
include_once('../controladores/conexion.php');
$obj = new conexion();
$conexion = $obj -> conexion();
$IdUsuario = isset($_GET['IdUsuario']);
$sql = "SELECT Usuario, Contrasena, IdTipoUsuario FROM usuarios WHERE IdUsuario = '$IdUsuario'";

$result = mysqli_query($conexion, $sql);
$ver = mysqli_fetch_row($result);

?>

<body>
  <section class = "container bg-light rounded">
    <div class = "col-sm-12 col-md-12 col-lg-12">

    <form class = "formulario" action="../controladores/ActualizarUsuario.php" method = "POST">
      <h3 class = "text-center"> Registro Usuario </h3>

          <div class="form-group">
          <input type="text" hidden ="" value = "<?php echo $IdUsuario?>" name="IdUsuario">
            <label for="inputEmail4">Usuario</label>
            <input class="form-control" name="Usuario" value = "<?php echo $ver[0];?>">
          </div>

          <div class="form-group">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" name="Contrasena" value = "<?php echo $ver[1];?>">
          </div>

          <div class = "form-group">
          <label for="inputState">Tipo Usuario</label>
            <select id="inputState" class="form-control" name="TipoUsuario" value = "<?php echo $ver[2];?>">
              <option selected>Tipo...</option>
              <option>1</option>
              <option>2</option>
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
  <?php
   }
?>