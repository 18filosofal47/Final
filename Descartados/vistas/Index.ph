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
	    <title>Index#</title>
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
							<a href="#"></a>
						</li>
						<li>
							<a href=""></a>
						</li>
						<li>
							<a href=""></a>
						</li>
						<li>
							<a href=""></a>
						</li>
						<li>
							<a href=""></a>
						</li>
						<li>
							<a href=""></a>
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
										<h2 class="form-signin-heading">Iniciar sesi&#243;n</h2>
									</div>
									<div class="panel-body">
									    
										<div class="rows">
											<div class="col-md-3"></div><!--Columna izquierda--> 
											<div class="col-md-6"><!--Columna cental--> 
												<form class="form-signin" method="post" action=".php" enctype="multipart/form-data">
														 
														<label for="usuario" class="sr-only"></label>
														<input type="text" id="usuario" class="form-control" placeholder="usuario" required autofocus>
														<label for="inputPassword" class="sr-only">Password</label>
														<input type="password" id="pass" class="form-control" placeholder="Password" required>
													    <div class="checkbox">
														<label>
															  <input type="checkbox" value="remember-me">Recordarme
														</label>
													</div>
													<button class="btn btn-lg btn btn-default btn-block" type="submit">Entrar</button>
													<button class="btn btn-lg btn btn-default btn-block" type="button" id="menu-toggle">Agrandar</button>
												</form>
												<?php
													if(isset($_POST['submit']))
													{
														require("");
													}
													clearstatcache();
												?>
											</div>
											<div class="col-md-3"></div><!--Columna derecha--> 
									    </div>
										
										<form class="form-horizontal"  method="post"  action="php/.php" enctype="multipart/form-data">
											
										</form> 
										
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
					<p><h3>Copyright</h3></p><a style="color:#FFF;"></a>
					</div>
				</footer>

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