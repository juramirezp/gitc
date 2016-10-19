<?php
include ('incompletos.php');
	incompletos();
	?>
<!DOCTYPE html>
<html>
<head>
	<title>EDITAR PROYECTO</title>
	<meta content="text/html" charset="iso-8859-1" http-equiv="Content-Type" />
	
	<?php
            include("top-manager.php");
        ?>

<div class="container main-admin" style="padding-top:5em; padding-bottom:5em;">
	

	<div class="col-md-12">
		<h2 class="col-sm-6 col-sm-offset-5" style="margin-top:2em; padding-bottom:15px;">Editar Proyectos</h2>

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
		$estado=utf8_decode($proyectos['estado']);
		$msj="'Esta seguro que desea eliminar el proyecto?'";
		echo "<div class='col-md-10 col-md-offset-1' id='lista_proyecto'>";
		echo 	"<div class='col-md-1'>";
		echo 		"<a href='editar_proyecto2.php?id=".$id."'><img src='img/tumb/".$img.".jpg' alt='".$nombre."' id='img_lista'></a>";
		echo 	"</div>
		   	 	<div class='col-md-10' id='datos_lista' style='padding-left:3em;'>
			 	<a href='editar_proyecto2.php?id=".$id."' id='titulo_lista' class='col-md-12'>".$nombre."</a>
			 	<p id='direccion_lista' class='col-md-12'>".$direccion."</p>	
			 	<p class='col-md-6'>Contructor: ".$constructor."</p>
			 	<p class='col-md-3'>A&ntilde;o: ".$anio."</p>
			 	<p class='col-md-6'><span class='label label-default'>".$estado."</span></p>
			 </div> </div>
			 <div class='col-md-1' id='btn_eliminar' style='margin-top:7em; margin-left:-9em;'>
			 <a href='eliminar_proyecto.php?id=".$id."' class='btn btn-default eliminar' onclick='return confirm(".$msj.")'>Eliminar</a>
			 </div>";

		
	};
	
mysqli_close($link);

	?>
	</div>
		
			
		
	</div>





</body>
</html>
