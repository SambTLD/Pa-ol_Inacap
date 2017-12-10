<?php
include("../Conexion/Conex.php");


$nombre=$_POST['nombre'];
$codigo=$_POST['codigo'];
$estado=$_POST['estado'];
$stock=$_POST['stock'];
session_start();
$area =$_SESSION["AreaJ"];
$foto= addslashes(file_get_contents($_FILES['foto']['tmp_name']));
echo ($user);
echo ($pass);
echo($nombre);
echo($area);


$query2 = "SELECT * FROM herramienta where codigo='".$codigo."'";
$resultado2 = $db->query($query2);



            $result = mysqli_query($db,$query2);
            $contar = mysqli_num_rows($result);

            if($contar != 0){
                  echo "No se han encontrado resultados.";
            }else{ 
              
$query="INSERT INTO herramienta (nombre,codigo,foto,estado,stock,area) VALUES ('$nombre','$codigo','$foto','$estado',$stock,'$area')";
$resultado= $db->query($query);



if($resultado){

print "<script>alert(\"Enviado con Exito.\");window.location='../Vista/agregarPañolero.php';</script>";


}

else{
	print "<script>alert(\"ya existe un usuario con este nombre.\");window.location='../Vista/agregarHerramienta.php';</script>";
}




}


?>