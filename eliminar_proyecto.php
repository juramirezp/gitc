<?php
	$id=$_GET["id"];

	include("coneccion.php");

	$query="SELECT ruta_original as ruta FROM imagenes WHERE id_proyecto='$id'";
	$res=mysqli_query($link,$query);

	while($datos=mysqli_fetch_assoc($res)){
		$ruta=$datos['ruta'];
		unlink('img/original/'.$ruta.'.jpg');
		unlink('img/mini/'.$ruta.'.jpg');
		unlink('img/inicio/'.$ruta.'.jpg');
		unlink('img/tumb/'.$id.'.jpg');
	}

	$query2="DELETE FROM imagenes WHERE id_proyecto='$id'";
	if(mysqli_query($link, $query2)){
		
	}

	$query3="DELETE FROM proyectos WHERE id_proyecto='$id'";
	$res3=mysqli_query($link, $query3);

	while($datol=mysqli_fetch_assoc($res3)){
	}

	mysqli_close($link);

	print "<script>alert(\"Proyecto Eliminado Correctamente.\");window.location='editar_proyecto.php';</script>";
?>