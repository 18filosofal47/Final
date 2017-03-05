<?php
    require("../scripts/Conexion.php");//haciendo un llamdo a la base de datos
	/*codigo a Muestra*/
	$consulta = "SELECT codigo. idcodigo, codigo.UltimoNum, muestra.*  
	             From codigo LEFT JOIN muestra ON codigo.idcodigo=muestra.idmuestra ORDER BY codigo.UltimoNum";
	$resultados = mysqli_query($conexion, $consulta);
	//guardamos en un array multidimensional todos los datos de la consulta.
	$i = 0;
	$tabla = " ";
	while($fila = mysqli_fetch_assoc($resultados))
	{
		$editar = '<a href=\"#\" onclick=\"return confirm(\'¿Desea editar este registro?\')\" data-toggle=\"tooltip\" data-placement=\"top\" class=\"btn btn-primary btn-ok glyphicon glyphicon-pencil\">Editar</a>';
		$eliminar = '<a href=\"#\" onclick=\"return confirm(\'¿Desea eliminiar este registro?\')\" data-toggle=\"tooltip\" data-placement=\"top\" class=\"btn btn-danger btn-ok glyphicon glyphicon-trash\">Eliminar</a>';
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
			"modificar": "'.$editar.'",
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