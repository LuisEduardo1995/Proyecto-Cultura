<?php include_once '../controlador/inicioSesion.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title> INTEGRANTE </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
	<script src="./js/validarEstu.js"></script>
</head>
<body>
		  <!-- Navbar
    ================================================== -->
<?php

include("include/menu.php");

?>
<!-- ======================================================================================================================== -->


	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				
				<li>
					<a href="#!" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-modal-help">
						<i class="zmdi zmdi-help-outline"></i>
					</a>
				</li>
			</ul>
		</nav>


		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-face zmdi-hc-fw"></i> INTEGRANTE DE LOS GRUPOS  <small>  </small></h1>
			</div>
			<p class="lead">       </p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#new" data-toggle="tab">Nuevo</a></li>
					  	<li><a href="#list" data-toggle="tab">Lista</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">

									    <form class="expose"  enctype="multipart/form-data" action="control/registroestu.php" method="post" name="formulario" onsubmit="return validarestu(this)">

											<input class="form-control" type="hidden" name="tipoEstudiante" value="INTEGRANTE" id="tipoEstudiante" >
									    	<div class="form-group label-floating">
											  <label class="control-label">Nombre</label>
											  <input class="form-control" onkeypress="return soloLetras(event)" type="text" name="nombre"  id="nombre" >
											</div>

											<div class="form-group label-floating">
											  <label class="control-label">Apellido</label>
											  <input class="form-control" onkeypress="return soloLetras(event)" type="text" name="apellido" id="apellido" >
											</div>

											<div class="form-group label-floating">
											  <label class="control-label">Cedula</label>
											  <input class="form-control" onkeypress="return isNumberKey(event)" type="text" name="cedula" id="cedula" >
											</div>

											<div class="form-group label-floating">
											  <label class="control-label">Correo</label>
											  <input class="form-control" onkeypress="validarcorreo(correo)" type="text" name="correo" id="correo">
											</div>
											<div class="form-group">
											  <label class="control-label">Edad</label>
											  <input class="form-control" onkeypress="return isNumberKey(event)" type="text" name="edad" id="edad">
											</div>
											<div class="form-group">
											  <label class="control-label">Telefono</label>
											  <input class="form-control" onkeypress="return isNumberKey(event)" type="text" name="telefono" id="telefono">
											</div>
											
										    <div class="form-group">
										        <label class="control-label">Tipo de Estudiante</label>
										        <select class="form-control"  type="text" name="tipo" id="tipo" >
										          <option value="none" selected>Seleccione ...</option>	
										          <option value="COMUNIDAD">COMUNIDAD</option>
										          <option value="UBVISTA">UBVISTA</option>
										          <option value="TRABAJADOR">TRABAJADOR</option>
										        </select>
										    </div>
										    <p class="text-center">
										    	<button type="submit" name="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Registrar </button>
										    </p>
									    </form>
                                      </div>

								   
	                               
								</div>
							</div>
						</div>
					  	<div class="tab-pane fade" id="list">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th class="text-center">Cedula</th>
											<th class="text-center">Nombre</th>
											<th class="text-center">Apellido</th>
											<th class="text-center">Correo</th>
											<th class="text-center">Celular</th>
											<th class="text-center">Actualizar</th>
											<th class="text-center">Eliminar</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<?php
    
										include_once("control/consultarIntegrante.php");
										include_once("control/cambioformatofecha.php");
													if ($result){  
													$i=1;
														 while ($values = mysql_fetch_array($result)){
															 
										echo"
										<tr style='background-color: #FFFFFF'>
										<td>".$i."</td>
										<td>".$values['cedula']."</td>
										<td>".$values['nombre']."</td>
										<td>".$values['apellido']."</td>
										<td>".$values['correo']."</td>
										<td>".$values['celular']."</td>
										<td><a href=\"javascript:popUp('mostrarModificarIntegrante.php?cedula={$values['cedula']}')\" class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
									    <td><a href='control/eliminarIntegrante.php?cedula={$values['cedula']}' onclick='return confirmar()' class='btn btn-danger btn-raised btn-xs'><i class='zmdi zmdi-delete'></i></a></td>
										</tr>";?>
									
										<?php      
											$i=$i+1;}
										  }
										?>
											
										</tr>
									</tbody>
								</table>
								<ul class="pagination pagination-sm">
								  	<li class="disabled"><a href="#!">«</a></li>
								  	<li class="active"><a href="#!">1</a></li>
								  	<li><a href="#!">2</a></li>
								  	<li><a href="#!">3</a></li>
								  	<li><a href="#!">4</a></li>
								  	<li><a href="#!">5</a></li>
								  	<li><a href="#!">»</a></li>
								</ul>
							</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Notifications area -->
	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notas <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>
			<div class="list-group">
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-triangle"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">17m</div>
				      	<h4 class="list-group-item-heading"> Nuevo Eveneto </h4>
				      	<p class="list-group-item-text"> Debes confirmar el evento musical </p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-octagon"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">15m</div>
				      	<h4 class="list-group-item-heading">Lugar del Evento</h4>
				      	<p class="list-group-item-text"> Aun no se ha proporcionado el lugar </p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
				<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-help"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">10m</div>
				      	<h4 class="list-group-item-heading"> Solicitud para artes escenicas </h4>
				      	<p class="list-group-item-text"> Se debe plantear en rectorado el evento</p>
				    </div>
				</div>
			  	<div class="list-group-separator"></div>
			</div>

		</div>
	</section>

	<!-- Dialog help -->
	<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Help">
	  	<div class="modal-dialog" role="document">
		    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    	<h4 class="modal-title">AYUDA</h4>
			    </div>
			    <div class="modal-body">
			        <p>
			        	Debe contactar al soporte tecnico de la aplicacion al correo soportecnico@gmail.com
			        </p>
			    </div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
		      	</div>
		    </div>
	  	</div>
	</div>
	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>