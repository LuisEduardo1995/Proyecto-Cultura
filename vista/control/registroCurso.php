
<?php
	if($_POST['expresionCurso1'] != ""){$expresionCurso=strtoupper($_POST['expresionCurso1']);}
	if($_POST['expresionCurso2'] != ""){$expresionCurso=strtoupper($_POST['expresionCurso2']);}
	if($_POST['expresionCurso3'] != ""){$expresionCurso=strtoupper($_POST['expresionCurso3']);}
	if($_POST['expresionCurso4'] != ""){$expresionCurso=strtoupper($_POST['expresionCurso4']);}
	if($_POST['expresionCurso5'] != ""){$expresionCurso=strtoupper($_POST['expresionCurso5']);}
	$salon=$_POST['salon'];
	$profesor=$_POST['profesor'];
	$nucleo=strtoupper($_POST['nucleo']);
	$turno=strtoupper($_POST['turno']);
	$hoentrada=strtoupper($_POST['hoentrada']);
	$hosalida=strtoupper($_POST['hosalida']);
	$hoentrada = $hoentrada." ".$_POST['amopm'];
	$hosalida = $hosalida." ".$_POST['amopm1'];
	$nivel=$_POST['nivel'];
	$dias = $_POST['dia1']." ".$_POST['dia2']." ".$_POST['dia3']." ".$_POST['dia4']." ".$_POST['dia5'];
	$dias = strtoupper($dias);
	
	require("connect_db.php");
    ///*la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
			    $result=mysql_query("INSERT INTO `curso`(`nucleo`,`expresion`, `idsalon`, `idprofesor`, `estatus`, `nivel`, `turno`, `dias`, `hoentrada`, `hosalida`) VALUES ('$nucleo','$expresionCurso', '$salon', '$profesor', 'VACIO','$nivel', '$turno', '$dias', '$hoentrada', '$hosalida')");
				if($result){
				echo ' <script language="javascript">alert("El Curso se ha sido registrado con éxito");</script> ';
			 	echo ' <meta http-equiv="refresh" content="0; url=../curso.php"> ';
				
			}else{
				echo ' <script language="javascript">alert("El Curso no se ha registrado");</script> ';
				echo ' <meta http-equiv="refresh" content="0; url=../curso.php"> ';
				}
			



?>