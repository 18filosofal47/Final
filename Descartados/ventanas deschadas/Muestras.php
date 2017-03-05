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
	    <title>Captura_de_Muestras_Medicas#</title>
	</head>
	<body>
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
								Men&#250
							</a>
						</li>
						<li>
							<a href="Quimico.php">Inicio</a>
						</li>
						<li>
							<a href="Muestras.php">Ingresar</a>
						</li>
						<li>
							<a href="Proceso.php">Proceso</a>
						</li>
						<li>
							<a href="BuscadorQ.php">B&#250squeda</a>
						</li>
						<li>
							<a href="">Copyright</a>
						</li>
						<li>
							<a href=""></a>
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
										<h3 class="panel-title">Muestra m&#233;dica</h3>
									</div>
								
										<form class="form-horizontal"  method="post"  action="../scripts/Captura.php" enctype="multipart/form-data"">
										    
											<table class="table table-bordered table-condensed">
											    
												<tr>
												    <th colspan="3">
													   <table class="table table-bordered table-condensed">
													        <tr>
																<th colspan="3">Responsable</th>
															</tr>
															<tr>
																<th for="inputNombre">Nombre</th>
																<th for="inputApellido paterno">Apellido paterno</th>
																<th for="inputApellido materno">Apellido materno</th>
															</tr>
															<tr>
																<th><input id="inputNombre" class="form-control" placeholder="Nombre" name="nombreU" ng-model="usuario.nombre" required type="text"name="nombre" /></th>
																<th><input id="inputApellido paterno" class="form-control" placeholder="Apellido paterno" type="text" name="appaterno" ng-model="usuario.appaterno" required /></th>
																<th><input id="inputApellido materno" class="form-control" placeholder="Apellido materno" type="text" name="apmaterno" ng-model="usuario.apmaterno" required /></th>
															</tr>
													   </table>
													</th>
													<th>
													    <table class="table table-bordered table-condensed">
															<tr>
																<th colspan="2" for="inputFecha de toma">Fecha de toma</th>
															</tr>
															<tr>
																<th><input id="inputFecha de toma" class="form-control" placeholder="Fecha de toma" type="text" name="fecha" ng-model="usuario.fecha" required /></th>
															</tr>
															<tr>
																<th colspan="2" for="inputHora">Hora</th>
															</tr>
															<tr>
																<th><input id="inputHora" class="form-control" placeholder="Hora" type="text" name="hora" ng-model="usuario.hora" required /></th>
															</tr>
															
														</table>
													</th>
												</tr>
												<tr>
													<th colspan="2">
													    <table class="table table-bordered table-condensed">
														    <tr>
																<th for="inputObservaciones">Observaciones</th>
															</tr>
															<tr>
																<th>
																	<textarea id="inputObservaciones" class="form-control" ng-model="usuario.observ" required  type="text" name="observ" cols="48" rows="4" wrap="virtual">
																	</textarea>
																</th>
															</tr>
															
													    </table>
													</th>
													<th colspan="2">
														<table class="table table-bordered table-condensed">
															<tr>
																<th>C&#243;digo</th>
															</tr>
															<tr>
																<th>C&#243;digo</th>
																<th>
																	<input type="button" class="btn btn-default" type="name" name="codigo"value="Generar">
																</th>
															</tr>
														</table>
													</th>
												</tr>
												
												<tr>
													<th>
													    <table class="table table-bordered table-condensed">
															<tr>
																<th colspan="2" for="inputMuestra">Muestra</th>
															</tr>
															<tr>
																<th><input id="inputMuestra" class="form-control" placeholder="Muestra" type="text" name="muestra" ng-model="usuario." required /></th>
															</tr>
														</table>
													</th>
													<th>
													    <table class="table table-bordered table-condensed">
															<tr>
																<th colspan="2" for="inputContenedor">Contenedor</th>
															</tr>
															<tr>
																<th><input id="inputContenedor" class="form-control" placeholder="Contenedor" type="text" name="contenedor" ng-model="usuario.contenedor" required /></th>
															</tr>
														</table>
													</th>
													<th>
														<table class="table table-bordered table-condensed">
															<tr>
																<th colspan="2" for="inputUnidad de Medida">Unidad de Medida</th>
															</tr>
															<tr>
																<th><input id="inputUnidad de Medida" class="form-control" placeholder="Unidad de Medida" type="text" name="umedida" ng-model="usuario.umedida" required /></th>
																<th for="inputSufijo">	
																	<select id="inputSufijo" class="form-control" placeholder="Sufijo" type="text" name="sufijo" ng-model="usuario.sufijo" required >
																			<option value=""></option>
																			<option value="mcgranos">&#0181;g</option>
																			<option value="mg">mg</option>
																			<option value="g">g</option>
																			<option value="mcl">&#0181;l</option>
																			<option value="ml">ml</option>
																	</select>
																</th>
															</tr>
														</table>
													</th>
													<th>
													    <table class="table table-bordered table-condensed">
															<tr>
																<th colspan="2" for="input">Total</th>
															</tr>
															<tr>
																<th><input id="input" class="form-control" placeholder="" ng-model="usuario." required type="" name="total"/></th>
															</tr>
														</table>
													</th>
												</tr>
												<tr>
												    <th>
													    <table class="table table-bordered table-condensed">
															<tr>
																<th colspan="2" for="input">Resguardo</th>
															</tr>
															<tr>
																<th><input id="input" class="form-control" placeholder="" ng-model="usuario." required type="" name="resguardo"/></th>
															</tr>
														</table>
													</th>
													<th>
													    <table class="table table-bordered table-condensed">
															<tr>
																<th colspan="2" for="input">Fecha de la muestra</th>
															</tr>
															<tr>
																<th>
																    <label label for="date"></label>
														            <input id="date" type="date" name="nacimiento"> 
																</th>
															</tr>
														</table>
													</th>
													<th>
													    <table class="table table-bordered table-condensed">
															<tr>
																<th colspan="2" for="input">Protocolo</th>
															</tr>
															<tr>
																<th><input id="input" class="form-control" placeholder="" ng-model="usuario." required type="name" name="protocolo"/></th>
															</tr>
														</table>
													</th>
													<th>
													    <table class="table table-bordered table-condensed">
															<tr>
																<th colspan="2" for="input">Almacenaje</th>
															</tr>
															<tr>
																<th><input id="input" class="form-control" placeholder="" ng-model="usuario." required type="" name="almacen"/></th>
															</tr>
														</table>
													</th>
												</tr>

												<tr>
													
													
												</tr>
												
												<tr> 
													<th colspan="3">La fecha actual es:
														<?php 
															echo date("d/M/Y");
														?>
													</th>
													<th colspan="">Hora:
														<?php 
															echo date("g:i a");
														?>
													</th>
												</tr>
												<tr>
													<th colspan="4">
														<input type="button" class="btn btn-default" type="submit" value="Ingresar">
														<input type="button" class="btn btn-default" type="reset" value="Limpiar">
														<input type="button" class="btn btn-default" id="menu-toggle" value="Agrandar" href="#menu-toggle">
													</th>
												</tr>
											</table>
										</form> 
										<?php
											if(isset($_POST['submit']))
											{
												require("../scripts/registrouno.php");
											}
											clearstatcache();
										?>
									
								</div>
								
							</div>
						</div>
					</div>
			    </div>
				<footer>
					<div class="container">
					<p><h3></h3></p>
					<p><h3></h3></p><a style="color:#FFF;"></a>
					</div>
				</footer>
				<!-- /#page-content-wrapper -->
			</div>
			
		</div>
		<script src="../js/jquery.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="../js/bootstrap.min.js"></script>
		<!-- Menu Toggle Script -->
		<script>
			$("#menu-toggle").click(function(e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");
			});
		</script>
	</body>
</html>