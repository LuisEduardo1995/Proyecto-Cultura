
<?php
require("connect_db.php");
$sql="SELECT * FROM curso ORDER BY nucleo asc";
$result = mysql_query($sql);		
?>