<?php
 
      $buscar = $_POST['b'];
       
      if(!empty($buscar)) {
            buscar($buscar);
      }
       
      function buscar($b) {
             define('DB_SERVER', 'localhost:3306');
            define('DB_USERNAME', 'root');
            define('DB_PASSWORD', '');
            define('DB_DATABASE', 'bddpanol1');
            $con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
            $sql = "SELECT * FROM alumno WHERE rut = '".$b."'";
            $result = mysqli_query($con,$sql);
            $contar = mysqli_num_rows($result);
            if($contar == 0){
                  echo "No se han encontrado resultados para '<b>".$b."</b>'.";
            }else{ 
                  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                        $nombre = $row['nombre'];
                        $rut = $row['rut'];
                        $carrera = $row['carrera'];
                        $apellido = $row['apellido'];
                      
                      echo("<table id='table2'>
                        <tr>
                        <td id='tdarriba1'>Nombre</td>
                        <td id='tdarriba1'>Apellido</td>
                        <td id='tdarriba1'>Rut</td>
                        <td id='tdarriba1'>Carrera</td>
                        </tr>
<tr>
 <td id='tdarriba2'>".$nombre."</td>
 <td id='tdarriba2'>".$apellido."</td>
<td id='tdarriba2'>".$rut."</td>
<td id='tdarriba2'>".$carrera."</td>

</tr>
                        </table>");
                  
                 

                  
                 
                 session_start();
               $_SESSION["rut"] = $rut;
                ?> 
                  
                  <img height="150px" width="150px" src="data:image/jpg;base64, <?php echo base64_encode($row['foto']); ?> "/>
                  


<?php
echo ("<a href=BuscarHerramienta2.php?alumno=".$rut."><div class='btn2'>Pedir herramienta</div></a>");
            }
      }
       
 ?> 