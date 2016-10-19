<?php
	$DATA  = json_decode($_POST['data']);

	include("coneccion.php");

	$var="";
	for ($i=0; $i < 1; $i++) {
	//Por cada objeto que encuentra en el array lo separa y crea una query
	$id_n=$DATA[$i]->n;
	$id_a=$DATA[$i]->a;
	$proy=$DATA[$i]->p;

	$q="UPDATE imagenes SET principal=0 WHERE id_proyecto='$proy'";
	if(mysqli_query($link, $q)){

	}

	$q1="UPDATE imagenes SET principal=1 WHERE id_proyecto='$proy' AND ruta_original='$id_n'";
	if(mysqli_query($link, $q1)){

	}
	$var=$id_n."jdn".$id_a."jdn".$proy;
	}
	return $var;

?>