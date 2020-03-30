
<?php

	$nombre=strtoupper($_POST['nombre']);
	$estatus=strtoupper($_POST['estatus']);
	$feinicio=$_POST['feinicio'];
	$fecierre=$_POST['fecierre'];
	$hoinicio=$_POST['hoinicio'];
	$hocierre=$_POST['hocierre'];
	$tipoEvento=$_POST['tipoEvento'];
	$capacidad=$_POST['capacidad'];
	$lugarevento=strtoupper($_POST['lugarevento']);
	$responsableevento=strtoupper($_POST['responsableevento']);
	$invitados=strtoupper($_POST['invitados']);
	$hoinicio = $hoinicio." ".$_POST['amopm'];
	$hocierre = $hocierre." ".$_POST['amopm1'];
	if($capacidad == ""){ $capacidad=0;}
	
	require("connect_db.php");
    //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
			    $result=mysql_query("INSERT INTO `evento`(`nombre`, `estatus`, `fechainicio`, `fechacierre`, `hoinicio`, `hocierre` ,`capacidad`, `tipoevento`, `lugarevento`, `responsableevento`,`invitados`) 
									 VALUES ('$nombre','$estatus','$feinicio','$fecierre','$hoinicio','$hocierre',$capacidad,'$tipoEvento', '$lugarevento', '$responsableevento','$invitados' )");
				if($result){
				echo ' <script language="javascript">alert("El Evento ha sido registrado con éxito");</script> ';
				echo ' <meta http-equiv="refresh" content="0; url=../registroevento.php"> ';
				
				
			}else{
				echo ' <script language="javascript">alert("El Evento no se ha elimnado");</script> ';
				echo ' <meta http-equiv="refresh" content="0; url=../registroevento.php"> ';
				}
			


?>