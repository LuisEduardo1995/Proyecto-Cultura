<?php
// Inicias sesion
session_start();
include_once("../seguridad/evitar_inyecciones/inyecciones.php");
include_once("../seguridad/evitar_sessiones/seguridad.php");
$seguridad=seguridad($_SESSION['aplicacion']);
if ( !isset ( $_SESSION['correo']) && !isset ( $_SESSION['clave'])){
    $_SESSION['correo'] = NULL;
    $_SESSION['clave'] = NULL;
	session_destroy();
    header("Location: ../index.html");
}
if(isset($_GET['cerrar']) && $_GET['cerrar'] == 'true')
{
    $_SESSION['correo'] = NULL;
    $_SESSION['clave'] = NULL;
    unset($_SESSION['correo']);
    unset($_SESSION['clave']);
    unset($_SESSION);
	session_destroy();
    header("Location: ../index.html");		
}	
?>
