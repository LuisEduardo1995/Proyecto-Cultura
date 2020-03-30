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
<!-- ======================================================================================================================== -->

	<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				
				
			</ul>
		</nav>


		<!-- Content page -->


		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Estudiantes del curso<small></small></h1>
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
<?php
require("control/connect_db.php");
echo$tipo=$_GET["tipo"];
$idgrupo = $_GET["idgrupo"];
$idcurso = $_GET["idcurso"];
$idevento = $_GET["idevento"];
$cedulaprofe = $_GET["cedulaprofe"];
$idsalon = $_GET["idsalon"];
//DATOS DEL PROFESOR////////////////////////////////////////////////////////////////////////////////////////////
$sqlProfe=mysql_query("SELECT usuario.nombre, usuario.apellido, usuario.cedula FROM usuario, profesor
						WHERE usuario.cedula = profesor.cedulapersona and  profesor.idprofesor=$cedulaprofe");	  
$registroProfe = mysql_fetch_array($sqlProfe);
$nombreProfe = $registroProfe["nombre"];	
$apellidoProfe = $registroProfe["apellido"];
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
switch($tipo){
case "grupo":
	//DATOS DEL CURSO/////////////////////////////////////////////////////////////////////////////////////////////
	$result = mysql_query("SELECT * FROM grupo WHERE idgrupo = $idgrupo");	
	$registro = mysql_fetch_array($result);
	$nucleo = $registro["nucleo"];
	$expresion = $registro["expresion"];
	$nombreLista=$expresion."_NUCLEO:".$nucleo;
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//DATOS DE LOS ALUMNOS/////////////////////////////////////////////////////////////////////////////////////////////
	$sql="SELECT usuario.* FROM usuario,estudiante, participantegrupo
		  WHERE usuario.cedula = estudiante.cedulapersona and estudiante.idestudiante = participantegrupo.idestudiante and participantegrupo.idgrupo=$idgrupo";
	$result = mysql_query($sql); 
	$tabla = "";
	$tabla.= "<table width='800' height='74' border='1'>";

	$tabla.="
	<thead>
	<tr>
	<td colspan='7' align='center' bgcolor='#04B4AE'>PARTICIPANTE</td>
	</tr>
	<tr>
	<td>Numero</td>
	<td>Cedula</td>
	<td>Nombre</td>
	<td>Apellido</td>
	<td>Telefono</td>
	<td>Eliminar del Grupo</td>
	</tr>
	</thead>
	<tbody>
	<tr>";

	if ($result){  
	$j=1;
	while ($values = mysql_fetch_array($result)){
	 $tabla.="
	<tr>
	<td>".$j."</td>
	<td>".$values['cedula']."</td>
	<td>".$values['nombre']."</td>
	<td>".$values['apellido']."</td>
	<td>".$values['telefono']."</td>
	<td><a href='control/eliminarEstudiantesDelCurso.php?idcurso={$values['idcursofinal']}' class='btn btn-danger btn-raised btn-xs'><i class='zmdi zmdi-delete'></i></a></td>
	";  
	$j++;
	}
	}
	echo$tabla.="</tr>
	</tbody>
	</table>";
break;
///////////////////////////////////////////////////////////////////////////////////////////////
case "evento":
//DATOS DEL CURSO/////////////////////////////////////////////////////////////////////////////////////////////
$result = mysql_query("SELECT * FROM evento WHERE idevento = $idevento");	
$registro = mysql_fetch_array($result);								
$nombre = $registro["nombre"];
$fechainicio=dma_a_amd($registro['fechainicio']);
$fechacierre=dma_a_amd($registro['fechacierre']);
$hoinicio = $registro["hoinicio"];
$hocierre=$registro["hocierre"];
$nombreLista=$nombre;
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//DATOS DE LOS ALUMNOS/////////////////////////////////////////////////////////////////////////////////////////////
$sql="SELECT usuario.* FROM usuario,estudiante, participanteevento 
      WHERE usuario.cedula = estudiante.cedulapersona and estudiante.idestudiante = participanteevento.idestudiante and participanteevento.idevento=$idevento";
$result = mysql_query($sql); 
$tabla = "";
$tabla.= "<table width='800' height='74' border='1'>";
$tabla.="
<tr>
<td colspan='7'>Nombre del evento: ".$nombre." <br />fecha de inicio: ".$fechainicio." fecha de cierre: ".$fechacierre." <br />hora de inicio: ".$hoinicio." hora de cierre: ".$hocierre."</td>
</tr>
<tr>
<td colspan='7' align='center' bgcolor='#04B4AE'>PARTICIPANTE</td>
</tr>
<tr>
<td>Numero</td>
<td>Cedula</td>
<td>Nombre</td>
<td>Apellido</td>
<td>Telefono</td>
<td>Eliminar del Evento</td>
</tr>
<tbody>
<tr>";

if ($result){  
$j=1;
while ($values = mysql_fetch_array($result)){
 $tabla.="
<tr>
<td>".$j."</td>
<td>".$values['cedula']."</td>
	<td>".$values['nombre']."</td>
	<td>".$values['apellido']."</td>
	<td>".$values['telefono']."</td>
	<td><a href='control/eliminarEstudiantesDelCurso.php?idcurso={$values['idcursofinal']}' class='btn btn-danger btn-raised btn-xs'><i class='zmdi zmdi-delete'></i></a></td>
	";  
$j++;
}
}
$tabla.="</tr>
</tbody>
</table>";
break;
///////////////////////////////////////////////////////////////////////////////////////////////

default:
//DATOS DEL CURSO/////////////////////////////////////////////////////////////////////////////////////////////
$result = mysql_query("SELECT * FROM curso WHERE idcurso = $idcurso");	
$registro = mysql_fetch_array($result);
$nucleo = $registro["nucleo"];
$expresion = $registro["expresion"];
$nombreLista=$expresion."_NUCLEO:".$nucleo;
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//DATOS DEL SALON/////////////////////////////////////////////////////////////////////////////////////////////
$sqlSalon=mysql_query("SELECT * FROM salon WHERE idsalon = $idsalon");	  
$registroSalon = mysql_fetch_array($sqlSalon);
$salon = $registroSalon["codigo"];
//////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
//DATOS DE LOS ALUMNOS/////////////////////////////////////////////////////////////////////////////////////////////
$sql="SELECT usuario.*, cursofinal.idcursofinal FROM usuario,estudiante, cursofinal 
      WHERE usuario.cedula = estudiante.cedulapersona and estudiante.idestudiante = cursofinal.idestudiante and cursofinal.idcurso=$idcurso";
$result = mysql_query($sql); 
$tabla = "";
$tabla.= "<table width='800' height='74' border='1'>";
$tabla.="<tr>
<td colspan='7' align='center' bgcolor='#04B4AE'>ALUMNOS</td>
</tr>
<tr>
<td>Numero</td>
<td>Cedula</td>
<td>Nombre</td>
<td>Apellido</td>
<td>Telefono</td>
<td>Correo</td>
<td>Eliminar del Curso</td>
</tr>
<tbody>
<tr>";

if ($result){  
$j=1;
while ($values = mysql_fetch_array($result)){
 $tabla.="
<tr>
<td>".$j."</td>
<td>".$values['cedula']."</td>
<td>".$values['nombre']."</td>
<td>".$values['apellido']."</td>
<td>".$values['telefono']."</td>
<td>".$values['correo']."</td>
<td><a href='control/eliminarEstudiantesDelCurso.php?idcurso={$values['idcursofinal']}&cedulaprofe={$_GET["cedulaprofe"]}&idsalon={$_GET["idsalon"]}&tipo={$_GET["tipo"]}' class='btn btn-danger btn-raised btn-xs'><i class='zmdi zmdi-delete'></i></a></td>
";  
$j++;
}
}
echo$tabla.="</tr>
</tbody>
</table>";
break;
}
										?>
									   
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