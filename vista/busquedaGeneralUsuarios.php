<?php include_once '../controlador/inicioSesion.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>BUSQUEDAD</title>
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
	<script>
        $(document).ready(function(){
            $('#tablaVerTodas').dataTable( {
                                        "sPaginationType": "scrolling",
                                        "oLanguage": {
                                                        "sUrl": "js/DataTables-1.9.4/media/language/spanish.txt",
                                                        "sInfoThousands": "."
                                                    },
                                        "sPaginationType": "full_numbers",
                                        "sScrollY": "400",
                                        "sScrollX": "150%",                                                    
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
			  <h1 class="text-titles"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>BUSQUEDA GENERAL DE USUARIOS<small></small></h1>
			</div>
			<p class="lead">  </p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li><a href="#" data-toggle="tab"></a></li>
					</ul>
			
				
				 <table align="center" border="0" id="tablaVerTodas" cellpadding="1"style=" background: #CCCCCC;">
					   <thead>
						<tr>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Cedula</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Nombre</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Apellido</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Correo</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Tipo de Usuario</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Telefono</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Estudio</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Especialidad</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Curso</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Participa en un Evento</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Integrante de un Grupo</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Grupos Profesor </strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Curso Profesor </strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Curso Estudiantes </strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Eventos</strong></font></td>
						</tr>
					</thead>
					<tbody>
					<?php
					include_once("control/consultaGeneralUsuarios.php");
					
					   if ($result){  

					   while ($values = mysql_fetch_array($result)){
						$nucleoGrupo = "";
						$nucleoCurso = "";
						if($values['idprofesor'] != ""){
					    $sqlGrupo = "SELECT grupo.nucleo, grupo.expresion FROM grupo  WHERE idprofesor = {$values['idprofesor']} AND estatus = 'VACIO'";
						$resultGrupo = mysql_query($sqlGrupo);
						$nucleoGrupo1 ="";
						while ($registroGrupo = mysql_fetch_array($resultGrupo)){
						$nucleoGrupo = $registroGrupo["nucleo"];
						$expresionGrupo = $registroGrupo["expresion"];
						$nucleoGrupo1 .=$nucleoGrupo.": ".$expresionGrupo.", <br />";
						$nucleoGrupo = $nucleoGrupo1;
							}
						}
						////
						if($values['idprofesor'] != ""){
						$sqlCurso = "SELECT curso.nucleo, curso.expresion, curso.nivel FROM  curso WHERE idprofesor = {$values['idprofesor']} AND estatus = 'VACIO'";
						$resultCurso = mysql_query($sqlCurso);
						$nucleoCurso1 ="";
						while ($registroCurso = mysql_fetch_array($resultCurso)){
						$nucleoCurso = $registroCurso["nucleo"];
						$expresionCurso = $registroCurso["expresion"]." NIVEL: ".$registroCurso["nivel"];
						$nucleoCurso1 .=$nucleoCurso.": ".$expresionCurso.",  <br />";
						$nucleoCurso = $nucleoCurso1;
							}
						}
						$Evento = "";
						if($values['idestudiante'] != ""){
						include_once("control/cambioformatofecha.php");
						$sqlEvento = "SELECT evento.nombre, evento.fechainicio, evento.fechacierre, evento.hoinicio, evento.hocierre
									  FROM   evento, participanteevento, estudiante
									  WHERE  evento.idevento = participanteevento.idevento AND
										     participanteevento.idestudiante = estudiante.idestudiante AND
											 estudiante.idestudiante = {$values['idestudiante']}  AND estatus = 'ACTIVO'";
						$resultEvento = mysql_query($sqlEvento);
						$Evento1 = "";
						while ($registroEvento = mysql_fetch_array($resultEvento)){
						$feinicio=dma_a_amd($registroEvento['fechainicio']);
						$fecierre=dma_a_amd($registroEvento['fechacierre']);
						$nombreEvento = $registroEvento["nombre"]." FECHA INICIO:".$feinicio.", HORA DE INICIO: ".$registroEvento["hoinicio"].", FECHA DE CIERRE: ".$fecierre.", HORA CIERRE: ".$registroEvento["hocierre"].",<br />";
						$Evento1 .= $nombreEvento;
						$Evento = $Evento1;
							}
						}
						$curso="";
						if($values['cedula'] != ""){
										$sqlCursoEstudiante = "SELECT curso.nucleo, curso.expresion
												FROM cursofinal, curso, estudiante
												WHERE cursofinal.idcurso = curso.idcurso AND
													cursofinal.idestudiante = estudiante.idestudiante AND
													estudiante.cedulapersona = {$values['cedula']}" ;
										$resultCursoEstudiante = mysql_query($sqlCursoEstudiante);
										$curso1 ="";
										while ($registroCursoEstudiante = mysql_fetch_array($resultCursoEstudiante)){
										$nucleoCursoEstudiante = $registroCursoEstudiante["nucleo"];
										$expresionCursoEstudiante = $registroCursoEstudiante["expresion"];
										$curso1 .="Nucleo: ".$nucleoCursoEstudiante.", Expresion: ".$expresionCursoEstudiante.", <br />";
										$curso = $curso1;
											}
										}
						//////
						echo"
						<tr style='background-color: #FFFFFF'>
						
						<td>".$values['cedula']."</td>
						<td>".$values['nombre']."</td>
						<td>".$values['apellido']."</td>
						<td>".$values['correo']."</td>
						<td>".$values['tipo_usuario']."</td>
						<td>".$values['telefono']."</td>";
						if($values['tipo_usuario']=="ESTUDIANTES"){echo"<td>NO APLICA</td>";}
						if($values['tipo_usuario']=="ASISTENTE"){echo"<td>NO APLICA</td>";}
						if($values['tipo_usuario']=="PROFESOR"){echo"<td>".$values['estudio']."</td>";}
						if($values['tipo_usuario']=="ESTUDIANTES"){echo"<td>NO APLICA</td>";}
						if($values['tipo_usuario']=="ASISTENTE"){echo"<td>NO APLICA</td>";}
						if($values['tipo_usuario']=="PROFESOR"){echo"<td>".$values['especialidad']."</td>";}
						if($values['tipo_usuario']=="ESTUDIANTES"){echo"<td>NO APLICA</td>";}
						if($values['tipo_usuario']=="ASISTENTE"){echo"<td>NO APLICA</td>";}
						if($values['tipo_usuario']=="PROFESOR"){echo"<td>".$values['curso']."</td>";}	
					    if($values['tipo_usuario']=="ESTUDIANTES"){echo"<td>".$values['participante']."</td>";}
						if($values['tipo_usuario']=="ASISTENTE"){echo"<td>NO APLICA</td>";}
						if($values['tipo_usuario']=="PROFESOR"){echo"<td>NO APLICA</td>";}
						if($values['tipo_usuario']=="ESTUDIANTES"){echo"<td>".$values['integrante']."</td>";}
						if($values['tipo_usuario']=="ASISTENTE"){echo"<td>NO APLICA</td>";}
						if($values['tipo_usuario']=="PROFESOR"){echo"<td>NO APLICA</td>";}
						if($nucleoGrupo == ""){$nucleoGrupo = "NO APLICA";}
						if($nucleoCurso == ""){$nucleoCurso = "NO APLICA";}
						if($curso == ""){$curso = "NO APLICA";}
						if($Evento == ""){$Evento = "NO APLICA";}
						echo"
						<td>".$nucleoGrupo."</td>
						<td>".$nucleoCurso."</td>
						<td>".$curso."</td>
						<td>".$Evento."</td>";
						echo"</tr>";
						}
					}
					?>
						
					</tbody>
					</table>

				</div>
			</div>
		</div>
	</section>
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