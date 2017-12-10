
</html>
<!DOCTYPE html>
<html lang="es">
  
  <head>
  <script type="text/javascript">
<!--
//function ventanaNueva(){ 
	//window.open('Detalle.php','nuevaVentana','width=300, height=400')
//}
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
                              <p>Verifique los Datos correspondientes</p>
                          </div>
                          <div class="myform-top-right">
                          </div>
                      </div>
                      <div class="myform-bottom">
                       <form action="../Controladores/enviarInforme.php" method="post">
                        	<table>
			<tr>
        <td>Nombre Herramienta:</td>
        <td><?php  $nombre=$_GET['nombre']; echo ($nombre); ?></td>
      </tr>
      <tr>
        <td>Stock Herramienta:</td>
        <td><?php  $stock=$_GET['stock']; echo ($stock); ?></td>
      </tr>
      <tr>
        <td>Codigo Herramienta:</td>
        <td><?php  $codigo=$_GET['codigo']; echo ($codigo); ?></td>
      </tr>
      <tr>
        <td>Herramienta Consumible:</td>
        <td><?php  $estado=$_GET['estado']; echo ($estado); ?></td>
      </tr>
      <tr>
        <td>Nombre Pañolero:</td>
        <td>
        <?php  
        session_start();
        $nombrePañolero = $_SESSION["Nombre"];
        $_SESSION["NH"] = $nombre;
        $_SESSION["stock"] = $stock;
        $_SESSION["codigo"] = $codigo;
        $_SESSION["estado"] = $estado;
        $_SESSION["NP"] = $nombrePañolero;
        
        echo ($nombrePañolero);
        ?>
      </td>
      </tr>
      <tr>
        <td>Fecha solicitud:</td>
        <td><?php  $fecha_actual = date("Y-m-d"); echo ($fecha_actual); 

        $_SESSION["fecha"] = $fecha_actual;?></td>
      </tr>
      <tr>
        <td>Descripcion:</td>
        <td><input type="text" name="txtDescripcion"></td>
      </tr>
      <tr>
        <td>Nivel Urgencia:</td>
        <td>
            <select name="NU"> 
            <option value="Alto">Alto</option> 
            <option value="Medio">Medio</option> 
            <option value="Bajo">Bajo</option> 
            </select> 
            </td>
      </tr>
      <tr>
        <td colspan="2" align="center"><button type="submit" name="generarInforme" value="Enviar Informe" class="mybtn">Enviar Informe a Jefe de area</button></td><td></td>
      </tr>
		</table>
  </form>
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



