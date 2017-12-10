<?php
	include_once('../Conexion/Conex.php');
	class Alumno
	{
		private $rut;
		private $nombre;
		private $apellido;
		private $carrera;

		public function __construct()
		{

		}

		public function setRut($rut)
		{
			$this->rut = $rut;
		}

		public function getRut()
		{
			return $this->rut;
		}

		public function setNombre($nombre)
		{
			$this->nombre = $nombre;
		}

		public function getNombre()
		{
			return $this->nombre;
		}

		public function setApellido($apellido)
		{
			$this->apellido = $apellido;
		}

		public function getApellido()
		{
			return $this->apellido;
		}

		public function setCarrera($carrera)
		{
			$this->carrera = $carrera;
		}

		public function getCarrera()
		{
			return $this->carrera;
		}

		
	}
?>