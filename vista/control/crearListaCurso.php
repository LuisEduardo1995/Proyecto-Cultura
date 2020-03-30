
<?php
include_once ('../actas/MPDF54/mpdf.php');
require_once("connect_db.php");
require("main.class.php");
include_once("cambioformatofecha.php");
$conn = new Database;
$contenido = $conn->OpenFile("../actas/acta.html");
$tipo=$_GET["tipo"];
$idgrupo = $_GET["idgrupo"];
$idcurso = $_GET["idcurso"];
$idevento = $_GET["idevento"];
$cedulaprofe = $_GET["cedulaprofe"];
$idsalon = $_GET["idsalon"];
//DATOS DEL PROFESOR////////////////////////////////////////////////////////////////////////////////////////////
$sqlProfe=mysql_query("SELECT usuario.nombre, usuario.apellido, usuario.cedula FROM usuario, profesor
						WHERE usuario.cedula = profesor.cedulapersona and  profesor.idprofesor=$cedulaprofe");	  
$registroProfe = mysql_fetch_array($sqlProfe);
$nombreProfe = $registroProfe["nombre"];	
$apellidoProfe = $registroProfe["apellido"];
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
switch($tipo){
case "grupo":
	//DATOS DEL CURSO/////////////////////////////////////////////////////////////////////////////////////////////
	$result = mysql_query("SELECT * FROM grupo WHERE idgrupo = $idgrupo");	
	$registro = mysql_fetch_array($result);
	$nucleo = $registro["nucleo"];
	$expresion = $registro["expresion"];
	$nombreLista=$expresion."_NUCLEO:".$nucleo;
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//DATOS DE LOS ALUMNOS/////////////////////////////////////////////////////////////////////////////////////////////
	$sql="SELECT usuario.* FROM usuario,estudiante, participantegrupo
		  WHERE usuario.cedula = estudiante.cedulapersona and estudiante.idestudiante = participantegrupo.idestudiante and participantegrupo.idgrupo=$idgrupo";
	$result = mysql_query($sql); 
	$tabla = "";
	$tabla.= "<table width='800' height='74' border='1'>";

	$tabla.="<tr>
	<td colspan='5' align='center' bgcolor='#04B4AE'>INTEGRANTE DEL GRUPO</td>
	</tr>
	<tr>
	<td>Numero</td>
	<td>Cedula</td>
	<td>Nombre</td>
	<td>Apellido</td>
	<td>Telefono</td>
	</tr>
	<tbody>
	<tr>";

	if ($result){  
	$j=1;
	while ($values = mysql_fetch_array($result)){
	 $tabla.="
	<tr>
	<td>".$j."</td>
	<td>".$values['cedula']."</td>
	<td>".$values['nombre']."</td>
	<td>".$values['apellido']."</td>
	<td>".$values['telefono']."</td>";  
	$j++;
	}
	}
	echo$tabla.="</tr>
	</tbody>
	</table>";
break;
///////////////////////////////////////////////////////////////////////////////////////////////
case "evento":
//DATOS DEL CURSO/////////////////////////////////////////////////////////////////////////////////////////////
$result = mysql_query("SELECT * FROM evento WHERE idevento = $idevento");	
$registro = mysql_fetch_array($result);								
$nombre = $registro["nombre"];
$fechainicio=dma_a_amd($registro['fechainicio']);
$fechacierre=dma_a_amd($registro['fechacierre']);
$hoinicio = $registro["hoinicio"];
$hocierre=$registro["hocierre"];
$nombreLista=$nombre;
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//DATOS DE LOS ALUMNOS/////////////////////////////////////////////////////////////////////////////////////////////
$sql="SELECT usuario.* FROM usuario,estudiante, participanteevento 
      WHERE usuario.cedula = estudiante.cedulapersona and estudiante.idestudiante = participanteevento.idestudiante and participanteevento.idevento=$idevento";
$result = mysql_query($sql); 
$tabla = "";
$tabla.= "<table width='800' height='74' border='1'>";
$tabla.="
<tr>
<td colspan='5'>Nombre del evento: ".$nombre." <br />fecha de inicio: ".$fechainicio." fecha de cierre: ".$fechacierre." <br />hora de inicio: ".$hoinicio." hora de cierre: ".$hocierre."</td>
</tr>
<tr>
<td colspan='5' align='center' bgcolor='#04B4AE'>ALUMNOS</td>
</tr>
<tr>
<td>Numero</td>
<td>Cedula</td>
<td>Nombre</td>
<td>Apellido</td>
<td>Telefono</td>
</tr>
<tbody>
<tr>";

if ($result){  
$j=1;
while ($values = mysql_fetch_array($result)){
 $tabla.="
<tr>
<td>".$j."</td>
<td>".$values['cedula']."</td>
<td>".$values['nombre']."</td>
<td>".$values['apellido']."</td>
<td>".$values['telefono']."</td>";  
$j++;
}
}
$tabla.="</tr>
</tbody>
</table>";
break;
///////////////////////////////////////////////////////////////////////////////////////////////

default:
//DATOS DEL CURSO/////////////////////////////////////////////////////////////////////////////////////////////
$result = mysql_query("SELECT * FROM curso WHERE idcurso = $idcurso");	
$registro = mysql_fetch_array($result);
$nucleo = $registro["nucleo"];
$expresion = $registro["expresion"];
$nombreLista=$expresion."_NUCLEO:".$nucleo;
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//DATOS DEL SALON/////////////////////////////////////////////////////////////////////////////////////////////
$sqlSalon=mysql_query("SELECT * FROM salon WHERE idsalon = $idsalon");	  
$registroSalon = mysql_fetch_array($sqlSalon);
$salon = $registroSalon["codigo"];
//////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
//DATOS DE LOS ALUMNOS/////////////////////////////////////////////////////////////////////////////////////////////
$sql="SELECT usuario.* FROM usuario,estudiante, cursofinal 
      WHERE usuario.cedula = estudiante.cedulapersona and estudiante.idestudiante = cursofinal.idestudiante and cursofinal.idcurso=$idcurso";
$result = mysql_query($sql); 
$tabla = "";
$tabla.= "<table width='800' height='74' border='1'>";
$tabla.="<tr>
<td colspan='7' align='center' bgcolor='#04B4AE'>ALUMNOS</td>
</tr>
<tr>
<td>Numero</td>
<td>Cedula</td>
<td>Nombre</td>
<td>Apellido</td>
<td>Telefono</td>
<td>Correo</td>
</tr>
<tbody>
<tr>";

if ($result){  
$j=1;
while ($values = mysql_fetch_array($result)){
 $tabla.="
<tr>
<td>".$j."</td>
<td>".$values['cedula']."</td>
<td>".$values['nombre']."</td>
<td>".$values['apellido']."</td>
<td>".$values['telefono']."</td>
<td>".$values['correo']."</td>";  
$j++;
}
}
$tabla.="</tr>
</tbody>
</table>";
break;
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
$contenido =$conn->crearLista($contenido,$nombreProfe,$apellidoProfe,$nucleo,$expresion,$salon,$tabla);
$pdf = new MPDF('utf-8', array(216,330)); // Creamos una instancia de la clase HTML2FPDF
$pdf -> AddPage(); // Creamos una pgina
$pdf -> WriteHTML($contenido);//Volcamos el HTML contenido en la variable $html para crear el contenido del PDF
$pdf -> Output("".$nombreLista.".pdf", "D");//Volcamos el pdf generado con nombre doc.pdf. En este caso con el parametro D forzamos la descarga del mismo.*/
?>