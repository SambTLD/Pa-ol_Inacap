
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
                      <div class="myform-top3">
                          <div class="myform-top-left3">
                              <p>Presiona alguna opcion</p>
                          </div>
                          <div class="myform-top-right3">
                          </div>
                      </div>
                      <div class="myform-bottom3">
                       
                        	<table>
			 <?php 
       session_start();
       $areaJ = $_SESSION["AreaJ"];
    include "../Conexion/Conex.php";
   	$sql = "SELECT * FROM herramienta where Area='".$areaJ."'";
	$result = $db->query($sql);

	if ($result->num_rows > 0) {

	    echo "<table id='table2' border='1px'><tr><td id='tdarriba3' >nombre</td><td id='tdarriba3'>codigo</td><td id='tdarriba3'>foto</td><td id='tdarriba3'>estado</td><td id='tdarriba3'>stock</td><td id='tdarriba3'>Area</td></tr>";

	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "<tr><td id='tdarriba2'>".$row["nombre"]."</td><td id='tdarriba2'>".$row["codigo"]."</td><td id='tdarriba2'><img height='100px' width='100px' src='data:image/jpg;base64,".base64_encode($row['foto'])."'/></td><td id='tdarriba2'>".$row["estado"]."</td><td id='tdarriba2'>".$row["stock"]."</td><td id='tdarriba2'>".$row["Area"]."</td></tr>";
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