<?php
/*este archivo permite evitar los robo de sesiones*/

function seguridad($aplicacion){
ini_set("session.gc_maxlifetime","28800");
//ini_set("session.cookie_lifetime","28800");
/* establecer el limitador de caché a 'private' */
session_cache_limiter('private');
$cache_limiter = session_cache_limiter();
/* establecer la caducidad de la caché a 30 minutos */
session_cache_expire(480);
$cache_expire = session_cache_expire();
/*Robo por Cross-Site Scripting Este tipo de ataque se puede prevenir 
(además de evitando los ataques XSS) haciendo que las cookies de sesión 
tengan el atributo HttpOnly, que evita que puedan ser manejadas por javascript 
en la mayoría de navegadores. En PHP esto se consigue con la instrucción:*/
ini_set('session.cookie_httponly', 1);
/*Propagación en URL La forma de prevenir esto es no utilizar la URL para el 
identificador de sesión; utilizar únicamente las cookies. 
En PHP esto se consigue con la instrucción:
*/
ini_set('session.use_only_cookies', 1);
/*
Verificación doble: usar un segundo método para intentar reconocer al usuario de la sesión. 
Esto puede hacerse guardando cabeceras como HTTP_USER_AGENT (navegador del usuario) o REMOTE_ADDR (IP del usuario) 
cuando se crea la sesión, de esta forma:
*/

$_SESSION['fingerprint'] = md5($_SERVER['HTTP_USER_AGENT']);
/*
La IP del usuario es más significativa que su navegador, pero es más problemática ya 
que hay usuarios a los que les cambia la IP habitualmente (IP dinámica, proxies, ...).
Con este sistema, un atacante tendría que robar la sesión a un usuario y, además, 
enviar la misma cabecera de navegador para poder usarla.*/
//se crea un indetificador unico en la aplicacion para robo de sesiones en servidor compartido
if (isset($aplicacion) === false || $aplicacion !== 'SIREDGCUL')
{/*
include("../controlador/conectar.php");
$conexion=Conectarse($_SESSION['login_usu'], $_SESSION['password_usu']);
$update = "UPDATE usuario SET conectado=false where usuario='".$_SESSION['login_usu']."'";         
$resultadoupdate = mysql_query($update);*/
session_destroy();
header("Location: ../index.html");
}
//////
/*$inactivo = 1800;
if(isset($_SESSION['tiempo']) ) {
$vida_session = time() - $_SESSION['tiempo'];
if($vida_session > $inactivo)
{
include("../controlador/conectar.php");
$conexion=Conectarse($_SESSION['login'], $_SESSION['password']);
$update = "UPDATE usuario SET conectado=false where usuario='".$_SESSION['login']."'";         
$resultadoupdate = pg_query($update);
session_destroy();
header("Location: ../index.html");
}
}
$_SESSION['tiempo'] = time() ; */
////////

}
?>
