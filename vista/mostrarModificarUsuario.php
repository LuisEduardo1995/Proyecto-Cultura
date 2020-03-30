<?php include_once '../controlador/inicioSesion.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
	<script src="js/validarasistente.js"></script>
</head>
<body>
	  <!-- Navbar
    ================================================== -->
<?php

require("control/connect_db.php");
$cedula = $_GET["cedula"];
$tipopersona = $_GET["tipo_persona"];
switch ($tipopersona){
	case 'ADMINISTRADOR':
	$sql="SELECT * FROM usuario WHERE cedula = $cedula" ;
	break;
	case 'ASISTENTE':
	$sql="SELECT * FROM usuario WHERE cedula = $cedula" ;
	break;
	case 'PROFESOR':
	$sql="SELECT usuario.*,profesor.* FROM usuario, profesor WHERE profesor.cedulapersona = usuario.cedula and usuario.cedula = $cedula" ;
	break;
	case 'ESTUDIANTES':
	$sql="SELECT usuario.*,estudiante.* FROM usuario, estudiante WHERE estudiante.cedulapersona = usuario.cedula and usuario.cedula = $cedula" ;
	break;
}

$result = mysql_query($sql);	
$registro = mysql_fetch_array($result);
$nombre = $registro["nombre"];
$apellido = $registro["apellido"];
$cedula = $registro["cedula"];
$correo = $registro["correo"];
$edad=$registro["edad"];
$tipo_usuario = $registro["tipo_usuario"];
$telefono = $registro["telefono"];
//estudiante
$participante = $registro["participante"];
$integrante = $registro["integrante"];
//profesor
$estudio = $registro["estudio"];
$especialidad = $registro["especialidad"];
$curso = $registro["curso"];
?>
<!-- ======================================================================================================================== -->




	<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				
				
			</ul>
		</nav>


		<!-- Content page -->


		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Usuario<small></small></h1>
			</div>
			<p class="lead">     </p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#new" data-toggle="tab"></a></li>
					  	<li><a href="#list" data-toggle="tab"></a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">

									<div class="col-xs-12 col-md-10 col-md-offset-1">

									    <form class="expose"  enctype="multipart/form-data" action="control/modificarUsuario.php" method="post" name="formulario" onsubmit="return validarusuario(this)">
									    	<input class="form-control" onkeypress="return isNumberKey(event)" type="hidden" name="cedula" id="cedula" value="<?php echo $cedula;?>">
									    	<input class="form-control" onkeypress="return isNumberKey(event)" type="hidden" name="tipopersona" id="tipopersona" value="<?php echo $tipopersona;?>">
											<div class="form-group label-floating">
											  <label class="control-label"> Nombre </label>
											  <input class="form-control"onkeypress="return soloLetras(event)" type="text" name="nombre"  id="nombre" value="<?php echo $nombre;?>" >
											</div>
											<div class="form-group label-floating">
											  <label class="control-label"> Apellido </label>
											  <input class="form-control" onkeypress="return soloLetras(event)" type="text" name="apellido" id="apellido" value="<?php echo $apellido;?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label"> Correo </label>
											  <input class="form-control" onkeypress="validarcorreo(correo)" type="text" name="correo" id="correo" value="<?php echo $correo;?>">
											</div>
											<div class="form-group">
											  <label class="control-label"> Edad </label>
											  <input class="form-control" type="text" name="edad" id="edad" value="<?php echo $edad;?>">
											</div>
											<div class="form-group">
											  <label class="control-label"> Telefono </label>
											  <input class="form-control" type="text" name="telefono" id="telefono" value="<?php echo $telefono;?>">
											</div>
											<div class="form-group">
										        <label class="control-label"> Tipo de Usuario </label>
										        <select class="form-control"  type="text" name="tipo_usuario" id="tipo_usuario" >
										        <option value="none" selected>Seleccione ...</option>	
										        <?php
												  if($tipo_usuario == "ADMINISTRADOR"){
										          echo"<option value=ADMINISTRADOR selected>ADMINISTRADOR</option>";
												  echo"<option value='ASISTENTE'>ASISTENTE</option>";
												  echo"<option value='PROFESOR'>PROFESOR</option>";
												  echo"<option value='ESTUDIANTES'>ESTUDIANTES</option>";
												  }
												  if($tipo_usuario == "ASISTENTE"){
										          echo"<option value=ADMINISTRADOR>ADMINISTRADOR</option>";
												  echo"<option value='ASISTENTE' selected>ASISTENTE</option>";
												  echo"<option value='PROFESOR'>PROFESOR</option>";
												  echo"<option value='ESTUDIANTES'>ESTUDIANTES</option>";
												  }
												  if($tipo_usuario == "PROFESOR"){
										          echo"<option value=ADMINISTRADOR>ADMINISTRADOR</option>";
												  echo"<option value='ASISTENTE'>ASISTENTE</option>";
												  echo"<option value='PROFESOR' selected>PROFESOR</option>";
												  echo"<option value='ESTUDIANTES'>ESTUDIANTES</option>";
												  }
												  if($tipo_usuario == "ESTUDIANTES"){
										          echo"<option value=ADMINISTRADOR >ADMINISTRADOR</option>";
												  echo"<option value='ASISTENTE'>ASISTENTE</option>";
												  echo"<option value='PROFESOR'>PROFESOR</option>";
												  echo"<option value='ESTUDIANTES' selected>ESTUDIANTES</option>";
												  }
												  ?>
										        </select>
										    </div>
											<?php 
											switch ($tipopersona){
												case 'PROFESOR':?>
												  <div class="form-group label-floating">
												  <label class="control-label"> Nivel Academico </label>
													<select class="form-control"  type="text" name="estudio" id="estudio" >
													<option value="" >Seleccione ...</option>
													<?php  if($estudio == "BACHILLER"){?>
															<option value="BACHILLER" selected> BACHILLER </option>
															<option value="TSU" > TSU </option>
															<option value="LICENCIADO" > LICENCIADO </option>
															<option value="POST GRADO" > POST GRADO </option>
															<option value="MAGISTER" > MAGISTER </option>
															<option value="DOCTORADO" > DOCTORADO </option>
													<?php }
															if($estudio == "TSU"){?>
															<option value="BACHILLER" > BACHILLER </option>
															<option value="TSU" selected> TSU </option>
															<option value="LICENCIADO" > LICENCIADO </option>
															<option value="POST GRADO" > POST GRADO </option>
															<option value="MAGISTER" > MAGISTER </option>
															<option value="DOCTORADO" > DOCTORADO </option>
													  
													<?php  }
															if($estudio == "LICENCIADO"){?>
															<option value="BACHILLER" > BACHILLER </option>
															<option value="TSU" > TSU </option>
															<option value="LICENCIADO" selected> LICENCIADO </option>
															<option value="POST GRADO" > POST GRADO </option>
															<option value="MAGISTER" > MAGISTER </option>
															<option value="DOCTORADO" > DOCTORADO </option>
													  
													<?php  }
														    if($estudio == "POST GRADO"){?>
															<option value="BACHILLER" > BACHILLER </option>
															<option value="TSU" > TSU </option>
															<option value="LICENCIADO" > LICENCIADO </option>
															<option value="POST GRADO" selected> POST GRADO </option>
															<option value="MAGISTER" > MAGISTER </option>
															<option value="DOCTORADO" > DOCTORADO </option>
													  
													<?php  }
															if($estudio == "MAGISTER"){?>
															<option value="BACHILLER" > BACHILLER </option>
															<option value="TSU" > TSU </option>
															<option value="LICENCIADO" > LICENCIADO </option>
															<option value="POST GRADO" > POST GRADO </option>
															<option value="MAGISTER" selected> MAGISTER </option>
															<option value="DOCTORADO" > DOCTORADO </option>
													  
													<?php  }
															if($estudio == "DOCTORADO"){?>
															<option value="BACHILLER" > BACHILLER </option>
															<option value="TSU" > TSU </option>
															<option value="LICENCIADO" > LICENCIADO </option>
															<option value="POST GRADO" > POST GRADO </option>
															<option value="MAGISTER" > MAGISTER </option>
															<option value="DOCTORADO" selected> DOCTORADO </option>
													  
													<?php  }
													
													?>
													
													</select>
												</div>
												  
												
												<div class="form-group label-floating">
												  <label class="control-label"> Especialidad </label>
												  <input class="form-control" onkeypress="return soloLetras(event)" type="text" name="especialidad" id="especialidad" value="<?php echo $especialidad;?>">
												</div>
												<div class="form-group label-floating">
												  <label class="control-label"> Curso </label>
												  <input class="form-control" onkeypress="return soloLetras(event)" type="text" name="curso" id="curso" value="<?php echo $curso;?>">
												</div>
											<?php break;
												case 'ESTUDIANTES':?>
												<div class="form-group">
													<label class="control-label"> Participante </label>
													<select class="form-control"  type="text" name="participante" id="participante" >
													<option value="none" >Seleccione ...</option>
													<?php  if($participante == "SI"){
													  echo"<option value='SI' selected>SI</option>";
													  echo"<option value='NO'>NO</option>";
													}
													  if($participante == "NO"){
													  echo"<option value='SI' >SI</option>";
													  echo"<option value='NO' selected>NO</option>";
													 }
											        ?>
													</select>
												</div>
												<div class="form-group">
													<label class="control-label"> Integrante </label>
													<select class="form-control"  type="text" name="integrante" id="integrante" >
													<?php  if($integrante == "SI"){
													  echo"<option value='SI' selected>SI</option>";
													  echo"<option value='NO'>NO</option>";
													}
													  if($integrante == "NO"){
													  echo"<option value='SI' >SI</option>";
													  echo"<option value='NO' selected>NO</option>";
													 }
											        ?>
													</select>
												</div>
											<?php	break;
													}
											?>
											<div class="form-group">
										      <label class="control-label"> Foto </label>
										      <div>
										        <input type="text" readonly="" class="form-control" placeholder="Browse...">
										        <input type="file"  name="imagen" id="imagen">
										      </div>
										    </div>
										    <p class="text-center">
										    	<button type="submit" name="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Modificar </button>
										    </p>
									    </form>

									</div>



								</div>
							</div>
						</div>
						
	<!-- Notification
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