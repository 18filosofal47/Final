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
	    <title>Historial#</title>
	</head>
	<body ng-app="myApp" ng-controller="myCtrl">
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
							<a href="Medico.php">Inicio</a>
						</li>
						<li>
							<a href="Historial.php">Historial</a>
						</li>
						</li>
						<li>
							<a href="BuscadorP.php">B&#250;squeda</a>
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
										<h3 class="panel-title">Historial m&#233;dico</h3>
									</div>
									<div class="panel-body">
										<form class="form-horizontal" role="form" name="forma_historia_clinica" method="post" action="../scripts/Paciente.php" enctype="multipart/form-data">
											<table class="table table-hover table-condensed table-bordered">
											    <tr><!--renglon uno-->
												    <th colspan="4">
													    <table class="table table-hover table-condensed table-bordered">
														    <tr>
															    <th colspan="4"><h3>Paciente</h3></th>
														    </tr>
														    <tr><!--renglon uno-->
															    <th>Nombre</th>
																<th>Apellido paterno</th>
																<th>Apellido materno</th>
																<th>G&#233;nero</th>
														    </tr>
															<tr><!--renglon dos-->
																<th><input onChange="javascript:this.value=this.value.toUpperCase();" class="form-control" placeholder="Nombre" ng-model="nombre" required type="text" name="nombre"/></th>
																<th><input onChange="javascript:this.value=this.value.toUpperCase();" class="form-control" placeholder="Apellido paterno" ng-model="appaterno" required type="text" name="appaterno"/></th>
																<th><input onChange="javascript:this.value=this.value.toUpperCase();" class="form-control" placeholder="Apellido materno" ng-model="apmaterno" required type="text" name="apmaterno" /></th>
																<th>
																	<select class="form-control" required type="text" name="sexo" ng-model="selectedName" ng-options="x for x in names">
																	</select>
																</th>
															</tr>
														</table>
												    </th>
												</tr>
												<tr><!--renglon dos-->
												    <th  colspan="2">
														<table class="table table-condensed table-bordered">
															<tr>
																<th>N&#250;mero de expediente</th>
																<th>Fecha de nacimiento</th>
															</tr>
															<tr>
																<th><input class="form-control" placeholder="N&#250;mero de expediente" ng-model="numero" required type="text" name="numero"/></th>
																<th>
																	<label label for="date"></label>
																	<input class="form-control" ng-model="nacimiento" required id="date" type="date" name="nacimiento"> 
																</th>
															</tr>
														</table>
													</th>
													<th colspan="2">
														<table class="table table-condensed table-bordered">
														    
															<tr>
																<th>Edad</th>
																<th>Tiempo</th>
															</tr>
															<tr>
																<th>
																	<input class="form-control" placeholder="Edad" ng-model="edad" required type="text" name="edad"/>
																</th>
																<th>
																	<input onChange="javascript:this.value=this.value.toUpperCase();" class="form-control" placeholder="(dia´s, mes(es) o a&#241;o´s)" ng-model="tiempoV" required type="text" name="tiempoV"/>																				
																</th>
															</tr>
														</table>
													</th>
												</tr>
												<tr><!--renglon tres-->
												    <th colspan="2">
													    <table class="table table-hover table-condensed table-bordered">
														    <tr>
															    <th>Titulo</th>
															    <th> 
																    <input onChange="javascript:this.value=this.value.toUpperCase();" class="from-control" placeholder="Titulo del archivo"  ng-model="titulo" required type="txt" name="titulo" />
																</th>
														    </tr>
															<tr>
															    <th>Descripci&#243;n</th>
																<th>
																    <textarea onChange="javascript:this.value=this.value.toUpperCase();" onKeyUp="valida_longitud()" ng-required="descripcion" name="descripcion" rows="2" cols="22"></textarea>
																</th>
															</tr>
														</table>
													</th>
												    <th colspan="2">
													    <table class="table table-hover table-condensed table-bordered">
															<tr>
																<th colspan="3">Adjuntar archivo
																	<input id="Adjuntar_archivo" class="form-control" ng-model="archivo" required type="file" name="archivo"/></br>
																	<!--a href="lista.php">lista</a-->
																	<a href="javascript:popUp('ventana.html')">Abrir documento</a>
																</th>
															</tr>
														</table>
												    </th>
												</tr>
												<tr>
													<th colspan="4"><h3>M&#233;dico</h3></th>
												</tr>
												<tr>
													<th>Nombre</th>
													<th>Apellido paterno</th>
													<th>Apellido materno</th>
													<th>Matr&#237;cula</th>
												</tr>
												<tr>
													<th><input onChange="javascript:this.value=this.value.toUpperCase();" class="form-control" placeholder="Nombre" ng-model="nombreMD" required type="text" name="nombreMD"/></th>
													<th><input onChange="javascript:this.value=this.value.toUpperCase();" class="form-control" placeholder="Apellido paterno" ng-model="appaternoMD" required type="text" name="appaternoMD"/></th>
													<th><input onChange="javascript:this.value=this.value.toUpperCase();" class="form-control" placeholder="Apellido materno" ng-model="apmaternoMD" required type="text" name="apmaternoMD" /></th>
													<th><input onChange="javascript:this.value=this.value.toUpperCase();" class="form-control" placeholder="Matr&#237;cula" ng-model="matricula" required type="text" name="matricula"/></th>
												</tr>
												<tr> 
													<th colspan="3">La fecha actual es:
														<?php 
															echo date("d/M/Y");
														?>
													</th>
													<th>Hora:
														<?php 
															echo date("g:i a");
														?>
													</th>
												</tr>
												<tr>
													<th colspan="4">
														<input class="btn btn-default" type="submit" name="" value="Ingresar">
														<input class="btn btn-default" type="reset" value="Limpiar">
														<input type="button" class="btn btn-default" id="menu-toggle" value="Agrandar" href="#menu-toggle">
													</th>
												</tr>
											</table>
										</form> 
										<?php
											if(isset($_POST['submit']))
											{
												require("../scripts/Paciente.php");
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
		<script src="../js/jquery-ui.js"></script>
		<script src="../js/jquery.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="../js/bootstrap.min.js"></script>
		<script>
		<!-- Menu Toggle Script -->
			$("#menu-toggle").click(function(e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");	
				$("#menu-toggle").attr('value', 'Reducir');
			});
		//select y opciones
			var app = angular.module('myApp', []);
			app.controller('myCtrl', function($scope) {
				$scope.names = ["MASCULINO", "FEMENINO"];
			});
		</script>
		<script type="text/javascript">
		//Controlar el número de carácteres permitidos en un textarea
		    contenido_textarea = ""
			num_caracteres_permitidos = 100
			function valida_longitud(){
			   num_caracteres = document.forms[0].texto.value.length
			   if (num_caracteres > num_caracteres_permitidos) {
				  document.forms[0].texto.value = contenido_textarea
			   }else{
				  contenido_textarea = document.forms[0].texto.value
			   }
			   if (num_caracteres >= num_caracteres_permitidos){
				  document.forms[0].caracteres.style.color="#ff0000";
			   }else{
				  document.forms[0].caracteres.style.color="#000000";
			   }
			   cuenta()
			}
			function cuenta(){
			   document.forms[0].caracteres.value=document.forms[0].texto.value.length
			}
		//ventana emergente
		    function popUp(URL) {
				window.open(URL, 'Nombre de la ventana', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width=800,height=600,left = 390,top = 100');
			}
		</script>
	</body>
</html>