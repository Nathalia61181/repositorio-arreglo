<?php
//echo "Bienvenido a utlies Eco S.A";
	
	$utiles = array("Cuadernos","esferos","colores","borrador","tajalapiz","pegamento","tijeras");
	$utiles[]= "maleta";
	//	print_r($utiles);


// $nombre = "karla :P";
 //echo $nombre;
	
//	unset ($nombre);
//	echo $nombre;
	
	
//nombre = ["Angie","harick","atha","ipe","rol"];
	//set($nombre[3]);
//rnt_r ($nombre);
	
	$utilesEliminar = "Cuadernos";
	$boton = array_search($utilesEliminar,$utiles);
	
	if 	($boton!==false){

	 
	  unset($utiles[$boton]);
	}
	
	print_r($utiles);
	
?>
