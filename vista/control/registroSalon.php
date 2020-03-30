
<?php


	$codigo=$_POST['codigo'];
	$estatus=strtoupper($_POST['estatus']);
	$capacidad=$_POST['capacidad'];
	
	
	require("connect_db.php");
    //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
			    $result=mysql_query("INSERT INTO `salon`(`codigo`, `estatus`, `capacidad`) VALUES ( '$codigo', '$estatus', '$capacidad')");
				if($result){
				echo ' <script language="javascript">alert("El Salon ha sido registrado con éxito");</script> ';
				echo ' <meta http-equiv="refresh" content="0; url=../salon.php"> ';
				
			}else{
				echo ' <script language="javascript">alert("El Salon no se ha registrado");</script> ';
				echo ' <meta http-equiv="refresh" content="0; url=../salon.php"> ';
				}
			



?>