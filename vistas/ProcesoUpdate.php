<?php
    require("../scripts/Conexion.php");//haciendo un llamdo a la base de datos
	//valores a modificar
	$id = $_POST['id'];
	$folio = $_POST['folio'];
    $protocolo = $_POST['protocolo'];
	$tipomuestra = $_POST['tipomuestra'];
	//proceso de la muestra
	$ensayo = $_POST['ensayo'];
	$resultado = $_POST['resultado'];
	$observ = $_POST['observ'];
	$fechaP = $_POST['fechaP'];
	
	$sql = "UPDATE analisis SET ensayo = '$ensayo', fechaP = '$fechaP', folio = '$folio', observ = '$observ',
            protocolo = '$protocolo', resultado = '$resultado', tipomuestra = '$tipomuestra' WHERE id ";
	$result = $mysqli->query($sql);		
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet"href="../css/normalize.css">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
	    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
	    <link rel="stylesheet" href="../css/Style.css">
		<!-- Bootstrap Core JavaScript -->
		<script src="../js/jquery.js"></script>
		
		<script src="../js/bootstrap.min.js"></script>
	    <title>Proceso_Modificado</title>
		
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
			    <div class="panel panel-default">
				    <div class="panel-heading">
					    <h3 class="panel-title">Proceso Modificado</h3>
				    </div>
					<div class="panel-body" style="text-align:center">
						<?php if($result) { ?>
							<h3>REGISTRO MODIFICADO EXITOSAMENTE</h3>
							<?php } else { ?>
							<h3>ERROR AL MODIFICAR EL REGISTRO</h3>
						<?php } ?>
						<a href="BuscadorAQ.php" class="btn btn-primary">Regresar</a>
					</div>
			    </div>
			</div>
		</div>
	</body>
</html>