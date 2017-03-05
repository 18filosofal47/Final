<?php
    require("Conexion.php");//haciendo un llamdo a la base de datos
	/*Codigo a Muestra y Responsable*/
	$consulta = "SELECT codigo.idcodigo, codigo.UltimoNum,
                        muestra.muestra, muestra.contenedor, muestra.total, muestra.protocolo,
                        responsable.appaterno, responsable.apmaterno, responsable.nombre, responsable.fecha, responsable.hora
                        FROM codigo INNER JOIN muestra on (codigo.idcodigo=muestra.idmuestra)
                        INNER JOIN responsable on (codigo.idcodigo=responsable.idResponsable)
                        ORDER BY responsable.appaterno";
	$resultados = mysqli_query($conexion, $consulta);
	//guardamos en un array multidimensional todos los datos de la consulta.
	$i = 0;
	$tabla = " ";
	while($fila = mysqli_fetch_assoc($resultados))
	{
		//$editar = '<a href=\".php?a='.'\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Editar\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>';
		$editar = '<a class=\"btn btn-primary btn-ok\" href=\"EditarM.php\">Editar</a>';
		$eliminar = '<a class=\"btn btn-danger btn-ok\" href=\"EliminatM.php\">Eliminar</a>';
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
			"accion":"'.$editar.'",
			"borrar":"'.$eliminar.'"
		},';
		$i++;
	}
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo ' {"data" : ['.$tabla.'] } ';
	mysqli_free_result($resultados);
	/*Fin de la consulta*/	
	mysqli_close($conexion);
	clearstatcache();
?>