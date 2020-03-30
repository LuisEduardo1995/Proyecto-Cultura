
<?php
require("connect_db.php");
$cedula = $_GET["cedula"];
$result=mysql_query("DELETE FROM estudiante WHERE cedula = $cedula");	
if($result){
echo ' <script language="javascript">alert("El Estudiante ha sido eliminado exitosamente");</script> ';
echo ' <meta http-equiv="refresh" content="0; url=../estudiante.php"> ';
}else{
echo ' <script language="javascript">alert("El Estudiante no se ha elimnado");</script> ';
echo ' <meta http-equiv="refresh" content="0; url=../estudiante.php"> ';
}
?>