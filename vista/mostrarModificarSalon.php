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
$sql="SELECT * FROM salon WHERE idsalon  = $id" ;
$result = mysql_query($sql);	
$registro = mysql_fetch_array($result);
$codigo = $registro["codigo"];
$estatus = $registro["estatus"];
$capacidad = $registro["capacidad"];


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
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> SALON <small></small></h1>
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

									    <form class="expose"  enctype="multipart/form-data" action="control/modificarSalon.php" method="post" name="formulario" onsubmit="return validarusuario(this)">
									    	<input class="form-control"  type="hidden" name="id" id="id" value="<?php echo $id;?>">
									    	<div class="form-group label-floating">
											  <label class="control-label"> Codigo </label>
											  <input class="form-control"  type="text" name="codigo"  id="codigo" value="<?php echo $codigo;?>" >
											</div>
											<div class="form-group">
										        <label class="control-label"> Estatus </label>
										        <select class="form-control" type="text" name="estatus" id="estatus">
										          <option value="none" selected>Seleccione ...</option>
												  <?php
												  if($estatus == "DISPONIBLE"){
										          echo"<option value=".$estatus." selected>".$estatus."</option>";
												  echo"<option value='INDISPONIBLE'>NO DISPONIBLE</option>";
												  }
												  if($estatus == "INDISPONIBLE"){
										          echo"<option value=".$estatus." selected>".$estatus."</option>";
												  echo"<option value='DISPONIBLE'>DISPONIBLE</option>";
												  }
												  
												  ?>
										        </select>
										    </div>
											
											<div class="form-group label-floating">
											  <label class="control-label"> Capacidad </label>
											  <input class="form-control"  onkeypress="return isNumberKey(event)" type="text" name="capacidad" id="capacidad" value="<?php echo $capacidad;?>">
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