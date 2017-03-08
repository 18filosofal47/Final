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
    /*class  enlace extends mysqli
	{
		public function __construct()
		{
			parent:: __construct('localhost', 'root', '', 'laboratorio');
			$this->query("SET NAMES 'utf8';");
			$this->connect_errno ? die ('Error de Conexión'): $x = 'Conexión exitosa'.'</br>';
			echo $x;
			unset($x);
		}
	}
	//$db = new enlace();
    /*$enlace = mysqli_connect('localhost', 'root', '', 'laboratorio');
	//mysqli_set_charset($enlace, "utf8");
	if (!$enlace) 
	{
		die('Error de Conexión (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
	}
	//echo 'Éxito... ' . mysqli_get_host_info($enlace) . "\n";*/
?>
