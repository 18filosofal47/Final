 <?php 
    //registroDos
	//Quinico
	$nombre = $_REQUEST['nombre'];
	$appaterno = $_REQUEST['appaterno'];
	$apmaterno = $_REQUEST['apmaterno'];
	//registroDos
	$folio = $_REQUEST['folio'];
    $protocolo = $_REQUEST['protocolo'];
	$tipomuestra = $_REQUEST['tipomuestra'];
	//proceso de la muestra
	$ensayo = $_REQUEST['ensayo'];
	$resultado = $_REQUEST['resultado'];
	$observ = $_REQUEST['observ'];
	$fechaP = $_REQUEST['fechaP'];
    //$ = $_REQUEST[''];
	$reqlen = 	strlen($nombre) * strlen($appaterno) * strlen($apmaterno) *//Quinico
				strlen($folio) * strlen($protocolo) * strlen($tipomuestra) *//registroDos
	            strlen($ensayo) * strlen($resultado) *  strlen($observ) * strlen($fechaP);//proceso de la muestra 
    if($reqlen > 0)
    {
		require("Conexion.php");//haciendo un llamdo a la base de datos
		/*INSERT INTO table_name (column1, column2, column3,...)
		  VALUES (value1, value2, value3,...) */
		//quìmico
		$sql = "INSERT INTO quimico (idquimico, nombre, appaterno, apmaterno)
				VALUES (' ', '$nombre', '$appaterno', '$apmaterno' )";
		if ($conexion->query($sql) === TRUE)//validando entrada
			{
				echo"Datos ingresados correctamente (Quìmico)." . "<br>";
				$id=$conexion->insert_id;//para saber la pK insertadad en la tabla 
			}
			else
			{
				echo"Problema al insertar los datos." . $sql . "<br>" . $conexion->error;
			}
		//análisis de la muestra 
		$sql = "INSERT INTO analisis(idanalisis, ensayo, resultado, observ, fechaP, folio, protocolo, tipomuestra, quimico_idquimico)
				VALUES (' ', '$ensayo', '$resultado', '$observ', '$fechaP', '$folio', '$protocolo', '$tipomuestra', '$id')";
		if ($conexion->query($sql) === TRUE)//validando entrada
			{
				echo"Datos ingresados correctamente (Proceso de la muestra )." . "<br>";
			}
			else
			{
				echo"Problema al insertar los datos." . $sql . "<br>" . $conexion->error;
			}
		/*Fin de RegistroUno*/	
		mysqli_close($conexion);
		clearstatcache();
		header("location:../vistas/Proceso.php");
	}
?>	