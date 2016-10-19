<?php
	$id=$_POST["id"];
	$nombre=utf8_decode($_POST["nombre"]);
	$descripcion=utf8_decode($_POST["descripcion"]);
	$tipo=utf8_decode($_POST["tipo"]);
	$estado=utf8_decode($_POST["estado"]);
	$constructor=utf8_decode($_POST["constructor"]);
	$anio=utf8_decode($_POST["anio"]);
	$importancia=utf8_decode($_POST["importancia"]);
	$metros=$_POST["superficie"];

	include("coneccion.php");
	
	$query="UPDATE proyectos SET
	nombre='$nombre', anio='$anio', tipo='$tipo', descripcion='$descripcion', prioridad='$importancia', estado='$estado', constructor='$constructor', superficie='$metros'
	WHERE id_proyecto='$id'";
	$res=mysqli_query($link,$query);

	$query3="UPDATE imagenes SET id_proyecto='$id' WHERE id_proyecto=999";
	$res3=mysqli_query($link,$query3);

	mysqli_close($link);

	print "<script>alert(\"Proyecto Actualizado Correctamente.\");window.location='editar_proyecto.php';</script>";


?>