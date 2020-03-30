
<?php
require("connect_db.php");
$sql="SELECT u.*, e.*, p.*
          FROM usuario as u 
		  LEFT JOIN profesor p ON u.cedula=p.cedulapersona 
		  LEFT JOIN estudiante e ON u.cedula=e.cedulapersona
		  WHERE u.tipo_usuario != 'ADMINISTRADOR' AND u.activo=1
		  ORDER BY u.tipo_usuario ASC";
$result = mysql_query($sql);
?>