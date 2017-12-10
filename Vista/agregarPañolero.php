</html>
<!DOCTYPE html>
<html lang="es">
  
  <head>
  <script src="../js/jquery.js"></script>
  
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
                              <p color="red">Rellene el Formulario para continuar</p>
                          </div>
                          <div class="myform-top-right">
                          </div>
                      </div>
                      <div class="myform-bottom">
                       <form action="../Controladores/controladorAgregarP.php" method="POST">
                        	<table>
                          <tr>
                            <td id="tdarriba3">User:</td>
                            <td ><input type="text" name="txtUser"></td>
                          </tr>
                          <tr>
                            <td id="tdarriba3">Password:</td>
                            <td><input type="text" name="txtPass"></td>
                          </tr>
                          <tr>
                            <td id="tdarriba3">Nombre:</td>
                            <td><input type="text" name="txtNombre"></td>
                          </tr>
                          <tr>
                            <td id="tdarriba3">area:</td>
                            <td><input type="text" name="txtArea"  readonly='readonly' value=<?php 
                              session_start();
                              $area = $_SESSION["AreaJ"];

                            echo($area)?>></td>
                          </tr>
                          <tr>
                             <td id="tdarriba3"></td>
                            <td><input type="submit" value="AGREGAR PAÑOLERO" class="btn3"></td>
                           
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