
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
	$capacidad=$_POST['capacidad'];

    $result=mysql_query("UPDATE grupo SET nucleo='$nucleo',expresion='$expresionCurso',
                                          idprofesor='$profesor',estatus='$estatus',capacidad=$capacidad
					    WHERE idgrupo = $id");
if($result){
echo ' <script language="javascript">alert("Se modificaron los datos exitosamente");</script> ';
echo '  <script language="javascript">window.opener.location.reload(); window.close(); </script> ';
}else{
echo ' <script language="javascript">alert("No se modificaron los datos");</script> ';
echo '  <script language="javascript">window.opener.location.reload();window.close(); </script> ';
}
?>