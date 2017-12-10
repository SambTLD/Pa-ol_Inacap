<?php
include("../Conexion/Conex.php");



$descripcion=$_POST['txtDescripcion'];
$combo = $_POST["NU"];

session_start();
 $nombre =	$_SESSION["NH"]; 
 $stock  = $_SESSION["stock"];
 $codigo = $_SESSION["codigo"];
 $estado = $_SESSION["estado"];
 $nombrePañolero = $_SESSION["NP"];
 $fecha_actual = $_SESSION["fecha"];
 $AreaP = $_SESSION["AreaP"];

echo ($nombre);
echo ($stock);
echo ($codigo);
echo($estado);
echo($nombrePañolero);
echo($fecha_actual);
echo($descripcion);
echo($combo);




$query2 = " INSERT INTO informes (nombre,stock,codigo,estado,nombreP,fecha,descripcion,nivelU,Area) VALUES ('$nombre',$stock,'$codigo','$estado','$nombrePañolero','$fecha_actual','$descripcion','$combo','$AreaP')";

$resultado= $db->query($query2);

if($resultado){

print "<script>alert(\"Enviado con Exito.\");window.location='../Vista/BuscarHerramienta.php';</script>";

}else{
print "<script>alert(\"Error al Enviar.\");window.location='../Vista/BuscarHerramienta.php';</script>";
}
?>