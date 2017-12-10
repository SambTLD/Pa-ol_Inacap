


<?php
include("ControladorBuscar2.php");
  include_once("../Clases/Herramienta.php");
  session_start();
  $Herramienta = $_SESSION["Herra"];

  echo "nombre: ".$Herramienta->getNombre()."<br />";
  echo "codigo: ".$Herramienta->getCodigo()."<br />";
  echo "Estado: ".$Herramienta->getEstado()."<br/>";



?>
<img height="170px" width="170px" src="data:image/jpg;base64, <?php echo base64_encode($Herramienta->getFoto()); 
                  ?> "/>