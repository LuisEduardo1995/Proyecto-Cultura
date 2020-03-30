
<?php
require("connect_db.php");
$sql="SELECT * FROM evento WHERE estatus='ACTIVO' ORDER BY fechainicio";
$result = mysql_query($sql);		
?>