
<?php
require("connect_db.php");
$sql="SELECT * FROM grupo WHERE  nucleo='$nucleo'";
$result = mysql_query($sql);		
?>