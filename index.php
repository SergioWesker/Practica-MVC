<?php
	switch($_REQUEST['controlador'])
	{
		case 'vehiculos':
		//Carga el controlador
		require('controlador/vehiculoCtl.php');
		$controlador = new VehiculoCtl();
		Break;
	}
	
	//Ejecuta el controlador
	$controlador->ejecutar();
?>
