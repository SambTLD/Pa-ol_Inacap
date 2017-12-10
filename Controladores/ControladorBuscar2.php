<form action="../Controladores/carrito.php?" method="post"> 
<?php
include_once("../Clases/Herramienta.php");
include_once("arraylist.php");

      $buscar = $_POST['b'];
  
      if(!empty($buscar)) {
            buscar($buscar);
      }
       
      function buscar($b) {
  $lista1 = new arraylist();

    session_start();
      $AreaP = $_SESSION['AreaP'];
            
            $con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
            $sql = "SELECT * FROM herramienta WHERE nombre = '".$b."' and Area='".$AreaP."'";
            $result = mysqli_query($con,$sql);
            $contar = mysqli_num_rows($result);



            if($contar == 0){
                  echo "No se han encontrado resultados para '<b>".$b."</b>'.";
            }else{ 
              
                  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                        $nombre = $row['nombre'];
                       
                        $codigo = $row['codigo'];
                        $estado = $row['estado'];
                        $stock= $row['stock'];
                        $foto=$row['foto'];
                        $area=$row['Area'];
                        

 

  $Herramienta = new Herramienta();
  $Herramienta->setNombre($nombre);
  $Herramienta->setCodigo($codigo);
  $Herramienta->setEstado($estado);
  $Herramienta->setStock($stock);
  $Herramienta->setFoto($foto);
  $Herramienta->setArea($area);
  $Herramienta->creaHerramienta();

   $lista1 -> add($Herramienta);
   echo $lista1 ->get(0).getNombre();
 
  $_SESSION["Herra"] = $Herramienta;



  
echo("<table>
<tr>
<td id='tdarriba1'>Nombre</td><td><input type='label' readonly='readonly'  name='nombre' value=".$Herramienta->getNombre()."></td>
</tr>
<tr>
<td id='tdarriba1'>Codigo</td><td><input type='label' readonly='readonly'  name='codigo' value=".$Herramienta->getCodigo()."></td>
</tr>
<tr>
<td id='tdarriba1'>Estado</td><td><input type='label' readonly='readonly'  name='estado' value=".$Herramienta->getEstado()."></td>
</tr>
<tr>
<td id='tdarriba1'>Stock</td><td><input type='label' readonly='readonly'  name='stock' value=".$Herramienta->getStock()."></td>
</tr>

<tr>
<td id='tdarriba1'>Stock</td><td><input type='label' readonly='readonly'  name='stock' value=".$Herramienta->getArea()."></td>
</tr>



</table>");
?> 
                  
                  <img height="170px" width="170px" src="data:image/jpg;base64, <?php echo base64_encode($Herramienta->getFoto()); 
                  ?> "/>
            

<select name="descuento">
  <?php 
for ($i=1; $i <= $stock; $i++) { 
  echo("<option value=".$i.">".$i."</option>");
}
   ?>
</select>

<input type='submit' value='Agregar a carrito' id='AGREGAR!' class='btn1' />


<?php

//echo ("<a href=../Controladores/AñadirPedido.php?nombre=".$nombre."&codigo=".$codigo."&stock=".$stock."&descuento=".$i."><div id='4'>agregar<div></a>");
            }
      }
       
 ?> 





 </form>