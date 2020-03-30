<?php 
require("connect_db.php");
    $cedula=$_POST['cedula'];
	$tipopersona=$_POST['tipopersona'];
    $nombre=strtoupper($_POST['nombre']);
	$apellido=strtoupper($_POST['apellido']);
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];
	$edad=$_POST['edad'];
	//profesor
	$estudio=strtoupper($_POST['estudio']);
	$especialidad=strtoupper($_POST['especialidad']);
	$curso=strtoupper($_POST['curso']);
	//estudiantes
	$participante=$_POST['participante'];
	$integrante=$_POST['integrante'];
	$tipo_usuario=strtoupper($_POST['tipo_usuario']);
	/////
	$nombre_img = $_FILES['imagen']['name'];
	$tipo = $_FILES['imagen']['type'];
	$tamano = $_FILES['imagen']['size'];
	
	$result=mysql_query("UPDATE usuario SET nombre='$nombre',apellido='$apellido',
                                          correo='$correo',telefono='$telefono',
										  edad='$edad',tipo_usuario='$tipo_usuario', rutaimagen = '$nombre_img'
					    WHERE cedula = $cedula");

    
if($result){
	switch ($tipopersona){
	case 'PROFESOR':
	$result=mysql_query("UPDATE profesor SET estudio='$estudio',especialidad='$especialidad', curso='$curso'
					    WHERE cedulapersona = $cedula");
	break;
	case 'ESTUDIANTES':
	$result=mysql_query("UPDATE estudiante SET participante='$participante',integrante='$integrante'
					    WHERE cedulapersona = $cedula");
	break;
}
if (($nombre_img == !NULL) && ($_FILES['imagen']['size'] <= 5000000)) 
				{
				   //indicamos los formatos que permitimos subir a nuestro servidor
				   if (($_FILES["imagen"]["type"] == "image/gif")
				   || ($_FILES["imagen"]["type"] == "image/jpeg")
				   || ($_FILES["imagen"]["type"] == "image/jpg")
				   || ($_FILES["imagen"]["type"] == "image/png"))
				   {
					  // Ruta donde se guardarán las imágenes que subamos
					  $directorio = $_SERVER['DOCUMENT_ROOT'].'/SIREDGCUL/imagenesPerfil/';
					  // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
					  move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_img);
					} 
					else 
					{
					   //si no cumple con el formato
					   echo "No se puede subir una imagen con ese formato ";
					}
				} 
				else 
				{
				   //si existe la variable pero se pasa del tamaño permitido
				   if($nombre_img == !NULL) echo "La imagen es demasiado grande "; 
				}
echo ' <script language="javascript">alert("Se modificaron los datos exitosamente");</script> ';
echo '  <script language="javascript">window.opener.location.reload(); window.close(); </script> ';
}else{
echo ' <script language="javascript">alert("No se modificaron los datos");</script> ';
echo '  <script language="javascript">window.opener.location.reload();window.close(); </script> ';
}
?>