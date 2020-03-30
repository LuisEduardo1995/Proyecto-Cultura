<?php
/*este archivo permite evitar los robo de sesiones*/

function seguridad($aplicacion){
ini_set("session.gc_maxlifetime","28800");
//ini_set("session.cookie_lifetime","28800");
/* establecer el limitador de cach� a 'private' */
session_cache_limiter('private');
$cache_limiter = session_cache_limiter();
/* establecer la caducidad de la cach� a 30 minutos */
session_cache_expire(480);
$cache_expire = session_cache_expire();
/*Robo por Cross-Site Scripting Este tipo de ataque se puede prevenir 
(adem�s de evitando los ataques XSS) haciendo que las cookies de sesi�n 
tengan el atributo HttpOnly, que evita que puedan ser manejadas por javascript 
en la mayor�a de navegadores. En PHP esto se consigue con la instrucci�n:*/
ini_set('session.cookie_httponly', 1);
/*Propagaci�n en URL La forma de prevenir esto es no utilizar la URL para el 
identificador de sesi�n; utilizar �nicamente las cookies. 
En PHP esto se consigue con la instrucci�n:
*/
ini_set('session.use_only_cookies', 1);
/*
Verificaci�n doble: usar un segundo m�todo para intentar reconocer al usuario de la sesi�n. 
Esto puede hacerse guardando cabeceras como HTTP_USER_AGENT (navegador del usuario) o REMOTE_ADDR (IP del usuario) 
cuando se crea la sesi�n, de esta forma:
*/

$_SESSION['fingerprint'] = md5($_SERVER['HTTP_USER_AGENT']);
/*
La IP del usuario es m�s significativa que su navegador, pero es m�s problem�tica ya 
que hay usuarios a los que les cambia la IP habitualmente (IP din�mica, proxies, ...).
Con este sistema, un atacante tendr�a que robar la sesi�n a un usuario y, adem�s, 
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
