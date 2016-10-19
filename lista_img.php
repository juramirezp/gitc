<?php
include ('incompletos.php');
	incompletos();
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Actualizar Galreria</title>
	<meta content="text/html" charset="iso-8859-1" http-equiv="Content-Type" />
	<?php
            include("top-manager.php");
        ?>
<div class="col-md-12" style="text-align:right; color:#b02042; margin-top:6em;">
	<h3>Modificar Imagenes de Galeria e Imagen de Proyecto</h3>
</div>

<div class="container-fluid" id="proyectos_img">
	
	<?php

	include("coneccion.php");
	
	$query1="SELECT * FROM proyectos ORDER BY prioridad ASC";
	$res1=mysqli_query($link, $query1);

	while($proyectos=mysqli_fetch_assoc($res1)){
		$id=$proyectos['id_proyecto'];	
		$query2="SELECT ruta_original as ruta FROM imagenes WHERE id_proyecto='$id' AND principal=1";
		$res2=mysqli_query($link, $query2);
		$imagen=mysqli_fetch_assoc($res2);
		$img=$imagen['ruta'];
		$nombre=$proyectos['nombre'];
		$direccion=$proyectos['descripcion'];
		$anio=$proyectos['anio'];
		$constructor=$proyectos['constructor'];
		$estado=$proyectos['estado'];
		
		echo "<div class='col-md-6' id='lista_proyecto'>";
		echo 	"
				<div class='col-md-12' id='datos_lista'>
				<a href='imagenesInicio.php?id=".$id."' class='col-md-4'>
					<img src='img/tumb/".$img.".jpg' class='imgEdit imgSelected' name=".$img."></a>			 	
			 	<a href='imagenesInicio.php?id=".$id."' id='titulo_lista' class='col-md-6' style='font-size:1.3em; margin-top:3em;'>".$nombre."</a>
			 	</div>

			 </div>";

	};
	


	?>
		
</div>

</body>
</html>
