
<?php
require("connect_db.php");
    $cedula=$_POST['cedula'];
    $nombre=strtoupper($_POST['nombre']);
	$apellido=strtoupper($_POST['apellido']);
	$correo=$_POST['correo'];
	$sexo=strtoupper($_POST['sexo']);
	$edad=$_POST['edad'];
	$estudio=$_POST['estudio'];
	$especialidad=$_POST['especialidad'];
	$curso=$_POST['curso'];
    $result=mysql_query("UPDATE profesor SET nombre='$nombre',apellido='$apellido',
                                          correo='$correo',sexo='$sexo',edad='$edad',
										  estudio='$estudio',especialidad='$especialidad',curso='$curso'
					    WHERE cedula = $cedula");
if($result){
echo ' <script language="javascript">alert("Se modificaron los datos exitosamente");</script> ';
echo '  <script language="javascript">window.opener.location.reload(); window.close(); </script> ';
}else{
echo ' <script language="javascript">alert("No se modificaron los datos");</script> ';
echo '  <script language="javascript">window.opener.location.reload();window.close(); </script> ';
}
?>