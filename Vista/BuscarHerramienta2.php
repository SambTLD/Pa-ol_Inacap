
</html>
<!DOCTYPE html>
<html lang="es">
  
  <head>
      <?php
      session_start(); 
      $AreaP = $_SESSION["AreaP"];
        ?>
    
  <script src="../js/jquery.js"></script>
  <script>
      $(document).ready(function(){
                                
        var consulta;
                                                                          
         //hacemos focus al campo de búsqueda
        $("#busqueda").focus();
                                                                                                    
        //comprobamos si se pulsa una tecla
        $("#busqueda").keyup(function(e){
                                     
              //obtenemos el texto introducido en el campo de búsqueda
              consulta = $("#busqueda").val();
                                                                  
              //hace la búsqueda
                                                                                  
              $.ajax({
                    type: "POST",
                    url: "../Controladores/ControladorBuscar2.php",
                    data: "b="+consulta,
                    dataType: "html",
                    beforeSend: function(){
                          //imagen de carga
                          $("#resultado").html("<p align='center'><img src='ajax-loader.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){                                                    
                          $("#resultado").empty();
                          $("#resultado").append(data);
                                                             
                    }
              });
                                                                                  
                                                                           
        });
                                                                   
});
      </script>
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
                              <p color="red">Escriba el nombre de la herramienta que busca </p>
                          </div>
                          <div class="myform-top-right">
                          </div>
                      </div>
                      <div class="myform-bottom">
                       <form method="POST" action="../Controladores/AñadirPedido.php">
                        	<table id="table2">
			                    <div id="buscador">
            <input type="text" id="busqueda" />
              <div id="resultado">
              <?php  
               echo ("<tr>
                <td id='tdarriba1'>Rut alumno seleccionado</td><td><input type='text' readonly='readonly' name=".$_GET['alumno']." value=".$_GET['alumno']."></td>
                </tr>");
              ?>
              </div>
            </div>
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