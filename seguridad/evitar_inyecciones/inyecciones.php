<?php
/*este archivo permite evitar los atques xss*/

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
 ?>