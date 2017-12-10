<?php
$nombre=$_POST['txtUser'];
$pass=$_POST['txtPass'];

	if($nombre=="" || $pass==""){
		print "<script>alert(\"campos vacios.\");window.location='../index.html';</script>";
		
	}else{
		if($_POST["txtUser"]!=""&&$_POST["txtPass"]!=""){
			include "../Conexion/Conex.php";
			
			$user_id=null;
			$nombre =null;

			 $sql1 = "SELECT id FROM personalpanol WHERE user = '".$_POST["txtUser"]."' and password = '".$_POST["txtPass"]."'";
			 $sql2 = "SELECT Rut FROM jefepanol WHERE Nombre = '".$_POST["txtUser"]."' and Clave = '".$_POST["txtPass"]."'";
			 $sql3 = "SELECT Nombre FROM personalpanol WHERE user = '".$_POST["txtUser"]."' and password = '".$_POST["txtPass"]."'";
			 $sql4 = "SELECT Nombre FROM jefepanol WHERE Nombre = '".$_POST["txtUser"]."' and Clave = '".$_POST["txtPass"]."'";
			 $sql5 = "SELECT Area FROM jefepanol WHERE Nombre = '".$_POST["txtUser"]."' and Clave = '".$_POST["txtPass"]."'";
			 $sql6= "SELECT Area FROM personalpanol WHERE user = '".$_POST["txtUser"]."' and password = '".$_POST["txtPass"]."'";
			$query = $db->query($sql1);
			$query2= $db->query($sql2);
			$query3= $db->query($sql3);
			$query4= $db->query($sql4);
			$query5= $db->query($sql5);
			$query6= $db->query($sql6);
			while ($r=$query->fetch_array()) {
				$user_id=$r["id"];
				break;
			}
				while ($r2=$query2->fetch_array()) {
				$user_id=$r2["Rut"];

				break;
			}
				while ($r3=$query3->fetch_array()) {
				$nombre=$r3["Nombre"];

				break;
			}
			while ($r4=$query4->fetch_array()) {
				$nombreJ=$r4["Nombre"];

				break;
			}
			while ($r5=$query5->fetch_array()) {
				$AreaJ=$r5["Area"];

				break;
			}
			while ($r6=$query6->fetch_array()) {
				$AreaP=$r6["Area"];

				break;
			}
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='../index.html';</script>";
			}
			else if($user_id=="123-4" || $user_id=="234-5"){
				session_start();
				$_SESSION["user_id"]=$user_id;
				$_SESSION["NombreJ"] = $nombreJ;
               	$_SESSION["AreaJ"] = $AreaJ;
				print "<script>window.location='../interfazJefe.php';</script>";	


			}
			else{
				session_start();
				$_SESSION["user_id"]=$user_id;
               	$_SESSION["Nombre"] = $nombre;
               	$_SESSION["AreaP"]= $AreaP;
				print "<script>window.location='../interfazPañolero.php';</script>";				
			}
		}
			
	}




?>
