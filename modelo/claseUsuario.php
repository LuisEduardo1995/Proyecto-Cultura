<?php
session_start();
/*este archivo permite validar  a los usuarios de la aplicacion*/
function addslashes__recursive($var){
if (!is_array($var))
return addslashes($var);
$new_var = array();
foreach ($var as $k => $v)$new_var[addslashes($k)]=addslashes__recursive($v);
return $new_var;
}
$_POST=addslashes__recursive($_POST);
$_GET=addslashes__recursive($_GET);
$_REQUEST=addslashes__recursive($_REQUEST);
$_SERVER=addslashes__recursive($_SERVER);
$_COOKIE=addslashes__recursive($_COOKIE);
// Inicias sesion
$_SESSION['aplicacion']='SIREDGCUL';
/////////////////////////*******************/////////////////
$correo = $_POST["correo"];
$clave = $_POST["clave"];
$_SESSION["correo"]=$correo;
$_SESSION["clave"]=$clave;
require_once("../controlador/connect_db.php");
$clave=md5($clave);
$sql="SELECT * FROM usuario WHERE clave='$clave' and correo = '$correo'";
$ressql = mysql_query($sql);
$num = mysql_num_rows($ressql);
if($num>0){
$registro = mysql_fetch_array($ressql);
$nombre = $registro["nombre"];
$apellido = $registro["apellido"];
$tipo_usuario = $registro["tipo_usuario"];
$rutaimagen = $registro["rutaimagen"];
$cedula = $registro["cedula"];
$tipo_persona = $registro["tipo_persona"];
$_SESSION['nombre'] = $nombre;
$_SESSION['apellido'] = $apellido;
$_SESSION['rutaimagen'] =$rutaimagen;
$_SESSION['tipo_usuario'] =$tipo_usuario;
$_SESSION['cedula'] =$cedula;
$_SESSION['tipo_persona'] =$tipo_persona;
	if($tipo_usuario == "ADMINISTRADOR"){
		header("Location:../vista/index1.php");exit();
	}
	if($tipo_usuario == "ASISTENTE"){
		header("Location:../vista/index.php");exit();
	}
	if($tipo_usuario == "PROFESOR"){
		header("Location:../vista/index.php");exit();
	}
	if($tipo_usuario == "ESTUDIANTES"){
		header("Location:../vista/index.php");exit();
	}
}
else{
echo ' <script language="javascript">alert("Este usaurio no existe, verifique sus datos");</script> ';
echo ' <meta http-equiv="refresh" content="0; url=../index.html"> ';
}


?>