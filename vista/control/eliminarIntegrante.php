
<?php
require("connect_db.php");
$cedula = $_GET["cedula"];
$result=mysql_query("DELETE FROM integrante WHERE cedula = $cedula");	
if($result){
echo ' <script language="javascript">alert("El Integrante ha sido eliminado exitosamente");</script> ';
echo ' <meta http-equiv="refresh" content="0; url=../integrante.php"> ';
}else{
echo ' <script language="javascript">alert("El Integrante no se ha elimnado");</script> ';
echo ' <meta http-equiv="refresh" content="0; url=../integrante.php"> ';
}
?>