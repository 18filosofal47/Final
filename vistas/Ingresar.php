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
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
		<script src="../rutinas/angular-1.5.8/angular.min.js"></script>
	    <title>Captura_de_Muestras_Medicas#</title>
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
							<a href="BuscadorG.php">B&#250squeda</a>
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
								    <div class="panel-body">
									    <form class="form-horizontal" role="form" name="forma_Captura_Muestra" method="post" action="../scripts/Captura.php">
										    <div class="table-responsive">
											    <table class="table table-condensed table-bordered">
												    <tr>
													    <th colspan="2"><h2>Responsable</h2></th>
														<th rowspan="2">
															<table class="table table-bordered table-condensed">
																<tr>
																	<th>Fecha de toma</th>
																</tr>
																<tr>
																	<th>
																	    <label label for="date"></label>
																		<input id="date" type="date" required name="fecha" class="form-control" ng-model="" class="form-control" ng-model="fecha"/> 
																	</th>
																</tr>
																<tr>
																	<th>Hora</th>
																</tr>
																<tr>
																	<th>
																		<input type="time" name="hora" value="00:00" class="form-control" placeholder="Hora" ng-model="hora" required/>
																	</th>
																</tr>
															</table>
														</th>
													</tr>
													<tr>
														<th colspan="2">
														    <table class="table table-condensed table-bordered">
                                                                <tr>
																	<th>Nombre</th>
																	<th>Apellido paterno</th>
																	<th>Apellido materno</th>
																</tr>
																<tr>
																	<th><input onChange="javascript:this.value=this.value.toUpperCase();" class="form-control" type="text" name="nombre" class="form-control" placeholder="Nombre" ng-model="nombre" required/></th>
																	<th><input onChange="javascript:this.value=this.value.toUpperCase();" class="form-control" type="text" name="appaterno" class="form-control" placeholder="Apellido paterno" ng-model="appaterno" required/></th>
																	<th><input onChange="javascript:this.value=this.value.toUpperCase();" class="form-control" type="text" name="apmaterno" class="form-control" placeholder="Apellido materno" ng-model="apmaterno" required/></th>
															</table>
														</th>
													</tr>
													<tr>
													<th colspan="2">
													    <table class="table table-bordered table-condensed">
														    <tr>
																<th >Observaciones</th>
															</tr>
															<tr>
																<th>
																	<textarea onChange="javascript:this.value=this.value.toUpperCase();" type="text" name="observ" class="form-control" ng-required="observ" required>
																	</textarea>
																</th>
															</tr>
															
													    </table>
													</th>
													<th colspan="2">
														<table class="table table-bordered table-condensed">
														    
															<tr>
																<th colspan="2"><h4>C&#243;digo</h4>
																    <!--input type="text" name="UltimoNum" class="form-control" placeholder="C&#243;digo" ng-model="total" required/-->
																</th>
															</tr>
															<tr>
																<th rowspan="2">
																	<div>
																	    <?php
																		    require("../scripts/Conexion.php");//haciendo un llamdo a la base de datos
																			$consulta = "SELECT MAX(UltimoNum)  As Maximo FROM codigo";
																			$resultado = mysqli_query($conexion, $consulta);
																			/* array numérico */
																			$row = mysqli_fetch_array($resultado, MYSQLI_NUM);
																			$input = "0";
																			echo date("Y") .  str_pad($input, 4, "0", STR_PAD_BOTH) + "$row[0]" . + 189555 . "<br>"; // genera un código de 4 caracteres de longitud.
																			/*function number_pad($number,$n) 
																			{
                                                                               return str_pad((int) $number,$n,”0?,STR_PAD_LEFT);
																			} 
																			//echo "<p>" . "$row[0]" . + 1 . "<br>"; 
																		    /* liberar la serie de resultados */
																			mysqli_free_result($resultado);
																			/* cerrar la conexión */
																			mysqli_close($conexion);
																		?>
																		<div id="seleccion">
																			  <div id="bcTarget"></div>
																		</div>
																		<a href="javascript:imprSelec('seleccion')" class="btn btn-default">Imprimir</a>
																		<input type="button" id="Generar" class="btn btn-primary" value="Generar" onClick="Generar">
																		<div class="alert"></div>
																	</div>
																</th>
															</tr>
														</table>
													</th>
												</tr>
												<tr>
													<th colspan="4"><h2>Muestra</h2></th>
												</tr>
												<tr>
												    <th colspan="2">
													    <table class="table table-bordered table-condensed">
														    <tr>
																<th>Muestra</th>
																<th>Contenedor</th>
																<th>Total</th>
															</tr>
															<tr>
																<th><input onChange="javascript:this.value=this.value.toUpperCase();" type="text" name="muestra" class="form-control" placeholder="Muestra" ng-model="muestra" required/></th>
																<th><input onChange="javascript:this.value=this.value.toUpperCase();" type="text" name="contenedor" class="form-control" placeholder="Contenedor" ng-model="contenedor" required/></th>
																<th><input type="text" name="total" class="form-control" placeholder="Total" ng-model="total" required/></th>
															</tr>
													    </table>
													</th>
													<th colspan="2">
														<table class="table table-bordered table-condensed">
															<tr>
																<th>Unidad de Medida</th>
																<th>Sufijo</th>
															</tr>
															<tr>
																<th><input type="text" name="umedida" class="form-control" placeholder="Unidad de Medida" ng-model="umedida" required/></th>
																<th>	
																	<select type="text" name="sufijo" class="form-control" placeholder="Sufijo" ng-model="sufijo" required>
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
												</tr>
													
													<tr>
														<th colspan="4">
															<table class="table table-bordered table-condensed">
																<tr>
																	<th>Resguardo</th>
																	<th>Protocolo</th>
																	<th>Almacen</th>
																	<th>Fecha de la muestra</th>
																</tr>
																<tr>
																	<th><input onChange="javascript:this.value=this.value.toUpperCase();" type="text" name="resguardo" class="form-control" placeholder="Resguardo" ng-model="resguardo" required/></th>
																	<th><input onChange="javascript:this.value=this.value.toUpperCase();" type="text" name="protocolo" class="form-control" placeholder="Protocolo" ng-model="protocolo" required/></th>
																	<th><input onChange="javascript:this.value=this.value.toUpperCase();" type="text" name="almacen" class="form-control" placeholder="Almacen" ng-model="almacen" required/></th>
																	<th>
																		<label label for="date"></label>
																		<input id="date" type="date" required name="fechaR" class="form-control" ng-model="" class="form-control" ng-model="fechaR"/> 
																	</th>
																</tr>
															</table>
														</th>
													</tr>
													<tr> 
														<th colspan="2">La fecha actual es:
															<?php 
																echo date("d/M/Y");
															?>
														</th>
														<th colspan="2">Hora:
															<?php 
																echo date("g:i a");
															?>
														</th>
													</tr>
													<tr>
														<th colspan="4">                                                   
															<input class="btn btn-default" type="submit" value="Ingresar" ng-disabled="forma_Captura_Muestra.$invalid"/>
														    <input class="btn btn-default" type="reset" value="Limpiar"/>
															<input type="button" class="btn btn-default" id="menu-toggle" value="Agrandar" href="#menu-toggle"/>
														</th>
													</tr>
													
													
											    </table>
										    </div>
										</form>
										<?php
											if(isset($_POST['submit']))
											{
												require("../scripts/Captura.php");
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
		<script src="../js/jquery/jquery.js"></script>
		<script src="../js/jquery.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="../js/bootstrap.min.js"></script>
		<!--fuentes de la librería TinyMCE-->
		<script src="../js/tinymce/js/tinymce/tinymce.min.js"></script>
		<!--barcode-jquery-plugin--->
		<script src="../js/jquery-barcode.js"></script> 
		<script src="../js/jquery-barcode.min.js"></script>
		<!-- Menu Toggle Script -->
		<script>
			$("#menu-toggle").click(function(e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");
				$("#menu-toggle").attr('value', 'Reducir');
			});
			/*$(document).ready(function(){
				$("#boton01").click(function(){
					$("#parrafo").text('Reducir');
				});
			});*/
		//TinyMCE para tus textareas
		    tinymce.init({
				selector: "textarea",
				language: 'es_MX',
			 });
		</script>
		<!--Inicio de codigo de barras--> 
		<script type="text/javascript">
			$(document).ready(function(){
			    <!--Codigo de barras--> 
				$("#Generar").click(function(){
					//var NumJs = <?php $MiNum = "$row[0]";?>;
					//NumJs = 10000000;
					var d=new Date();                       //100000000  $MiNum "10000000"
					$("#bcTarget").barcode(d.getFullYear()+"201710000015061", "ean13", {barWidth:1, barHeight:25});
				}); 
				<!--Fin de codigo de barras-->
			});
		</script>
		<script language="Javascript">
		    //Imprimir contenido (código de barras)
			function imprSelec(nombre){
			    var ficha = document.getElementById(nombre);
			    var ventimp = window.open(' ', 'popimpr');
			    ventimp.document.write( ficha.innerHTML );
			    ventimp.document.close();
			    ventimp.print( );
			    ventimp.close();
			}
	    </script>
		<!--Fin de codigo de barras-->
		<!--Limpiar los campos del formulario-->
		<script type="text/javascript">
		    
		</script>
	</body>
</html>