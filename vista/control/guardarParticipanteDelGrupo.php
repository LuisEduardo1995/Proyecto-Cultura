
<?php
if(isset($_POST["idestudiante"])){
	require_once("connect_db.php");
	$cerrarVentana=false;
	$array = $_POST["idestudiante"];
    //recorriendo el arreglo de los numeros de cedulas 
	foreach ($array as $clave=>$idestudiante)
	   {
		  $idgrupo = $_POST["idgrupo"];
		  $cedulaprofe = $_POST["cedulaprofe"];
		  $sql="SELECT capacidad, cuporest FROM grupo WHERE grupo.idgrupo = $idgrupo";
		  $result = mysql_query($sql);
		  $registro = mysql_fetch_array($result);
		  $capacidad = $registro["capacidad"];
		  $cuporest = $registro["cuporest"];
		  if($cuporest < $capacidad){
						$result=mysql_query("INSERT INTO `participantegrupo`(`idestudiante`, `idgrupo`) VALUES 
										                        ($idestudiante,$idgrupo)");
							if($result){
							$cuporest++;
						    $result=mysql_query("UPDATE grupo SET cuporest=$cuporest WHERE idgrupo = $idgrupo");
							$result=mysql_query("UPDATE estudiante SET integrante='SI' WHERE idestudiante = $idestudiante");
						    echo " <script language='javascript'>alert('El participante con el numero de id: '+$idestudiante+' se registro exitosamente en el grupo');</script> ";
							$cerrarVentana=true;
							}else{
						    echo " <script language='javascript'>alert('El participante no se registro');</script> ";
							echo '<script language="javascript">window.opener.location.reload(); window.close(); </script> ';
							}
						
					    if($cuporest == $capacidad){
							$result=mysql_query("UPDATE grupo SET estatus='LLENO' WHERE idgrupo = $idgrupo");
							}
					}else{
						$result=mysql_query("UPDATE grupo SET estatus='LLENO' WHERE idgrupo = $idgrupo");
						echo " <script language='javascript'>alert('El participante con el numero de id: '+$idestudiante+' no se registro, el grupo esta lleno');</script> ";
						echo '  <script language="javascript">window.opener.location.reload(); window.close(); </script> ';
					}
	   }
		
		if($cerrarVentana == true){echo '  <script language="javascript">window.opener.location.reload(); window.close(); </script> ';}
	}
?>