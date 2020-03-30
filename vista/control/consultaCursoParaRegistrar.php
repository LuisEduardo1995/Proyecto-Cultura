
<?php
require("connect_db.php");
$sql="SELECT *, salon.idsalon as idsalon, curso.idcurso as idcurso FROM curso, salon WHERE salon.idsalon = curso.idsalon AND curso.expresion='$tipo'";
$result = mysql_query($sql);		
?>