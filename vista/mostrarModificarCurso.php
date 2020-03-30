<?php include_once '../controlador/inicioSesion.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body>
	  <!-- Navbar
    ================================================== -->
<?php

require("control/connect_db.php");
include_once("control/cambioformatofecha.php");
$id = $_GET["id"];
$sql="SELECT * FROM curso WHERE idcurso = $id" ;
$result = mysql_query($sql);	
$registro = mysql_fetch_array($result);
$nucleo = $registro["nucleo"];
$expresion = $registro["expresion"];
$salon = $registro["idsalon"];
$profesor = $registro["idprofesor"];
$estatus = $registro["estatus"];
$nivel = $registro["nivel"];
$turno = $registro["turno"];
$dias = $registro["dias"];
$hoentrada = $registro["hoentrada"];
$hosalida = $registro["hosalida"];
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
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> CURSO <small></small></h1>
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

									    <form class="expose"  enctype="multipart/form-data" action="control/modificarCurso.php" method="post" name="formulario" onsubmit="return validarusuario(this)">
									    	<input type="hidden" name="id" value="<?php echo $id;?>">
											<div class="form-group label-floating">
											  <label class="control-label"> N&uacute;cleo </label>
											  <select class="form-control"  type="text" name="nucleo" id="nucleo" onchange="expresion()">
										          <option value="" selected>Seleccione ...</option>												  
										          
												  <?php
												  if($nucleo == "MUSICA"){
										          echo"<option value='".$nucleo."' selected>".$nucleo."</option>";
												  }
												  if($nucleo == "CINEMATOGRAFIA"){
										          echo"<option value='".$nucleo."' selected>".$nucleo."</option>";
												  }
												  if($nucleo == "ARTES ESCENICAS"){
												  echo"<option value='".$nucleo."' selected>".$nucleo."</option>";
												  }
												  if($nucleo == "PLASTICA"){
										          echo"<option value='".$nucleo."' selected>".$nucleo."</option>";
												 }
												  if($nucleo == "ARTESANIA"){
										          echo"<option value='".$nucleo."' selected>".$nucleo."</option>";
												 }
												  
												  ?>
										        </select>
											</div>
											<!-- expresion: MUSICA --->
											<?php 
											 if($nucleo == "MUSICA"){
											?>
											<div class="form-group label-floating" >
											  <label class="control-label"> Expresi&oacute;n M&uacute;sical </label>
											  <select class="form-control"  type="text" name="expresionCurso1" id="expresionCurso">
										          <option value="">Seleccione ...</option>	
												  <?php
												  switch($expresion ){
													  case 'CUATRO':
													  echo"<option value='CUATRO' selected> Cuatro</option>
														   <option value='GUITARRA POPULAR VENEZOLA'>Guitarra Popular Venezolana</option>
										                   <option value='BANDOLA'>Bandola</option>
												           <option value='MANDOLINA'>Mandolina</option>
												           <option value='PIANO'>Piano</option>
												           <option value='PERCUSION AFRO VENEZOLANA'>Percusi&oacute;n Afro Venezolana</option>
												           <option value='PERCUSION LATINA'>Percusi&oacute;n Latina</option>
												           <option value='CANTO'>Canto</option>
												           <option value='MARACAS'>Maracas</option>";
													  break;
													  case 'GUITARRA POPULAR VENEZOLA':
													  echo"<option value='CUATRO' > Cuatro</option>
														   <option value='GUITARRA POPULAR VENEZOLA' selected>Guitarra Popular Venezolana</option>
										                   <option value='BANDOLA'>Bandola</option>
												           <option value='MANDOLINA'>Mandolina</option>
												           <option value='PIANO'>Piano</option>
												           <option value='PERCUSION AFRO VENEZOLANA'>Percusi&oacute;n Afro Venezolana</option>
												           <option value='PERCUSION LATINA'>Percusi&oacute;n Latina</option>
												           <option value='CANTO'>Canto</option>
												           <option value='MARACAS'>Maracas</option>";
													  break;
													  case 'BANDOLA':
													  echo"<option value='CUATRO' > Cuatro</option>
														   <option value='GUITARRA POPULAR VENEZOLA'>Guitarra Popular Venezolana</option>
										                   <option value='BANDOLA' selected>Bandola</option>
												           <option value='MANDOLINA'>Mandolina</option>
												           <option value='PIANO'>Piano</option>
												           <option value='PERCUSION AFRO VENEZOLANA'>Percusi&oacute;n Afro Venezolana</option>
												           <option value='PERCUSION LATINA'>Percusi&oacute;n Latina</option>
												           <option value='CANTO'>Canto</option>
												           <option value='MARACAS'>Maracas</option>";
													  break;
													  case 'MANDOLINA':
													  echo"<option value='CUATRO' > Cuatro</option>
														   <option value='GUITARRA POPULAR VENEZOLA'>Guitarra Popular Venezolana</option>
										                   <option value='BANDOLA'>Bandola</option>
												           <option value='MANDOLINA' selected>Mandolina</option>
												           <option value='PIANO'>Piano</option>
												           <option value='PERCUSION AFRO VENEZOLANA'>Percusi&oacute;n Afro Venezolana</option>
												           <option value='PERCUSION LATINA'>Percusi&oacute;n Latina</option>
												           <option value='CANTO'>Canto</option>
												           <option value='MARACAS'>Maracas</option>";
													  break;
													  case 'PIANO':
													  echo"<option value='CUATRO' > Cuatro</option>
														   <option value='GUITARRA POPULAR VENEZOLA'>Guitarra Popular Venezolana</option>
										                   <option value='BANDOLA'>Bandola</option>
												           <option value='MANDOLINA'>Mandolina</option>
												           <option value='PIANO' selected>Piano</option>
												           <option value='PERCUSION AFRO VENEZOLANA'>Percusi&oacute;n Afro Venezolana</option>
												           <option value='PERCUSION LATINA'>Percusi&oacute;n Latina</option>
												           <option value='CANTO'>Canto</option>
												           <option value='MARACAS'>Maracas</option>";
													  break;
													  case 'PERCUSION AFRO VENEZOLANA':
													  echo"<option value='CUATRO' > Cuatro</option>
														   <option value='GUITARRA POPULAR VENEZOLA'>Guitarra Popular Venezolana</option>
										                   <option value='BANDOLA'>Bandola</option>
												           <option value='MANDOLINA'>Mandolina</option>
												           <option value='PIANO'>Piano</option>
												           <option value='PERCUSION AFRO VENEZOLANA' selected>Percusi&oacute;n Afro Venezolana</option>
												           <option value='PERCUSION LATINA'>Percusi&oacute;n Latina</option>
												           <option value='CANTO'>Canto</option>
												           <option value='MARACAS'>Maracas</option>";
													  break;
													  case 'PERCUSION LATINA':
													  echo"<option value='CUATRO' > Cuatro</option>
														   <option value='GUITARRA POPULAR VENEZOLA'>Guitarra Popular Venezolana</option>
										                   <option value='BANDOLA'>Bandola</option>
												           <option value='MANDOLINA'>Mandolina</option>
												           <option value='PIANO'>Piano</option>
												           <option value='PERCUSION AFRO VENEZOLANA'>Percusi&oacute;n Afro Venezolana</option>
												           <option value='PERCUSION LATINA' selected>Percusi&oacute;n Latina</option>
												           <option value='CANTO'>Canto</option>
												           <option value='MARACAS'>Maracas</option>";
													  break;
													  case 'CANTO':
													  echo"<option value='CUATRO' > Cuatro</option>
														   <option value='GUITARRA POPULAR VENEZOLA'>Guitarra Popular Venezolana</option>
										                   <option value='BANDOLA'>Bandola</option>
												           <option value='MANDOLINA'>Mandolina</option>
												           <option value='PIANO'>Piano</option>
												           <option value='PERCUSION AFRO VENEZOLANA'>Percusi&oacute;n Afro Venezolana</option>
												           <option value='PERCUSION LATINA'>Percusi&oacute;n Latina</option>
												           <option value='CANTO' selected>Canto</option>
												           <option value='MARACAS'>Maracas</option>";
													  break;
													  case 'MARACAS':
													  echo"<option value='CUATRO' > Cuatro</option>
														   <option value='GUITARRA POPULAR VENEZOLA'>Guitarra Popular Venezolana</option>
										                   <option value='BANDOLA'>Bandola</option>
												           <option value='MANDOLINA'>Mandolina</option>
												           <option value='PIANO'>Piano</option>
												           <option value='PERCUSION AFRO VENEZOLANA'>Percusi&oacute;n Afro Venezolana</option>
												           <option value='PERCUSION LATINA'>Percusi&oacute;n Latina</option>
												           <option value='CANTO' >Canto</option>
												           <option value='MARACAS' selected>Maracas</option>";
													  break;
												  }
												 ?>
										        </select>
											</div>
											<?php 
											 }
											?>
											<!-- expresion: CINEMATOGRAFIA--->
											<?php 
											 if($nucleo == "CINEMATOGRAFIA"){
											?>
											<div class="form-group label-floating">
											  <label class="control-label"> Expresi&oacute;n Cinematograf&iacute;a </label>
											  <select class="form-control"  type="text" name="expresionCurso2" id="expresionCurso">
										          <option value="">Seleccione ...</option>
												   <?php
												  switch($expresion ){
													  case 'HISTORIA':
													  echo "<option value='HISTORIA' selected> Historia</option>
															<option value='DIRECCION'>Direcci&oacute;n</option>
															<option value='APRECIACION CINEMATOGRAFICA'>Apreciacion Cinematograf&iacute;ca</option>";
													  break;
													  case 'DIRECCION':
													  echo "<option value='HISTORIA' > Historia</option>
															<option value='DIRECCION' selected>Direcci&oacute;n</option>
															<option value='APRECIACION CINEMATOGRAFICA'>Apreciacion Cinematograf&iacute;ca</option>";
													  break;
													  case 'APRECIACION CINEMATOGRAFICA':
													  echo "<option value='HISTORIA' > Historia</option>
															<option value='DIRECCION'>Direcci&oacute;n</option>
															<option value='APRECIACION CINEMATOGRAFICA' selected>Apreciacion Cinematograf&iacute;ca</option>";
													  break;
												  }
										          ?>
												  
										        </select>
											</div>
											<?php 
											 }
											?>
											<!-- expresion: ARTES ESCENICAS--->
											<?php 
											 if($nucleo == "ARTES ESCENICAS"){
											?>
											<div class="form-group label-floating">
											  <label class="control-label"> Expresi&oacute;n Artes Esc&eacute;nicas </label>
											  <select class="form-control"  type="text" name="expresionCurso3" id="expresionCurso">
										          <option value="">Seleccione ...</option>	
												  <?php
												  switch($expresion ){
													  case 'DANZA CONTEMPORANEA':
													  echo "<option value='DANZA CONTEMPORANEA' selected>Danza Contempor&aacute;nea</option>
															<option value='DANZA TRADICIONAl'>Danza Tradicional</option>
															<option value='TEATRO'>Tratro</option>
															<option value='CAPOERIA'>Capoeria</option>
															<option value='ACROBACIA'>Acrobacia</option>";
													  break;
													  case 'DANZA TRADICIONAL':
													  echo "<option value='DANZA CONTEMPORANEA' >Danza Contempor&aacute;nea</option>
															<option value='DANZA TRADICIONAL' selected>Danza Tradicional</option>
															<option value='TEATRO'>Tratro</option>
															<option value='CAPOERIA'>Capoeria</option>
															<option value='ACROBACIA'>Acrobacia</option>";
													  break;
													  
													 case 'TEATRO':
													  echo "<option value='DANZA CONTEMPORANEA' >Danza Contempor&aacute;nea</option>
															<option value='DANZA TRADICIONAl'>Danza Tradicional</option>
															<option value='TEATRO' selected>Tratro</option>
															<option value='CAPOERIA'>Capoeria</option>
															<option value='ACROBACIA'>Acrobacia</option>";
													  break;
													  case 'CAPOERIA':
													  echo "<option value='DANZA CONTEMPORANEA' >Danza Contempor&aacute;nea</option>
															<option value='DANZA TRADICIONAl'>Danza Tradicional</option>
															<option value='TEATRO'>Tratro</option>
															<option value='CAPOERIA' selected>Capoeria</option>
															<option value='ACROBACIA'>Acrobacia</option>";
													  break;
													  case 'ACROBACIA':
													  echo "<option value='DANZA CONTEMPORANEA' >Danza Contempor&aacute;nea</option>
															<option value='DANZA TRADICIONAl'>Danza Tradicional</option>
															<option value='TEATRO'>Tratro</option>
															<option value='CAPOERIA'>Capoeria</option>
															<option value='ACROBACIA' selected>Acrobacia</option>";
													  break;
												  
										          }
												  ?>
										        </select>
											</div>
											<?php 
											 }
											?>
											<!-- expresion: PLASTICA--->
											<?php 
											 if($nucleo == "PLASTICA"){
											?>
											<div class="form-group label-floating">
											  <label class="control-label"> Expresi&oacute;n Artes Pl&aacute;stica </label>
											  <select class="form-control"  type="text" name="expresionCurso4" id="expresionCurso">
										         <?php
												  switch($expresion ){
													  case 'DIBUJO Y PINTURA':
													  echo "<option value='DIBUJO Y PINTURA' selected>Dibujo y Pintura</option>
															<option value='CERAMICA ESCULTURAL'>Cer&aacute;mica Escultural</option>";
													  break;
													  case 'CERAMICA ESCULTURAL':
													  echo "<option value='DIBUJO Y PINTURA'>Dibujo y Pintura</option>
															<option value='CERAMICA ESCULTURAL' selected>Cer&aacute;mica Escultural</option>";
													  break;
													}
												  ?>
										     </select>
											</div>
											<?php 
											 }
											?>
											<!-- expresion: ARTESANIA--->
											<?php 
											 if($nucleo == "ARTESANIA"){
											?>
											<div class="form-group label-floating">
											  <label class="control-label"> Expresi&oacute;n Artesan&iacute;a </label>
											  <select class="form-control"  type="text" name="expresionCurso5" id="expresionCurso">
										          <option value="">Seleccione ...</option>	
										          <?php
												  switch($expresion ){
													  case 'ELABORACION DE CUATRO':
													  echo "<option value='ELABORACION DE CUATRO'selected>Elaboraci&oacute;n de Cuatro</option>
															<option value='LUTHERIA'>Lutheria</option>";
													  break;
													  case 'LUTHERIA':
													  echo "<option value='ELABORACION DE CUATRO'>Elaboraci&oacute;n de Cuatro</option>
															<option value='LUTHERIA'selected>Lutheria</option>";
													  break;
													}
												  ?>
										          
										        </select>
											</div>
											<?php 
											 }
											?>
											<!------->
											<div class="form-group label-floating">
											  <label class="control-label"> Nivel del Curso </label>
											  <select class="form-control"  type="text" name="nivel" id="nivel">
										          <option value="" >Seleccione ...</option>	
												   <?php
												  switch($nivel){
													  case 'I':
													  echo " <option value='I' selected>Nivel 1</option>
																<option value='II'>Nivel 2</option>";
													  break;
													  case 'II':
													  echo "<option value='I' >Nivel 1</option>
																<option value='II' selected>Nivel 2</option>";
													  break;
													}
												  ?>
										          
										         </select>
											</div>
											<!--------->
											<div class="form-group label-floating">
											  <label class="control-label"> Turno </label>
											  <select class="form-control"  type="text" name="turno" id="turno">
										          <option value="" >Seleccione ...</option>	
												   <?php
												  switch($turno){
													  case 'MANANA':
													  echo "<option value='MANANA' selected>Ma&ntilde;ana </option>
															<option value='TARDE'>Tarde</option>";
													  break;
													  case 'TARDE':
													  echo "<option value='MANANA' >Ma&ntilde;ana </option>
															<option value='TARDE' selected>Tarde</option>";
													  break;
													}
												  ?>
										          
										      </select>
											</div><div class="form-group label-floating">
											  <label class="control-label"> D&iacute;as </label>
											  <input class="form-control"  type="text" name=""  id="" value="<?php echo $dias;?>" readOnly="readOnly">
											  <input type="checkbox" name="dia1" value="Lunes">Lunes<br>
											  <input type="checkbox" name="dia2" value="Martes">Martes<br>
											  <input type="checkbox" name="dia3" value="Miercoles">Miercoles<br>
											  <input type="checkbox" name="dia4" value="Jueves">Jueves<br>
											  <input type="checkbox" name="dia5" value="Viernes">Viernes <br>
											</div>
											<div class="form-group label-floating">
											  <label class="control-label"> Hora de Entrada </label>
											  <input class="form-control"  type="text" name="hoentrada"  id="hoentrada" value="<?php echo $hoentrada;?>">
											</div>
											
											<div class="form-group label-floating">
											  <label class="control-label"> Hora de Salida </label>
											  <input class="form-control"  type="text" name="hosalida"  id="hosalida" value="<?php echo $hosalida;?>">
											</div>
											<!--------->
											<!------->
											
											<div class="form-group label-floating">
											  <label class="control-label"> Salon </label>
											  <select class="form-control"  type="text" name="salon" id="salon">
										          <option value="none" selected>Seleccione ...</option>	
										         <?php
												include_once("control/connect_db.php");
												$sql="SELECT idsalon, codigo FROM salon WHERE estatus='DISPONIBLE'";
												$resultado = mysql_query($sql);
												$num=mysql_num_rows($resultado);
												while($result = mysql_fetch_array($resultado)){
												$codigo=$result["codigo"];
												$id=$result["idsalon"];
												if($salon==$id){echo"<option value=".$id." selected>".$codigo."</option>";}
												else{echo"<option value=".$id.">".$codigo."</option>";}
												$num++;}
											 ?>
										        </select>
											</div>
											<div class="form-group label-floating">
											  <label class="control-label"> Profesor </label>
											  <select class="form-control"  type="text" name="profesor" id="profesor">
										          <option value="none" selected>Seleccione ...</option>	
										         <?php
												include_once("control/connect_db.php");
												$sql="SELECT usuario.cedula, usuario.nombre, usuario.apellido, profesor.idprofesor 
													  FROM usuario, profesor
													  WHERE profesor.cedulapersona = usuario.cedula AND usuario.tipo_persona='PROFESOR'";
												$resultado = mysql_query($sql);
												$num=mysql_num_rows($resultado);
												while($result = mysql_fetch_array($resultado)){
												$idprofesor=$result["idprofesor"];
												$nombre=$result["nombre"];
												$apellido=$result["apellido"];
												if($profesor==$idprofesor){echo"<option value=".$idprofesor." selected>".$nombre." ".$apellido."</option>";}
												else{echo"<option value=".$idprofesor.">".$nombre." ".$apellido."</option>";}
												
												$num++;}
											 ?>
										        </select>
											</div>
											<div class="form-group label-floating">
											  <label class="control-label"> Estatus </label>
											  <select class="form-control"  type="text" name="estatus" id="estatus">
										          <option value="none" selected>Seleccione ...</option>	
										         <?php
												 switch ($estatus){
													 case 'VACIO':
													 echo"<option value=".$estatus." selected>".$estatus."</option>";
													 echo"<option value='LLENO' >LLENO</option>";
													 break;
													 case 'LLENO':
													 echo"<option value=".$estatus." selected>".$estatus."</option>";
													 echo"<option value='VACIO' >VACIO</option>";
													 break;
													 default:
													 echo"<option value='VACIO' >VACIO</option>";
													 echo"<option value='LLENO' >LLENO</option>";
													 break;
												 }
												
												
											 ?>
										        </select>
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