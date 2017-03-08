<?php
    if(isset () )
	{
		
	}
	require("../scripts/Conexion.php");//haciendo un llamdo a la base de datos
	//Quinico
	$idquimico = $_GET['idquimico'];
    $consulta = "SELECT * FROM `quimico` WHERE idquimico = '$quimico`'";
    $resultado = mysqli_query($conexion, $consulta);
	/*consulta a realizar para modificar en la tabla */
	$row = mysqli_fetch_assoc($resultado);
	
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet"href="../css/normalize.css">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
	    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="../css/simple-sidebar.css">
	    <link rel="stylesheet" href="../css/Style.css">
		<script src="../rutinas/angular-1.5.8/angular.min.js"></script>
	    <title>Editar_Proceso_ del_Qu&#237;mico</title>
	</head>
	<body ng-app="myApp">
	    <header>
			<div class="container">

			</div>
		</header>
	    <div class="container-fluid">  
			<div id="wrapper">
				<!-- Sidebar -->
				<div id="sidebar-wrapper">
					<ul class="sidebar-nav">
						<li class="sidebar-brand">
							<a href="#">
								Modificaci&#243;n.
							</a>
						</li>
						<li>
							<a href="EditarP.php">Editar Proceso</a>
						</li>
						<li>
							<a href="EditarP_II.php">Editar Qu&#237;mico</a>
						</li>
						<li>
							<a href="">Copyright</a>
						</li>
					</ul>
				</div>
				<!-- /#sidebar-wrapper -->
				<!-- Page Content -->
				<div id="page-content-wrapper">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h1 class="panel-title">Datos del Qu&#237;mico a editar</h1>
									</div>
									<div class="panel-body">
										<form class="form-horizontal" role="form" name="forma_proceso_de_la_muestra" method="post"  action="ProcesoUpdate.php">
											<table class="table table-condensed table-bordered">	
												<tr>
												    <th colspan="3">Qu&#237;mico analista
													    <table class="table table-condensed table-bordered">
														    <tr>
																<th>Nombre</th>
																<th>Apellido paterno</th>
																<th>Apellido materno</th>
															</tr>
															<tr>
																<th><input onChange="javascript:this.value=this.value.toUpperCase();" type="text" class="form-control" placeholder="Nombre" name="nombre" ng-model="nombre" value="<?php echo $row['nombre']; ?>" required/></th>
																<th><input onChange="javascript:this.value=this.value.toUpperCase();" type="text" class="form-control" placeholder="Apellido paterno" name="appaterno" ng-model="appaterno" value="<?php echo $row['appaterno']; ?>" required/></th>
																<th><input onChange="javascript:this.value=this.value.toUpperCase();" type="text" class="form-control" placeholder="Apellido materno" name="apmaterno" ng-model="apmaterno" value="<?php echo $row['apmaterno']; ?>" required/></th>
															</tr>
														</table>
													</th>
											    </tr>
												<tr>
												    <th colspan="3">
                                                        <input class="btn btn-success" type="submit" value="Modificar">
														<a href="BuscadorAQ.php" class="btn btn-info">Cancelar<a/>
														<input type="button" class="btn btn-default" id="menu-toggle" value="Agrandar" href="#menu-toggle">
													</th>
												</tr>
												<tr>
												    <th>La fecha actual es: <?php echo date("d/M/Y");?></th>
													<th>Hora:<?php echo date("g:i a");?></th>
											    </tr>
											</table>
										</form> 
										<?php
											if(isset($_POST['submit']))
											{
												require("ProcesoUpdate.php");
											}
											clearstatcache();
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
			    </div>
				<!-- /#page-content-wrapper -->
			</div>
		</div>
		<script src="../js/jquery.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="../js/bootstrap.min.js"></script>
		<!--fuentes de la librería TinyMCE-->
		<script src="../js/tinymce/js/tinymce/tinymce.min.js"></script>
		<!-- Menu Toggle Script -->
		<script>
			$("#menu-toggle").click(function(e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");
				$("#menu-toggle").attr('value', 'Reducir');
			});
			 });
		</script>
	</body>
</html>