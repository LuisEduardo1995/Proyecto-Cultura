<?php
session_start();
$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido'];
$rutaimagen = $_SESSION['rutaimagen'];
$tipo_usuario = $_SESSION['tipo_usuario'];
$tipo_persona = $_SESSION['tipo_persona'];
$cedula = $_SESSION['cedula'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				 <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="../imagenesPerfil/<?php echo$rutaimagen;?>" alt="foto">
					<figcaption class="text-center text-titles"><?php echo$nombre." ". $apellido;?></figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<?php 
					switch($tipo_usuario){
						case 'ADMINISTRADOR':
						echo"<a href='index1.php'><li><i class='zmdi zmdi-caret-left' title='COORDINACIONES DE CULTURA A NIVEL NACIONAL'></i></a>";
						echo"<a href='../vista/mostrarModificarUsuario.php?cedula={$cedula}&tipo_persona={$tipo_persona}'target='blank'><li><i class='zmdi zmdi-settings'></i></a>";
						break;
						case 'ASISTENTE':
						echo"<a href='../vista/mostrarModificarUsuario.php?cedula={$cedula}&tipo_persona={$tipo_persona}'target='blank'><li><i class='zmdi zmdi-settings'></i></a>";
						break;
						case 'ESTUDIANTES':
						echo"<a href='../vista/mostrarModificarUsuario.php?cedula={$cedula}&tipo_persona={$tipo_persona}'target='blank'><li><i class='zmdi zmdi-settings'></i></a>";
						break;
						case 'PROFESOR':
						echo"<a href='../vista/mostrarModificarUsuario.php?cedula={$cedula}&tipo_persona={$tipo_persona}'target='blank'><li><i class='zmdi zmdi-settings'></i></a>";
						break;
					}
					?>
						
					
					
					<li>
					<a href="?cerrar=true"><i class="zmdi zmdi-power"></i></a>
					</li>
				</ul>
			</div>
			<?php 
					switch($tipo_usuario){
						case 'ADMINISTRADOR':?>
						<!-- SideBar Menu -->
			  <ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="index.php">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> INICIO
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> EVENTOS <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="registroevento.php"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> CREAR EVENTOS</a>
						</li>
						<li>
							<a href="agregarParticipanteDeEventos.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i></i> AGREGAR PARTICIPANTES</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> REGISTRO <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="usuario.php?tipopersona=asistente"><i class="zmdi zmdi-account zmdi-hc-fw"></i>REGISTRO DE ASISTENTE</a>
						</li>
						<li>
							<a href="usuario.php?tipopersona=profesor"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> REGISTRO DE PROFESOR</a>
						</li>
						<li>
							<a href="usuario.php?tipopersona=estudiantes"><i class="zmdi zmdi-face zmdi-hc-fw"></i> REGISTRO DE ESTUDIANTES</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-card zmdi-hc-fw"></i> DIVULGACI&Oacute;N<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
					    <li>
							<a href="salon.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i> SALON </a>
						</li>
						
						<li>
							<a href="curso.php"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> CURSOS </a>
						</li>
							
						<li>
							<a href="nucleos.php"><i class="zmdi zmdi-case zmdi-hc-fw"></i> N&Uacute;CLEOS </a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-card zmdi-hc-fw"></i> GRUPOS <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
					    <li>
							<a href="grupo.php"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> CREAR GRUPOS </a>
						</li>
						<li>
							<a href="agregarParticipanteDeGrupo.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i> AGREGAR INTEGRANTE </a>
						</li>
					</ul>
				</li>
			</ul>
			<?php       break;
						case 'ASISTENTE':?>
						<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="index.php">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> INICIO
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> EVENTOS <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="registroevento.php"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> CREAR EVENTOS</a>
						</li>
						<li>
							<a href="agregarParticipanteDeEventos.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i></i> AGREGAR PARTICIPANTES</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> REGISTRO <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="usuario.php?tipopersona=asistente"><i class="zmdi zmdi-account zmdi-hc-fw"></i>REGISTRO DE ASISTENTE</a>
						</li>
						<li>
							<a href="usuario.php?tipopersona=profesor"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> REGISTRO DE PROFESOR</a>
						</li>
						<li>
							<a href="usuario.php?tipopersona=estudiantes"><i class="zmdi zmdi-face zmdi-hc-fw"></i> REGISTRO DE ESTUDIANTES</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-card zmdi-hc-fw"></i> DIVULGACI&Oacute;N<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
					    <li>
							<a href="salon.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i> SALON </a>
						</li>
						
						<li>
							<a href="curso.php"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> CURSOS </a>
						</li>
							
						<li>
							<a href="nucleos.php"><i class="zmdi zmdi-case zmdi-hc-fw"></i> N&Uacute;CLEOS </a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-card zmdi-hc-fw"></i> GRUPOS <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
					    <li>
							<a href="grupo.php"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> CREAR GRUPOS </a>
						</li>
						<li>
							<a href="agregarParticipanteDeGrupo.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i> AGREGAR PARTICIPANTES </a>
						</li>
					</ul>
				</li>
			</ul>
			<?php       break;
						case 'ESTUDIANTES':?>
						<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="index.php">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> INICIO
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> EVENTOS <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="registroevento.php"><i class="zmdi zmdi-timer zmdi-hc-fw"></i>EVENTOS DISPONIBLES </a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-card zmdi-hc-fw"></i> DIVULGACION<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
					    <li>
							<a href="nucleos.php"><i class="zmdi zmdi-case zmdi-hc-fw"></i> CURSOS DISPONIBLES </a>
						</li>
					</ul>
				</li>
			</ul>
			<?php       break;
						case 'PROFESOR':?>
			<!-- SideBar Menu -->
			  <ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="index.php">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> INICIO
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> EVENTOS <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="registroevento.php"><i class="zmdi zmdi-timer zmdi-hc-fw"></i> EVENTOS DISPONIBLES </a>
						</li>
					</ul>
				</li>
				
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-card zmdi-hc-fw"></i> DIVULGACION<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
					    <li>
							<a href="nucleos.php"><i class="zmdi zmdi-case zmdi-hc-fw"></i> CURSOS A DICTAR </a>
						</li>
					</ul>
				</li>
			</ul>
			<?php break;
					}
					?>
			
		</div>
	</section>

</body>
</html>