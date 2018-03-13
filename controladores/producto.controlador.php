<?php 
/**

*/
class ControladorProductos{
	
	static public function ctrMostrarCategorias($item, $valor)
	{
		$tabla = "categorias";

		$respuesta = ModeloProductos::mdlMostrarCategorias($tabla, $item, $valor);

		return $respuesta;
	}
	/*===========================================
	MOSTRAR SUBCATEGORIAS
	==========================================*/

	static public function ctrMostrarSubCategorias($item, $valor)
	{
		$tabla = "subcategorias";

		$respuesta = ModeloProductos::mdlMostrarSubCategorias($tabla, $item, $valor);

		return $respuesta;
	}


/*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/

	static public function ctrMostrarProductos($ordenar, $item, $valor, $base, $tope)
	{

		$tabla = "productos";

		$respuesta = ModeloProductos::mdlMostrarProductos($tabla, $ordenar, $item, $valor, $base, $tope);

		return $respuesta;
	}

	/*=============================================
	MOSTRAR INFOPRODUCTO
	=============================================*/

	static public function ctrMostrarInfoProducto($item, $valor){

		$tabla = "productos";

		$respuesta = ModeloProductos::mdlMostrarInfoProducto($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	LISTAR PRODUCTOS
	=============================================*/

	static public  function ctrListarProductos($ordenar, $item, $valor){

		$tabla = "productos";

		$respuesta = ModeloProductos::mdlListarProducto($tabla,$ordenar, $item, $valor);

		return $respuesta;

	}

}