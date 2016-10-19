
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<meta charset="utf-8">
	<?php
		include("top.php");
	?>

	<section id="home">
		<div id="mygallery" >
		<?php
		    include("coneccion.php");

			$query1="SELECT * FROM proyectos ORDER BY prioridad ASC";
			$res1=mysqli_query($link, $query1);
			$rutas=array[];

			while($proyectos=mysqli_fetch_assoc($res1)){
				$id=$proyectos['id_proyecto'];
				$nombre=$proyectos['nombre'];
				$query2="SELECT ruta_original as ruta FROM imagenes WHERE id_proyecto='$id' AND inicio=1";
				$res2=mysqli_query($link, $query2);

				while($imagenes=mysqli_fetch_assoc($res2)){
					$valor=$imagenes['ruta'];
					array_push($rutas,$valor);
				}
			}
			shuffle($rutas);
			$largo=count($rutas);
			while($i=0;i<$largo;i++){
				if($id==39){
					echo 	"<a href='http://plazadinamarca.cl/'>";
				}else{
					echo 	"<a href='gal_inicio.php?id=".$rutas[i]."'>";
				}

					echo	"<img alt='".$nombre."' src='img/mini/".$rutas[i].".jpg'/>
							</a>";
			}
			mysqli_close($link);
		?>
		</div>
	</section>

	<?php
		include("footer.php");
	?>

	<script src="js/jquery.justifiedGallery.min.js"></script>
	<script type="text/javascript">
		var mediaquery = window.matchMedia("(min-width: 768px)");

		if (mediaquery.matches) {
		} else {
		    window.location.href = "movil/indexm.php";
	    }

		$("#mygallery").justifiedGallery({
			rowHeight: 230,
            maxRowHeight: 260,
            margins: 8,
            lastRow: 'hide'
		});
	</script>
</body>
</html>
