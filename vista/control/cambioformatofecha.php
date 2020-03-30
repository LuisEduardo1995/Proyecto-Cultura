
<?php
/* NUESTRA */
function amd_a_dma($fecha)
{
	$fecha = str_replace("/", "-", $fecha);
	$fechacambiada = explode('-',$fecha);
	$ano=$fechacambiada[0];
	$mes=$fechacambiada[1];
	$dia=$fechacambiada[2];
	$array = array($dia,$mes,$ano);
	$fechacambiada=implode("-", $array);								
return $fechacambiada;
}

/* ANGLO */
function dma_a_amd($fecha)
{
	$fecha = str_replace("/", "-", $fecha);
	$fechacambiada = explode('-',$fecha);
	$ano=$fechacambiada[2];
	$mes=$fechacambiada[1];
	$dia=$fechacambiada[0];
	$array = array($ano,$mes,$dia);
	$fechacambiada=implode("-", $array);								
return $fechacambiada;
}
?>
