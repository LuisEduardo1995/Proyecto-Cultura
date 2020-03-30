<?php include_once '../controlador/inicioSesion.php'; 
$tipo_usuario = $_SESSION['tipo_usuario'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Curso</title>
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
            $('#tablaVerCursos').dataTable( {
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
			  <h1 class="text-titles"><i class="zmdi zmdi-book zmdi-hc-fw"></i> CURSO <small>  </small></h1>
			</div>
			<p class="lead">    </p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#new" data-toggle="tab">NUEVO</a></li>
					  	<li><a href="#list" data-toggle="tab">LISTA</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form class="expose"  enctype="multipart/form-data" action="control/registroCurso.php" method="post" name="formulario" onsubmit="return validarCurso(this)">
									    	<div class="form-group label-floating">
											  <label class="control-label"> N&uacute;cleo </label>
											  <select class="form-control"  type="text" name="nucleo" id="nucleo" onchange="expresion()">
										          <option value="" selected>Seleccione ...</option>	
										          <option value="MUSICA">M&uacute;sica</option>
										          <option value="CINEMATOGRAFIA">Cinematograf&iacute;a</option>
										          <option value="ARTES ESCENICAS">Artes Esc&eacute;nicas</option>
												  <option value="PLASTICA">Artes Pl&aacute;stica</option>
												  <option value="ARTESANIA">Artesan&iacute;a</option>
										        </select>
											</div>
											<!-- expresion: MUSICA --->
											<div class="form-group label-floating" id ="expresionMusical" style="display: none">
											  <label class="control-label"> Expresi&oacute;n M&uacute;sical </label>
											  <select class="form-control"  type="text" name="expresionCurso1" id="expresionCurso">
										          <option value="" selected>Seleccione ...</option>	
										          <option value="CUATRO"> Cuatro</option>
										          <option value="GUITARRA POPULAR VENEZOLA">Guitarra Popular Venezolana</option>
										          <option value="BANDOLA">Bandola</option>
												  <option value="MANDOLINA">Mandolina</option>
												  <option value="PIANO">Piano</option>
												  <option value="PERCUSION AFRO VENEZOLANA">Percusi&oacute;n Afro Venezolana</option>
												  <option value="PERCUSION LATINA">Percusi&oacute;n Latina</option>
												  <option value="CANTO">Canto Popupal</option>
												  <option value="MARACAS">Maracas</option>
										        </select>
											</div>
											<!-- expresion: CINEMATOGRAFIA--->
											<div class="form-group label-floating" id ="expresionCine" style="display: none">
											  <label class="control-label"> Expresi&oacute;n Cinematograf&iacute;a </label>
											  <select class="form-control"  type="text" name="expresionCurso2" id="expresionCurso">
										          <option value="" selected>Seleccione ...</option>	
										          <option value="HISTORIA"> Historia</option>
										          <option value="DIRECCION">Direcci&oacute;n</option>
										          <option value="APRECIACION CINEMATOGRAFICA">Apreciaci&oacute;n Cinematograf&iacute;ca</option>
												  
										        </select>
											</div>
											<!-- expresion: ARTES ESCENICAS--->
											<div class="form-group label-floating" id ="expresionArtesEsc" style="display: none">
											  <label class="control-label"> Expresi&oacute;n Artes Esc&eacute;nicas </label>
											  <select class="form-control"  type="text" name="expresionCurso3" id="expresionCurso">
										          <option value="" selected>Seleccione ...</option>	
										          <option value="DANZA CONTEMPORANEA">Danza Contempor&aacute;nea</option>
										          <option value="DANZA TRADICIONAL">Danza Tradicional</option>
										          <option value="TEATRO">Teatro</option>
												  <option value="CAPOERIA">Capoeria</option>
												  <option value="ACROBACIA">Acrobacia</option>
										        </select>
											</div>
											<!-- expresion: ARTES PLASTICA--->
											<div class="form-group label-floating" id ="expresionPlastica" style="display: none">
											  <label class="control-label"> Expresi&oacute;n Artes Pl&aacute;stica </label>
											  <select class="form-control"  type="text" name="expresionCurso4" id="expresionCurso">
										          <option value="" selected>Seleccione ...</option>	
										          <option value="DIBUJO Y PINTURA">Dibujo y Pintura</option>
										          <option value="CERAMICA ESCULTURAL">Cer&aacute;mica Escultural</option>
										     </select>
											</div>
											<!-- expresion: ARTESANIA--->
											<div class="form-group label-floating" id ="expresionArtesania" style="display: none">
											  <label class="control-label"> Expresi&oacute;n Artesan&iacute;a </label>
											  <select class="form-control"  type="text" name="expresionCurso5" id="expresionCurso">
										          <option value="" selected>Seleccione ...</option>	
										          <option value="ELABORACION DE CUATRO">Elaboraci&oacute;n de Cuatro</option>
										          <option value="LUTHERIA">Lutheria</option>
										          
										        </select>
											</div>
											<!------->
											<div class="form-group label-floating">
											  <label class="control-label"> Nivel del Curso </label>
											  <select class="form-control"  type="text" name="nivel" id="nivel">
										          <option value="" selected>Seleccione ...</option>	
										          <option value="I">Nivel 1</option>
												  <option value="II">Nivel 2</option>
												  <option value="II">Nivel 3</option>
										         </select>
											</div>
											<!--------->
											<div class="form-group label-floating">
											  <label class="control-label"> Turno </label>
											  <select class="form-control"  type="text" name="turno" id="turno">
										          <option value="" selected>Seleccione ...</option>	
										          <option value="MANANA">Ma&ntilde;ana </option>
										          <option value="TARDE">Tarde</option>
										      </select>
											</div><div class="form-group label-floating">
											  <label class="control-label"> D&iacute;as </label>
											  <input type="checkbox" name="dia1" value="Lunes">Lunes<br>
											  <input type="checkbox" name="dia2" value="Martes">Martes<br>
											  <input type="checkbox" name="dia3" value="Miercoles">Miercoles<br>
											  <input type="checkbox" name="dia4" value="Jueves">Jueves<br>
											  <input type="checkbox" name="dia5" value="Viernes">Viernes <br>
											</div>
											<div class="form-group label-floating">
											  <label class="control-label"> Hora de Entrada </label>
											  <input class="form-control"  type="time" name="hoentrada"  id="hoentrada" >
											  AM<input type="radio" name="amopm" value="AM">
											  PM<input type="radio" name="amopm" value="PM">
											</div>
											
											<div class="form-group label-floating">
											  <label class="control-label"> Hora de Salida </label>
											  <input class="form-control"  type="time" name="hosalida"  id="hosalida" >
											  AM<input type="radio" name="amopm1" value="AM">
											  PM<input type="radio" name="amopm1" value="PM">
											</div>
											<!--------->
											<div class="form-group label-floating">
											  <label class="control-label"> Salon </label>
											  <select class="form-control"  type="text" name="salon" id="salon">
										          <option value="" selected>Seleccione ...</option>	
										         <?php
												include_once("control/connect_db.php");
												$sql="SELECT idsalon, codigo FROM salon WHERE estatus='DISPONIBLE'";
												$resultado = mysql_query($sql);
												$num=mysql_num_rows($resultado);
												while($result = mysql_fetch_array($resultado)){
												$codigo=$result["codigo"];
												$id=$result["idsalon"];
												echo"<option value=".$id.">".$codigo."</option>";
												$num++;}
											 ?>
										        </select>
											</div>
											<div class="form-group label-floating">
											  <label class="control-label"> Profesor </label>
											  <select class="form-control"  type="text" name="profesor" id="profesor">
										          <option value="" selected>Seleccione ...</option>	
										         <?php
												include_once("control/connect_db.php");
												$sql="SELECT usuario.cedula, usuario.nombre, usuario.apellido, profesor.idprofesor 
													  FROM usuario, profesor 
													  WHERE profesor.cedulapersona = usuario.cedula AND usuario.tipo_persona='PROFESOR'";
												$resultado = mysql_query($sql);
												$num=mysql_num_rows($resultado);
												while($result = mysql_fetch_array($resultado)){
												$cedula=$result["cedula"];
												$nombre=$result["nombre"];
												$apellido=$result["apellido"];
												$idprofesor=$result["idprofesor"];
												echo"<option value=".$idprofesor.">".$nombre." ".$apellido."</option>";
												$num++;}
											 ?>
										        </select>
											</div>
											
										    <p class="text-center">
										    	<button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> REGISTRAR </button>
										    </p>
									    </form>
									</div>
								</div>
							</div>
						</div>
					  	<div class="tab-pane fade" id="list">
							
							  <table align="center" border="0" id="tablaVerCursos" width="1000" cellpadding="1"style=" background: #CCCCCC;">
								 <thead>
									<tr>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Cantidad</strong></font></td>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>N&uacute;cleo</strong></font></td>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Expresion</strong></font></td>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Turno</strong></font></td>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>D&iacute;a</strong></font></td>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Hora Entrada</strong></font></td>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Hora Salida</strong></font></td>
									
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Salon</strong></font></td>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Profesor</strong></font></td>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Modificar</strong></font></td>
									<td style="background-color: #E8F5F9"><font color='#000000'><strong>Eliminar</strong></font></td>
									</tr>
								</thead>
									<tbody>
											<?php
    
										include_once("control/consultarCurso.php");
										//include_once("../controlador/cambioformatofecha.php");
													if ($result){  
													$i=1;
														 while ($values = mysql_fetch_array($result)){
												    /// sql para traer el codigo del salon
													$sqlSalon=mysql_query("SELECT codigo FROM salon WHERE idsalon={$values["idsalon"]}");	  
													$registro = mysql_fetch_array($sqlSalon);
													$codigo = $registro["codigo"];	
													/// sql para traer el nombre del profesor	 
													//$sqlProfe=mysql_query("SELECT nombre, apellido FROM profesor WHERE cedula={$values["profesor"]}");	  
													$sqlProfe=mysql_query("SELECT usuario.cedula, usuario.nombre, usuario.apellido, profesor.idprofesor 
													  FROM usuario, profesor 
													  WHERE profesor.cedulapersona = usuario.cedula AND usuario.tipo_persona='PROFESOR' and profesor.idprofesor={$values["idprofesor"]}");	  
													$registroProfe = mysql_fetch_array($sqlProfe);
													$nombre = $registroProfe["nombre"];	
													$apellido = $registroProfe["apellido"];
										echo"
										<tr style='background-color: #FFFFFF'>
										<td>".$i."</td>";
										if($values['nucleo'] == "PLASTICA"){$nucleo="ARTES PLASTICA"; }else{ $nucleo=$values['nucleo'];}
										
										echo"<td>".$nucleo."</td>
										<td>".$values['expresion'].", NIVEL: ".$values['nivel']."</td>
										<td>".$values['turno']."</td>
										<td>".$values['dias']."</td>
										<td>".$values['hoentrada']."</td>
										<td>".$values['hosalida']."</td>
										<td>".$codigo."</td>
										<td>".$nombre." ".$apellido."</td>
										<td><a href=\"javascript:popUp('mostrarModificarCurso.php?id={$values['idcurso']}')\" class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
									    <td><a href='control/eliminarCurso.php?id={$values['idcurso']}' onclick='return confirmar()' class='btn btn-danger btn-raised btn-xs'><i class='zmdi zmdi-delete'></i></a></td>
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