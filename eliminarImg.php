<?php
	$DATA  = json_decode($_POST['data']);

	include("coneccion.php");
	
	

	for ($i=0; $i < count($DATA); $i++) {
	//Por cada objeto que encuentra en el array lo separa y crea una query
	$id=$DATA[$i]->id;
    $query1="DELETE FROM imagenes WHERE ruta_original='$id'";
	if(mysqli_query($link, $query1)){
		echo "kjdn";
	}
	unlink('img/original/'.$id.'.jpg');
	unlink('img/mini/'.$id.'.jpg');
	unlink('img/inicio/'.$id.'.jpg');
	unlink('img/tumb/'.$id.'.jpg');
	}

	mysqli_close($link);
?>