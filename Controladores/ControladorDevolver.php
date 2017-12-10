
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
            $sql = "SELECT * FROM pedido WHERE alumnorut = '".$b."' and Area='".$AreaP."'";


            $result = mysqli_query($con,$sql);
            $contar = mysqli_num_rows($result);
            if($contar == 0){
                  echo "No se han encontrado resultados para '<b>".$b."</b>'.";
            }else{   
                        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                        $codigo = $row['codigoherramienta'];
                        $rut = $row['alumnorut'];
                        $cantidad = $row['cantidad'];
                        $fecha = $row['fecha'];





 echo("<table>
<tr>
<td id='tdarriba1'>Codigo Herramienta: </td><td><input type='label' readonly='readonly'  name='codigo' value=".$codigo."></td>
</tr>
<tr>
<td id='tdarriba1'>Rut Alumno</td><td><input type='label' readonly='readonly'  name='rut' value=".$rut."></td>
</tr>
<tr>
<td id='tdarriba1'>Cantidad solicitada: </td><td><input type='label' readonly='readonly'  name='cantidad' value=".$cantidad."></td>
</tr>
<tr>
<td id='tdarriba1'>fecha de prestamo:</td><td><input type='label' readonly='readonly'  name='fecha' value=".$fecha."></td>
</tr>

<tr>
<td id='tdarriba1'></td><td> <input type='submit' value='Devolver herramienta' class='btn1'/></td>
</tr>
                        </table>");


                ?> 
                  



<?php

            

      }
}
       
 ?> 
