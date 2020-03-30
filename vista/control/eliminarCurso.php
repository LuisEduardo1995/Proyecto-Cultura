
<?php
require_once("connect_db.php");
$id = $_GET["id"];
$result=mysql_query("DELETE FROM curso WHERE idcurso = $id");	
if($result){
echo ' <script language="javascript">alert("El curso fue eliminado exitosamente");</script> ';
echo ' <meta http-equiv="refresh" content="0; url=../curso.php"> ';
}else{
echo ' <script language="javascript">alert("El curso no se ha elimnado");</script> ';
echo ' <meta http-equiv="refresh" content="0; url=../curso.php"> ';
}
?>