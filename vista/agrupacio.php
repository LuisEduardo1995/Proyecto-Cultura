<?php include_once '../controlador/inicioSesion.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Curso</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
	<script src="js/validarCurso.js"></script>
</head>
<body>
			  <!-- Navbar
    ================================================== -->
<?php

include("include/menu.php");
$nucleo = $_GET["nucleo"];
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
			 
			  <h1 class="text-titles"><i class="zmdi zmdi-book zmdi-hc-fw"></i> CURSO DE <?php echo$nucleo;?> </small></h1></li>
			</div>
			<p class="lead">    </p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li><a href="agrupaciones.php">REGRESAR</a></li>
					  	<li><a href="#list" data-toggle="tab">SELECCIONE EL GRUPO DE <?php echo$nucleo;?></a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
					  	<div class="tab-pane fade" id="list">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th class="text-center">Nucleo</th>
											<th class="text-center">Profesor</th>
											<th class="text-center">Agregar Integrante</th>
											<th class="text-center">Decargar Lista del Curso</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<?php
    
										include_once("control/consultaGrupoParaRegistrar.php");
										//include_once("../controlador/cambioformatofecha.php");
													if ($result){  
													$i=1;
														 while ($values = mysql_fetch_array($result)){
												    /// sql para traer el nombre del profesor	 
													$sqlProfe=mysql_query("SELECT nombre, apellido, cedula FROM profesor WHERE cedula={$values["profesor"]}");	  
													$registroProfe = mysql_fetch_array($sqlProfe);
													$nombre = $registroProfe["nombre"];	
													$apellido = $registroProfe["apellido"];
													$nombrep = $nombre." ".$apellido;
													$agregarInte="<a href=\"javascript:popUp('registrarEstudiante.php?idgrupo={$values['id']}&cedulaprofe={$registroProfe["cedula"]}&profesor={$nombrep}&nucleo={$values['nucleo']}')\" class='zmdi zmdi-account-add zmdi-hc-fw'></i></a>";	
														}
										echo"
										<tr style='background-color: #FFFFFF'>
										<td>".$i."</td>
										<td>".$values['nucleo']."</td>
										<td>".$nombre." ".$apellido."</td>
										<td>".$agregarInte."</td>
									    <td><a href='control/crearListaCurso.php?idcurso={$values['idcurso']}&cedulaprofe={$registroProfe["cedula"]}&idsalon={$values['idsalon']}' class='zmdi zmdi-card zmdi-hc-fw'></i></a></td>
										</tr>";     
											$i=$i+1;}
										  
										?>
											
										</tr>
									</tbody>
								</table>
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