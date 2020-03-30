
<?php
include_once("control/conectar.php");

$request = $_POST['request'];   // request

// Get username list
if($request == 1){
    $search = $_POST['search'];

    $query = "SELECT usuario.*, estudiante.idestudiante 
			  FROM usuario, estudiante 
			  WHERE estudiante.cedulapersona = usuario.cedula and 
					usuario.tipo_persona='ESTUDIANTES' and usuario.cedula like'%".$search."%'";
    $result = mysqli_query($mysqli,$query);
    
    while($row = mysqli_fetch_array($result) ){
        $response[] = array("value"=>$row['idestudiante'],"value"=>$row['cedula'],"label"=>$row['nombre']." ".$row['apellido']);
    }

    // encoding array to json format
    echo json_encode($response);
    exit;
}

// Get details
if($request == 2){
    $userid = $_POST['userid'];
    $sql = "SELECT usuario.*, estudiante.idestudiante 
			  FROM usuario, estudiante 
			  WHERE estudiante.cedulapersona = usuario.cedula and 
					usuario.tipo_persona='ESTUDIANTES' and usuario.cedula=".$userid;

    $result = mysqli_query($mysqli,$sql);

    $users_arr = array();

    while( $row = mysqli_fetch_array($result) ){
        $userid = $row['cedula'];
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
		$idestudiante = $row['idestudiante'];
        $users_arr[] = array("idestudiante" => $idestudiante,"cedula" => $userid, "nombre" => $nombre,"apellido" => $apellido);
    }

    // encoding array to json format
    echo json_encode($users_arr);
    exit;
}

?>