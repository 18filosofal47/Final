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
	}else{
		mysqli_select_db($conexion, $db_nombre) or die ("No se en cuentra la Base de Datos.");
		/* activar la autoconsigna *
		mysqli_autocommit($conexion, false); 
		if ($resultado = mysqli_query($conexion, "SELECT @@autocommit"))
		{
			$fila = mysqli_fetch_row($resultado);
			printf("El estado de la autoconsigna es %s\n", $fila[0] . "<br>");
			mysqli_free_result($resultado);
		}
		else{
			$fila = mysqli_fetch_assoc($resultado);
			printf("El estado de la autoconsigna es %s\n", $fila[0] . "<br>");
			mysqli_free_result($resultado);
		}*/
		mysqli_set_charset($conexion, "utf8");
	    /*Imprimiendo mensaje de verificaciòn*/
		echo "La conexi&#243;n fue un &#233;xito con la base de datos" . "<br>";
	}
?>
