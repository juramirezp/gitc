<?php
	$DATA  = json_decode($_POST['data']);

	include("coneccion.php");


	$proyecto=$DATA[0]->proy;
	echo $proyecto;
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

	for ($i=0; $i < count($DATA); $i++) {
	//Por cada objeto que encuentra en el array lo separa y crea una query
	$ruta=$DATA[$i]->id;
    $query1="UPDATE imagenes SET inicio=1 WHERE ruta_original='$ruta'";
	if(mysqli_query($link, $query1)){
		echo "je";
	}
	}

?>