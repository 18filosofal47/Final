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
	    <script src="../rutinas/angular-1.5.5/angular.min.js"></script>
	    <title>Registro#</title>
	</head>
	<body ng-app>
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
							<a href="">Texto</a>
						</li>
						<li>
							<a href="">Texto</a>
						</li>
						<li>
							<a href="">Texto</a>
						</li>
						<li>
							<a href="Buscador.php">B&#250;squeda</a>
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
										<h3 class="panel-title">Registro</h3>
									</div>
									<div class="panel-body">
										<form class="form-horizontal" role="form" name="forma" method="post" action="php/.php" enctype="multipart/form-data">
											<div class="table-responsive" >	
	
													<table class="table table-condensed">   
														<tr>
															<th for="inputNombre">Nombre</th>
															<th for="inputApellido paterno">Apellido paterno</th>
															<th for="inputApellido materno">Apellido materno</th>
														</tr>
														<tr>
															<th><input id="inputNombre" type="text" class="form-control" placeholder="Nombre" name="nombreU" ng-model="usuario.nombre" required name="nombre"/></th>
															<th><input id="inputApellido paterno" type="text" class="form-control" placeholder="Apellido paterno" name="apellido paternoU" ng-model="usuario.apellido paterno" required name="apaterno"/></th>
															<th><input id="inputApellido materno" type="text" class="form-control" placeholder="Apellido materno" name="apellido maternoU" ng-model="usuario.apellido materno" required name="apmaterno"/></th>
														</tr>
														<tr>
														   <th for="inputmatricula">Matr&#237;cula</th>
														   <th for="inputtelefono">Telefono</th>
														   <th for="inputcorreo">Correo</th>
														</tr>
														<tr>
														   <th><input id="inputmatricula" type="text" class="form-control" placeholder="Matr&#237;cula" name="matriculaU" ng-model="usuario.matricula" required name="matricula"/></th>
														   <th><input id="inputtelefono" type="text" class="form-control" placeholder="Telefono" name="TelefonoU" ng-model="usuario.telefono" required name="tel"/></th>
														   <th><input id="inputcorreo" type="correo" class="form-control" placeholder="Correo" name="correolU" ng-model="usuario.correo" required name="correo"/></th>
														</tr>
														
														<tr>
														   <th for="inputusuario">Nombre de usuario</th>
														   <th for="inputContrase&#241;a">Contrase&#241;a</th>
														   <th for="inputContrase&#241;a">Repetir contrase&#241;a</th>
														</tr>
														<tr>
														   <th><input id="inputusuario" type="text" class="form-control" placeholder="Usuario" name="usuarioU" ng-model="usuario.usuario" required name="usuario"/></th>
														   <th><input id="inputContrase&#241;a" type="tex"t class="form-control" placeholder="Contrase&#241;a" name="Contrase&#241;aU" ng-model="usuario.Contrase&#241;a" required name="pass"/></th>
														   <th><input id="inputContrase&#241;a" type="text" class="form-control" placeholder="Contrase&#241;a" name="Contrase&#241;aU" ng-model="usuario.Contrase&#241;a" required name="rpass"/></th>
														</tr>
														<tr>
															<th colspan="2">
																<input class="btn btn-default" type="submit" value="Ingresar">
																<input class="btn btn-default" type="reset" value="Limpiar">
																<input type="button" class="btn btn-default" id="menu-toggle" value="Agrandar" href="#menu-toggle">
															</th>
															<th ng-show="forma.correolU.$dirty && forma.correolU.invalid">
																    <p class="help-block text-danger" >Los campos son obligatorios</p>
																    <p class="help-block text-danger" >Correo invalido</p>
															</th>
														</tr>
														<tr> 
															<th colspan="2">La fecha actual es:
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
													</table>

											</div>
										</form> 
										<?php
											if(isset($_POST['submit']))
											{
												require("");
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
		<!-- Menu Toggle Script -->
		<script>
			$("#menu-toggle").click(function(e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");
			});
		</script>
	</body>
</html>