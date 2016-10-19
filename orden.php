
<!DOCTYPE html>
<html>
<head>
	<title>Prioridad de Proyectos</title>
	<meta content="text/html" charset="iso-8859-1" http-equiv="Content-Type" />
	<?php
		include("top-manager.php");
	?>

	<section id="mod_orden">
		<form action="actualizar_orden.php" method="POST">
		<div id="sortable">
			<h2>Prioridad de Proyectos</h2>
			<?php
			include("coneccion.php");
			
			$query1="SELECT * FROM proyectos order by prioridad asc";
			$res1=mysqli_query($link, $query1);
			$cont=0;

			while($proyectos=mysqli_fetch_assoc($res1)){
				$id=$proyectos['id_proyecto'];	
				$nombre=$proyectos['nombre'];
				$ruta=$proyectos['ruta_original'];
				$cont++;
				echo 	"<div class='row ui-state-default' name='".$id."'>
							<input type='hidden' name='id[]' value='".$id."'>
							<div class='col-sm-1 col-sm-offset-2'>
								<h4>".$cont."</h4>
							</div>
							<div class='col-sm-8'>
								<h4>".$nombre."</h4>
							</div>
						</div>";
			};

			?>
		</div>
		<center>
		
			<input type="submit" value="Guardar Cambios" class="btn btn-default" name="btn" id="enviarOrden">
		
		</center>
		</form>
		
	</section>




	<script src="js/jquery.min.js"></script>
	<script src="boot/js/bootstrap.min.js"></script>
	<script src="jqueryui/jquery-ui.js"></script>
  	<script>
  		$( function() {
		    $( "#sortable" ).sortable({
		      placeholder: "ui-state-highlight"
		    });
		    $( "#sortable" ).disableSelection();
		});
	</script>
</body>
</html>
