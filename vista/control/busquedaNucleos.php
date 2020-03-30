
<?php
include_once ('../actas/MPDF54/mpdf.php');
require_once("connect_db.php");
require("main.class.php");
$conn = new Database;
$contenido = $conn->OpenFile("../actas/busquedaNucleos.html");
$tipo = $_GET["tipo"];
$expresion = $_GET["expresion"];
$expresion1=strtoupper($expresion);
//DATOS DEL NUCLEO MUSICAL/////////////////////////////////////////////////////////////////////////////////////////////
//DATOS DE LA EXPRESION MUSICAL CUATRO/////////////////////////////////////////////////////////////////////////////////////////////
	$nombreCampo="NUCLEO $expresion1 EXPRESION $tipo CURSOS LLENOS";
	$sql=mysql_query("SELECT curso.*, profesor.nombre, profesor.apellido, salon.codigo FROM curso, profesor, salon WHERE curso.estatus = 'LLENO' and expresion = '$tipo' and profesor.cedula = curso.profesor and curso.salon = salon.id");
	$nombreCampo1="NUCLEO $expresion1 EXPRESION $tipo CURSOS VACIOS";
	$sql1=mysql_query("SELECT curso.*, profesor.nombre, profesor.apellido, salon.codigo FROM curso, profesor, salon WHERE curso.estatus = 'VACIO' and expresion = '$tipo' and profesor.cedula = curso.profesor and curso.salon = salon.id");	

//////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
//////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
//////
$tabla = "";
$tabla.= "<table width='800' height='74' border='1'>";
$tabla.="<tr>
<td colspan='6' align='center' bgcolor='#04B4AE'>$nombreCampo</td>
</tr>
<tr>
<td>Cantidad</td>
<td>Nombre Profesor</td>
<td>Apellido Profesor</td>
<td>Nucleo</td>
<td>Expresion</td>
<td>Salon</td>
</tr>
<tbody>
<tr>";

if ($sql){  
$j=1;
while ($values = mysql_fetch_array($sql)){
 $tabla.="
<tr>
<td>".$j."</td>
<td>".$values['nombre']."</td>
<td>".$values['apellido']."</td>
<td>".$values['nucleo']."</td>
<td>".$values['expresion']."</td>
<td>".$values['codigo']."</td>";
$j++;
}
}
$tabla.="</tr>
</tbody>
</table>";

$tabla1 = "";
$tabla1.= "<table width='800' height='74' border='1'>";
$tabla1.="<tr>
<td colspan='6' align='center' bgcolor='#04B4AE'>$nombreCampo1</td>
</tr>
<tr>
<td>Cantidad</td>
<td>Nombre Profesor</td>
<td>Apellido Profesor</td>
<td>Nucleo</td>
<td>Expresion</td>
<td>Salon</td>
</tr>
<tbody>
<tr>";

if ($sql1){  
$j=1;
while ($values = mysql_fetch_array($sql1)){
 $tabla1.="
<tr>
<td>".$j."</td>
<td>".$values['nombre']."</td>
<td>".$values['apellido']."</td>
<td>".$values['nucleo']."</td>
<td>".$values['expresion']."</td>
<td>".$values['codigo']."</td>";
$j++;
}
}
$tabla1.="</tr>
</tbody>
</table>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
$contenido =$conn->crearListaBusquedaNucleos($contenido,$tabla,$tabla1);
$pdf = new MPDF('utf-8', array(216,330)); // Creamos una instancia de la clase HTML2FPDF
$pdf -> AddPage(); // Creamos una pgina
$pdf -> WriteHTML($contenido);//Volcamos el HTML contenido en la variable $html para crear el contenido del PDF
$pdf -> Output("lista.pdf", "D");//Volcamos el pdf generado con nombre doc.pdf. En este caso con el parametro D forzamos la descarga del mismo.*/
?>