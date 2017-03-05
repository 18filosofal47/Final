<?php
    require("../scripts/Conexion.php");//haciendo un llamdo a la base de datos
	/*$db_host = "localhost";
	$db_usuario = "root";
	$db_contra = "";
	$db_nombre = "laboratorio";
	$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
	if(mysqli_connect_errno())
	{
		echo "Problema al conectar la Base de Datos.";
		exit();
	}
	mysqli_select_db($conexion, $db_nombre) or die ("No se en cuentra la Base de Datos.");
	mysqli_set_charset($conexion, "utf8");*/
	//$consulta = "SELECT * From muestra";
	$consulta = "SELECT idmuestra, muestra, contenedor, umedida, sufijo, fechaR, 
	                    observ, resguardo, protocolo, almacen From muestra";
	$resultados = mysqli_query($conexion, $consulta);
	//guardamos en un array multidimensional todos los datos de la consulta.
	$i = 0;
	$tabla = " ";
	while($fila = mysqli_fetch_array($resultados, MYSQLI_BOTH))
	{
		$tabla.='{
			"idmuestra": "'.$fila['idmuestra'].'",
			"muestra": "'.$fila['muestra'].'",
			"contenedor": "'.$fila['contenedor'].'",
			"umedida": "'.$fila['umedida'].'",
			"sufijo": "'.$fila['sufijo'].'",
			"fechaR": "'.$fila['fechaR'].'",
			"observ": "'.$fila['observ'].'",
			"resguardo": "'.$fila['resguardo'].'",
			"protocolo": "'.$fila['protocolo'].'",
			"almacen": "'.$fila['almacen'].'"
		}';
		$i++;;
	}
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo ' {"data" : ['.$tabla.'] } ';
	/*Fin de la consulta*/	
	mysqli_close($conexion);
	clearstatcache();
?>