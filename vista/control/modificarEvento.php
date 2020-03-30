
<?php
require("connect_db.php");
    $id=$_POST['id'];
    $nombre=strtoupper($_POST['nombre']);
	$estatus=strtoupper($_POST['estatus']);
	$lugarevento=strtoupper($_POST['lugarevento']);
	$responsableevento=strtoupper($_POST['responsableevento']);
	$invitados=strtoupper($_POST['invitados']);
	$feinicio=$_POST['feinicio'];
	$fecierre=$_POST['fecierre'];
	$hoinicio=$_POST['hoinicio'];
	$hocierre=$_POST['hocierre'];
	$tipoevento=$_POST['tipoEvento'];
	$capacidad=$_POST['capacidad'];
    $result=mysql_query("UPDATE evento SET nombre='$nombre',estatus='$estatus',
                                          fechainicio='$feinicio',fechacierre='$fecierre',
										  hoinicio='$hoinicio',hocierre='$hocierre',capacidad='$capacidad',
										  tipoevento='$tipoevento', lugarevento='$lugarevento',responsableevento='$responsableevento', invitados='$invitados'
					    WHERE idevento = $id");
if($result){
echo ' <script language="javascript">alert("Se modificaron los datos exitosamente");</script> ';
echo '  <script language="javascript">window.opener.location.reload(); window.close(); </script> ';
}else{
echo ' <script language="javascript">alert("No se modificaron los datos");</script> ';
echo '  <script language="javascript">window.opener.location.reload();window.close(); </script> ';
}
?>