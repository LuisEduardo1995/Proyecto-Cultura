
<?php
require_once("connect_db.php");
$id = $_GET["id"];
$result=mysql_query("DELETE FROM grupo WHERE idgrupo = $id");	
if($result){
echo ' <script language="javascript">alert("El grupo fue eliminado exitosamente");</script> ';
echo ' <meta http-equiv="refresh" content="0; url=../grupo.php"> ';
}else{
echo ' <script language="javascript">alert("El grupo no se ha elimnado");</script> ';
echo ' <meta http-equiv="refresh" content="0; url=../grupo.php"> ';
}
?>