<?php include_once '../controlador/inicioSesion.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>EVENTOS ESPECIALES</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
	<link href='js/jquery-ui.min.css' type='text/css' rel='stylesheet' >
	<link rel="stylesheet" href="js/jquery-ui-1.10.3.custom/css/cupertino/jquery-ui-1.10.3.custom.css"/></link>
	<link rel="stylesheet" href="css/estilos.css"/></link>
    <link type="text/css" rel="stylesheet" href="js/DataTables-1.9.4/media/css/jquery.dataTables.css"></link>
    <script src="js/jquery1.9.js"></script>
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js"></script>
    <script src="js/DataTables-1.9.4/media/js/jquery.dataTables.js" type="text/javascript"></script>
	<script>
        $(document).ready(function(){
            $('#tablaVerEventos').dataTable( {
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
	<script src="js/validarCurso.js"></script>
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
					<a href="busquedaGeneralUsuarios.php" >
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
			 
			  <h1 class="text-titles"><i class="zmdi zmdi-face zmdi-hc-fw"></i> EVENTOS ESPECIALES </small></h1></li>
			</div>
			<p class="lead">    </p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li><a href="#list" data-toggle="tab">SELECCIONE EL EVENTO Y AGREGUE EL PARTICIPANTE</a></li>
					</ul>
					
						
							<table align="center" border="0" id="tablaVerEventos" width="1230" cellpadding="1"style=" background: #CCCCCC;">
								 <thead>
									<tr>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Cantidad</strong></font></td>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Tipo de Evento</strong></font></td>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Nombre del Evento</strong></font></td>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Capacidad</strong></font></td>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Personas Agregadas</strong></font></td>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Estatus</strong></font></td>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Fecha de inicio</strong></font></td>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Hora de Inicio</strong></font></td>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Hora de Cierre</strong></font></td>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Fecha de Cierre</strong></font></td>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Agregar Participante</strong></font></td>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Decargar Lista de Participantes</strong></font></td>
									</tr>
								</thead>
									<tbody>
									
											<?php
    
										include_once("control/consultaEventosParaAgregarParticipantes.php");
										include_once("control/cambioformatofecha.php");
													if ($result){  
													$i=1;
														 while ($values = mysql_fetch_array($result)){
														 $feinicio=dma_a_amd($values['fechainicio']);
														 $fecierre=dma_a_amd($values['fechacierre']);
														 $capacidad=$values['capacidad']-$values['cuporest'];
														if($capacidad == 0){
														$capacidad="LLENO";
														$agregarEstu="LLENO";	
														}else{
														$agregarEstu="<a href=\"javascript:popUp('registrarParticipanteEventos.php?idevento={$values['idevento']}&capacidad={$values['capacidad']}&nombre={$values['nombre']}&tipoevento={$values['tipoevento']}&fechainicio=$feinicio&fechacierre=$fecierre')\" class='zmdi zmdi-account-add zmdi-hc-fw'></i></a>";	
														}
										echo"
										<tr style='background-color: #FFFFFF'>
										<td>".$i."</td>
										<td>".$values['tipoevento']."</td>
										<td>".$values['nombre']."</td>
										<td>".$values['capacidad']."</td>
										<td>".$values['cuporest']."</td>
										<td>".$values['estatus']."</td>
										<td>".$feinicio."</td>
										
										<td>".$values['hoinicio']."</td>
										<td>".$values['hocierre']."</td>
										<td>".$fecierre."</td>
										<td>".$agregarEstu."</td>
									    <td><a href='control/crearListaCurso.php?idevento={$values['idevento']}&tipo=evento' class='zmdi zmdi-card zmdi-hc-fw'></i></a></td>
										
										</tr>";?>
									
										<?php      
											$i=$i+1;}
										  }
										?>
											
									</tbody>
								</table>
								
							
					  	
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