<?php
    require("../scripts/Conexion.php");//haciendo un llamdo a la base de datos
	/*Analisis a quimico*/
	$consulta = "SELECT analisis.idanalisis, analisis.tipomuestra, analisis.ensayo, analisis.resultado, analisis.observ,
				analisis.protocolo, analisis.folio, analisis.fechaP, quimico.* 
				FROM quimico INNER JOIN analisis ON analisis.idanalisis=quimico.idquimico ORDER BY quimico.appaterno";
	$resultados = mysqli_query($conexion, $consulta);
	//guardamos en un array multidimensional todos los datos de la consulta.
	$i = 0;
	$tabla = " ";
	while($fila = mysqli_fetch_assoc($resultados))
	{
		$editar = '<a href=\"#\" onclick=\"return confirm(\'¿Desea editar este registro?\')\" data-toggle=\"tooltip\" data-placement=\"top\" class=\"btn btn-primary btn-ok glyphicon glyphicon-pencil\">Editar</a>';
		$eliminar = '<a href=\"#\" onclick=\"return confirm(\'¿Desea eliminiar este registro?\')\" data-toggle=\"tooltip\" data-placement=\"top\" class=\"btn btn-danger btn-ok glyphicon glyphicon-trash\">Eliminar</a>';
		$tabla.='{
			"idanalisis": "'.$fila['idanalisis'].'",
			"tipomuestra": "'.$fila['tipomuestra'].'",
			"ensayo": "'.$fila['ensayo'].'",
			"resultado": "'.$fila['resultado'].'",
			"observ": "'.$fila['observ'].'",
			"protocolo": "'.$fila['protocolo'].'",
			"folio": "'.$fila['folio'].'",
			"fechaP": "'.$fila['fechaP'].'",
			"nombre": "'.$fila['nombre'].'",
			"appaterno": "'.$fila['appaterno'].'",
			"apmaterno": "'.$fila['apmaterno'].'",
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