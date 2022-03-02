<?php
    include_once('../controladores/controladorFactura.php');
?>
<main class="container">

    <div class="form-contacto">
      <table class="table table-borderless">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Numero de Factura</th>
            <th scope="col">Fecha de Emision</th>
            <th scope="col">Estado</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $lista=listar();
          for($i=0;$i<count($lista);$i++){?>
          <tr>
            <th scope="row"><?php echo $lista[$i]["IdFactura"];?></th>
            <th scope="row"><?php echo $lista[$i]["NumeroFactura"];?></th>
            <th scope="row"><?php echo $lista[$i]["FechaEmision"];?></th>
            <th scope="row"><?php echo $lista[$i]["EstadoFactura"];?></th>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

  </main>