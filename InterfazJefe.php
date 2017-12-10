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
        $nombreJ= $_SESSION["NombreJ"];
        $areaJ=$_SESSION["AreaJ"];
        
     ?>
  </head>

  
  <body>
    <div class="my-content" >
        <div class="container" > 

            <div class="row">
              <div class="col-sm-12" >
                  <h1><strong>EASYPAÑOL</strong> Bienvenido Jefe Area</h1>
                  <div class="mydescription">
                    <p>Formulario Administrativo de <?php echo ($nombreJ);
                    echo " ";
                    echo ($areaJ); ?></p>
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
                        <table  id="TablaOpciones">
                        	<tr>
                        	<td >
                            <div class="form-group">
                              <a href="Vista/revisarInforme.php"><button type="submit" name="revisar informes de pedidos" value="revisar informes de pedidos" class="mybtn">revisar informes de pedidos</button></a>
                            </div> 
                          </td>
                          
                        	 <td >
                        	  <div class="form-group">
                              <a href="Vista/agregarPañolero.php"><button type="submit" name="agregar pañolero" value="agregar pañolero" class="mybtn">agregar pañolero</button></a>
                            </div>
                           </td>

                           </tr>
                        	<tr>
                        	<td >
                        	<div class="form-group">
                              <a href="Vista/stockHerramientas.php"><button type="submit" name="ver stock de herramientas" value="ver stock de herramientas" class="mybtn">ver stock de herramientas</button></a>
                            </div>
                        	<td >
                          <div class="form-group">
                              <a href="Vista/agregarHerramienta.php"><button type="submit" name="agregar herramienta" value="agregar herramienta" class="mybtn">agregar herramienta</button></a>
                            </div>
                          </td>
                        	</tr>
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

