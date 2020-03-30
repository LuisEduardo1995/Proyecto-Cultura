
<?php
require("connect_db.php");
$sql="SELECT * FROM grupo ORDER BY nucleo asc";
$result = mysql_query($sql);		
?>