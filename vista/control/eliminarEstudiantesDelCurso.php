<?php
require("connect_db.php");
$idcurso = $_GET["idcurso"];
$cedulaprofe = $_GET["cedulaprofe"];
$idsalon = $_GET["idsalon"];
$tipo = $_GET["tipo"];
if($tipo == ""){$tipo="curso";}

$result=mysql_query("DELETE FROM `cursofinal` WHERE `cursofinal`.`idcursofinal` = $idcurso");	
if($result){
		  $sql="SELECT capacidad, cuporest FROM salon WHERE salon.idsalon = $idsalon";
		  $result = mysql_query($sql);
		  $registro = mysql_fetch_array($result);
		  $cuporest = $registro["cuporest"];
		  $cuporest=$cuporest-1;
		  $result=mysql_query("UPDATE salon SET cuporest=$cuporest WHERE idsalon = $idsalon");
echo ' <script language="javascript">alert("El registro se ha eliminado exitosamente");</script> ';
echo ' <script language="javascript">window.opener.location.reload(); window.close(); </script>';
}else{
echo ' <script language="javascript">alert("El registro no se ha elimnado");</script> ';
echo ' <script language="javascript">window.opener.location.reload(); window.close(); </script>';
}
?>