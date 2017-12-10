<?php
  
      $buscar = $_POST['b'];
      
       
      if(!empty($buscar)) {
            buscar($buscar);
      }
       
      function buscar($b) {
        session_start();
      $AreaP = $_SESSION["AreaP"];
             define('DB_SERVER', 'localhost:3306');
            define('DB_USERNAME', 'root');
            define('DB_PASSWORD', '');
            define('DB_DATABASE', 'bddpanol1');
            $con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
            $sql = "SELECT * FROM herramienta WHERE nombre = '".$b."' AND Area='".$AreaP."'";
            $result = mysqli_query($con,$sql);
            $contar = mysqli_num_rows($result);
            if($contar == 0){
                  echo "No se han encontrado resultados para '<b>".$b."</b>'.";
            }else{ 
            
                  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                        $nombre = $row['nombre'];
                        $stock = $row['stock'];
                        $codigo = $row['codigo'];
                        $estado = $row['estado'];
                        
                         echo("<table>
<tr>
<td>Nombre:</td><td>".$nombre."</td>
</tr>
<tr>
<td>Codigo:</td><td>".$codigo."</td>
</tr>
<tr>
<td>Estado:</td><td>".$estado."</td>
</tr>
<tr>
<td>Stock:</td><td>".$stock."</td>
</tr>
<tr>
<td><a href=../Vista/generarInforme.php?nombre=".$nombre."&stock=".$stock."&codigo=".$codigo."&estado=".$estado.">"."<button class='mybtn';> Generar Informe</button></a></td>

<td> <img height='100px' width='100px' src='data:image/jpg;base64,".base64_encode($row['foto'])."'/></td>


                        </table>");

                ?> 
                  
                 



<?php

            }
      }
       
 ?> 