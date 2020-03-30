<?php include_once '../controlador/inicioSesion.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>EVENTO</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css"></link>
	
    <link rel="stylesheet" href="js/jquery-ui-1.10.3.custom/css/cupertino/jquery-ui-1.10.3.custom.css"/></link>
	<link rel="stylesheet" href="css/estilos.css"/></link>
    <link type="text/css" rel="stylesheet" href="js/DataTables-1.9.4/media/css/jquery.dataTables.css"></link>
    <script src="js/jquery1.9.js"></script>
    <script src="js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js"></script>
    
    <script src="js/jquery.maskedinput-1.3.js" type="text/javascript"></script><!-- Versi�n 1.3-->
    <script src="js/spin.min.js" type="text/javascript"></script>
    <script src="js/DataTables-1.9.4/media/js/jquery.dataTables.js" type="text/javascript"></script>
    <script src="../Js/expedienteCacilleria.js" type="text/javascript"></script>
	<script>
        $(document).ready(function(){
            $('#tablaVerProfesores').dataTable( {
                                        "sPaginationType": "scrolling",
                                        "oLanguage": {
                                                        "sUrl": "js/DataTables-1.9.4/media/language/spanish.txt",
                                                        "sInfoThousands": "."
                                                    },
                                        "sPaginationType": "full_numbers",
                                        "sScrollY": "400",
                                        "sScrollX": "90%",                                                    
                                        "bScrollCollapse": true 

                                    } );
            $('#tablaVerEstudientes').dataTable( {
                                        "sPaginationType": "scrolling",
                                        "oLanguage": {
                                                        "sUrl": "js/DataTables-1.9.4/media/language/spanish.txt",
                                                        "sInfoThousands": "."
                                                    },
                                        "sPaginationType": "full_numbers",
                                        "sScrollY": "400",
                                        "sScrollX": "90%",                                                    
                                        "bScrollCollapse": true 

                                    } );
		$('#tablaVerAsistentes').dataTable( {
                                        "sPaginationType": "scrolling",
                                        "oLanguage": {
                                                        "sUrl": "js/DataTables-1.9.4/media/language/spanish.txt",
                                                        "sInfoThousands": "."
                                                    },
                                        "sPaginationType": "full_numbers",
                                        "sScrollY": "400",
                                        "sScrollX": "90%",                                                    
                                        "bScrollCollapse": true 

                                    } );
			$('#tablaVerParticipante').dataTable( {
                                        "sPaginationType": "scrolling",
                                        "oLanguage": {
                                                        "sUrl": "js/DataTables-1.9.4/media/language/spanish.txt",
                                                        "sInfoThousands": "."
                                                    },
                                        "sPaginationType": "full_numbers",
                                        "sScrollY": "400",
                                        "sScrollX": "90%",                                                    
                                        "bScrollCollapse": true 

                                    } );
			$('#tablaVerGrupo').dataTable( {
                                        "sPaginationType": "scrolling",
                                        "oLanguage": {
                                                        "sUrl": "js/DataTables-1.9.4/media/language/spanish.txt",
                                                        "sInfoThousands": "."
                                                    },
                                        "sPaginationType": "full_numbers",
                                        "sScrollY": "400",
                                        "sScrollX": "90%",                                                    
                                        "bScrollCollapse": true 

                                    } );	
			$('#tablaVerIntegrante').dataTable( {
                                        "sPaginationType": "scrolling",
                                        "oLanguage": {
                                                        "sUrl": "js/DataTables-1.9.4/media/language/spanish.txt",
                                                        "sInfoThousands": "."
                                                    },
                                        "sPaginationType": "full_numbers",
                                        "sScrollY": "400",
                                        "sScrollX": "90%",                                                    
                                        "bScrollCollapse": true 

                                    } );
			$('#tablaVerEvento').dataTable( {
                                        "sPaginationType": "scrolling",
                                        "oLanguage": {
                                                        "sUrl": "js/DataTables-1.9.4/media/language/spanish.txt",
                                                        "sInfoThousands": "."
                                                    },
                                        "sPaginationType": "full_numbers",
                                        "sScrollY": "400",
                                        "sScrollX": "90%",                                                    
                                        "bScrollCollapse": true 

                                    } );
									
        });
			
      
    </script>
    <script type="text/javascript">
    </script>
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
			  <h1 class="text-titles"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> Busquedas Seleccione una Opcion<small></small></h1>
			</div>
			<p class="lead">  </p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li><a href="#list1" data-toggle="tab">PROFESORES</a></li>
						<li><a href="#list2" data-toggle="tab">ESTUDIANTES </a></li>
						<li><a href="#list3" data-toggle="tab">ASISTENTES </a></li>
						<li><a href="#list4" data-toggle="tab">PARTICIPANTES </a></li>
						<li><a href="#list5" data-toggle="tab">GRUPO</a></li>
						<li><a href="#list6" data-toggle="tab">INTEGRANTE</a></li>
						<li><a href="#list7" data-toggle="tab">EVENTO</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
			<div class="tab-pane fade" id="list1">
						<a href="control/busquedaGeneral.php?tipo=profesor">DESCARGAR LISTA PROFESORES</a>
						<br/><br/>
						<table align="center" border="0" id="tablaVerProfesores" cellpadding="1"style=" background: #CCCCCC;">
					   <thead>
						<tr>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Cedula</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Nombre</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Apellido</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Correo</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Especialidad</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Curso</strong></font></td>
						</tr>
					</thead>
					<tbody>
					<?php
					include_once("control/consultarProfesor.php");
					if ($result){  
					   
						while ($values = mysql_fetch_array($result)){
						echo"
						<tr style='background-color: #FFFFFF'>
						
						<td>".$values['cedula']."</td>
						<td>".$values['nombre']."</td>
						<td>".$values['apellido']."</td>
						<td>".$values['correo']."</td>
						<td>".$values['especialidad']."</td>
						<td>".$values['curso']."</td>					
						</tr>";
						}
					}
					?>
					</tbody>
					</table>
			</div>
			<div class="tab-pane fade" id="list2">
						<a href="control/busquedaGeneral.php?tipo=estudiante">DESCARGAR LISTA ESTUDIANTES</a>
						<br/><br/>
						<table align="center" border="0" id="tablaVerEstudientes" cellpadding="1"style=" background: #CCCCCC;">
					   <thead>
						<tr>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Cedula</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Nombre</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Apellido</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Correo</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Tipo</strong></font></td>
						</tr>
					</thead>
					<tbody>
					<?php
					include_once("control/consultarEstudiante.php");
					if ($result){  
					   
						while ($values = mysql_fetch_array($result)){
						echo"
						<tr style='background-color: #FFFFFF'>
						
						<td>".$values['cedula']."</td>
						<td>".$values['nombre']."</td>
						<td>".$values['apellido']."</td>
						<td>".$values['correo']."</td>
						<td>".$values['tipo']."</td>					
						</tr>";
						}
					}
					?>
					</tbody>
					</table>
			</div>
			<div class="tab-pane fade" id="list3">
						<a href="control/busquedaGeneral.php?tipo=asistente">DESCARGAR LISTA ASISTENTES</a>
						<br/><br/>
						<table align="center" border="0" id="tablaVerAsistentes" cellpadding="1"style=" background: #CCCCCC;">
					   <thead>
						<tr>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Cedula</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Nombre</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Apellido</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Correo</strong></font></td>
						</tr>
					</thead>
					<tbody>
					<?php
					include_once("control/consultarUsuario.php");
					if ($result){  
					   
						while ($values = mysql_fetch_array($result)){
						echo"
						<tr style='background-color: #FFFFFF'>
						
						<td>".$values['cedula']."</td>
						<td>".$values['nombre']."</td>
						<td>".$values['apellido']."</td>
						<td>".$values['correo']."</td>				
						</tr>";
						}
					}
					?>
					</tbody>
					</table>
			</div>
			<div class="tab-pane fade" id="list4">
				<a href="control/busquedaGeneral.php?tipo=asistente">DESCARGAR LISTA PARTICIPANTES</a>
						<br/><br/>
						<table align="center" border="0" id="tablaVerParticipante" cellpadding="1"style=" background: #CCCCCC;">
					   <thead>
						<tr>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Cedula</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Nombre</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Apellido</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Correo</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Celular</strong></font></td>
						</tr>
					</thead>
					<tbody>
					<?php
					include_once("control/consultarParticipante.php");
					if ($result){  
					   
						while ($values = mysql_fetch_array($result)){
						echo"
						<tr style='background-color: #FFFFFF'>
						
						<td>".$values['cedula']."</td>
						<td>".$values['nombre']."</td>
						<td>".$values['apellido']."</td>
						<td>".$values['correo']."</td>	
						<td>".$values['celular']."</td>						
						</tr>";
						}
					}
					?>
					</tbody>
					</table>
			</div>
			<div class="tab-pane fade" id="list5">
			<a href="control/busquedaGeneral.php?tipo=asistente">DESCARGAR LISTA GRUPO</a>
						<br/><br/>
						<table align="center" border="0" id="tablaVerGrupo" cellpadding="1"style=" background: #CCCCCC;">
					   <thead>
						<tr>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>ID</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>NUCLEO</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>PROFESOR</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>ESTATUS</strong></font></td>
						</tr>
					</thead>
					<tbody>
					<?php
					include_once("control/consultarGrupo.php");
					if ($result){  
					   
						while ($values = mysql_fetch_array($result)){
						echo"
						<tr style='background-color: #FFFFFF'>
						
						<td>".$values['id']."</td>
						<td>".$values['nucleo']."</td>
						<td>".$values['profesor']."</td>
						<td>".$values['estatus']."</td>						
						</tr>";
						}
					}
					?>
					</tbody>
					</table>
			</div>
			<div class="tab-pane fade" id="list6">
				<a href="control/busquedaGeneral.php?tipo=asistente">DESCARGAR LISTA INTEGRANTE</a>
						<br/><br/>
						<table align="center" border="0" id="tablaVerIntegrante" cellpadding="1"style=" background: #CCCCCC;">
					   <thead>
						<tr>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Cedula</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Nombre</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Apellido</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Correo</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Celular</strong></font></td>
						</tr>
					</thead>
					<tbody>
					<?php
					include_once("control/consultarIntegrante.php");
					if ($result){  
					   
						while ($values = mysql_fetch_array($result)){
						echo"
						<tr style='background-color: #FFFFFF'>
						
						<td>".$values['cedula']."</td>
						<td>".$values['nombre']."</td>
						<td>".$values['apellido']."</td>
						<td>".$values['correo']."</td>	
						<td>".$values['celular']."</td>						
						</tr>";
						}
					}
					?>
					</tbody>
					</table>
			</div>
			<div class="tab-pane fade" id="list7">
				<a href="control/busquedaGeneral.php?tipo=asistente">DESCARGAR LISTA EVENTO</a>
						<br/><br/>
						<table align="center" border="0" id="tablaVerEvento" cellpadding="1"style=" background: #CCCCCC;">
					   <thead>
						<tr>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>NOMBRE</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>ESTATUS</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>FECHA DE INICIO</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>FECHA DE CIERRE</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>HORA DE INICIO</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>HORA DE CIERRE</strong></font></td>
						</tr>
					</thead>
					<tbody>
					<?php
					include_once("control/consultaEvento.php");
					if ($result){  
					   
						while ($values = mysql_fetch_array($result)){
						echo"
						<tr style='background-color: #FFFFFF'>
						
						<td>".$values['nombre']."</td>
						<td>".$values['estatus']."</td>
						<td>".$values['feinicio']."</td>
						<td>".$values['fecierre']."</td>	
						<td>".$values['hoinicio']."</td>
						<td>".$values['hoinicio']."</td>						
						</tr>";
						}
					}
					?>
					</tbody>
					</table>
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