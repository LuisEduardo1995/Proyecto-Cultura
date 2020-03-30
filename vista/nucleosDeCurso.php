<?php include_once '../controlador/inicioSesion.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>M&Uacute;SICA</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body>
	  <!-- Navbar
    ================================================== -->
<?php

include("include/menu.php");
$nucleo=$_GET["nucleo"];
?>
<!-- ======================================================================================================================== -->

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				
				<li>
					<a href="busquedaGeneralUsuarios.php" >
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-modal-help">
						<i class="zmdi zmdi-help-outline"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- Content page -->
		<?php 
		if($nucleo == "musica"){?>
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"> EXPRESI&Oacute;N M&Uacute;SICAL <small></small></h1>
			</div>
		</div>
		<div class="full-box text-center" style="padding: 30px 10px;">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					CUATRO
				</div>
				<div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <a href ="instrumentos.php?tipo=CUATRO"><img src="./assets/img/cuatro.jpg" alt="user-picture"></a>
                    </div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					GUITARRA POPULAR VENEZOLANA
				</div>
				<div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                       <a href ="instrumentos.php?tipo=GUITARRA POPULAR VENEZOLA"><img src="./assets/img/guitarra.jpg" alt="user-picture"></a>
                    </div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					BANDOLA
				</div>
				<div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <a href ="instrumentos.php?tipo=BANDOLA"><img src="./assets/img/bandola.jpg" alt="user-picture"></a>
                    </div>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					MANDOLINA
				</div>
				<div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <a href ="instrumentos.php?tipo=MANDOLINA"><img src="./assets/img/mandolinas.jpg" alt="user-picture"></a>
                    </div>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					PIANO
				</div>
				<div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <a href ="instrumentos.php?tipo=PIANO"><img src="./assets/img/piano.jpg" alt="user-picture"></a>
                    </div>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					PERCUSI&Oacute;N AFRO VENEZOLANA
				</div>
				<div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <a href ="instrumentos.php?tipo=PERCUSION AFRO VENEZOLANA"><img src="./assets/img/percusion1.jpg" alt="user-picture"></a>
                    </div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					PERCUSI&Oacute;N LATINA
				</div>
				<div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <a href ="instrumentos.php?tipo=PERCUSION LATINA"><img src="./assets/img/percusion.jpg" alt="user-picture"></a>
                    </div>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					CANTO
				</div>
				<div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <a href ="instrumentos.php?tipo=CANTO"><img src="./assets/img/canto.jpg" alt="user-picture"></a>
                    </div>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					MARACAS
				</div>
				<div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <a href ="instrumentos.php?tipo=MARACAS"><img src="./assets/img/maracas.jpg" alt="user-picture"></a>
                    </div>
				</div>
			</article>
		</div>
		<?php
		}
		if($nucleo == "cine"){?>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"> EXPRESI&Oacute;N CINEMATOGRAF&Iacute;CA <small></small></h1>
			</div>
		</div>
		<div class="full-box text-center" style="padding: 30px 10px;">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					HISTORIA
				</div>
				<div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <a href ="instrumentos.php?tipo=HISTORIA"><img src="./assets/img/historia.jpg" alt="user-picture"></a>
                    </div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					DIRECCI&Oacute;N
				</div>
				<div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <a href ="instrumentos.php?tipo=DIRECCION"><img src="./assets/img/direccion.jpg" alt="user-picture"></a>
                    </div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					APRECIACI&Oacute;N CINEMATOGRAF&Iacute;CA
				</div>
				<div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <a href ="instrumentos.php?tipo=APRECIACION CINEMATOGRAFICA"><img src="./assets/img/apreciacion.jpg" alt="user-picture"></a>
                    </div>
				</div>
			</article>
		</div>
		<?php
		}
		if($nucleo == "artesesce"){?>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles">  EXPRESI&Oacute;N ARTE ESC&Eacute;NICAS <small></small></h1>
			</div>
		</div>
		<div class="full-box text-center" style="padding: 30px 10px;">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					DANZA CONTEMPOR&Aacute;NEA
				</div>
				<div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                       <a href ="instrumentos.php?tipo=DANZA CONTEMPORANEA"> <img  src="./assets/img/danza.jpg" alt="user-picture"></a>
                    </div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					DANZA TRADICCIONAL
				</div>
				<div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                       <a href ="instrumentos.php?tipo=DANZA TRADICCIONAL"> <img src="./assets/img/tradicional.png" alt="user-picture"></a>
                    </div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					TEATRO
				</div>
				<div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                       <a href ="instrumentos.php?tipo=TEATRO"> <img src="./assets/img/teatro.jpg" alt="user-picture"></a>
                    </div>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					CAPOERIA
				</div>
				<div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                       <a href ="instrumentos.php?tipo=CAPOERIA"><img src="./assets/img/capoeira.jpg" alt="user-picture"></a>
                    </div>
				</div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					ACROBACIA
				</div>
				<div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                     <a href ="instrumentos.php?tipo=ACROBACIA"><img src="./assets/img/acrobacia.jpg" alt="user-picture"></a>
                    </div>
				</div>
			</article>
		</div>
		<?php
		}
		if($nucleo == "plastica"){?>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"> EXPRESI&Oacute;N ARTES PL&Aacute;STICA <small></small></h1>
			</div>
		</div>
		<div class="full-box text-center" style="padding: 30px 10px;">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					DIBUJO Y PINTURA
				</div>
				<div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                     <a href ="instrumentos.php?tipo=DIBUJO Y PINTURA"><img src="./assets/img/pintura.jpg" alt="user-picture"></a>
                    </div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					CER&Aacute;MICA ESCULTURAL
				</div>
				<div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                     <a href ="instrumentos.php?tipo=CERAMICA ESCULTURAL"><img src="./assets/img/ceramica.jpg" alt="user-picture"></a>
                    </div>
			</article>
		</div>
		<?php
		}
		if($nucleo == "artesania"){?>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"> EXPRESI&Oacute;N ARTESAN&Iacute;A <small></small></h1>
			</div>
		</div>
		<div class="full-box text-center" style="padding: 30px 10px;">
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					LUTHERIA
				</div>
				<div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                     <a href ="instrumentos.php?tipo=LUTHERIA"><img src="./assets/img/lutheria.jpg" alt="user-picture"></a>
                    </div>
			</article>
			<article class="full-box tile">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					ELABORACI&Oacute;N DE CUATRO VENEZOLANO, MANDOLINA Y GUITARRA
				</div>
				<div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                     <a href ="instrumentos.php?tipo=ELABORACION DE CUATRO"><img src="./assets/img/taller.jpg" alt="user-picture"></a>
                    </div>
			</article>
		</div>
		<?php
		}
		?>
<!---->
		</div>
	</section>

	<!-- Notifications area -->
	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notas <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>
			<div class="list-group">
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-triangle"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">17m</div>
				      	<h4 class="list-group-item-heading"> Nuevo Eveneto </h4>
				      	<p class="list-group-item-text"> Debes confirmar el evento musical </p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-octagon"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">15m</div>
				      	<h4 class="list-group-item-heading">Lugar del Evento</h4>
				      	<p class="list-group-item-text"> Aun no se ha proporcionado el lugar </p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
				<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-help"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">10m</div>
				      	<h4 class="list-group-item-heading"> Solicitud para artes escenicas </h4>
				      	<p class="list-group-item-text"> Se debe plantear en rectorado el evento</p>
				    </div>
				</div>
			  	<div class="list-group-separator"></div>
			</div>

		</div>
	</section>

	<!-- Dialog help -->
	<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Help">
	  	<div class="modal-dialog" role="document">
		    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    	<h4 class="modal-title">AYUDA</h4>
			    </div>
			    <div class="modal-body">
			        <p>
			        	Debe contactar al soporte tecnico de la aplicacion al correo soportecnicoUBV@gmail.com
			        </p>
			    </div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
		      	</div>
		    </div>
	  	</div>
	</div>
	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>