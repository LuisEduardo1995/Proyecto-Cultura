<?php include_once '../controlador/inicioSesion.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
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
            $('#tablaVerUsuarios').dataTable( {
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
	<script src="js/validarasistente.js"></script>
</head>
<body>
	  <!-- Navbar
    ================================================== -->
<?php
include("include/menu.php");
$tipoPersona = $_GET["tipopersona"];
$tipoPersona1 = strtoupper($tipoPersona);
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
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> USUARIO <?php echo $tipoPersona1;?> </h1>
			</div>
			<p class="lead">     </p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#new" data-toggle="tab">NUEVO</a></li>
					  	<li><a href="#list" data-toggle="tab">LISTA  </a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">

									<div class="col-xs-12 col-md-10 col-md-offset-1">

									    <form class="expose"  enctype="multipart/form-data" action="control/registrousua.php" method="post" name="formulario" onsubmit="return validarusuario(this)">
									    	<input class="form-control" type="hidden" name="tipoPersona"  id="tipoPersona" value='<?php echo$tipoPersona;?>'>
									    	<div class="form-group label-floating">
											  <label class="control-label"> Nombre </label>
											  <input class="form-control"onkeypress="return soloLetras(event)" type="text" name="nombre"  id="nombre" >
											</div>
											<div class="form-group label-floating">
											  <label class="control-label"> Apellido </label>
											  <input class="form-control" onkeypress="return soloLetras(event)" type="text" name="apellido" id="apellido" >
											</div>
											<div class="form-group label-floating">
											  <label class="control-label"> Cedula </label>
											  <input class="form-control" onkeypress="return isNumberKey(event)" type="text" name="cedula" id="cedula" >
											</div>
											<div class="form-group label-floating">
											  <label class="control-label"> Correo </label>
											  <input class="form-control" type="text" name="correo" id="correo">
											</div>
											<div class="form-group">
											  <label class="control-label"> Edad </label>
											  <input class="form-control" onkeypress="return isNumberKey(event)" type="text" name="edad" id="edad" >
											</div>
											<div class="form-group">
											  <label class="control-label"> Telefono </label>
											  <input class="form-control" onkeypress="return isNumberKey(event)" type="text" name="telefono" id="telefono" >
											</div>
	
											<div class="form-group">
										        <label class="control-label"> Tipo de Usuario </label>
										        <select class="form-control"  type="text" name="tipo_usuario" id="tipo_usuario" >
										        <option value="none" selected>Seleccione ...</option>
												<?php 
												if($tipoPersona == "asistente"){?>
										        <option value="asistente" selected> Asistente </option>
												<?php }
												if($tipoPersona == "administrador"){?>
										        <option value="administrador" selected> Administrador </option>
												<?php }
												if($tipoPersona == "profesor"){?>
										        <option value="profesor" selected> Profesor </option>
												<?php }
												if($tipoPersona == "estudiantes" or $tipoPersona == "integrante" or $tipoPersona == "participante"){?>
										        <option value="estudiantes" selected> Estudiantes </option>
												<?php }?>
										        </select>
										    </div>
											<?php 
											switch ($tipoPersona){
												case 'profesor':?>
												<div class="form-group label-floating">
												  <label class="control-label"> Nivel Academico </label>
													<select class="form-control"  type="text" name="estudio" id="estudio" >
													<option value="" >Seleccione ...</option>
													<option value="BACHILLER" > BACHILLER </option>
													<option value="TSU" > TSU </option>
													<option value="LICENCIADO" > LICENCIADO </option>
													<option value="POST GRADO" > POST GRADO </option>
													<option value="MAGISTER" > MAGISTER </option>
													<option value="DOCTORADO" > DOCTORADO </option>
													</select>
												</div>
												<div class="form-group label-floating">
												  <label class="control-label"> Especialidad </label>
												  <input class="form-control" onkeypress="return soloLetras(event)" type="text" name="especialidad" id="especialidad" >
												</div>
												<div class="form-group label-floating">
												  <label class="control-label"> Curso </label>
												  <input class="form-control" onkeypress="return soloLetras(event)" type="text" name="curso" id="curso" >
												</div>
											<?php break;
												case 'estudiantes':?>
												<div class="form-group">
													<label class="control-label"> Participante </label>
													<select class="form-control"  type="text" name="participante" id="participante" >
													<option value="NO" >Seleccione ...</option>
													<option value="SI" > SI </option>
													<option value="NO" > NO </option>
													</select>
												</div>
												<div class="form-group">
													<label class="control-label"> Integrante </label>
													<select class="form-control"  type="text" name="integrante" id="integrante" >
													<option value="NO" >Seleccione ...</option>
													<option value="SI" > SI </option>
													<option value="NO" > NO </option>
													</select>
												</div>
												<div class="form-group">
													<label class="control-label"> Pertenece </label>
													<select class="form-control"  type="text" name="pertenece" id="pertenece" >
													<option value="" >Seleccione ...</option>
													<option value="COMUNIDAD" > COMUNIDAD </option>
													<option value="UBEVISTA" > UBEVISTA </option>
													<option value="TRABAJADOR" > TRABAJADOR </option>
													</select>
												</div>
											<?php	break;
																	}
											?>
											 <div class="form-group">
											  <label class="control-label"> Clave </label>
											  <input class="form-control" type="password" name="clave" id="clave">
											</div>
											<div class="form-group">
											  <label class="control-label"> Repetir Clave </label>
											  <input class="form-control" type="password" name="clave1" id="clave1">
											</div>
											<div class="form-group">
										      <label class="control-label"> Foto </label>
										      <div>
										        <input type="text" readonly="" class="form-control" placeholder="Browse...">
										        <input type="file"  name="imagen" id="imagen">
										      </div>
										    </div>
										    <p class="text-center">
										    	<button type="submit"  name="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> REGISTRAR </button>
										    </p>
									    </form>

									</div>



								</div>
							</div>
						</div>
						
					  	<div class="tab-pane fade" id="list">
							<table align="center" border="0" id="tablaVerUsuarios" width="1000" cellpadding="1"style=" background: #CCCCCC;">
								 <thead>
									<tr>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Cantidad</strong></font></td>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Cedula</strong></font></td>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Nombre</strong></font></td>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Apellido</strong></font></td>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Correo</strong></font></td>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Telefono</strong></font></td>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Tipo Usuario</strong></font></td>
									<?php if($tipoPersona == "estudiantes"){?>
								     <td style="background-color: #E8F5F9"><font color='#000000'><strong>Nucleo</strong></font></td>
									<?php } ?>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Modificar</strong></font></td>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Eliminar</strong></font></td>
									</tr>
								</thead>
									<tbody>
											<?php
    
										include_once("control/consultarUsuario.php");
										//include_once("../controlador/cambioformatofecha.php");
									if ($result){  
									$i=1;
									 while ($values = mysql_fetch_array($result)){
										$nucleoGrupo = "";
										
										if($values['cedula'] != "" and $tipoPersona == "ESTUDIANTES"){
										$sqlGrupo = "SELECT curso.nucleo, curso.expresion
												FROM cursofinal, curso, estudiante
												WHERE cursofinal.idcurso = curso.idcurso AND
													cursofinal.idestudiante = estudiante.idestudiante AND
													estudiante.cedulapersona = {$values['cedula']}" ;
										$resultGrupo = mysql_query($sqlGrupo);
										$nucleoGrupo1 ="";
										while ($registroGrupo = mysql_fetch_array($resultGrupo)){
										$nucleoGrupo = $registroGrupo["nucleo"];
										$expresionGrupo = $registroGrupo["expresion"];
										$nucleoGrupo1 .="Nucleo: ".$nucleoGrupo.", Expresion: ".$expresionGrupo.", <br />";
										$nucleoGrupo = $nucleoGrupo1;
											}
										}
										
										echo"
										<tr style='background-color: #FFFFFF'>
										<td>".$i."</td>
										<td>".$values['cedula']."</td>
										<td>".$values['nombre']."</td>
										<td>".$values['apellido']."</td>
										<td>".$values['correo']."</td>
										<td>".$values['telefono']."</td>
										<td>".$values['tipo_usuario']."</td>";
										if($nucleoGrupo == ""){$nucleoGrupo = "------";}
										if($tipoPersona == "ESTUDIANTES"){echo"<td>".$nucleoGrupo."</td>";}
										echo"<td><a href=\"javascript:popUp('mostrarModificarUsuario.php?cedula={$values['cedula']}&tipo_persona=$tipoPersona')\" class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
									    <td><a href='control/eliminarUsuario.php?cedula={$values['cedula']}&tipopersona=$tipoPersona' onclick='return confirmar()' class='btn btn-danger btn-raised btn-xs'><i class='zmdi zmdi-delete'></i></a></td>
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