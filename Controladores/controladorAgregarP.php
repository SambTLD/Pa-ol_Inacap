<?php
include("../Conexion/Conex.php");


$user=$_POST['txtUser'];
$pass=$_POST['txtPass'];
$nombre=$_POST['txtNombre'];
$area=$_POST['txtArea'];

echo ($user);
echo ($pass);
echo($nombre);
echo($area);


$query2 = "SELECT * FROM personalpanol where user='".$user."'";
$resultado2 = $db->query($query2);



            $result = mysqli_query($db,$query2);
            $contar = mysqli_num_rows($result);

            if($contar != 0){
                  echo "No se han encontrado resultados.";
            }else{ 
              
$query="INSERT INTO personalpanol (user,password,Area, Nombre) VALUES ('$user','$pass','$area','$nombre')";
$resultado= $db->query($query);



if($resultado){

print "<script>alert(\"Enviado con Exito.\");window.location='../Vista/agregarPañolero.php';</script>";


}

else{
	print "<script>alert(\"ya existe un usuario con este nombre.\");window.location='../Vista/agregarPañolero.php';</script>";
}




}


?>