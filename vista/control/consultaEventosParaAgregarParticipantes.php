
<?php
require("connect_db.php");
$sql="SELECT * FROM evento where tipoevento = 'ESPECIAL'";
$result = mysql_query($sql);		
?>