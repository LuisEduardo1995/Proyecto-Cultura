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
include_once("control/cambioformatofecha.php");
$id = $_GET["id"];
$sql="SELECT * FROM evento WHERE idevento = $id" ;
$result = mysql_query($sql);	
$registro = mysql_fetch_array($result);
$nombre = $registro["nombre"];
$capacidad = $registro["capacidad"];
$tipoevento = $registro["tipoevento"];
$estatus = $registro["estatus"];
$feinicio = $registro["fechainicio"];
$fecierre = $registro["fechacierre"];
$hoinicio = $registro["hoinicio"];
//$edad=dma_a_amd($registro["edad"]);
$hocierre=$registro["hocierre"];
$lugarevento=$registro["lugarevento"];
$responsableevento=$registro["responsableevento"];
$invitados=$registro["invitados"];

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
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> EVENTO <small></small></h1>
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
									    <form class="expose"  enctype="multipart/form-data" action="control/modificarEvento.php" method="post" name="formulario" onsubmit="return validarusuario(this)">
									    	<input class="form-control"  type="hidden" name="id" id="id" value="<?php echo $id;?>">
									    	<div class="form-group label-floating">
											  <label class="control-label"> Tipo Evento </label>
											  <select class="form-control" type="text" name="tipoEvento" id="tipoEvento">
												  <option value="none" selected>Seleccione ...</option>
												  <?php
												  if($tipoevento == "NORMAL"){
										          echo"<option value=".$tipoevento." selected>".$tipoevento."</option>";
												  echo"<option value='ESPECIAL'>ESPECIAL</option>";
												  }
												  if($tipoevento == "ESPECIAL"){
										          echo"<option value=".$tipoevento." selected>".$tipoevento."</option>";
												  echo"<option value='NORMAL'>NORMAL</option>";
												  }
												  ?>
										        </select>
											</div>
											<div class="form-group label-floating" id="capacidad" ">
											  <label class="control-label"> Capacidad </label>
											  <input class="form-control"  type="text" name="capacidad"  id="capacidad" value="<?php echo $capacidad;?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label"> Nombre </label>
											  <input class="form-control"onkeypress="return soloLetras(event)" type="text" name="nombre"  id="nombre" value="<?php echo $nombre;?>" >
											</div>
											<div class="form-group label-floating">
											  <label class="control-label"> Estatus </label>
											  <select class="form-control" type="text" name="estatus" id="estatus">
												  <option value="none" selected>Seleccione ...</option>
												  <?php
												  if($estatus == "ACTIVO"){
										          echo"<option value=".$estatus." selected>".$estatus."</option>";
												  echo"<option value='INACTIVO'>INACTIVO</option>";
												  }
												  if($estatus == "INACTIVO"){
										          echo"<option value=".$estatus." selected>".$estatus."</option>";
												  echo"<option value='ACTIVO'>ACTIVO</option>";
												  }
												  ?>
										        </select>
											</div>
											<!----->
											<div class="form-group">
											  <label class="control-label"> Lugar del Evento </label>
											  <input class="form-control"  type="text" name="lugarevento"  id="lugarevento" value="<?php echo $lugarevento;?>">
											</div>
											<div class="form-group">
											  <label class="control-label"> Responsable del Evento </label>
											  <input class="form-control"  type="text" name="responsableevento"  id="responsableevento" value="<?php echo $responsableevento;?>">
											</div>
											<div class="form-group">
											  <label class="control-label"> Invitados al evento </label>
											  <input class="form-control"  type="text" name="invitados"  id="invitados" value="<?php echo $invitados;?>">
											</div>
											<!----->
											<div class="form-group label-floating">
											  <label class="control-label"> Fecha de Inicio </label>
											  <input class="form-control"  type="text" name="feinicio" id="feinicio" value="<?php echo $feinicio;?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label"> Fecha de Cierre </label>
											  <input class="form-control"  type="text" name="fecierre" id="fecierre" value="<?php echo $fecierre;?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label"> Horia de Inicio </label>
											  <input class="form-control"  type="text" name="hoinicio" id="hoinicio" value="<?php echo $hoinicio;?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label"> Hora de cierre </label>
											  <input class="form-control"  type="text" name="hocierre" id="hocierre" value="<?php echo $hocierre;?>">
											</div>

											

										   
											
										    <p class="text-center">
										    	<button type="submit" name="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> MODIFICAR </button>
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