<?php 
   //Historia Clinica del paciente
    //paciente
	$nombre = $_POST['nombre'];
    $appaterno = $_POST['appaterno'];
    $apmaterno = $_POST['apmaterno'];
    $nacimiento = $_POST['nacimiento'];
    $numero =  $_POST['numero'];
    $sexo = $_POST['sexo'];
	//tiempo
    $edad = $_POST['edad'];
    $tiempoV = $_POST['tiempoV'];/*Tiempo de vida*/
	//medico
	$nombreMD = $_POST['nombreMD'];
    $appaternoMD = $_POST['appaternoMD'];
    $apmaternoMD = $_POST['apmaternoMD'];
    $matricula = $_POST['matricula'];
	
	$reqlen = /*paciente*/strlen($nombre) * strlen($appaterno) * strlen($apmaterno) * strlen($nacimiento) *
			  strlen($numero) * strlen($edad) * strlen($tiempoV) * strlen($sexo)/*paciente*/ * 
		      /*medico*/ strlen($nombreMD) * strlen($appaternoMD)* strlen($apmaternoMD)* strlen($matricula)/*medico*/;
	if($reqlen > 0)
    {
		$enlace = mysqli_connect('localhost', 'root', '', 'laboratorio');
			if (!$enlace) 
			{
				die('Error de Conexión (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
			}
	//Bloque del archivo
		//inserciòn del archivo y comprovaciòn
			/*foreach($_FILES["archivo"] as $clave => $valor)  
			{
				echo "Propiedad: $clave --- Valor: $valor<br/>";
			}*/
		// archivo temporal (ruta y nombre).
			$binario_nombre_temporal=$_FILES['archivo']['tmp_name'] ;
		// leer del archvio temporal .. el binario subido.
			$binario_contenido = addslashes(fread(fopen($binario_nombre_temporal, "rb"), filesize($binario_nombre_temporal)));
			
		// Obtener del array FILES (superglobal) los datos del binario .. nombre, tamaño y tipo.
			$binario_nombre=$_FILES['archivo']['name'];
			$binario_peso=$_FILES['archivo']['size'];
			$binario_tipo=$_FILES['archivo']['type'];
		// movemos el archivo a la capeta de nuestro servidor
			move_uploaded_file($_FILES['archivo']['tmp_name'],"../Archivos/" . $_FILES['archivo']['name']);

				/*$titulo= $_POST['titulo'];
				$descri= $_POST['descripcion'];
			   //Insertar archivo
				/*$sql= "INSERT INTO archivos (id, titulo, descripcion, archivo_binario, archivo_nombre, archivo_peso, archivo_tipo)
						VALUES (' ', '$titulo', '$descripcion', '$binario_contenido', '$binario_nombre', '$binario_peso', '$binario_tipo')";*/
				$sql= "INSERT INTO archivos (id, binario_archivo, binario_nombre, binario_peso, binario_tipo)
						VALUES (' ', '$binario_contenido', '$binario_nombre', '$binario_peso', '$binario_tipo')";
				if($enlace->query($sql) === TRUE)//validando entrada
				{
					echo"El archivo medico insertado." . "<br>";
					$id=$enlace->insert_id;//para saber la pK insertadad en la tabla 
				}
				else
				{
					echo"Problema al insertar los datos." . $sql . "<br>" . $enlace->error;
				}
	//Bloque del archivo		
		//tiempo del paciente
			$sql = "INSERT INTO Tiempo (idTiempo, edad, tiempoV)
					VALUES (' ',  '$edad', '$tiempoV')";
			if($enlace->query($sql) === TRUE)
			{
				echo"Datos ingresados correctamente (Tiempo)." . "<br>";
				$id=$enlace->insert_id;//para saber la pK insertadad en la tabla 
			}
			else
			{
				echo"Problema al insertar los datos." . $sql . "<br>" . $enlace->error;
			}
		//insercion del paciente
			$sql = "INSERT INTO paciente (idpaciente, nombre, appaterno, apmaterno, nacimiento, numero, sexo, Tiempo_idTiempo)
                    VALUES (' ', '$nombre', '$appaterno', '$apmaterno', '$nacimiento', '$numero', '$sexo', '$id')";
			if($enlace->query($sql) === TRUE)//validando entrada
			{
				echo"Datos ingresados correctamente (Paciente)." . "<br>";
				$id=$enlace->insert_id;//para saber la pK insertadad en la tabla 
			}
			else
			{
				echo"Problema al insertar los datos." . $sql . "<br>" . $enlace->error;
			}	
		//insercion del médico
			$sql = "INSERT INTO medico (idmedico, nombreMD, appaternoMD, apmaternoMD, matricula)
                    VALUES (' ', '$nombreMD', '$appaternoMD', '$apmaternoMD', '$matricula')";
			if($enlace->query($sql) === TRUE)//validando entrada
			{
				echo"Datos ingresados correctamente (Medico)." . "<br>";
				$id=$enlace->insert_id;//para saber la pK insertadad en la tabla 
			}
			else
			{
				echo"Problema al insertar los datos." . $sql . "<br>" . $enlace->error;
			}
        //tabla Hitoria clinica completa     
            $sql = "INSERT INTO Hclinica (idHclinica,  medico_idmedico, paciente_idpaciente, archivos_idarchivos)
					VALUES (' ', '$id', '$id', '$id')";
			if($enlace->query($sql) === TRUE)//validando entrada
			{
				echo"Datos ingresados correctamente (Hitoria clinica completa)." . "<br>";
				$id=$enlace->insert_id;//para saber la pK insertadad en la tabla 
			}
			else
			{
				echo"Problema al insertar los datos." . $sql . "<br>" . $enlace->error;
			} 
		/*Fin de la historia clinica*/	
		mysqli_close($enlace);
	    clearstatcache();
	    //header("location:../vistas/Historial.php");
	}		
?>