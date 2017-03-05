<?php
	/*Declarando variables*/
	$nombre = $_POST['nombre'];
	$apaterno = $_POST['apaterno'];
	$apmaterno = $_POST['apmaterno'];
	$clave = $_POST['matricula'];
	$nusuario =  $_POST['nusuario'];
	$pass = $_POST['pass'];
	$rpass = $_POST['rpass'];
	//$tusuario = $_POST['tusuario'];
	$alta = $_POST['alta'];
	$correo = $_POST['correo'];
	$tel = $_POST['tel'];
	/*Fin de variables*/
	/**/
	$reqlen = strlen($nombre) * strlen($apaterno)* strlen($apmaterno) * strlen($matricula) * 
			  strlen($nusuario) * strlen($pass) * strlen($rpass) * 
			  strlen($alta) * strlen($correo) * strlen($tel);
	/**/
	/*Bloque para validar*/
	if($reqlen > 0)//El valor del arreglo debe ser mayor a cero
	{
		$pass = md5($pass);
		$rpass = md5($rpass);
		require("conexion.php");
		
		$consulta = "SELECT * FROM `usuario`";//haciendo una consulta a la bd
		$verificar_nombre = 0;
		if($resultado = mysqli_query($enlance, $consulta))
		{
			/*Obtener el array asociativo*/
			while($obj = mysqli_fetch_object($resultado))
			{
				if($result-> == $_POST['usuario'])
				{
					printf("%s (%s)\n", $obj->usuario);
				}
			}
			 
			/*liberar el conjunto de resultados*/
			mysqli_free_result($resultado);
		}
		
		
	}
	/**/
	/*Fin de bloque*/
		

	
		$sql = 'SELECT * FROM usuario';
		$rec = mysqli_query($sql);
		$verificar_nombre = 0;
		while($result = mysql_fetch_object($rec))
		{
			if($result-> == $_POST['nusuario'])
			{
				$verificar_nombre = 1;
				echo "El  usuario ya existe.";
			}	
		}	
		$sql = 'SELECT * FROM rusuario';
		$rec = mysqli_query($sql);
		$verificar_nusuario = 0;
		while($resultado = mysql_fetch_object($rec))
		{
			if($resultado->nusuario == $_POST['nusuario'])
			{
				$verificar_nusuario = 1;
				echo "El nombre de usuario ya existe.";
			}
		}
		if($pass === $rpass)
		{
			$pass = md5($pass);
			$rpass = md5($rpass);
			/*INSERT INTO table_name (column1, column2, column3,...)
              VALUES (value1, value2, value3,...)*/
			$sql1 = "INSERT INTO usuario (idusuario, nombre, apaterno, apmaterno, clave)
                        VALUES (' ','$nombre', '$apaterno', '$apmaterno', '$matricula')";
		    
			$id=$enlace->insert_id;//para saber la pK insertadad en la tabla 
			
			$sql = "INSERT INTO rusuario (id_rusuario, usuario, pass, rpass, alta, correo, tel, usuario_idusuario)
                    VALUES (' ',  ' $usuario', '$pass', '$rpass', '$alta', '$correo', '$tel', '$id')";
			
		    mysqli_query($sql);
			if ($enlace->query($sql1) === TRUE && $enlace->query($sql) === TRUE)
			{
				echo"Datos ingresados correctamente." . "<br>";
				
			}
			else
			{
				echo"Problema al insertar los datos." . $sql1 . "<br>" . $enlace->error;
				echo"Problema al insertar los datos." . $sql . "<br>" . $enlace->error;
			}

		}	
		else
		{
			echo 'Porfavor vuelva ingresar la contrase&#241;a';
		}
	mysqli_close($enlace);
	clearstatcache();
?>