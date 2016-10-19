<?php
	
	$nombre=utf8_decode($_POST["nombre"]);
	$descripcion=utf8_decode($_POST["descripcion"]);
	$tipo=utf8_decode($_POST["tipo"]);
	$estado=utf8_decode($_POST["estado"]);
	$constructor=utf8_decode($_POST["constructor"]);
	$anio=utf8_decode($_POST["anio"]);
	$importancia=utf8_decode($_POST["importancia"]);
	$metros=$_POST['superficie'];

	include("coneccion.php");
	
	$query="INSERT INTO proyectos VALUES (null, '$nombre', '$anio', '$tipo', '$descripcion', '$importancia', '$estado', '$constructor','$metros')";
	$res=mysqli_query($link,$query);

	$query2="SELECT MAX(id_proyecto) as max FROM proyectos";
	$res2=mysqli_query($link, $query2);
	$datos=mysqli_fetch_assoc($res2);
	$id=$datos['max'];

	$query3="UPDATE imagenes SET id_proyecto='$id' WHERE id_proyecto=999";
	$res3=mysqli_query($link,$query3);

	mysqli_close($link);

	print "<script>alert(\"Proyecto Registrado Correctamente.\");window.location='crear_proyecto.php';</script>";


?>