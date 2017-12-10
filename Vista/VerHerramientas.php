
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
                      <div class="myform-top">
                          <div class="myform-top-left">
                              <p>Presiona alguna opcion</p>
                          </div>
                          <div class="myform-top-right">
                          </div>
                      </div>
                      <div class='datagrid'>
                       
                        	<table>
			 <?php 
    include "../Conexion/Conex.php";
    session_start();
    $AreaP = $_SESSION["AreaP"];
   	$sql = "SELECT * FROM herramienta WHERE Area='".$AreaP."'";
	$result = $db->query($sql);

	if ($result->num_rows > 0) {

	    echo "<table  ><tr><td align='center' id='tdarriba'>Nombre</td><td align='center' id='tdarriba'>Detalle</td></tr>";

	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "<tr><td align='center'>".$row["nombre"]."</td><td align='center'>"."<a href=Detalle.php?valor=".$row["codigo"].">"."<button class='mybtn';> Ver Detalle</button></a></td></tr>";
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



