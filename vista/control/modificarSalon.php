
<?php
require("connect_db.php");
    $id=$_POST['id'];
    $codigo=strtoupper($_POST['codigo']);
	$estatus=strtoupper($_POST['estatus']);
	$capacidad=$_POST['capacidad'];
    $result=mysql_query("UPDATE salon SET codigo='$codigo',estatus='$estatus',
                                          capacidad='$capacidad'
					    WHERE idsalon = $id");
if($result){
echo ' <script language="javascript">alert("Se modificaron los datos exitosamente");</script> ';
echo '  <script language="javascript">window.opener.location.reload(); window.close(); </script> ';
}else{
echo ' <script language="javascript">alert("No se modificaron los datos");</script> ';
echo '  <script language="javascript">window.opener.location.reload();window.close(); </script> ';
}
?>