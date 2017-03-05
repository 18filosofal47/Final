<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet"href="../css/normalize.css">
		<!--Bootstrap estlos-->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
	    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
		<!-- CSS JavaScript-->
		<link rel="stylesheet" href="../css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="../css/simple-sidebar.css">
		<!--link rel="stylesheet" href="../css/jquery.dataTables.css">
		
		<link rel="stylesheet" href="../css/foundation.min.css">
		<link rel="stylesheet" href="../css/dataTables.foundation.css"-->
		<link rel="stylesheet" href="../css/jquery-ui.css">
	    <link rel="stylesheet" href="../css/Style.css">
		<script src="../rutinas/angular-1.5.8/angular.min.js"></script>
		<!--DataTable JavaScript-->
	    <title>B&#250;squeda#</title>
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
							<a href="MuestrasII.php">Ingresar</a>
						</li>
						<li>
							<a href="ProcesoII.php">Proceso</a>
						</li>
						<li>
							<a href="BuscadorQ.php">B&#250;squeda</a>
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
										<h1 class="panel-title">B&#250;squeda</h1>
									</div>
									<!-- Tabs -->
									<div id="tabs">
										<ul>
											<li><a href="#tabs-1">Muestra</a></li>
											<li><a href="#tabs-2">Folio</a></li>
											<li><a href="#tabs-3">Quimico</a></li>
										</ul>
										<div id="tabs-1">
										    <div class="panel-body">
											    <table id="Muestra" class="cell-border" cellspacing="0" width="100%">
													<thead>
														<tr>
															<th>Id</th>
															<th>Muestra</th>
															<th>Contenedor</th>
															<th>Unidad</th>
															<th>Sufijo</th>
															<th>Fecha</th>
															<th>Observ.</th>
															<th>Resguardo</th>
															<th>Protocolo</th>
															<th>Almacen</th>
															<!--th></th>
															<th></th-->
														</tr>
													</thead>
													<tbody>
														<!--tr>
															<td>Tiger</td>
															<td>Nixon</td>
															<td>System Architect</td>
															<td>Edinburgh</td>
															<td>61</td>
															<td>2011/04/25</td>
															<td>$320,800</td>
															<td>5421</td>
															<td>t.nixon@datatables.net</td>
															<td>t.nixon@datatables.net</td>
														</tr>
														<tr>
															<td>Garrett</td>
															<td>Winters</td>
															<td>Accountant</td>
															<td>Tokyo</td>
															<td>63</td>
															<td>2011/07/25</td>
															<td>$170,750</td>
															<td>8422</td>
															<td>g.winters@datatables.net</td>
															<td>g.winters@datatables.net</td>
														</tr-->
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
															$consulta = "SELECT * From muestra";
															/*Fin de la consulta*/	
															mysqli_close($conexion);
															clearstatcache();
														?>
													</tbody>
												</table>
													
											</div>
										</div>
										<div id="tabs-2">
										    <div class="panel-body">
											    <table id="Folio" class="display nowrap cell-border" cellspacing="0" width="100%">
													<thead>
														<tr>
															<th>Id</th>
															<th>Codigo</th>
															<th>Muestra</th>
															<th>Resguardo</th>
															<th>Protocolo</th>
															<th>Nombre</th>
															<th>Ap Paterno</th>
															<th>Ap Materno</th>
															<th>Fecha</th>
															<th>Hora</th>
															<!--th></th>
															<th></th-->
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Tiger</td>
															<td>Nixon</td>
															<td>System Architect</td>
															<td>Edinburgh</td>
															<td>61</td>
															<td>2011/04/25</td>
															<td>$320,800</td>
															<td>5421</td>
															<td>5421</td>
															<td>5421</td>
														</tr>
														<tr>
															<td>Garrett</td>
															<td>Winters</td>
															<td>Accountant</td>
															<td>Tokyo</td>
															<td>63</td>
															<td>2011/07/25</td>
															<td>$170,750</td>
															<td>8422</td>
															<td>8422</td>
															<td>8422</td>
														</tr>
														<tr>
															<td>Tiger</td>
															<td>Nixon</td>
															<td>System Architect</td>
															<td>Edinburgh</td>
															<td>61</td>
															<td>2011/04/25</td>
															<td>$320,800</td>
															<td>5421</td>
															<td>5421</td>
															<td>5421</td>
														</tr>
														<tr>
															<td>Tiger</td>
															<td>Nixon</td>
															<td>System Architect</td>
															<td>Edinburgh</td>
															<td>61</td>
															<td>2011/04/25</td>
															<td>$320,800</td>
															<td>5421</td>
															<td>5421</td>
															<td>5421</td>
														</tr>
														<tr>
															<td>Garrett</td>
															<td>Winters</td>
															<td>Accountant</td>
															<td>Tokyo</td>
															<td>63</td>
															<td>2011/07/25</td>
															<td>$170,750</td>
															<td>8422</td>
															<td>8422</td>
															<td>8422</td>
														</tr>
													</tbody>
												</table>
											</div>  
										</div>
										<div id="tabs-3">
										    <div class="panel-body">
											    <table id="Analisis" class="display nowrap cell-border" cellspacing="0" width="100%">
													<thead>
														<tr>
															<th>Id</th>
															<th>Tipo</th>
															<th>Ensayo</th>
															<th>Resultado</th>
															<th>Observ</th>
															<th>Protocolo</th>
															<th>Folio</th>
															<th>Fecha</th>
															<th>Nombre</th>
															<th>Ap Paterno</th>
															<th>Ap Materno</th>
															<!--th></th>
															<th></th-->
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Tiger</td>
															<td>Nixon</td>
															<td>System Architect</td>
															<td>Edinburgh</td>
															<td>61</td>
															<td>2011/04/25</td>
															<td>$320,800</td>
															<td>5421</td>
															<td>2011/04/25</td>
															<td>$320,800</td>
															<td>5421</td>
														</tr>
														<tr>
															<td>Garrett</td>
															<td>Winters</td>
															<td>Accountant</td>
															<td>Tokyo</td>
															<td>63</td>
															<td>2011/07/25</td>
															<td>$170,750</td>
															<td>8422</td>
															<td>2011/07/25</td>
															<td>$170,750</td>
															<td>8422</td>
														</tr>
														<tr>
															<td>Tiger</td>
															<td>Nixon</td>
															<td>System Architect</td>
															<td>Edinburgh</td>
															<td>61</td>
															<td>2011/04/25</td>
															<td>$320,800</td>
															<td>5421</td>
															<td>2011/04/25</td>
															<td>$320,800</td>
															<td>5421</td>
														</tr>
														<tr>
															<td>Garrett</td>
															<td>Winters</td>
															<td>Accountant</td>
															<td>Tokyo</td>
															<td>63</td>
															<td>2011/07/25</td>
															<td>$170,750</td>
															<td>8422</td>
															<td>2011/07/25</td>
															<td>$170,750</td>
															<td>8422</td>
														</tr>
														<tr>
															<td>Tiger</td>
															<td>Nixon</td>
															<td>System Architect</td>
															<td>Edinburgh</td>
															<td>61</td>
															<td>2011/04/25</td>
															<td>$320,800</td>
															<td>5421</td>
															<td>2011/04/25</td>
															<td>$320,800</td>
															<td>5421</td>
														</tr>
														<tr>
															<td>Garrett</td>
															<td>Winters</td>
															<td>Accountant</td>
															<td>Tokyo</td>
															<td>63</td>
															<td>2011/07/25</td>
															<td>$170,750</td>
															<td>8422</td>
															<td>2011/07/25</td>
															<td>$170,750</td>
															<td>8422</td>
														</tr>
														
													</tbody>
												</table>
											</div>
										</div>
										<input type="button" class="btn btn-default" id="menu-toggle" value="Agrandar" href="#menu-toggle">
									</div>
									<!--div class="panel-body">
											<div id="resultado">
												<table id="example" class="display nowrap" cellspacing="0" width="100%">
													<thead>
														<tr>
															<th>Id</th>
															<th>Muestra</th>
															<th>Contenedor</th>
															<th>Unidad</th>
															<th>Sufijo</th>
															<th>Fecha</th>
															<th>Observ.</th>
															<th>Resguardo</th>
															<th>Protocolo</th>
															<th>Almacen</th>
															<!--th></th>
															<th></th>
															<th></th>
															<th></th>
															<th></th>
															<th></th>
															<th></th--
														</tr>
													</thead>
													<tbody>
														?php
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
															$consulta = "SELECT * From muestra";
															/*Fin de la consulta*/	
															mysqli_close($conexion);
															clearstatcache();
														?>	
														<!--table id="example" class="display nowrap" cellspacing="0" width="100%">
															<thead>
																<tr>
																	<th>First name</th>
																	<th>Last name</th>
																	<th>Position</th>
																	<th>Office</th>
																	<th>Age</th>
																	<th>Start date</th>
																	<th>Salary</th>
																	<th>Extn.</th>
																	<th>E-mail</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>Tiger</td>
																	<td>Nixon</td>
																	<td>System Architect</td>
																	<td>Edinburgh</td>
																	<td>61</td>
																	<td>2011/04/25</td>
																	<td>$320,800</td>
																	<td>5421</td>
																	<td>t.nixon@datatables.net</td>
																</tr>
																<tr>
																	<td>Garrett</td>
																	<td>Winters</td>
																	<td>Accountant</td>
																	<td>Tokyo</td>
																	<td>63</td>
																	<td>2011/07/25</td>
																	<td>$170,750</td>
																	<td>8422</td>
																	<td>g.winters@datatables.net</td>
																</tr--
													</tbody>
												</table>	
											</div> 
									</div-->
								</div>
							</div>
						</div>
					</div>
			    </div>
				<footer>
					<div class="container">
					<p><h3></h3></p>
					<p><h3>Copyright</h3></p><a style="color:#FFF;"></a>
					</div>
				</footer>
				<!-- /#page-content-wrapper -->
			</div>	
			
		</div>
		<!--script src="../js/jquery.js"></script-->
		<script src="../js/jquery.js"></script>
		<script src="../js/jquery-1.12.4.js"></script>
		<!--DataTable JavaScript-->
		<script src="../js/jquery.dataTables.js"></script>
		<script src="../js/jquery-1.12.4.js"></script>
		<script src="../js/"></script>
		<script src="../js/"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/jquery-ui.js"></script>
		<script>
		$( "#tabs" ).tabs();
		</script>>
		<!-- Menu Toggle Script -->
		<script>
			$("#menu-toggle").click(function(e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");
			});
		</script>
		<!-- DataTable -->
		<script>
		    $(document).ready(function() {
			$('#Muestra').DataTable( {
				scrollY:        '50vh',
				scrollCollapse: true,
				paging:         false
			} );
		} );
		</script>
		<!--script>
		    $(document).ready(function() {
				$('#Muestra').DataTable( {
					"scrollY": 200,
					"scrollX": true
				} );
				
			} );
			$(document).ready(function() {
				$('#Folio').DataTable( {
					"scrollY": 200,
					"scrollX": true
				} );
			} );
			$(document).ready(function() {
				$('#Analisis').DataTable( {
					"scrollY": 200,
					"scrollX": true
				} );
			} );
			
		</script-->
	</body>
</html>