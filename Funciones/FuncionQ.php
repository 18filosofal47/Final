<?php
	require("../scripts/Conexion.php");//haciendo un llamdo a la base de datos
    /*Analisis a quimico resumido*/
	$consulta = "SELECT quimico.idquimico, quimico.appaterno, quimico.apmaterno, quimico.nombre,
	            analisis.idanalisis, analisis.tipomuestra, analisis.ensayo,
				analisis.protocolo, analisis.folio, analisis.fechaP
				FROM quimico INNER JOIN analisis ON analisis.idanalisis=quimico.idquimico ORDER BY quimico.appaterno";
	$resultados = mysqli_query($conexion, $consulta);
	//guardamos en un array multidimensional todos los datos de la consulta.
	$i = 0;
	$tabla = " ";
	while($fila = mysqli_fetch_assoc($resultados))
	{
		$editar = '<a href=\"EditarP_II.php?codigo='.$fila["idquimico"].'\" onclick=\"return confirm(\'¿Desea editar este registro?\')\" data-toggle=\"tooltip\" data-placement=\"center\" class=\"btn btn-primary btn-ok glyphicon glyphicon-pencil\">Editar</a>';
		$eliminar = '<a href=\"eliminar.php?codigo='.$fila["idquimico"].'\" onclick=\"return confirm(\'¿Desea eliminiar este registro?\')\" data-toggle=\"tooltip\" data-placement=\"center\" class=\"btn btn-danger btn-ok glyphicon glyphicon-trash\">Eliminar</a>';
		$tabla.='{
			"idquimico": "'.$fila['idquimico'].'",
			"appaterno": "'.$fila['appaterno'].'",
			"apmaterno": "'.$fila['apmaterno'].'",
			"nombre": "'.$fila['nombre'].'",
			"tipomuestra": "'.$fila['tipomuestra'].'",
			"protocolo": "'.$fila['protocolo'].'",
			"folio": "'.$fila['folio'].'",
			"fechaP": "'.$fila['fechaP'].'",
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
	/*

DELETE datos_1, datos_2, datos_3, datos_4, datos_5
FROM datos_1
  INNER JOIN datos_2 USING(iddato)
  INNER JOIN datos_3 USING(iddato)
  INNER JOIN datos_4 USING(iddato)
  INNER JOIN datos_5 USING(iddato)
WHERE iddato = '8037';

	*/
?>