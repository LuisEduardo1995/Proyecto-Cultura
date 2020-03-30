
<?php

		$mysqli = mysql_connect("localhost" , "root" , "123456789","cultura") or die(mysql_error());	
		
		mysql_select_db('cultura') or die('No se pudo seleccionar la base de datos');
		
?>
