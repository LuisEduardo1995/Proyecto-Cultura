
<?php
	$expresionCurso = strtoupper($_POST['nombre']);
	$profesor=$_POST['profesor'];
	$capacidad=$_POST['capacidad'];
	$nucleo=strtoupper($_POST['nucleo']);
	require("connect_db.php");
    ///*la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
			    $result=mysql_query("INSERT INTO `grupo`(`nucleo`,`expresion`, `estatus`,capacidad, `idprofesor`) VALUES ('$nucleo','$expresionCurso', 'VACIO',$capacidad, '$profesor')");
				if($result){
				echo ' <script language="javascript">alert("El grupo se ha creado con éxito");</script> ';
			 	echo ' <meta http-equiv="refresh" content="0; url=../grupo.php"> ';
				
			}else{
				echo ' <script language="javascript">alert("El grupo no se ha creado");</script> ';
				echo ' <meta http-equiv="refresh" content="0; url=../grupo.php"> ';
				}
			



?>