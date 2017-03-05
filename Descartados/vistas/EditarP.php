<?php
	require("../scripts/Conexion.php");//haciendo un llamdo a la base de datos
	/*registroDos
	$idanalisia = $_GET['idanalisia'];
	$folio = $_GET['folio'];
    $protocolo = $_GET['protocolo'];
	$tipomuestra = $_GET['tipomuestra'];
	//proceso de la muestra
	$ensayo = $_GET['ensayo'];
	$resultado = $_GET['resultado'];
	$observ = $_GET['observ'];
	$fechaP = $_GET['fechaP'];
	/*Analisis a quimico*/
	$consulta = "SELECT * FROM `analisis` WHERE idanalisis";
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
	    <title>Editar_Proceso</title>
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
										<h1 class="panel-title">Datos del proceso a editar</h1>
									</div>
									<div class="panel-body">
										<form class="form-horizontal" role="form" name="forma_proceso_de_la_muestra" method="post"  action="ProcesoUpdate.php">
											<table class="table table-condensed table-bordered">	
												<tr>
												    <th>Folio de la muestra</th>
												    <th>Protocolo</th>
												    <th>Tipo de muestra</th>
											    </tr>
												<tr>
												    <th><input type="text" class="form-control" placeholder="Folio de la muestra" name="folio" ng-model="folio" value="<?php echo $row['folio']; ?>" required onChange="javascript:this.value=this.value.toUpperCase();"/></th>
												    <th><input type="text" class="form-control" placeholder="Protocolo" name="protocolo" ng-model="protocolo" value="<?php echo $row['protocolo']; ?>" required onChange="javascript:this.value=this.value.toUpperCase();"/></th>
												    <th><input type="text" class="form-control" placeholder="Tipo de muestra" name="tipomuestra" ng-model="tipomuestra" value="<?php echo $row['tipomuestra']; ?>" required onChange="javascript:this.value=this.value.toUpperCase();"/></th>
											    </tr>
												<tr>
												    <th>
													    <table class="table table-condensed table-bordered">
															<tr>
																<th>Ensayo</th>
															</tr>
															<tr>
																<th><input onChange="javascript:this.value=this.value.toUpperCase();" type="text" class="form-control" placeholder="Ensayo" name="ensayo" ng-model="ensayo" value="<?php echo $row['ensayo']; ?>" required/></th>
															</tr>
															<tr>
																<th>Fecha de proceso</th>
															</tr>
															<tr>
																<th>
																    <label label for="date"></label>
																	<input id="date" type="date" required name="fechaP" class="form-control" ng-model="" class="form-control" ng-model="fechaP" value="<?php echo $row['fechaP']; ?>"/>
																</th>
															</tr>
															<tr>
																<th>Resultado</th>
															</tr>
															<tr>
																<th><input onChange="javascript:this.value=this.value.toUpperCase();" type="text" class="form-control" placeholder="Resultado" name="resultado" ng-model="resultado" value="<?php echo $row['resultado']; ?>" required/></th>
															</tr>
														</table>	
													</th>
												    <th colspan="2" >
													    <table class="table table-condensed table-bordered">
															<tr>
																<th colspan="3">Observaciones</th>
															</tr>
															<tr>
																<th colspan="3">
																    <textarea onChange="javascript:this.value=this.value.toUpperCase();" type="text" class="form-control" ng-model="observ" required name="observ" value="<?php echo $row['observ']; ?>">
																	</textarea>
																</th>
															</tr>
														</table>
													</th>
											    </tr>
												<tr>
												    <th>La fecha actual es:
													    <?php 
															echo date("d/M/Y");
														?>
													</th>
													<th>
														Hora:
														<?php 
															echo date("g:i a");
														?>
													</th>
												    <th colspan="2" rowspan="2">
                                                        <input class="btn btn-success" type="submit" value="Modificar">
														<a href="BuscadorAQ.php" class="btn btn-info">Cancelar<a/>
														<input type="button" class="btn btn-default" id="menu-toggle" value="Agrandar" href="#menu-toggle">
													</th>
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
		//TinyMCE para tus textareas
		    tinymce.init({
				selector: "textarea",
				language: 'es_MX',
				setup : function(ed)
				{
					ed.on('init', function(evt)
					{
						ed.setContent('<?php echo $row['observ']; ?>');
					});
				}
			 });
		</script>
	</body>
</html>