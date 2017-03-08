<?php
    require("../scripts/Conexion.php");//haciendo un llamdo a la base de datos
	/*Codigo a Muestra y Responsable*/
	$consulta = "SELECT codigo.idcodigo, codigo.UltimoNum, 
	                    muestra.muestra, muestra.contenedor, muestra.total, muestra.protocolo, 
					    responsable.appaterno, responsable.apmaterno, responsable. nombre, responsable.fecha, responsable.hora.
				FROM codigo JOIN muestra ON (codigo.idcodigo=muestra.idmuestra)
				JOIN responsable ON codigo.idcodigo=responsable.idResponsable ORDER BY responsable.appaterno";
	$resultados = mysqli_query($conexion, $consulta);
	//guardamos en un array multidimensional todos los datos de la consulta.
	$i = 0;
	$tabla = " ";
	while($fila = mysql_fetch_assoc($resultados))
	{
		$editar = '<a class=\"btn btn-primary btn-ok glyphicon glyphicon-pencil\">Editar</a>';
		$eliminar = '<a class=\"btn btn-danger btn-ok glyphicon glyphicon-trash\">Eliminar</a>';
		$tabla.='{
			"idcodigo": "'.$fila['idcodigo'].'",
			"UltimoNum": "'.$fila['UltimoNum'].'",
			"muestra": "'.$fila['muestra'].'",
			"contenedor": "'.$fila['contenedor'].'",
			"total": "'.$fila['total'].'",
			"protocolo": "'.$fila['protocolo'].'",
			"appaterno": "'.$fila['appaterno'].'",
			"apmaterno": "'.$fila['apmaterno'].'",
			"nombre": "'.$fila['nombre'].'",
			"fecha": "'.$fila['fecha'].'",
			"hora": "'.$fila['hora'].'",
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