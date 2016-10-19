<?php

	$datos=$_POST['id'];

	include("coneccion.php");
	$cont=0;

	foreach ($datos as $id) {
		$query="UPDATE proyectos SET prioridad='$cont' WHERE id_proyecto='$id'";
		if(mysqli_query($link, $query)){
			echo "";
		}
		$cont++;
	}
    
	mysql_close($link);

	print "<script>alert(\"Orden de Proyectos Actualizado Correctamente.\");window.location='orden.php';</script>";
?>