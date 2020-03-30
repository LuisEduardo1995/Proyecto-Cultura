
<?php
require("connect_db.php");
$tipoPersona = strtoupper($_GET["tipopersona"]);
$sql="SELECT * FROM usuario WHERE tipo_persona = '$tipoPersona' and activo=1";
$result = mysql_query($sql);		
?>