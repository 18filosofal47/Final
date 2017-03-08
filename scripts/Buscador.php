<?php
    $db_host = "localhost";
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
	mysqli_set_charset($conexion, "utf8");

	$consulta = "SELECT * FROM `muestra` WHERE muestra LIKE '%$busquedad%'";
	/*codigo a Muestra*/
	$consulta = "SELECT codigo.UltimoNum, muestra.* FROM codigo LEFT JOIN muestra ON codigo.idcodigo=muestra.idmuestra ORDER BY codigo.UltimoNum";
	/*Codigo a Responsable*/
	$consulta = "SELECT codigo.UltimoNum, responsable.* FROM codigo LEFT JOIN responsable ON codigo.idcodigo=responsable.idResponsable ORDER BY responsable.appaterno";
	/*Responsable a Muestra*/
	$consulta = "SELECT muestra.*, responsable.* FROM muestra LEFT JOIN responsable ON muestra.idmuestra=responsable.idResponsable ORDER BY responsable.appaterno";
	/*Analisis a quimico*/
	$consulta = "SELECT analisis.*, quimico.* FROM quimico LEFT JOIN analisis ON analisis.idanalisis=quimico.idquimico ORDER BY quimico.appaterno";
	$consulta = "SELECT * From muestra";
	$resultados = mysqli_query($conexion, $consulta);
	while($fila = mysqli_fetch_array($resultados, MYSQLI_BOTH))
	{
		//echo $fila['muestra']." - ".$fila[caracteristicas]."</br>";
		echo "<table><tr><th>";
		echo $fila['idmuestra'] . "</th><th>";
		echo $fila['muestra'] . "</th><th>";
		echo $fila['contenedor'] . "</th><th>";
		echo $fila['umedida'] . "</th><th>";
		echo $fila['sufijo'] . "</th><th>";
		echo $fila['total'] . "</th><th></tr></table>";
		//echo $fila[4] . " ";
		echo "<br>";
	}
	/*Fin de la consulta*/	
	mysqli_close($conexion);
	clearstatcache();
	//header("location:../vistas/.php");
	
	
	/*while($fila = mysqli_fetch_array($resultado))
		{
			//$fila = mysqli_fetch_row($resulatdo);
			echo $fila[0] . "<br>";
			
		}
		*/
?>