
</html>
<!DOCTYPE html>
<html lang="es">
  
  <head>
  <script type="text/javascript">
<!--
function ventanaNueva(){ 
	window.open('Detalle.php','nuevaVentana','width=300, height=400')
}
//-->
</script>
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
                      <div class="myform-top2">
                          <div class="myform-top-left2">
                              <p>Listado de Informes</p>
                          </div>
                          <div class="myform-top-right2">
                          </div>
                      </div>
                      <div class="myform-bottom2">
                       
                        	<table>
			 <?php 
       session_start();
       $Area = $_SESSION["AreaJ"];
    include "../Conexion/Conex.php";
   	$sql = "SELECT * FROM informes where Area='".$Area."'";
	$result = $db->query($sql);

	if ($result->num_rows > 0) {

	    echo "<table id='table2' border='1px'><tr><td id='tdarriba3'>nombre</td><td id='tdarriba3'>stock</td><td id='tdarriba3'>codigo</td><td id='tdarriba3'>estado</td><td id='tdarriba3'>nombre Pañolero</td><td id='tdarriba3'>fecha</td><td id='tdarriba3'>descripcion</td><td id='tdarriba3'>nivel urgencia</td></tr>";

	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "<tr><td id='tdarriba2'>".$row["nombre"]."</td><td id='tdarriba2'>".$row["stock"]."</td><td id='tdarriba2'>".$row["codigo"]."</td><td id='tdarriba2'>".$row["estado"]."</td><td id='tdarriba2'>".$row["nombreP"]."</td><td id='tdarriba2'>".$row["fecha"]."</td><td id='tdarriba2'>".$row["descripcion"]."</td><td id='tdarriba2'>".$row["nivelU"]."</td></tr>";
	    }

	    echo "</table>";
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
                 <div class="col-sm-12 mysocial-login">
                    <h3>Visita también</h3>
                    <div class="mysocial-login-buttons" >
                      <a class="mybtn-social" href="http://www.inacap.cl/portal">
                      <i></i> Inacap
                      </a>
                     
                    </div>
                </div>   
            </div>

        </div>
    </div>


    <script src="../js/bootstrap.min.js"></script>
  </body>

</html>