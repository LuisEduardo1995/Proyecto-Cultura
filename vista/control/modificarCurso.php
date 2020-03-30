
<?php
require_once("connect_db.php");
    $id=$_POST['id'];
	$nucleo=strtoupper($_POST['nucleo']);
    if($_POST['expresionCurso1'] != ""){$expresionCurso=strtoupper($_POST['expresionCurso1']);}
	if($_POST['expresionCurso2'] != ""){$expresionCurso=strtoupper($_POST['expresionCurso2']);}
	if($_POST['expresionCurso3'] != ""){$expresionCurso=strtoupper($_POST['expresionCurso3']);}
	if($_POST['expresionCurso4'] != ""){$expresionCurso=strtoupper($_POST['expresionCurso4']);}
	if($_POST['expresionCurso5'] != ""){$expresionCurso=strtoupper($_POST['expresionCurso5']);}
	$salon=$_POST['salon'];
	$profesor=$_POST['profesor'];
	$estatus=$_POST['estatus'];
	$turno=strtoupper($_POST['turno']);
	$hoentrada=strtoupper($_POST['hoentrada']);
	$hosalida=strtoupper($_POST['hosalida']);
	$hoentrada = $hoentrada." ".strtoupper($_POST['amopm']);
	$hosalida = $hosalida." ".strtoupper($_POST['amopm1']);
	$nivel=$_POST['nivel'];
	$dias = $_POST['dia1']." ".$_POST['dia2']." ".$_POST['dia3']." ".$_POST['dia4']." ".$_POST['dia5'];
	$dias = strtoupper($dias);
	
    $result=mysql_query("UPDATE curso SET nucleo='$nucleo',expresion='$expresionCurso',
                                          idsalon='$salon',idprofesor='$profesor',estatus='$estatus',nivel='$nivel',
										  turno='$turno',hoentrada='$hoentrada',hosalida='$hosalida',dias='$dias'
					    WHERE idcurso = $id");
if($result){
echo ' <script language="javascript">alert("Se modificaron los datos exitosamente");</script> ';
echo '  <script language="javascript">window.opener.location.reload(); window.close(); </script> ';
}else{
echo ' <script language="javascript">alert("No se modificaron los datos");</script> ';
echo '  <script language="javascript">window.opener.location.reload();window.close(); </script> ';
}
?>