<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/producto.controlador.php";
require_once "controladores/slide.controlador.php";

require_once "modelo/plantilla.modelo.php"; 
require_once "modelo/producto.modelo.php";
require_once "modelo/slide.modelo.php";
require_once "modelo/rutas.php";

$plantilla = new ControladorPlantilla();
$plantilla -> plantilla(); 

?>