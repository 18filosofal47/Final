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
		<link rel="stylesheet" href="../css/jquery-ui.css">
	    <title>Plantilla#</title>
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
							<a href="">Inicio</a>
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
							<a href="">Texto</a>
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
										<h3 class="panel-title">Plantilla</h3>
									</div>
									<div class="panel-body">
										<form class="form-horizontal"  method="post"  action="" enctype="multipart/form-data">
										    <!-- Tabs -->
											<h2 class="demoHeaders">Tabs</h2>
											<div id="tabs">
												<ul>
													<li><a href="#tabs-1">First</a></li>
													<li><a href="#tabs-2">Second</a></li>
													<li><a href="#tabs-3">Third</a></li>
												</ul>
												<div id="tabs-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
												<div id="tabs-2">Phasellus mattis tincidunt nibh. Cras orci urna, blandit id, pretium vel, aliquet ornare, felis. Maecenas scelerisque sem non nisl. Fusce sed lorem in enim dictum bibendum.</div>
												<div id="tabs-3">Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.</div>
											</div>
											 
											<input type="button" class="btn btn-default" id="menu-toggle" value="Agrandar" href="#menu-toggle">
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
				<!-- /#page-content-wrapper -->
				<footer>
					<div class="container">
					<p><h3></h3></p>
					<p><h3></h3></p><a style="color:#FFF;"></a>
					</div>
				</footer>

			</div>	
		</div>
		<!--
		    <tr> 
				<th colspan="2">La fecha actual es:
					?php 
						echo date("d/M/Y");
					?>
				</th>
				<th>Hora:
					?php 
						echo date("g:i a");
					?>
				</th>
			</tr>
		-->
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
		<script src="../js/jquery-ui.js"></script>
		<script>
		$( "#tabs" ).tabs();
		</script>
	</body>
</html>