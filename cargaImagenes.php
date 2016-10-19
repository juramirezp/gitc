<?php

	$DATA=json_decode($_POST['data']);
	for ($i=0; $i < count($DATA); $i++) {
	$id=$DATA[$i]->id;
	}
	include("coneccion.php");

	$query0="SELECT id_proyecto FROM imagenes WHERE ruta_original='$id'";
	$res0=mysqli_query($link, $query0);
	while($datos0=mysqli_fetch_assoc($res0)){
		$id=$datos0['id_proyecto'];
	}

	$query="SELECT ruta_original as ruta FROM imagenes WHERE id_proyecto='$id'";
	$res=mysqli_query($link,$query);

	$html="<div class='galleria col-md-9'>";

	while($imagenes=mysqli_fetch_assoc($res)){
		$html=$html."<a href='img/original/".$imagenes['ruta'].".jpg'><img src='img/mini/".$imagenes['ruta'].".jpg' data-big='img/original/".$imagenes['ruta'].".jpg'></a>";
	}

	$query2="SELECT nombre FROM proyectos WHERE id_proyecto='$id'";
	$res2=mysqli_query($link, $query2);

	$nombre="jbs";

	while($datos=mysqli_fetch_assoc($res2)){
		$nombre=$datos['nombre'];
	}
	
	$html=$html."	</div>
			<div class='col-md-3' id='col_datos'>
				<a href='' id='x'>x</a>
				<p id='direccion_lista' style='margin-top:2em;'>Proyecto</p>
				<p id='titulo_lista'>".$nombre."</p>
				<a href='ver_proyecto.php?id=".$id."' id='ver_proyecto'>Ver Proyecto</a>
				<img src='img/gitc-logo.jpg' id='logo_galeria'>
			</div>";

	echo $html;

	mysqli_close($link);						


?>

