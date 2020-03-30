<?php include_once '../controlador/inicioSesion.php';?>
<?php
include_once("control/conectar.php");

$request = $_POST['request'];   // request
// Get username list
if($request == 1){
    $search = $_POST['search'];

    $query = "SELECT * FROM profesor WHERE cedula like'%".$search."%'";
    $result = mysqli_query($mysqli,$query);
    
    while($row = mysqli_fetch_array($result) ){
        $response[] = array("value"=>$row['cedula'],"label"=>$row['nombre']." ".$row['apellido']);
    }

    // encoding array to json format
    echo json_encode($response);
    exit;
}

// Get details
if($request == 2){
    $userid = $_POST['userid'];
    $sql = "SELECT * FROM profesor WHERE cedula=".$userid;

    $result = mysqli_query($mysqli,$sql);

    $users_arr = array();

    while( $row = mysqli_fetch_array($result) ){
        $userid = $row['cedula'];
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];

        $users_arr[] = array("cedula" => $userid, "nombre" => $nombre,"apellido" => $apellido);
    }

    // encoding array to json format
    echo json_encode($users_arr);
    exit;
}

// Get username list
if($request == 3){
    $search = $_POST['search'];

    $query = "SELECT * FROM estudiante WHERE cedula like'%".$search."%'";
    $result = mysqli_query($mysqli,$query);
    
    while($row = mysqli_fetch_array($result) ){
        $response[] = array("value"=>$row['cedula'],"label"=>$row['nombre']." ".$row['apellido']);
    }

    // encoding array to json format
    echo json_encode($response);
    exit;
}

// Get details
if($request == 4){
    $userid = $_POST['userid'];
    $sql = "SELECT * FROM estudiante WHERE cedula=".$userid;

    $result = mysqli_query($mysqli,$sql);

    $users_arr = array();

    while( $row = mysqli_fetch_array($result) ){
        $userid = $row['cedula'];
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];

        $users_arr[] = array("cedula" => $userid, "nombre" => $nombre,"apellido" => $apellido);
    }

    // encoding array to json format
    echo json_encode($users_arr);
    exit;
}
// Get username list
if($request == 5){
    $search = $_POST['search'];

    $query = "SELECT * FROM usuario WHERE cedula like'%".$search."%' and tipo_usuario='ASISTENTE'";
    $result = mysqli_query($mysqli,$query);
    
    while($row = mysqli_fetch_array($result) ){
        $response[] = array("value"=>$row['cedula'],"label"=>$row['nombre']." ".$row['apellido']);
    }

    // encoding array to json format
    echo json_encode($response);
    exit;
}

// Get details
if($request == 6){
    $userid = $_POST['userid'];
    $sql = "SELECT * FROM usuario WHERE cedula=".$userid." and tipo_usuario='ASISTENTE'";

    $result = mysqli_query($mysqli,$sql);

    $users_arr = array();

    while( $row = mysqli_fetch_array($result) ){
        $userid = $row['cedula'];
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];

        $users_arr[] = array("cedula" => $userid, "nombre" => $nombre,"apellido" => $apellido);
    }

    // encoding array to json format
    echo json_encode($users_arr);
    exit;
}
?>