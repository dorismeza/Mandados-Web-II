<?php
   session_start();
    if(!isset($_SESSION['username'])){
        header("location: ../plantilla/paginaLogin.php" );
    }else{

?>

<?php


include('../login/conexion.php');

  if(!empty($_POST)){
    
      $alert='';
      if( !empty( $_POST['$IdComercio']) || !empty( $_POST['$NombreProducto'])  || !empty( $_POST['$CategoriaProducto']) 
      || !empty( $_POST['$descrpcion']) ||  !empty( $_POST['$precio']))
      {
        $alert='<p class="msg_error">Todos los campos son obligatorios.  <p>';
      }else{
   

          $IdComercio = $_POST ['IdComercio'];
          $NombreProducto= $_POST ['NombreProducto'];
          $CategoriaProducto = $_POST ['CategoriaProducto'];
          $descripcion = $_POST ['descrpcion'];  
          $precio = $_POST ['precio'];
        
         $foto = $_FILES['foto'];
         $nombre_foto = $foto['name'];
         $type        =  $foto['type'];
         $url_temp =  $foto['tmp_name'];

         $imgProducto ='img_producto.png';

         if($nombre_foto != ''){
             $destino='img';
             $img_nombre = 'img_'.md5(date('d-m-y H:m:s'));
             $imgProducto =$img_nombre.'.jpg';
             $src         =$destino.$imgProducto;
         }

            $query_insert = mysqli_query($conection,"INSERT INTO productoscomercio(IdComercio ,NombreProducto,CategoriaProducto,
                                                                 descripcion ,precio,foto)
                                                        values('$IdComercio','$NombreProducto','$CategoriaProducto',
                                                        '$descripcion','$precio','$imgProducto')");
            if($query_insert){
                if($nombre_foto != ''){
                    move_uploaded_file($url_temp,$src);
                }
                $alert='<p class="msg_save">Se creo correctamente el Registro <p>';
            } else{
                $alert='<p class="msg_error">No se pudo crear el Registro  <p>';
            }

   }
}

?>


<main>
    <div class=" alert" ><?php echo isset($alert) ? $alert: ''; ?> </div>
    <form action="" method="POST" enctype="multipart/form-data">
    <section class="form-register1">
        <h4>Formulario Registro Producto</h4>
        <h4>Comercio</h4>
            <td>
            <?php
            $query_comercio=mysqli_query ($conection,"SELECT  IdComercio,NombreComercio
              FROM comercio ");
            $result_comercio = mysqli_num_rows($query_comercio);
            mysqli_close($conection);
            ?>

                <select name="IdComercio" id="IdComercio" class="controls1">
                    <?php
                    if( $result_comercio > 0){
                        while($comercio = mysqli_fetch_array($query_comercio)){
                    ?>
                    <option value="<?php echo $comercio['IdComercio']?>"> <?php echo $comercio['NombreComercio'] ?> </option> 
                    <?php
                        }
                    }
                    ?>
                                
                </select>
            </td>
        <input class="controls1" type="text" name="NombreProducto" required id="NombreProducto" placeholder="Ingrese el nombre del producto">
        <input class="controls1" type="text" name="CategoriaProducto" required id="CategoriaProducto" placeholder="Ingrese la Categoria">
        <input class="controls1" type="text" name="descrpcion" required id="descripcion"  placeholder="Ingrese la descripcion del producto">
        <input class="controls1" type="text" name="precio" required id="precio"  placeholder="Ingrese el precio del producto">
        
        <div class="photo">
        <h4>Imagen del Producto</h4>
        <div class="prevPhoto">
        <span class="delPhoto notBlock">X</span>
        <label for="foto"></label>
        </div>
        <div class="upimg">
        <input type="file" name="foto" id="foto">
        </div>
        <div id="form_alert"></div>
</div>

     

        <br> <br>
        <input class="botons" type="submit" value="Registrar" name="enviar">
        
      </section>
    </form>
<br><br><br><br>
</main>

<?php
   }
?>