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
      if( !empty( $_POST['$IdComercio']) || empty( $_POST['$IdEmpleado'])
       || !empty( $_POST['$IdCliente'])|| !empty( $_POST['$precioEnvio'])
         || !empty( $_POST['$Cantidad']))

      {
        $alert='<p class="msg_error">Todos los campos son obligatorios.  <p>';
      }else{
   

          $IdComercio = $_POST ['IdComercio'];
          $IdEmpleado= $_POST ['IdEmpleado'];
          $IdCliente = $_POST ['IdCliente'];
          $precioEnvio = $_POST ['precioEnvio'];  
          $Cantidad = $_POST ['Cantidad'];
   

            $query_insert = mysqli_query($conection,"INSERT INTO pedidos(IdComercio 
                                                    ,IdEmpleado,IdCliente
                                                    ,precioEnvio ,Cantidad)
                         values('$IdComercio','$IdEmpleado','$IdCliente',
                                '$precioEnvio','$Cantidad')");
            if($query_insert){
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
        <h4>Formulario Registro Pedidos</h4>
        <h4>Comercio</h4>
            <td>
            <?php
            $query_comercio=mysqli_query ($conection,"SELECT  IdComercio,NombreComercio
              FROM comercio ");
            $result_comercio = mysqli_num_rows($query_comercio);
        
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


            <h4>Clientes</h4>
            <td>
            <?php

            $query_clientes=mysqli_query ($conection,"SELECT  Id,Concat(Nombre,' ',Apellido)As NombreC
            FROM clientes ");
            $result_clientes = mysqli_num_rows($query_clientes);

           
            ?>

                <select name="IdCliente" id="IdCliente" class="controls1">
                    <?php
                    if( $result_clientes > 0){
                        while($clientes = mysqli_fetch_array($query_clientes)){
                    ?>
                    <option value="<?php echo $clientes['Id']?>"> <?php echo $clientes['NombreC'] ?> </option> 
                    <?php
                        }
                    }
                    ?>
                                
                </select>
 
            </td>            

            <h4>Empleados</h4>
            <td>
            <?php
          

            $query_empleado=mysqli_query ($conection,"SELECT  IdEmpleado,CONCAT(NombreEmpleado,' ',ApellidoEmpleado)AS NombreC
            FROM empleado ");
            $result_empleado = mysqli_num_rows($query_empleado);


            ?>

                <select name="IdEmpleado" id="IdEmpleado" class="controls1">
                    <?php
                    if( $result_empleado > 0){
                        while($empleado = mysqli_fetch_array($query_empleado)){
                    ?>
                    <option value="<?php echo $empleado['IdEmpleado']?>"> <?php echo $empleado['NombreC'] ?> </option> 
                    <?php
                        }
                    }
                    ?>
                                
                </select>
 
            </td>
        <input class="controls1" type="text" name="precioEnvio" required id="precioEnvio" placeholder="Ingrese el Precio del envio">
        <input class="controls1" type="text" name="Cantidad" required id="Cantidad"  placeholder="Ingrese de productos">
        
        
</div> 

        <br> <br>
        <input class="botons" type="submit" value="Registrar" name="enviar">
        
      </section>
    </form>









    
    <section id="container">  
        <h1>Lista de Pedidos </h1><br><br>
     
        <table>
            <tr>
                <th>ID</th>
                <th>Comercio</th>
                <th>Empleado</th>
                <th>Cliente</th>
                <th>Precio Envio</th>
                <th>Cantidad</th>
             
            </tr>
            <?php
            $query = mysqli_query($conection, "SELECT a.IdPedido,b.NombreComercio,
                                Concat(c.NombreEmpleado,' ',c.ApellidoEmpleado )AS NombreE,
                                Concat(d.Nombre,' ',d.Apellido )AS NombreC         
                                , a.precioEnvio ,a.Cantidad
                                from pedidos a
                                INNER JOIN comercio b
                                ON a.IdComercio = b.IdComercio 
                                INNER JOIN empleado c
                                ON a.IdEmpleado = c.IdEmpleado
                                INNER JOIN clientes d
                                ON a.IdCliente = d.Id
                                 ");
             
                
                $result = mysqli_num_rows ($query);
                if($result > 0){
                    while($data = mysqli_fetch_array($query)){
                     /*   if($data ['foto']!='img_producto.png'){
                            $foto = 'img/'.$data['foto'];
                        }/*else{
                            $foto='img/'.$data['foto'];
                        }*/
                 
                ?>
            <tr>
                <th><?php echo $data["IdPedido"] ?></th>
                <th><?php echo $data["NombreComercio"] ?></th>
                <th><?php echo $data["NombreE"] ?></th>
                <th><?php echo $data["NombreC"] ?></th>
                <th><?php echo $data["precioEnvio"] ?></th>
                <th><?php echo $data["Cantidad"] ?></th>
               
            </tr>
            <?php
        }
    }
?>
        </table>
    
    </section>              



<br><br><br><br>
</main>


<?php
   }
?>