<?php
	class VehiculoCtl
	{
		public $modelo;
		
		public function _construct()
		{
			//Incluye el modelo
			include('modelo/vehiculoMdl.php');
			//Creo el objeto del modelo
			$this->modelo = new VehiculoMdl();
		}
		
		public function ejecutar()
		{
			switch($_GET['accion'])
			{
				case 'listar':
							require_once('vistas/ListadoVehiculos.html');
							break;
				case 'alta':
							if(empty($_POST)){
							require_once("Vistas/AltaVehiculos.html");
							}
							else
							{
							//Se obtienen las variables para alta y se limpian
							$VIN			= $_POST["VIN"];
							$KM				= $_POST["KM"];
							$Combustible	= $_POST["Combustible"];
							$Golpes			= $_POST["Golpes"];
							$Ubicacion		= $_POST["Ubicacion"];
							echo $VIN;
							$vehiculo = $this->modelo->alta($VIN,$KM,$Combustible,$Golpes,$Ubicacion);
							
							if(is_object($vehiculo))
							{
								require_once('vistas/ListadoVehiculos.html');
							}
							else
							{
								require_once('vistas/error.html');
							}
							break;
							}
			}
		}
	}
?>
