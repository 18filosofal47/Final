<?php
    require("Conexion.php");//haciendo un llamdo a la base de datos
	/*codigo a Muestra*/
	$consulta = "SELECT codigo.idcodigo, codigo.UltimoNum, muestra.muestra, muestra.contenedor, muestra.umedida,
         	    muestra.sufijo, muestra.total, muestra.fechaR, muestra.observ, muestra.resguardo, muestra.protocolo, muestra.almacen 
	            From codigo INNER JOIN muestra ON codigo.idcodigo=muestra.idmuestra ORDER BY codigo.UltimoNum";
	$resultados = mysqli_query($conexion, $consulta);
	//guardamos en un array multidimensional todos los datos de la consulta.
	$i = 0;
	$tabla = " ";
	while($fila = mysqli_fetch_assoc($resultados))
	{
		$editar = '<a class=\"btn btn-primary btn-ok\">Editar</a>';
		$eliminar = '<a class=\"btn btn-danger btn-ok\">Eliminar</a>';
		$tabla.='{
			"idcodigo": "'.$fila['idcodigo'].'",
			"UltimoNum": "'.$fila['UltimoNum'].'",
			"muestra": "'.$fila['muestra'].'",
			"contenedor": "'.$fila['contenedor'].'",
			"umedida": "'.$fila['umedida'].'",
			"sufijo": "'.$fila['sufijo'].'",
			"total": "'.$fila['total'].'",
			"fechaR": "'.$fila['fechaR'].'",
			"observ": "'.$fila['observ'].'",
			"resguardo": "'.$fila['resguardo'].'",
			"protocolo": "'.$fila['protocolo'].'",
			"almacen": "'.$fila['almacen'].'",
			"accion":"'.$editar.'",
			"borrar":"'.$eliminar.'"
		},';
		$i++;
	}
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo ' {"data" : ['.$tabla.'] } ';
	/*Fin de la consulta*/	
	mysqli_close($conexion);
	clearstatcache();
?>