
<?php

	$nombre=strtoupper($_POST['nombre']);
	$apellido=strtoupper($_POST['apellido']);
	$cedula=$_POST['cedula'];
	$correo=$_POST['correo'];
	$edad=$_POST['edad'];
	$telefono=$_POST['telefono'];
	$tipo_usuario=strtoupper($_POST['tipo_usuario']);
	$tipo_persona=strtoupper($_POST['tipoPersona']);
	$tipoPersona=$_POST['tipoPersona'];
	//profesor
	$estudio=strtoupper($_POST['estudio']);
	$especialidad=strtoupper($_POST['especialidad']);
	$curso=strtoupper($_POST['curso']);
	//estudiantes
	$participante=strtoupper($_POST['participante']);
	$integrante=strtoupper($_POST['integrante']);
	$pertenece=strtoupper($_POST['pertenece']);
	//
	$nombre_img = $_FILES['imagen']['name'];
	$tipo = $_FILES['imagen']['type'];
	$tamano = $_FILES['imagen']['size'];
	$clave=md5($_POST['clave']);
	require("connect_db.php");
	
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkcedula=mysql_query("SELECT * FROM usuario WHERE cedula='$cedula'");
	$check_cedula=mysql_num_rows($checkcedula);
			if($check_cedula>0){
				echo ' <script language="javascript">alert("Atencion, ya existe un usuario registrado con este numero de cedula, verifique sus datos");</script> ';
				echo ' <meta http-equiv="refresh" content="0; url=../usuario.php?tipopersona='.$tipoPersona.'"> ';
			}else{
				
			    $result=mysql_query("INSERT INTO usuario VALUES('$cedula','$nombre','$apellido','$correo','$edad','$tipo_usuario','$tipo_persona','$telefono','$clave','$nombre_img',1)");
				if($result){
					switch ($tipoPersona){
						case 'profesor':
						$result=mysql_query("INSERT INTO `profesor`(`estudio`, `especialidad`, `curso`, `cedulapersona`) VALUES ('$estudio', '$especialidad', '$curso', '$cedula')");
						break;
						case 'estudiantes':
						$result=mysql_query("INSERT INTO `estudiante`(`participante`, `integrante`, `cedulapersona`,`pertenece`) VALUES ('$participante', '$integrante', '$cedula','$pertenece')");
						break;
					}
					
				
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				echo ' <meta http-equiv="refresh" content="0; url=../usuario.php?tipopersona='.$tipoPersona.'"> ';
				// Recibo los datos de la imagen
				
				//Si existe imagen y tiene un tamaño correcto
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
				}else{
				echo ' <script language="javascript">alert("El usuario no se ha registrado");</script> ';
				echo ' <meta http-equiv="refresh" content="0; url=../usuario.php?tipopersona='.$tipoPersona.'"> ';	
				}
				
				
			}
			


?>