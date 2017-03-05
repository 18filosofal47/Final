<?php
    //registroUno
	//responsable
	$nombre = $_POST['nombre'];
    $appaterno = $_POST['appaterno'];
    $apmaterno = $_POST['apmaterno'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
	//muestra
    $muestra = $_POST['muestra'];
    $contenedor = $_POST['contenedor'];
    $umedida = $_POST['umedida'];
    $sufijo = $_POST['sufijo'];
    $total = $_POST['total'];
	$fechaR = $_POST['fechaR'];
	$observ = $_POST['observ'];
	$resguardo = $_POST['resguardo'];
	$protocolo = $_POST['protocolo'];
	$almacen = $_POST['almacen'];
	//Código de barar
	//$Generar = $_POST['Generar'];
	$UltimoNum = $_POST['UltimoNum'];
    //Validando entrada 
	$reqlen = strlen("$nombre") *  strlen("$appaterno") *  strlen("$apmaterno") *  strlen("$fecha") *  strlen("$hora") * /*responsable*/ 
	          strlen("$muestra") * strlen("$contenedor") *  strlen("$umedida") *  strlen("$sufijo") *  strlen("$total") * /*muestra*/
			  strlen("$fechaR") * strlen("$observ") * strlen("$resguardo") *  strlen("$protocolo") * strlen("$almacen") * /*caracteristicas*/
	          strlen ("$UltimoNum");
	if($reqlen > 0)
    {
		require("Conexion.php");//haciendo un llamdo a la base de datos
		/*Inicio de RegistroUno*/
		/*$sql = "INSERT INTO table_name (column1, column2, column3,...)
				VALUES (value1, value2, value3,...)";*/
		//muestra
		$sql = "INSERT INTO muestra (idmuestra, muestra, contenedor, umedida, sufijo, total, fechaR, observ, resguardo, protocolo, almacen)
				VALUES (' ', '$muestra', '$contenedor', '$umedida', '$sufijo', '$total', '$fechaR', '$observ', '$resguardo', '$protocolo', '$almacen')";     
		if ($conexion->query($sql) === TRUE)
		{
			echo"Datos ingresados correctamente (De la muestra)." . "<br>";
			$id=$conexion->insert_id;//para saber la pK insertadad en la tabla 
		}
		else
		{
			echo"Problema al insertar los datos." . $sql . "<br>" . $conexion->error;
		}
		//insercion del responsable
		$sql = "INSERT INTO responsable (idresponsable, nombre, appaterno, apmaterno, fecha, hora)
				VALUES (' ', '$nombre', '$appaterno', '$apmaterno', '$fecha', '$hora')";
		if ($conexion->query($sql) === TRUE)
		{
			echo"Datos ingresados correctamente (Del responsable)." . "<br>";
			$id=$conexion->insert_id;//para saber la pK insertadad en la tabla 
		}
		else
		{
			echo"Problema al insertar los datos." . $sql . "<br>" . $conexion->error;
		}
		//codigo numerico y de barras
		$sql = "INSERT INTO codigo (idcodigo, muestra_idmuestra, Responsable_idResponsable, UltimoNum)
				VALUES (' ', '$id', '$id', '$UltimoNum')";
		if ($conexion->query($sql) === TRUE)
		{
			echo"Datos ingresados correctamente (Del la captura)." . "<br>";
		}
		else
		{
			echo"Problema al insertar los datos." . $sql . "<br>" . $conexion->error;
		}
		/*Fin de RegistroUno*/
		mysqli_close($conexion);
		clearstatcache();
		header("location:../vistas/Ingresar.php");
	}
?>