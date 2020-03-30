
<?php
class Database
{
////////////////////////////////////////////////////////////////////////
	function OpenFile($archivo)
	{
		$fp = fopen($archivo,"r");
		$contenido = fread($fp, 900000);
		fclose($fp);
		return $contenido;
	}
//////////////////CREAR LISTA DE CURSO//////////////////////////
	function crearLista($contenido,$nombreProfe,$apellidoProfe,$nucleo,$expresion,$salon,$tabla)
	{
        if($salon == ""){$salon="";}else{$salon="Salon: ".$salon;}
		if($nucleo == ""){$nucleo="";}else{$nucleo="Nucleo: ".$nucleo;}
		if($nombreProfe == ""){$profesor="";}else{$profesor="Profesor: ".$nombreProfe." ".$apellidoProfe;}
		if($expresion == ""){$expresion="";}else{$expresion="Expresion: ".$expresion;}
		$contenido = str_replace("{profesor}",$profesor,$contenido);
		$contenido = str_replace("{nucleo}",$nucleo,$contenido);
		$contenido = str_replace("{expresion}",$expresion,$contenido);
		$contenido = str_replace("{salon}",$salon,$contenido);
		$contenido = str_replace("{tabla}",$tabla,$contenido);
		return $contenido;
	}     
////////////////////////////////        
//////////////////CREAR LISTA DE la BUSQUEDA GENERAL//////////////////////////
	function crearListaBusqueda($contenido,$tabla)
	{
		$contenido = str_replace("{tabla}",$tabla,$contenido);
		return $contenido;
	}     
//////////////////////////////// 
//////////////////CREAR LISTA DE la BUSQUEDA GENERAL EXPRESIONES//////////////////////////
	function crearListaBusquedaNucleos($contenido,$tabla,$tabla1)
	{
		$contenido = str_replace("{tabla}",$tabla,$contenido);
		$contenido = str_replace("{tabla1}",$tabla1,$contenido);
		return $contenido;
	}     
//////////////////////////////// 
}
?>
