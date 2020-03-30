
<?php
if(isset($_POST["idestudiante"])){
	require_once("connect_db.php");
	$cerrarVentana=false;
	$array = $_POST["idestudiante"];
    //recorriendo el arreglo de los numeros de cedulas 
	foreach ($array as $clave=>$idestudiante)
	   {
		  $idcurso = $_POST["idcurso"];
		  $cedulaprofe = $_POST["cedulaprofe"];
		  $idsalon = $_POST["idsalon"];
		  $sql="SELECT capacidad, cuporest FROM salon WHERE salon.idsalon = $idsalon";
		  $result = mysql_query($sql);
		  $registro = mysql_fetch_array($result);
          $capacidad = $registro["capacidad"];
		  $cuporest = $registro["cuporest"];
		  if($cuporest < $capacidad){
						$result=mysql_query("INSERT INTO `cursofinal`(`idestudiante`,`idprofesor`, `idcurso`, `idsalon`) VALUES 
										                        ($idestudiante,$cedulaprofe, $idcurso, $idsalon)");
							if($result){
							$cuporest++;
						    $result=mysql_query("UPDATE salon SET cuporest=$cuporest WHERE idsalon = $idsalon");
						    //echo " <script language='javascript'>alert('El estudiante con el numero de id: '+$idestudiante+' se registro exitosamente en el curso.');</script> ";
							$cerrarVentana=true;
							}else{
						    echo " <script language='javascript'>alert('El estudiante no se registro');</script> ";
							echo '<script language="javascript">window.opener.location.reload(); window.close(); </script> ';
							}
						
					    if($cuporest == $capacidad){
							$result=mysql_query("UPDATE salon SET estatus='INDISPONIBLE' WHERE idsalon = $idsalon");
							$result=mysql_query("UPDATE curso SET estatus='LLENO' WHERE idcurso = $idcurso");
							}
					}else{
						$result=mysql_query("UPDATE curso SET estatus='LLENO' WHERE idcurso = $idcurso");
						$result=mysql_query("UPDATE salon SET estatus='INDISPONIBLE' WHERE idsalon = $idsalon");
						echo " <script language='javascript'>alert('El estudiante con el numero de id: '+$idestudiante+' no se registro, el curso esta lleno.');</script> ";
						echo '  <script language="javascript">window.opener.location.reload(); window.close(); </script> ';
					}
	   }
		
		if($cerrarVentana == true){echo '  <script language="javascript">window.opener.location.reload(); window.close(); </script> ';}
	}
?>