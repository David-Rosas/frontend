<?php 

require_once "conexion.php"; 

class ModeloProductos{
/*===========================================
	MOSTRAR CATEGORIAS
	==========================================*/
	static public function mdlMostrarCategorias($tabla, $item, $valor){
	if($item !=null){
	$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");	
	$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

	$stmt->execute();

	return $stmt->fetch();		

	}else{
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");	
	$stmt->execute();

	return $stmt->fetchall();
	}	
	

	$stmt -> close();
	$stmt = null;

	/*===========================================
	MOSTRAR SUB-CATEGORIAS
	==========================================*/
	}
	static public function mdlMostrarSubCategorias($tabla, $item, $valor){
	$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item=:$item");
	$stmt -> bindParam(":".$item, $valor, PDO::PARAM_INT);	
	$stmt->execute();

	return $stmt->fetchall();

	$stmt->close();

	$stmt =null;

	
	}


/*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/

	static public function mdlMostrarProductos($tabla, $ordenar, $item, $valor, $base, $tope){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT *FROM $tabla WHERE $item = :$item ORDER BY $ordenar DESC LIMIT $base, $tope");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetchAll();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT *FROM $tabla ORDER BY $ordenar DESC LIMIT $base, $tope");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}


	/*=============================================
	MOSTRAR INFOPRODUCTO
	=============================================*/

	static public function mdlMostrarInfoProducto($tabla, $item, $valor){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt = null;

	}
/*=============================================
	LISTAR PRODUCTOS
=============================================*/
static public  function mdlListarProducto($tabla,$ordenar, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY $ordenar DESC ");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetchAll();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT *FROM $tabla ORDER BY $ordenar DESC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}

}


