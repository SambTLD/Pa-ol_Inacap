<?php
	include_once('../Conexion/Conex.php');
	class Herramienta
	{
		private $nombre;
		private $codigo;
		private $foto;
		private $estado;
		private $stock;
		private $Area;

		public function __construct()
		{

		}

		public function setNombre($nombre)
		{
			$this->nombre = $nombre;
		}

		public function getNombre()
		{
			return $this->nombre;
		}

		public function setCodigo($codigo)
		{
			$this->codigo = $codigo;
		}

		public function getCodigo()
		{
			return $this->codigo;
		}

		public function setFoto($foto)
		{
			$this->foto = $foto;
		}

		public function getFoto()
		{
			return $this->foto;
		}

		public function setEstado($estado)
		{
			$this->estado = $estado;
		}

		public function getEstado()
		{
			return $this->estado;
		}
		public function setStock($stock)
		{
			$this->stock = $stock;
		}

		public function getStock()
		{
			return $this->stock;
		}
		public function setArea($Area)
		{
			$this->Area = $Area;
		}

		public function getArea()
		{
			return $this->Area;
		}

public function creaHerramienta()
  {
   $this->conexion = Conex::getInstance();
   $this->conexion->openConnection();
   $var = $this->conexion->useConnection();
   $consulta = "INSERT INTO herramienta (nombre, codigo, foto, estado,stock,area) VALUES ".
   "('".$this->nombre."','".$this->codigo."','".$this->foto."','".$this->estado.",'".$this->stock.",'".$this->Area."')";
   if($var->query($consulta))
   {
    $this->conexion->closeConnection();
    return true;
   }
   else
   {
    $this->conexion->closeConnection();
    return false;
   }
  }




		
	}
?>