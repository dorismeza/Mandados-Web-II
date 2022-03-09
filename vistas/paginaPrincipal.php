
  <main class="contenedorIni">
    <div class="container" >
      <div>
      <h5 class="card-title"> Bienvenido(a); <?php //echo $user->getNombre();?></h5>
      </div>
      <br>
      <div class="row row-cols-1 row-cols-md-2">
          <div class="col mb-6">
            <div class="card text-center"  style="background-color: rgb(239, 231, 182);">
              <img src="../plantilla/img/empleado.png" class="rounded mx-auto d-block" width="150px" height="150px">
              <div class="card-body">
                <h5 class="card-title"> Empleado</h5>
                <button type="button" class="btn btn-secondary btn-lg" >Registrar</button>
              </div>
            </div>
          </div>
  
          <div class="col mb-4">
            <div class="card text-center" style="background-color: rgb(239, 231, 182);">
              <img src="../plantilla/img/tienda.png" class="rounded mx-auto d-block" width="150px" height="150px">
              <div class="card-body">
                <h5 class="card-title">Comercio</h5>
                <button type="button" class="btn btn-secondary btn-lg " >Registrar</button>
              </div>
            </div>
          </div>
  
          <div class="col mb-4">
            <div class="card text-center" style="background-color: rgb(239, 231, 182);">
              <img src="../plantilla/img/ordenar.png" class="rounded mx-auto d-block" width="150px" height="150px">
              <div class="card-body">
                <h5 class="card-title">Ordenar</h5>
               
                <button type="button" class="btn btn-secondary btn-lg" >Registrar</button>
              </div>
            </div>
          </div>
  
          <div class="col mb-4">
            <div class="card text-center" style="background-color: rgb(239, 231, 182);">
              <img src="../plantilla/img/registro.png" class="rounded mx-auto d-block" width="150px" height="150px">
              <div class="card-body">
                <h5 class="card-title">Usuario</h5>
                <a class="btn btn-primary" href="../plantilla/paginaAgregarUsuario.php" role="button">Registrar</a>
                <a class="btn btn-primary" href = "../plantilla/paginaListarUsuarios.php" role="button"> Ver Usuarios</a>
              </div>
            </div>
          </div>
      </div>
  </div>
  </main>