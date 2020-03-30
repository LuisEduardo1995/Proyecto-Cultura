<?php include_once '../controlador/inicioSesion.php';
require_once("control/connect_db.php");
include_once("control/cambioformatofecha.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
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
    <script src="js/jquery.maskedinput-1.3.js" type="text/javascript"></script><!-- Versi�n 1.3-->
    <script src="js/spin.min.js" type="text/javascript"></script>
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
	<script type="text/javascript" src="Js/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'ESTADISTICAS DE ESTUDIANTES'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Porcentaje',
            data: [
                <?php
			$sqlUsuario="SELECT COUNT(usuario.cedula) AS totalestudiantes 
						 FROM usuario 
						 WHERE usuario.tipo_usuario='ESTUDIANTES' AND
							   usuario.activo = 1 ";
			$resultUsuario = mysql_query($sqlUsuario);
			$resUsuario=mysql_fetch_array($resultUsuario);
			$sqlEstudiante="SELECT COUNT(DISTINCT(cursofinal.idestudiante)) AS totalcurso 
			      FROM estudiante,cursofinal, usuario 
				  WHERE estudiante.idestudiante = cursofinal.idestudiante AND 
				  estudiante.cedulapersona = usuario.cedula AND 
				  usuario.tipo_usuario='ESTUDIANTES' AND 
				  usuario.activo = 1 ";
			$resultEstudiante = mysql_query($sqlEstudiante);
			$resEstudiante=mysql_fetch_array($resultEstudiante);
			
				?>
			
                ['TOTAL ESTUDIANTES', <?php echo $resUsuario['totalestudiantes'] ?>],
                ['TOTAL ESTUDIANTES EN CURSO', <?php echo $resEstudiante['totalcurso'] ?>],
			
			
            ]
        }]
    });
});


		</script>
</head>
<body>
	  <!-- Navbar
    ================================================== -->
<?php
include("include/menu.php");

//contar asistente
$sql="SELECT count(cedula) as totalasistente FROM usuario WHERE tipo_usuario = 'ASISTENTE'" ;
$result = mysql_query($sql);	
$registro = mysql_fetch_array($result);
$totalAsistente = $registro["totalasistente"];
//contar estudiante
$sql="SELECT count(cedula) as totalprofesor FROM usuario WHERE tipo_usuario = 'PROFESOR'" ;
$result = mysql_query($sql);	
$registro = mysql_fetch_array($result);
$totalProfesor = $registro["totalprofesor"];
//contar  profesor
$sql="SELECT count(cedula) as totalestudiantes FROM usuario WHERE tipo_usuario = 'ESTUDIANTES'" ;
$result = mysql_query($sql);	
$registro = mysql_fetch_array($result);
$totalEstudiantes = $registro["totalestudiantes"];
///----

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
			  <h1 class="text-titles"> USUARIOS</h1>
			  </div>
			  
		<div class="full-box text-center" style="padding: 30px 10px;">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					ASISTENTE
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo $totalAsistente;?></p>
					<small><a href="usuario.php?tipopersona=asistente">Registrar</a></small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					PROFESORES
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-male-alt"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo $totalProfesor;?></p>
					<small><a href="usuario.php?tipopersona=profesor">Registrar</a></small>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					ESTUDIANTES
				</div>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-face"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box"><?php echo $totalEstudiantes;?> </p>
					<small><a href="usuario.php?tipopersona=estudiantes">Registrar</a></small>
				</div>
			</article>
			<!------->
			<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
			<strong>TOTAL DE ESTUDIANTES <?php echo $resUsuario['totalestudiantes']; ?> REGISTRADO</strong><br />
			<strong>TOTAL DE ESTUDIANTES <?php echo $resEstudiante['totalcurso']; ?> INSCRITOS EN UN CURSO</strong>
                 
			<!------->
		</div>
		
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"> N&Uacute;CLEOS  <small></small></h1>
			</div>
		</div>
		<div class="full-box text-center" style="padding: 30px 10px;">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					M&Uacute;SICA
				</div>
				<div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                       <a href="nucleosDeCurso.php?nucleo=musica"> <img src="./assets/img/musica.jpg " alt="user-picture">
                    </div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					CINEMATOGRAF&Iacute;A
				</div>
				<div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                      <a href="nucleosDeCurso.php?nucleo=cine">  <img src="./assets/img/cine.jpg" alt="user-picture">
                    </div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					ARTES ESC&Eacute;NICAS
				</div>
				<div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                       <a href="nucleosDeCurso.php?nucleo=artesesce"> <img src="./assets/img/escenicas.jpg" alt="user-picture">
                    </div>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					ARTES PL&Aacute;STICA
				</div>
				<div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                       <a href="nucleosDeCurso.php?nucleo=plastica"> <img src="./assets/img/plastica.jpg" alt="user-picture">
                    </div>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					ARTESAN&Iacute;A
				</div>
				<div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                      <a href="nucleosDeCurso.php?nucleo=artesania">  <img src="./assets/img/artesania.jpg" alt="user-picture"> </a>
                    </div>
				</div>
			</article>
		</div>
		
		
		
		
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles">EVENTOS POR INICIAR<small></small></h1>
			</div>
			
		
			<?php 
			$sql="SELECT * FROM evento WHERE estatus='ACTIVO'" ;
			$result = mysql_query($sql);
			if ($result){  
			$i=0;
			while ($values = mysql_fetch_array($result)){
				$i=$i+1;
				
				$feinicio=dma_a_amd($values['fechainicio']);
				$fecierre=dma_a_amd($values['fechacierre']);
			echo"
                <div class='cd-timeline-block'>
                    <div class='cd-timeline-img'>
                        <img src='imagenes/eventos.jpg' alt='user-picture'>
                    </div>
                    <div class='cd-timeline-content'>
                        <h4 class='text-center text-titles'>".$i." - ".$values['nombre']." </h4>
                        <h4 class='text-center text-titles'>LUGAR - ".$values['lugarevento']." </h4>
                        <h4 class='text-center text-titles'>RESPONSABLE - ".$values['responsableevento']." </h4>
                        <h4 class='text-center text-titles'>INVITADOS - ".$values['invitados']." </h4>
                        <p class='text-center'>
                            <i class='zmdi zmdi-timer zmdi-hc-fw'></i> Inicia: <em>".$values['hoinicio']."</em> &nbsp;&nbsp;&nbsp; 
                            <i class='zmdi zmdi-time zmdi-hc-fw'></i> Termina: <em>".$values['hocierre']."</em>
                        </p>
                        <span class='cd-date'><i class='zmdi zmdi-calendar-note zmdi-hc-fw'></i>".$feinicio."--".$fecierre."</span>
                    </div>
                </div> ";
				}
			}
		?>
	<!--<table align="center" border="0" id="tablaVerEventos" cellpadding="1"style=" background: #CCCCCC;">
					   <thead>
						<tr>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Cantidad</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Nombre del Evento</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Fecha de inicio</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Hora de Inicio</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Hora de Cierre</strong></font></td>
						<td style="background-color: #E8F5F9"><font color='#000000'><strong>Fecha de Cierre</strong></font></td>
						
						
						</tr>
					</thead>
					<tbody>
					<?php
					include_once("control/consultaGeneralDeEventos.php");
					if ($result){  
					    $i=0;
						while ($values = mysql_fetch_array($result)){
						$i=$i+1;
						$feinicio=dma_a_amd($values['fechainicio']);
				        $fecierre=dma_a_amd($values['fechacierre']);
						echo"
						<tr style='background-color: #FFFFFF'>
						<td>".$i."</td>
						<td style='background-color: #CCCCCC'><strong>".$values['nombre']."</strong></td>
						<td><i class='zmdi zmdi-timer zmdi-hc-fw'></i>".$feinicio."</td>
						
						<td><i class='zmdi zmdi-calendar-note zmdi-hc-fw'></i>".$values['hoinicio']."</td>
						<td><i class='zmdi zmdi-calendar-note zmdi-hc-fw'></i>".$values['hocierre']."</td>				
						<td><i class='zmdi zmdi-timer zmdi-hc-fw'></i>".$fecierre."</td>
						</tr>";
						}
					}
					?>
					</tbody>
					</table>-->


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
				      	<h4 class="list-group-item-heading"> Nuevo Evento </h4>
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
				      	<h4 class="list-group-item-heading"> Solicitud para artes esc&eacute;nicas </h4>
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
			        	Debe contactar al soporte tecnico de la UBV correo: soportecnicoUBV@gmail.com
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
	<script src="Highcharts-4.1.5/js/highcharts.js"></script>
	<script src="Highcharts-4.1.5/js/modules/exporting.js"></script>
</body>
</html>