<?php
class ControladorPlantilla{
	/*--------------------------
	llamamos la plantilla
	---------------------------*/

	public function plantilla()
	{
		include "vistas/plantilla.php";
	}

	/*--------------------------------
	estilos dinamicos de la plantilla
	--------------------------------*/
	public function ctrEstiloPlantilla(){

		$tabla = "plantilla";
		$respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);

		return $respuesta;
	}

}