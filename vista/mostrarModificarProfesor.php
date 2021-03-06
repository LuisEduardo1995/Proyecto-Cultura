<?php include_once '../controlador/inicioSesion.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
	<script src="js/validarprofe.js"></script>
</head>
<body>
	  <!-- Navbar
    ================================================== -->
<?php

require("control/connect_db.php");
include_once("control/cambioformatofecha.php");
$cedula = $_GET["cedula"];
$sql="SELECT * FROM profesor WHERE cedula = $cedula" ;
$result = mysql_query($sql);	
$registro = mysql_fetch_array($result);
$nombre = $registro["nombre"];
$apellido = $registro["apellido"];
$cedula = $registro["cedula"];
$correo = $registro["correo"];
$sexo = $registro["sexo"];
$edad=$registro["edad"];
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
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Profesor <small></small></h1>
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

									    <form class="expose"  enctype="multipart/form-data" action="control/modificarProfesor.php" method="post" name="formulario" onsubmit="return validarprofe(this)">
									    	<input class="form-control" onkeypress="return isNumberKey(event)" type="hidden" name="cedula" id="cedula" value="<?php echo $cedula;?>">
									    	<div class="form-group label-floating">
											  <label class="control-label"> Nombre </label>
											  <input class="form-control" onkeypress="return soloLetras(event)" type="text" name="nombre"  id="nombre" value="<?php echo $nombre;?>" >
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
										        <label class="control-label"> Sexo </label>
										        <select class="form-control" type="text" name="sexo" id="sexo">
										          <option value="none" selected>Seleccione ...</option>
												  <?php
												  if($sexo == "HOMBRE"){
										          echo"<option value=".$sexo." selected>".$sexo."</option>";
												  echo"<option value='MUJER'>MUJER</option>";
												  }
												  if($sexo == "MUJER"){
										          echo"<option value=".$sexo." selected>".$sexo."</option>";
												  echo"<option value='HOMBRE'>HOMBRE</option>";
												  }
												  ?>
										        </select>
										    </div>

										    <div class="form-group">
											  <label class="control-label"> Edad </label>
											  <input class="form-control" type="text" name="edad" id="edad" value="<?php echo $edad;?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label"> Estudio </label>
											  <input class="form-control" onkeypress="return soloLetras(event)" type="text" name="estudio" id="estudio" value="<?php echo $estudio;?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label"> Especialidad </label>
											  <input class="form-control" onkeypress="return soloLetras(event)" type="text" name="especialidad" id="especialidad" value="<?php echo $especialidad;?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label"> Curso que Dicta </label>
											  <input class="form-control" onkeypress="return soloLetras(event)" type="text" name="curso" id="curso" value="<?php echo $curso;?>">
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