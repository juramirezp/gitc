
<!DOCTYPE html>
<html>
<head>
	<title>NUESTROS PROYECTOS</title>
	<meta content="text/html" charset="iso-8859-1" http-equiv="Content-Type" />
	<?php
		include("top.php");
	?>

	<div class="col-md-1  col-md-offset-1 menu-admin" style="margin-top:10em; position:fixed;">
		<div class="btn-group-vertical" role="group" aria-label="...">
			<a href="proyectos.php" class="btn btn-default">Todos</a>
		  	<a href="vista_tipo.php?tipo=Vivienda" class="btn btn-default">Vivienda</a>
  			<a href="vista_tipo.php?tipo=Clinico" class="btn btn-default">Clinico</a>
  			<a href="vista_tipo.php?tipo=Renovacion" class="btn btn-default">Renovaci&oacute;n</a>
			<a href="vista_tipo.php?tipo=Turistico" class="btn btn-default">Turistico</a>
		</div>
	</div>

	<div class="col-md-9 col-md-offset-2" style="margin-top:6.5em; padding-top:2em;">
	<?php

	$filtro=$_GET["tipo"];

	include("coneccion.php");
	mysql_set_charset('utf8');
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
		$constructor=utf8_decode($proyectos['constructor']);
		$estado=utf8_decode($proyectos['estado']);
		$tipo=$proyectos['tipo'];

		echo "<div class='col-md-11 col-md-offset-1' id='lista_proyecto'>";
		echo 	"<div class='col-md-1'>";
		echo 		"<a href='ver_proyecto.php?id=".$id."'><img src='img/mini/".$img.".jpg' alt='".$nombre."' id='img_lista'></a>";
		echo 	"</div>
		   	 	<div class='col-md-10' id='datos_lista'>
			 	<a href='ver_proyecto.php?id=".$id."' id='titulo_lista' class='col-md-12'>".$nombre."</a>
			 	<p id='direccion_lista' class='col-md-12'>".$direccion."</p>
			 	<p class='col-md-6'>Contructor: ".$constructor."</p>
			 	<p class='col-md-5'>A&ntilde;o: ".$anio."</p>
			 	<p class='col-md-8'><span class='label label-default'>".$tipo."</span><span class='label label-default'>".$estado."</span></p>

			 </div></div>";


	};



	?>
	</div>

	<?php
		include("footer.php");
	?>

	<script type="text/javascript">
		var mediaquery = window.matchMedia("(min-width: 768px)");

		if (mediaquery.matches) {
		} else {
		    window.location.href = "movil/proyectosm.php";
	    }
	</script>

</body>
</html>
