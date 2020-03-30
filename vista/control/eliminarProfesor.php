
<?php
require("connect_db.php");
$cedula = $_GET["cedula"];
$result=mysql_query("DELETE FROM profesor WHERE cedula = $cedula");	
if($result){
echo ' <script language="javascript">alert("El Profesor fue eliminado exitosamente");</script> ';
echo ' <meta http-equiv="refresh" content="0; url=../profesor.php"> ';
}else{
echo ' <script language="javascript">alert("El Profesor no se ha elimnado");</script> ';
echo ' <meta http-equiv="refresh" content="0; url=../profesor.php"> ';
}
?>