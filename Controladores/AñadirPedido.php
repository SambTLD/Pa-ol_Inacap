<?php
include("../Conexion/Conex.php");


$nombre=$_POST['nombre'];
$codigo=$_POST['codigo'];
$stock=$_POST['stock'];
$descuento=$_POST['descuento'];
session_start();
$Rut2 = $_SESSION["rut"];
$AreaP =$_SESSION["AreaP"];
$fecha_actual = date("Y-m-d");
echo ($nombre);
echo ($codigo);
echo($Rut2);
echo($stock);
echo($descuento);



if($stock>0){
	$nuevostock = $stock - $descuento;
$query="INSERT INTO pedido (codigoherramienta,alumnorut,cantidad,fecha,Area) VALUES ('$codigo','$Rut2',$descuento,'$fecha_actual','$AreaP')";
$resultado= $db->query($query);

$query3 ="UPDATE herramienta SET stock=".$nuevostock." WHERE codigo='".$codigo."'";
$resultado3= $db->query($query3);

echo($resultado);
echo($descuento);
echo($nuevostock);
if($resultado){

print "<script>alert(\"Enviado con Exito.\");window.location='../Vista/BuscarAlumno.php';</script>";


}
else{

	echo"no";
}
}
else{
	print "<script>alert(\"No existe stock del producto seleccionado.\");window.location='../Vista/BuscarAlumno.php';</script>";
}



?>