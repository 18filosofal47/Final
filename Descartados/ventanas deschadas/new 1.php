<!--html> <body>

<script language="javascript">

var string1="The Rain "; var string2="In Spain"; var finalstring=string1+string2;

document.write(string1+" + "+string2+" = "); document.write(finalstring+" " );

document.write("The concat() function works also: "); document.write(string1.concat(string2));

</script>

</body> </html-->
<?php
function generate_numbers($start, $count, $digits) {
   $result = array();
   for ($n = $start; $n < $start + $count; $n++) {
      $result[] = str_pad($n, $digits, "0", STR_PAD_LEFT);
   }
   return $result;
}


	for($fila=1;$fila<3;$fila++)
	{
		echo "<tr>";
		for($col=1;$col<=10;$col++)
		{
			echo "<th></th>";
		}
		echo "</tr>";
	}
	echo "</tr>";
	
	//echo $fila['muestra']." - ".$fila[caracteristicas]."</br>";
	/*echo "<tr><th>";
	echo $fila['idmuestra'] . "</th><th>";
	echo $fila['muestra'] . "</th><th>";
	echo $fila['contenedor'] . "</th><th>";
	echo $fila['umedida'] . "</th><th>";
	echo $fila['sufijo'] . "</th><th>";
	echo $fila['fechaR'] . "</th><th>";
	echo $fila['observ'] . "</th><th>";
	echo $fila['resguardo'] . "</th><th>";
	echo $fila['protocolo'] . "</th><th>";
	echo $fila['almacen'] . "</th><th></tr>";
	/*echo $fila[''] . "</th><th>";
	echo $fila[''] . "</th><th>";
	echo $fila[''] . "</th><th>";*
	echo "<br>";*/
	
	
	
															$resultados = mysqli_query($conexion, $consulta);
															while($fila = mysqli_fetch_array($resultados))
															{  /* ?>
															    <tr>
																	<td><?php echo $fila['idmuestra'];?></td>
																	<td><?php echo $fila['muestra'];?></td>
																	<td><?php echo $fila['contenedor'];?></td>
																	<td><?php echo $fila['umedida'];?></td>
																	<td><?php echo $fila['sufijo'];?></td>
																	<td><?php echo $fila['fechaR'];?></td>
																	<td><?php echo $fila['observ'];?></td>
																	<td><?php echo $fila['resguardo'];?></td>
																	<td><?php echo $fila['protocolo'];?></td>
																	<td><?php echo $fila['almacen'];?></td>
																	<!--td>?php echo $fila[''];?></td-->
																</tr><?php*/
															}
															
	<div class="" style="padding-top: 1em;">
											<!--nav class="navbar navbar-default" role="navigation">
												<!-- El logotipo y el icono que despliega el menú se agrupan
													 para mostrarlos mejor en los dispositivos móviles --
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
													otro elemento que se pueda ocultar al minimizar la barra --
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
													<!--form class="form-horizontal"--
													<form class="navbar-form navbar-left" role="search" method="post" action="../scripts/Buscador.php">
														<div class="form-group">
														  <input type="text" class="form-control" placeholder="Buscar" id="Buscar">
														</div>
														<button id="btnbuscar" class="btn btn-default">Buscar</button>
												    </form>
													<ul class="nav navbar-nav navbar-right">
														<li>
														    <a class="btn" id="menu-toggle" href="#menu-toggle">Agrandar</a>
														</li>
													</ul>
												</div>
											</nav-->
										</div>														
															
															
															
															
															
															
															
?>
