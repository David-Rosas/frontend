<?php
require_once "../controladores/plantilla.controlador.php";
require_once "../modelo/plantilla.modelo.php";

class AjaxPlantilla{
	
	public function ajaxEstiloPlantilla(){

		$respuesta = ControladorPlantilla::ctrEstiloPlantilla();
		
		echo json_encode($respuesta);

	}
}

$objeto = new AjaxPlantilla();
$objeto -> ajaxEstiloPlantilla();

