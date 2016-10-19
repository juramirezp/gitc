
<!DOCTYPE html>
<html>
<head>
	<title>Redes Sociales</title>
	<?php
		include("top-manager.php");
	?>

	<section id="redes">

		<form action="actualizar_redes.php" method="POST">
			<h2>Redes Sociales</h2>
		<?php
		include("coneccion.php");
		
		$query1="SELECT * FROM redes";
		$res1=mysqli_query($link, $query1);


		while($redes=mysqli_fetch_assoc($res1)){
			$id=$redes['id'];	
			$nombre=$redes['nombre'];
			$link=$redes['link'];
			$icono=$redes['icono'];
			$estado=$redes['estado'];
			$color=$redes['color'];
			echo 	"<div class='row red'>
						<div class='col-sm-2'>
							<span class='".$icono."' onMouseOver='this.style.color=".$color."' onMouseOut='this.style.color=#666'></span>
						</div>
						<div class='col-sm-8'>
							<div class='row'>".$nombre."</div>
							<div class='row'><input type='text' class='form-control input-text' placeholder='http://' name='red".$id."' value='".$link."'></div>
						</div>
						<div class='col-sm-2'>
							<select name='redop".$id."' id=''>";
			if($estado==1){
				echo 	"<option value='1' selected>Activado</option>
						<option value='0'>Desactivado</option>
							</select>
						</div>
					</div>";
			}else{
				echo 	"<option value='1'>Activado</option>
						<option value='0' selected>Desactivado</option>
							</select>
						</div>
					</div>";
			}
								
		};

		?>
		
		
			<center>
				<input type="submit" value="Guardar" class="btn btn-default" id="guardarRedes">
			</center>
		</form>


	</section>




	<script src="js/jquery.min.js"></script>
	<script src="boot/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	</script>
</body>
</html>
