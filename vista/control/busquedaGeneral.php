
<?php
include_once ('../actas/MPDF54/mpdf.php');
require_once("connect_db.php");
require("main.class.php");
$conn = new Database;
$contenido = $conn->OpenFile("../actas/busquedaGeneral.html");
$tipo = $_GET["tipo"];
//DATOS DEL PROFESOR////////////////////////////////////////////////////////////////////////////////////////////
if($tipo == "profesor"){
	$nombreCampo="DATOS DE LOS PROFESORES";
	$sql=mysql_query("SELECT * FROM profesor");	  
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
//DATOS DE LOS ALUMNOS/////////////////////////////////////////////////////////////////////////////////////////////
if($tipo == "estudiante"){
	$nombreCampo="DATOS DE LOS ESTUDIANTES";
	$sql=mysql_query("SELECT * FROM estudiante");	  
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
//DATOS DE LOS ASISTONTOS/////////////////////////////////////////////////////////////////////////////////////////////
if($tipo == "asistente"){
	$nombreCampo="DATOS DE LOS ASISTENTES";
	$sql=mysql_query("SELECT * FROM usuario WHERE tipo_usuario='ASISTENTE'");	  
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
$tabla = "";
$tabla.= "<table width='800' height='74' border='1'>";
$tabla.="<tr>
<td colspan='4' align='center' bgcolor='#04B4AE'>$nombreCampo</td>
</tr>
<tr>
<td>Numero</td>
<td>Cedula</td>
<td>Nombre</td>
<td>Apellido</td>
</tr>
<tbody>
<tr>";

if ($sql){  
$j=1;
while ($values = mysql_fetch_array($sql)){
 $tabla.="
<tr>
<td>".$j."</td>
<td>".$values['cedula']."</td>
<td>".$values['nombre']."</td>
<td>".$values['apellido']."</td>";  
$j++;
}
}
$tabla.="</tr>
</tbody>
</table>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
$contenido =$conn->crearListaBusqueda($contenido,$tabla);
$pdf = new MPDF('utf-8', array(216,330)); // Creamos una instancia de la clase HTML2FPDF
$pdf -> AddPage(); // Creamos una pgina
$pdf -> WriteHTML($contenido);//Volcamos el HTML contenido en la variable $html para crear el contenido del PDF
$pdf -> Output("lista.pdf", "D");//Volcamos el pdf generado con nombre doc.pdf. En este caso con el parametro D forzamos la descarga del mismo.*/
?>