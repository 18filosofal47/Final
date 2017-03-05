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
	$reqlen = 	strlen($folio) * strlen($protocolo) * strlen($tipomuestra) *//registroDos
	            strlen($nombre) * strlen($appaterno) * strlen($apmaterno) *//Quinico
	            strlen($ensayo) * strlen($resultado) *  strlen($observ) * strlen($fechaP);//proceso de la muestra 
    if($reqlen > 0)
    {
		require("Conexion.php");//haciendo un llamdo a la base de datos
		mysqli_autocommit($conexion, false);
		$flag = true;
		//quìmico
		$sql1 = "INSERT INTO quimico (idquimico, nombre, appaterno, apmaterno)
				VALUES (' ', '$nombre', '$appaterno', '$apmaterno' )";
		$resultado = mysqli_query($conexion, $sql1);
		if ($conexion->query($sql1) === TRUE )//validando entrada
		{
			
			if ($flag)//si no ha habido error en las consultas 
			{ 
			    mysqli_commit($conexion);  
				echo "Consultas ejecutadas correctamente" . "<br>";  
				
			}
			else{  
				 mysqli_rollback($conexion);  
				 echo "Todas las consultas han sido revertidas";  
			}
            echo"Datos ingresados correctamente (Quìmico)." . "<br>";
			$id=$conexion->insert_id;//para saber la pK insertadad en la tabla 			
		}
		else{
			if (mysqli_errno($conexion)) 
			{  
				$flag = false;  
			    echo "Error: " . mysqli_error($conexion) . ". ";  
			 } 
			echo"Problema al insertar los datos." . $sql1 . "<br>" . $conexion->error;
		}
		//análisis de la muestra 
		$sql2 = "INSERT INTO analisis(idanalisis, ensayo, resultado, observ, fechaP, folio, protocolo, tipomuestra, quimico_idquimico)
				VALUES (' ', '$ensayo', '$resultado', '$observ', '$fechaP', '$folio', '$protocolo', '$tipomuestra', '$id')";
		$result = mysqli_query($conexion, $sql2);
		if ($conexion->query($sql2) === TRUE)//validando entrada
		{
			if ($flag)//si no ha habido error en las consultas 
			{ 
			    mysqli_commit($conexion);  
				echo "Consultas ejecutadas correctamente" . "<br>";  
			}
			else{  
				 mysqli_rollback($conexion);  
				 echo "Todas las consultas han sido revertidas";  
			} 
			echo"Datos ingresados correctamente (Proceso de la muestra )." . "<br>";
		}
		else{
			if (!mysqli_errno($conexion))
			{  
				$flag = false;  
				echo "Error: " . mysqli_error($conexion) . ". ";  
			}
			echo"Problema al insertar los datos." . $sql2 . "<br>" . $conexion->error;
		}
		/*Fin de RegistroUno*/	
		mysqli_close($conexion);
		clearstatcache();
		//header("location:../vistas/Proceso.php");
	}
?>	