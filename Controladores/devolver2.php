<?php
include("../Conexion/Conex.php");


$codigo=$_POST['codigo'];
$rut=$_POST['rut'];
$cantidad=$_POST['cantidad'];
$fecha=$_POST['fecha'];



echo($codigo);
echo($rut);
echo($cantidad);
echo($fecha);





$query="DELETE FROM pedido WHERE alumnorut ='".$rut."'";
$resultado= $db->query($query);
$query2="SELECT * FROM herramienta where codigo='".$codigo."'";

            $result = mysqli_query($db,$query2);
            $contar = mysqli_num_rows($result);
            if($contar == 0){
                  echo "No se han encontrado resultados.";
            }else{ 
            
                  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                        $stock = $row['stock'];




$nuevostock = $stock + $cantidad;
$query3 ="UPDATE herramienta SET stock=".$nuevostock." WHERE codigo='".$codigo."'";
$resultado3= $db->query($query3);

print "<script>alert(\"Enviado con Exito.\");window.location='../Vista/devolverHerramientas.php';</script>";

}


?>