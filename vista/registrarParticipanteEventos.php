<?php include_once '../controlador/inicioSesion.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
	<link href='js/jquery-ui.min.css' type='text/css' rel='stylesheet' >
	<script src="js/jquery1.9.js"></script>
	<script src="js/validarEstu.js"></script>
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>
	<script type="text/javascript">
        $(document).ready(function(){

            $(document).on('keydown', '.username', function() {
                
                var id = this.id;
                var splitid = id.split('_');
                var index = splitid[1];

                $( '#'+id ).autocomplete({
                    source: function( request, response ) {
                        $.ajax({
                            url: "buscarEstudiante.php",
                            type: 'post',
                            dataType: "json",
                            data: {
                                search: request.term,request:1
                            },
                            success: function( data ) {
                                response( data );
                            }
                        });
                    },
                    select: function (event, ui) {
                        $(this).val(ui.item.label); // display the selected text
                        var userid = ui.item.value; // selected id to input

                        // AJAX
                        $.ajax({
                            url: 'buscarEstudiante.php',
                            type: 'post',
                            data: {userid:userid,request:2},
                            dataType: 'json',
                            success:function(response){
                                
                                var len = response.length;

                                if(len > 0){
									var idestudiante = response[0]['idestudiante'];
                                    var cedula = response[0]['cedula'];
                                    var nombre = response[0]['nombre'];
                                    var apellido = response[0]['apellido'];
									
									
									document.getElementById('cedula_'+index).value = cedula;
                                    document.getElementById('nombre_'+index).value = nombre;
                                    document.getElementById('apellido_'+index).value = apellido;
                                    document.getElementById('idestudiante_'+index).value = idestudiante;
                                    
                                }
                                
                            }
                        });

                        return false;
                    }
                });
            });
            
            // Add more
            $('#addmore').click(function(){

                // Get last id 
                var lastname_id = $('.tr_input input[type=text]:nth-child(1)').last().attr('id');
                var split_id = lastname_id.split('_');

                // New index
                var index = Number(split_id[1]) + 1;

                // Create row with input elements
                var html = "<tr class='tr_input'><td><input type='text' class='username' id='cedula_"+index+"' placeholder='Ingrese la Cedula'></td><td><input type='text' class='name' id='nombre_"+index+"' ></td><td><input type='text' class='age' id='apellido_"+index+"' ></td><td><input type='text' class='age' name='idestudiante[idestudiante_"+index+"]' id='idestudiante_"+index+"' ></td></tr>";

                // Append data
                $('tbody').append(html);
                
            });
        });

    </script>
</head>
<body>
	  <!-- Navbar
    ================================================== -->
<?php

require("control/connect_db.php");
include_once("control/cambioformatofecha.php");
$idevento = $_GET["idevento"];
$nombre = $_GET["nombre"];
$tipoevento = $_GET["tipoevento"];
$fechainicio = $_GET["fechainicio"];
$capacidad = $_GET["capacidad"];
$fechacierre = $_GET["fechacierre"];
/*$sql="SELECT * FROM estudiante WHERE idestudiante NOT IN ( SELECT idestudiante FROM grupo WHERE grupo.idgrupo={$idgrupo})";
$result = mysql_query($sql);	
$registro = mysql_fetch_array($result);*/
?>
<!-- ======================================================================================================================== -->

	<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				
				
			</ul>
		</nav>

		<!-- Content page -->




		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> PARTICIPANTE DEL EVENTO <small></small></h1>
			</div>
			<p class="lead">     </p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#new" data-toggle="tab"></a></li>
					  	<li><a href="#list" data-toggle="tab"></a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">

									<div class="col-xs-12 col-md-10 col-md-offset-1">

									    <form class="expose"  enctype="multipart/form-data" action="control/guardarParticipanteDelEvento.php" method="post" name="formulario" onsubmit="return validarusuario(this)">
									    	<input type="hidden" name="idevento" id="idevento" value="<?php echo $idevento;?>">
											<div class="form-group label-floating">
											  <label class="control-label"> Tipo de Evento </label>
											  <input class="form-control" type="text" readOnly="readOnly" name="tipoevento" id="tipoevento" value="<?php echo $tipoevento;?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label"> Nombre del Evento</label>
											  <input class="form-control"  type="text" readOnly="readOnly" name="nombre"  id="nombre" value="<?php echo $nombre;?>" >
											</div>
											<div class="form-group label-floating">
											  <label class="control-label"> Fecha de Inicio </label>
											  <input class="form-control" type="text" readOnly="readOnly" name="fechainicio" id="fechainicio" value="<?php echo $fechainicio;?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label"> Fecha de Cierre </label>
											  <input class="form-control" type="text" readOnly="readOnly" name="fechacierre" id="fechacierre" value="<?php echo $fechacierre;?>">
											</div>
											
											
        
            <div class="container">
        
       <div class="container">
	   <table class="table table-hover text-center">
         <input type='button'  class="btn btn-info btn-raised btn-sm" value='Agregar PARTICIPANTE' id='addmore'>
		 <button type="submit" name="guardarEstudiante" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Registrar </button>
        <table class="table table-hover text-center" border='1' style='border-collapse: collapse;'>
            <thead>
            <tr>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Apellido</th>
               <th>ID</th>
            </tr>
            </thead>
            <tbody>
            <tr class='tr_input'>
                <td><input type='text' class='username' id='cedula_1'  placeholder='Ingrese la Cedula'></td>
                <td><input type='text' class='name' id='nombre_1' ></td>
                <td><input type='text' class='age' id='apellido_1' ></td>
                <td><input type='text' class='	' name="idestudiante[idestudiante_1]" id='idestudiante_1' ></td>
                
            </tr>
            </tbody>
        </table>
        <br>
       
    </div>
			
								</table>
											
									    </form>

									</div>



								</div>
							</div>
						</div>
						
	<!-- Notification
	<!--====== Scripts -->
	
</body>
</html>