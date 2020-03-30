
<?php
require("connect_db.php");
$id = $_GET["id"];
$result=mysql_query("DELETE FROM salon WHERE idsalon = $id");	
if($result){
echo ' <script language="javascript">alert("El Salon ha sido eliminado exitosamente");</script> ';
echo ' <meta http-equiv="refresh" content="0; url=../salon.php"> ';
}else{
echo ' <script language="javascript">alert("El Salon no se ha elimnado");</script> ';
echo ' <meta http-equiv="refresh" content="0; url=../salon.php"> ';
}
?>