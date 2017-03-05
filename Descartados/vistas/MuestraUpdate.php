<?php
    require("../scripts/Conexion.php");//haciendo un llamdo a la base de datos
	/*Fin de la consulta*/	
	mysqli_close($conexion);
	clearstatcache();
?>