
<?php
if(isset($_POST["idestudiante"])){
	require_once("connect_db.php");
	$cerrarVentana=false;
	$array = $_POST["idestudiante"];
    //recorriendo el arreglo de los numeros de cedulas 
	foreach ($array as $clave=>$idestudiante)
	   {
		  $idevento = $_POST["idevento"];
		  $sql="SELECT capacidad, cuporest FROM evento WHERE evento.idevento = $idevento";
		  $result = mysql_query($sql);
		  $registro = mysql_fetch_array($result);
		  $capacidad = $registro["capacidad"];
		  $cuporest = $registro["cuporest"];
		  if($cuporest < $capacidad){
						$result=mysql_query("INSERT INTO `participanteevento`(`idestudiante`, `idevento`) VALUES 
										                        ($idestudiante,$idevento)");
							if($result){
							$cuporest++;
						    $result=mysql_query("UPDATE evento SET cuporest=$cuporest WHERE idevento = $idevento");
							$result=mysql_query("UPDATE estudiante SET participante='SI' WHERE idestudiante = $idestudiante");
						    echo " <script language='javascript'>alert('El participante con el numero de id: '+$idestudiante+' se registro exitosamente en el evento');</script> ";
							$cerrarVentana=true;
							}else{
						    echo " <script language='javascript'>alert('El participante no se registro');</script> ";
							echo '<script language="javascript">window.opener.location.reload(); window.close(); </script> ';
							}
						
					    
					}else{
						
						echo " <script language='javascript'>alert('El participante con el numero de id: '+$idestudiante+' no se registro, el grupo esta lleno');</script> ";
						echo '  <script language="javascript">window.opener.location.reload(); window.close(); </script> ';
					}
	   }
		
		if($cerrarVentana == true){echo '  <script language="javascript">window.opener.location.reload(); window.close(); </script> ';}
	}
?>