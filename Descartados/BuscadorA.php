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
		<link rel="stylesheet" href="../css/jquery.dataTables.css">
		<link rel="stylesheet" href="../css/dataTables.bootstrap.css">
		<link rel="stylesheet" href="../css/dataTables.jqueryui.css">
		<link rel="stylesheet" href="../css/jquery-ui.css">
		<!-- CSS JavaScript-->
		<link rel="stylesheet" href="../css/simple-sidebar.css">
	    <link rel="stylesheet" href="../css/Style.css">
	    <title>B&#250;squeda#</title>
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
				<!-- /#sidebar-wrapper  table table-bordered-->
				<!-- Page Content -->
				<div id="page-content-wrapper">
				    <div class="container-fluid">
					    <div class="row">
						    <div id="page-wrapper">  
								<div class="container-fluid">
									<!-- Page Heading -->
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<div class="panel panel-default">
												<div class="panel-body">
												    <table class="table table-condensed table-bordered">
														<tr>
														   <th colspan="4"><h1 class="page-header">B&#250;squeda por: An&#225;lisis</h1></th>
														   <th>
																<input type="button" class="btn btn-default" id="menu-toggle" value="Agrandar" href="#menu-toggle">
														   </th>
														</tr>
													</table>
													
												</div>
											</div>	
										</div>
									</div>
									<!-- /.row -->
									<div class="row">
									    <!-- /Búsacor por analisis -->
										<div class="col-lg-3 col-md-6">
											<div class="panel panel-default">
												<div class="panel-heading">
													<div class="row">
														<div class="col-xs-9 text-right">
														    <h1 class="page-header">An&#225;lisis</h1> 
														</div>
													</div>
												</div>
												<a href="BuscadorA.php">
													<div class="panel-footer">
														<span class="pull-left">Ver b&#250;squeda</span>
														<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
														<div class="clearfix"></div>
													</div>
												</a>
											</div>
										</div>
										<!-- /Búsacor por analisis y quimico -->
										<div class="col-lg-3 col-md-6">
											<div class="panel panel-default">
												<div class="panel-heading">
													<div class="row">
														<div class="col-xs-9 text-right">
														    <h1 class="page-header">Qu&#237;mico</h1> 
														</div>
													</div>
												</div>
												<a href="BuscadorAQ.php">
													<div class="panel-footer">
														<span class="pull-left">Ver b&#250;squeda</span>
														<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
														<div class="clearfix"></div>
													</div>
												</a>
											</div>
										</div>
										<!-- /Búsacor por folio y quimico -->
										<div class="col-lg-3 col-md-6">
											<div class="panel panel-default">
												<div class="panel-heading">
													<div class="row">
														<div class="col-xs-9 text-right">
														    <h1 class="page-header">Folio</h1> 
														</div>
													</div>
												</div>
												<a href="BuscadorFQ.php">
													<div class="panel-footer">
														<span class="pull-left">Ver b&#250;squeda</span>
														<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
														<div class="clearfix"></div>
													</div>
												</a>
											</div>
										</div>
										<!-- /Búsacor por Muestra -->
										<div class="col-lg-3 col-md-6">
											<div class="panel panel-default">
												<div class="panel-heading">
													<div class="row">
														<div class="col-xs-9 text-right">
														    <h1 class="page-header">Muestra</h1> 
														</div>
													</div>
												</div>
												<a href="BuscadorM.php">
													<div class="panel-footer">
														<span class="pull-left">Ver b&#250;squeda</span>
														<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
														<div class="clearfix"></div>
													</div>
												</a>
											</div>
										</div>
										<!-- /.Buscar -->
									</div>
									<!-- /.row -->
									<div class="col-lg-12 col-md-12">
										<div class="panel panel-default">
											<div class="panel-heading">
												<h3 class="panel-title">B&#250;squeda</h3>
											</div>
											<div class="panel-body">
												<table id="example" class="display" cellspacing="0" width="100%">
													<thead>
														<tr>
															<th>Id</th>
															<th>Tipo de muestra</th>
															<th>Ensayo</th>
															<th>Resultado</th>
															<th>Protocolo</th>
															<th>Folio</th>
															<th>Fecha de proceso</th>
														</tr>
													</thead>
													<tfoot>
														<tr>
														    <th>Id</th>
															<th>Tipo de muestra</th>
															<th>Ensayo</th>
															<th>Resultado</th>
															<th>Protocolo</th>
															<th>Folio</th>
															<th>Fecha de proceso</th>
														</tr>
													</tfoot>
													<!--tbody>
													</tbody-->
												</table>
											</div>
										</div>
									</div>
									<!-- /.row -->
								</div>
								<!-- /.container-fluid -->
						    </div>    
							<div class="panel panel-default">
								<div class="col-md-12 col-md-offset-0"></div>
							</div>
						</div>
					</div>
				<div>
				<footer>
					<div class="container">
					<p><h3></h3></p>
					<p><h3>Copyright</h3></p><a style="color:#FFF;"></a>
					</div>
				</footer>
				<!-- /#page-content-wrapper -->
			</div>	
		</div>
		<!--JavaScript-->
		<script src="../js/jquery.js"></script>
		<!--JavaScript DataTable-->
		<script src="../js/jquery-1.12.4.js"></script>
		<script src="../js/jquery.dataTables.js"></script>
		<script src="../js/dataTables.bootstrap.js"></script>
		<script src="../js/dataTables.jqueryui.js"></script>
		<script src="../js/"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="../js/bootstrap.min.js"></script>
		<!-- Menu Toggle Script -->
		<script type="text/javascript">
			$("#menu-toggle").click(function(e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");
			});
		</script>
		<script>
		    $(document).ready(function() {
				$('#example').DataTable( {
					"language":{
					"lengthMenu": "Mostrar _MENU_ registros por pagina",
					"info": "Mostrando pagina _PAGE_ de _PAGES_",
						"infoEmpty": "No hay registros disponibles",
						"infoFiltered": "(filtrada de _MAX_ registros)",
						"loadingRecords": "Cargando...",
						"processing":     "Procesando...",
						"search": "Buscar:",
						"zeroRecords":    "No se encontraron registros coincidentes",
						"paginate": {
							"next":       "Siguiente",
							"previous":   "Anterior"
						},					
					},
					"scrollX": true,/*
					"ajax": "",				
					 "columns": [
						{ "data": "" },
						{ "data": "" },
						{ "data": "" },
						{ "data": "" },
						{ "data": "" },
						{ "data": "" },
						{ "data": "" },
						{ "data": "" },
						{ "data": "" },
						{ "data": "" }
						]*/
				} );
			} );
		</script>
	</body>
</html>