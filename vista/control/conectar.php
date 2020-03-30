<?php include_once '../controlador/inicioSesion.php';?>
<?php
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = "123456789"; /* Password */
$dbname = "cultura"; /* Database name */

$mysqli = mysqli_connect($host, $user, $password,$dbname);
if (!$mysqli) {
 die("Connection failed: " . mysqli_connect_error());
}
?>