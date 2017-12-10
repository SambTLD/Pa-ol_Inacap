<!DOCTYPE html>
<html lang="es">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Interfaz de pañol</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">    
    <link rel="stylesheet" href="awesome/css/font-awesome.min.css"> <!--Iconos--> 
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <?php 
        session_start();
        $nombre2 = $_SESSION["Nombre"];
       $AreaP = $_SESSION["AreaP"];
     ?>
  </head>

  
  <body>
    <div class="my-content" >
        <div class="container" > 

            <div class="row">
              <div class="col-sm-12" >
                  <h1><strong>EASYPAÑOL</strong> Bienvenido Pañol</h1>
                  <div class="mydescription">
                    <p>Formulario Administrativo de <?php echo ($nombre2); echo " "; echo ($AreaP); ?></p>
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
                      <div class="myform-bottom">
                       <center>
                        <table id="TablaOpciones">
                        	<tr>
                        	<td >
                            <div class="form-group">
                              <a href="Vista/VerHerramientas.php"><button type="submit" class="btn1" name="VerStockHerramienta" value="Ver Stock Herramienta" id="btnverH" >Ver stock de herramienta</button></a>
                            </div> 
                          </td>
                          
                        	 <td >
                        	  <div class="form-group">
                              <a href="Vista/BuscarAlumno.php"><button type="submit" class="btn1" name="BuscarAlumno" value="Buscar Alumno" id="btnbuscarA" >Prestar Herramientas</button></a>
                            </div>
                           </td>

                           </tr>
                        	<tr>
                        	<td >
                        	<div class="form-group">
                              <a href="Vista/BuscarHerramienta.php"><button type="submit" class="btn1" name="BuscarHerramienta" value="BuscarHerramienta" id="btnbuscarH" >Buscar Herramientas</button></a>
                            </div>
                        	<td  >
                          <div class="form-group">
                              <a href="Vista/devolverHerramientas.php"><button type="submit" class="btn1" name="CambiarEstado" value="CambiarEstado" id="btndevolver" >Devolución Herramientas</button></a>
                            </div>
                          </td>
                        	</tr>
                        	<tr><td align="center" colspan="2">
                            <div class="form-group">
                              <a href="Vista/verPedidos.php"><button type="submit" class="btn1" name="Ver Pedidos" value="Ver Pedidos" id="btnpedido" >Ver Pedidos</button></a>
                            </div>
                          </td><td></td></tr>
                        </table>
                        </center>
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


    <script src="js/bootstrap.min.js"></script>
  </body>

</html>

