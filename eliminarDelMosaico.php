<?php
	$DATA  = json_decode($_POST['data']);

	include("coneccion.php");


	$proyecto=$DATA[0]->proyecto;
	$query0="SELECT ruta_original FROM imagenes WHERE id_proyecto='$proyecto' and inicio=1";
	$res0=mysqli_query($link, $query0);
	while($datos=mysqli_fetch_assoc($res0)){
		$id=$datos['ruta_original'];
		$ruta="img/inicio/".$id.".jpg";
		unlink($ruta);
	}

	$query="UPDATE imagenes SET inicio=0 WHERE id_proyecto='$proyecto'";
	if(mysqli_query($link, $query)){
		echo "je";
	}

?>