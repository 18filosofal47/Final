 <?php 
	//proceso de la muestra
	require("../Funciones/Conexion.php");//haciendo un llamdo a la base de datos
	//quìmico
	$sql = "DELETE FROM quimico WHERE idquimico ";
	$resultado = mysqli_query($conexion, $sql);
	if ($conexion->query($sql) === TRUE )//validando entrada
	{
		echo"Datos eliminados correctamente (Quìmico)." . "<br>";
		$id=$conexion->insert_id;//para saber la pK insertadad en la tabla 			
	}
	else{
		echo"Problema al eliminar los datos." . $sql . "<br>" . $conexion->error;
	}
	//análisis de la muestra 
	$sql = "DELETE FROM analisis WHERE idanalisis";
	$result = mysqli_query($conexion, $sql);
	if ($conexion->query($sql) === TRUE)//validando entrada
	{
		echo"Datos eliminados correctamente (Proceso de la muestra )." . "<br>";
	}
	else{
		echo"Problema al eliminar los datos." . $sql . "<br>" . $conexion->error;
	}
	/*Fin de RegistroUno*/	
	mysqli_close($conexion);
	clearstatcache();
	//header("location:../vistas/Proceso.php");
?>	