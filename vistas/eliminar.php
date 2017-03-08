<?php
	require("../scripts/Conexion.php");//haciendo un llamdo a la base de datos
    $codigo = $_GET['codigo'];
	//$registro = mysqli_query("SELECT idquimico, idanalisis FROM quimico, analisis WHERE quimico.idquimico=analisis.idanalisis and quimico.idquimico = '$codigo'", $conexion);
    $consulta = "DELETE FROM quimico, analisis WHERE idquimico = '$codigo' IN (quimico.idquimico, analisis.idanalisis) AND quimico.idquimico=analisis.idanalisis";
	/*DELETE FROM tabla1, tabla2, tabla2, tabla4 
		WHERE '[ID A ELIMINAR]' IN (tabla1.ID,tabla2.ID,tabla3.ID)
		AND tabla3.ID2 = tabla4.ID2*/
?>
<html lang="es">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet"href="../css/normalize.css">
		<!--Bootstrap estlos-->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
	    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
		<!-- CSS JavaScript-->
		<link rel="stylesheet" href="../css/simple-sidebar.css">
	    <link rel="stylesheet" href="../css/Style.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($consulta) { ?>
					<h3>REGISTRO ELIMINADO</h3>
					<?php } else { ?>
					<h3>ERROR AL ELIMINAR</h3>
					<?php } ?>
					<a href="BuscadorFQ.php" class="btn btn-primary">Regresar</a>
				</div>
			</div>
		</div>
		<script src="../js/jquery-1.12.4.js"></script>
		<script src="../js/bootstrap.min.js"></script>
	</body>
</html>
