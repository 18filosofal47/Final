<?php
	require("Conexion.php");//haciendo un llamdo a la base de datos
    /*Analisis a quimico resumido*/
	$consulta = "SELECT idanalisis, tipomuestra, protocolo, folio, fechaP, quimico.appaterno, quimico.apmaterno, quimico.nombre
	             From quimico INNER JOIN analisis ON analisis.idanalisis=quimico.idquimico ORDER BY quimico.appaterno";
	$resultados = mysqli_query($conexion, $consulta);
	//guardamos en un array multidimensional todos los datos de la consulta.
	$i = 0;
	$tabla = " ";
	while($fila = mysqli_fetch_assoc($resultados))
	{
		$editar = '<a class=\"btn btn-primary btn-ok\">Editar</a>';
		$eliminar = '<a class=\"btn btn-danger btn-ok\">Eliminar</a>';
		$tabla.='{
			"idanalisis": "'.$fila['idanalisis'].'",
			"tipomuestra": "'.$fila['tipomuestra'].'",
			"protocolo": "'.$fila['protocolo'].'",
			"folio": "'.$fila['folio'].'",
			"fechaP": "'.$fila['fechaP'].'",
            "appaterno": "'.$fila['appaterno'].'",
			"apmaterno": "'.$fila['apmaterno'].'",
			"nombre": "'.$fila['nombre'].'",
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