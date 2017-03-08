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
	    <title>Proceso#</title>
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
								Men&#250
							</a>
						</li>
						<li>
							<a href="Quimico.php">Inicio</a>
						</li>
						<li>
							<a href="Ingresar.php">Ingresar</a>
						</li>
						<li>
							<a href="Proceso.php">Proceso</a>
						</li>
						<li>
							<a href="BuscadorG.php">B&#250;squeda</a>
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
										<h3 class="panel-title">Proceso</h3>
									</div>
									<div class="panel-body">
										<form class="form-horizontal" role="form" name="forma_proceso_de_la_muestra" method="post"  action="../scripts/registrodos.php">
											<table class="table table-condensed table-bordered">	
												<tr>
												    <th>Folio de la muestra</th>
												    <th>Protocolo</th>
												    <th>Tipo de muestra</th>
											    </tr>
												<tr>
												    <th><input type="text" class="form-control" placeholder="Folio de la muestra" name="folio" ng-model="folio" required /></th>
												    <th><input type="text" class="form-control" placeholder="Protocolo" name="protocolo" ng-model="protocolo" required  onChange="javascript:this.value=this.value.toUpperCase();"/></th>
												    <th><input type="text" class="form-control" placeholder="Tipo de muestra" name="tipomuestra" ng-model="tipomuestra" required onChange="javascript:this.value=this.value.toUpperCase();"/></th>
											    </tr>
												<tr>
												    <th>
													    <table class="table table-condensed table-bordered">
															<tr>
																<th>Ensayo</th>
															</tr>
															<tr>
																<th><input onChange="javascript:this.value=this.value.toUpperCase();" type="text" class="form-control" placeholder="Ensayo" name="ensayo" ng-model="ensayo" required /></th>
															</tr>
															<tr>
																<th>Fecha de proceso</th>
															</tr>
															<tr>
																<th>
																    <label label for="date"></label>
																	<input id="date" type="date" required name="fechaP" class="form-control" ng-model="" class="form-control" ng-model="fechaP"/>
																</th>
															</tr>
															<tr>
																<th>Resultado</th>
															</tr>
															<tr>
																<th><input onChange="javascript:this.value=this.value.toUpperCase();" type="text" class="form-control" placeholder="Resultado" name="resultado" ng-model="resultado" required /></th>
															</tr>
														</table>	
													</th>
												    <th colspan="2" >Qu&#237;mico analista
													    <table class="table table-condensed table-bordered">
														    <tr>
																<th>Nombre</th>
																<th>Apellido paterno</th>
																<th>Apellido materno</th>
															</tr>
															<tr>
																<th><input onChange="javascript:this.value=this.value.toUpperCase();" type="text" class="form-control" placeholder="Nombre" name="nombre" ng-model="nombre" required /></th>
																<th><input onChange="javascript:this.value=this.value.toUpperCase();" type="text" class="form-control" placeholder="Apellido paterno" name="appaterno" ng-model="appaterno" required /></th>
																<th><input onChange="javascript:this.value=this.value.toUpperCase();" type="text" class="form-control" placeholder="Apellido materno" name="apmaterno" ng-model="apmaterno" required /></th>
															</tr>
															<tr>
																<th colspan="3">Observaciones</th>
															</tr>
															<tr>
																<th colspan="3">
																    <textarea onChange="javascript:this.value=this.value.toUpperCase();" type="text" class="form-control" ng-model="observ" required name="observ">
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
                                                        <input class="btn btn-default" type="submit" value="Ingresar">
														<input class="btn btn-default" type="reset" value="Limpiar">
														<input type="button" class="btn btn-default" id="menu-toggle" value="Agrandar" href="#menu-toggle">
													</th>
											    </tr>
												<!--tr>
													<th colspan="2">
														<table class="table table-condensed">
															<tr>
																<th colspan="2">C&#243;digo</th>
															</tr>
															<tr>
																<th>C&#243;digo</th>
																<th>
																	<input type="button" class="btn btn-default" type="name" name="codigoDos"value="Generar">
																</th>
															</tr>
														</table>
													</th>
											    </tr-->
											</table>
										</form> 
										<?php
											if(isset($_POST['submit']))
											{
												require("../scripts/registrodos.php");
											}
											clearstatcache();
										?>
									</div>
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
			 });
		</script>
	</body>
</html>