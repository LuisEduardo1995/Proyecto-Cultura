
<?php
require("connect_db.php");
$cedula = $_GET["cedula"];
$tipopersona = strtolower($_GET["tipopersona"]);
$result=mysql_query("UPDATE usuario SET activo = 0  WHERE cedula = $cedula");	
if($result){
echo ' <script language="javascript">alert("Usuario eliminado exitosamente");</script> ';
echo ' <meta http-equiv="refresh" content="0; url=../usuario.php?tipopersona='.$tipopersona.'"> ';
}else{
echo ' <script language="javascript">alert("El usuario no se ha elimnado");</script> ';
echo ' <meta http-equiv="refresh" content="0; url=../usuario.php?tipopersona='.$tipopersona.'> ';
}
?>