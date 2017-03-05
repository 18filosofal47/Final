<!--?php
  session_start();
  if(isset($_sesseon['usuario']))
  {
   $_SESSION['contador']++;
  }
  else
  {
     header("location:Inicio.php");
  }
  $nombre_anterior=session_name('SESSION_CONTADOR');
?-->
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
	    <title>Inicio#</title>
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
										<h3 class="panel-title">Inicio</h3>
									</div>
									<div class="panel-body">
									    <div class="panel panel-default ">
											<div class="panel-heading">
												<h1>Usted a iniciado sesi&#243;n</h1>
											</div>
											<div class="panel-body">
												<div class="container-fluid">
													<div class="rows">
														<div class="col-md-12">
															<div style="width:300px;" class="center-block">
																<p><h2>Nombre:<!--?php
																	echo $_SESSION['usuario'];
																?-->
																</p></h2>
																<p><h2>Fecha:<?php 
																	echo date("d/M/Y");
																?>
																</p></h2>
																<p><h2>Hora de inicio:<?php
																	echo date("G:i",time());
																?>
																</p></h2>
															</div>	
														</div>
													</div>
													<div class="clearfix"></div>
													<div class="rows">
														  <div class="col-md-3">
														  </div>
														  <div class="col-md-6">
															   <a class="btn btn-lg btn-block btn-default active" href="finsesion.php">Cerrar sesion</a>
															   <a class="btn btn-lg btn-block btn-default active" id="menu-toggle" href="#menu-toggle">Agrandar</a>
														  </div>
														  <div class="col-md-3">
														  </div>
													</div>
												</div>
											</div>
									    </div>
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