
<?php
require_once("connect_db.php");
$id = $_GET["id"];
$result=mysql_query("DELETE FROM evento WHERE idevento = $id");	
if($result){
echo ' <script language="javascript">alert("El evento fue eliminado exitosamente");</script> ';
echo ' <meta http-equiv="refresh" content="0; url=../registroevento.php"> ';
}else{
echo ' <script language="javascript">alert("El evento no se ha elimnado");</script> ';
echo ' <meta http-equiv="refresh" content="0; url=../registroevento.php"> ';
}
?>