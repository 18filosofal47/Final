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
										<h3 class="panel-title">B&#250;squeda</h3>
									</div>
									<div class="panel-body">
									    
										<div class="" style="padding-top: 1em;">
											<nav class="navbar navbar-default" role="navigation">
												<!-- El logotipo y el icono que despliega el menú se agrupan
													 para mostrarlos mejor en los dispositivos móviles -->
												<div class="navbar-header">
												    <button type="button" class="navbar-toggle" data-toggle="collapse"
														    data-target=".navbar-ex1-collapse">
															<span class="sr-only">Desplegar navegación</span>
															<span class="icon-bar"></span>
															<span class="icon-bar"></span>
															<span class="icon-bar"></span>
												    </button>
												    <a class="navbar-brand" href="#">Logotipo</a>
												</div>
											  
												<!-- Agrupar los enlaces de navegación, los formularios y cualquier
													otro elemento que se pueda ocultar al minimizar la barra -->
												<div class="collapse navbar-collapse navbar-ex1-collapse">
													<ul class="nav navbar-nav">
														<li class="active">
														    <a href="#">Enlace #1</a>
														</li>
														<li>
														    <a href="#">Enlace #2</a>
														</li>
														<li class="dropdown">
														    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
															   Menú #1 <b class="caret"></b>
														    </a>
														    <ul class="dropdown-menu">
																<li><a href="#">Acción #1</a></li>
																<li><a href="#">Acción #2</a></li>
																<li><a href="#">Acción #3</a></li>
																<li class="divider"></li>
																<li><a href="#">Acción #4</a></li>
																<li class="divider"></li>
																<li><a href="#">Acción #5</a></li>
														    </ul>
														</li>
													</ul>
											  
													<!--form class="form-horizontal"  method="post"  action="php/.php" enctype="multipart/form-data"-->
													<form class="navbar-form navbar-left" role="search">
														<div class="form-group">
														  <input type="text" class="form-control" placeholder="Buscar">
														</div>
														<button type="submit" class="btn btn-default">Enviar</button>
												    </form>
											        
													<?php
														if(isset($_POST['submit']))
														{
															require("");
														}
														clearstatcache();
													?>
													
													<ul class="nav navbar-nav navbar-right">
														<li>
														    <a class="btn" id="menu-toggle" href="#menu-toggle">Agrandar</a>
														</li>
														<li class="dropdown">
														    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
															    Menú #2 <b class="caret">
																
															
																
																
																</b>
														    </a>
															<ul class="dropdown-menu">
																<li><a href="#">Acción #1</a></li>
																<li><a href="#">Acción #2</a></li>
																<li><a href="#">Acción #3</a></li>
																<li class="divider"></li>
																<li><a href="#">Acción #4</a></li>
															</ul>
														</li>
													</ul>
												</div>
											</nav>
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
					<p><h3>Copyright</h3></p><a style="color:#FFF;"></a>
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