<?php
$idp= $_GET["id"];
?>

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
	<div class="col-md-9 col-md-offset-3" style="margin-top:6.5em; padding-top:2em;">
	<a href="#" onclick="history.back()" style=" margin:0; position:fixed; right:1.5em; left:auto; bottom:0; font-size: 2em; z-index:99; color:#b02042;">
	<span class="glyphicon glyphicon-circle-arrow-left" style="color:#b02042"></span>
</a>

		<?php
include("coneccion.php");

	$query1="SELECT * FROM proyectos WHERE id_proyecto='$idp'";
	$res1=mysqli_query($link, $query1);


	while($proyectos=mysqli_fetch_assoc($res1)){
		$idp=$proyectos['id_proyecto'];
		$nombrep=$proyectos['nombre'];
		$direccionp=$proyectos['descripcion'];
		$aniop=$proyectos['anio'];
		$constructorp=$proyectos['constructor'];
		$estadop=$proyectos['estado'];
		$categoriap=$proyectos['tipo'];
		$metrosp=$proyectos['superficie'];
	}

?>
		<div class="col-md-12" id="titulo_proyecto"><?php echo $nombrep  ;?></div>
		<div class="col-md-12 parrafo_proyecto">Ubicaci&oacute;n: <?php echo $direccionp  ;?></div>
		<div class="col-md-5 parrafo_proyecto">Tipo de Proyecto: <?php echo $categoriap  ;?></div>
		<div class="col-md-6 parrafo_proyecto">Constructor: <?php echo $constructorp  ;?></div>
		<div class="col-md-5 parrafo_proyecto">A&ntilde;o: <?php echo $aniop  ;?></div>
		<div class="col-md-6 parrafo_proyecto">Superficie: <?php echo $metrosp  ;?> Mts&sup2;</div>

		<div class="col-md-12" id="contenido">
			<div id="grid">
			<?php
					$query2="SELECT ruta_original as ruta FROM imagenes WHERE id_proyecto='$idp'";
					$res2=mysqli_query($link, $query2);
					while($imagenes=mysqli_fetch_assoc($res2)){
						echo "	<a href='gal_inicio.php?id=".$imagenes['ruta']."' class='link-imagen'>
								<section class='columna'>
								<img src='img/tumb/".$imagenes['ruta'].".jpg' alt=''>
								</section>
								</a>";
					}
					mysqli_close($link);
				?>
			</div>


		</div>
	</div>

	<?php
		include("footer.php");
	?>

</body>
</html>
