
</html>
<!DOCTYPE html>
<html lang="es">
  
  <head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Interfaz de pañol</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">    
    <link rel="stylesheet" href="../awesome/css/font-awesome.min.css"> <!--Iconos--> 
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="../css/custom.css">
  </head>

  
  <body>
    <div class="my-content" >
        <div class="container" > 

            <div class="row">
              <div class="col-sm-12" >
                  <h1><strong>EASYPAÑOL</strong> Bienvenido Pañol</h1>
                  <div class="mydescription">
                    <p>Formulario Administrativo</p>
                  </div>
              </div>
            </div>

            <div class="row">
                  <div class="col-sm-6 col-sm-offset-3 myform-cont" >
                      <div class="myform-top">
                          <div class="myform-top-left">
                              <p></p>
                          </div>
                          <div class="myform-top-right">
                          </div>
                      </div>
                      <div class="myform-bottom">
                       
                  <table id="tablaDetalle">
    <?php 
        include "../Conexion/Conex.php";
      
        $sql = "SELECT * FROM herramienta WHERE codigo ='".$_GET["valor"]."'";
	

            $result = $db->query($sql);
            if ($result->num_rows > 0) {

             echo "<table id='table2' ><tr><td id='tdarriba1'>Nombre</td><td id='tdarriba1'>Estado</td><td id='tdarriba1'>Codigo</td><td id='tdarriba1'>Stock</td><td id='tdarriba1'>Foto</td></tr>";

      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo "<tr><td id='tdarriba2'>".$row["nombre"]."</td><td id='tdarriba2'>".$row["estado"]."</td><td id='tdarriba2'>".$row["codigo"]."</td><td id='tdarriba2'>".$row["stock"]."</td><td id='tdarriba2'><img height='50px' width='50px' src='data:image/jpg;base64, ".base64_encode($row["foto"])."'/></td></tr>";

      echo "</table>";
  } 
}
  else {
      echo "0 results";
  }
  $db->close();
    ?>
    </table>

                      </div>
                  </div>
            </div>

            <div class="row">
                
            </div>

        </div>
    </div>


    <script src="../js/bootstrap.min.js"></script>
  </body>

</html>