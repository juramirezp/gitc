<?php
	include ('incompletos.php');
	incompletos();
	$id= $_GET["id"];

	include("coneccion.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Actualizar Galreria</title>
	<meta charset="utf-8">
	<?php
            include("top-manager.php");
        ?>

<div class="col-md-11">
	<div class="col-md-3"  style="margin-top:7em; position:fixed; padding:1em;">
			<img class="imgSelected center-block" style="margin-left:6em;" id="div_imgPrincipal" src="img/
			<?php
				$q="SELECT ruta_original as ruta FROM imagenes WHERE id_proyecto='$id' AND principal=1";
				$r=mysqli_query($link, $q);
				$ru=0;
				while($p=mysqli_fetch_assoc($r)){
					$ru=$p['ruta'];
				}
				if($ru==0){
					echo "vacia.jpg";
				}else{
					echo "tumb/".$ru;
				}
			?>
			.jpg" name="<?php echo $id;?>" alt="<?php echo $ru ?>">
			<p style="margin-top:1em; text-align:center; font-style:italic;">
				Imagen principal del proyecto
			</p>
		<div class="btn btn-default " id="actualzarMosaico" style="margin-top:2em; width:100%;">Actualizar Galeria </div>

		<div style="overflow:auto;height:17em; padding-right:2em; text-align:justify; margin-top:10px;">
			<p style="margin-top:2em; width:100%; text-align:center;">
				INSTRUCCIONES
			</p>
			<p style="margin-top:1em;">
				- Doble click sobre una imagen reemplazara la imagen principal del proyecto en todas las secciones del sitio.
			</p>
			<p style="margin-top:1em;">
				- Un click sobre una imagen cambiara su estado (Seleccionada / No Seleccionada) modificando el borde de la misma.
			</p>
			<p style="margin-top:1em;">
				- Las imagenes con borde son las que actualmente estan seleccionadas para pertenecer a la galeria de inicio del sitio.
			</p>
			<p style="margin-top:1em; padding-bottom:5em;">
				- Al presionar el botón "Actualizar Galeria" se estableceran como seleccionadas solo las imagenes marcadas.
			</p>
		</div>
	</div>
	<div class="col-md-9 col-md-offset-4" style="margin-top:8em;" id="cuadro_imagenes">
	
		<?php
	
			$queryImg="SELECT * FROM imagenes WHERE id_proyecto='$id'";
			$resImg=mysqli_query($link, $queryImg);


			while($imagenes=mysqli_fetch_assoc($resImg)){
				$idImg=$imagenes['id'];
				$ruta=$imagenes['ruta_original'];
				if($imagenes['inicio']>0){
					echo "<img src='img/tumb/".$ruta.".jpg' class='col-md-2 imgEdit imgSelected' name='".$ruta."'  alt='".$id."'>";
				}else{
					echo "<img src='img/tumb/".$ruta.".jpg' class='col-md-2 imgEdit' name='".$ruta."'  alt='".$id."'>";	
				}
				

			};

		?>
	</div>	
</div>

	
<script>
	$(document).ready(function(){
		$('.imgEdit').click(function(){
			if($(this).hasClass('imgSelected')){
				$(this).removeClass('imgSelected');
			}else{
				$(this).addClass('imgSelected');
			}
		});
	});
	$(function(){
		$('#actualzarMosaico').click(function(){
			
				var DATA=[];
				var ID;
				var ok=0;
				var proy;
				$('#cuadro_imagenes img').each(function(index){
					if($(this).hasClass('imgSelected')){
						ID=$(this).attr("name");
						proy=$(this).attr("alt");
						item={};
						item["id"]=ID;
						item["proy"]=proy;
						DATA.push(item);
						ok=ok+1;
					}
					
				})
				
				if(ok==0){
					if(confirm("No hay imagenes seleccionadas, si continua las imagenes del proyecto se eliminaran de la pagina de inicio")){
						INFO=new FormData();
						DATA.length=0;
						item={};
						item["proyecto"]=$('#div_imgPrincipal').attr("name");
						DATA.push(item);
						aInfo=JSON.stringify(DATA);
						INFO.append('data',aInfo);

						$.ajax({
						data: INFO,
						type: 'POST',
						url : './eliminarDelMosaico.php',
						processData: false, 
						contentType: false,
						success: function(r){
							alert("Galeria de inicio actualizada correctamente");
						}
						});
						$('#cuadro_imagenes img').each(function(index){
							$(this).removeClass('imgSelected');
						})
					}
				}else{
					INFO=new FormData();
					aInfo=JSON.stringify(DATA);
					INFO.append('data',aInfo);

					$.ajax({
					data: INFO,
					type: 'POST',
					url : './actualizarMosaico.php',
					processData: false, 
					contentType: false,
					success: function(r){
						alert("Galeria de inicio actualizada correctamente");
					}
					});
					
				}
		})
	});
	$(function(){
		$('.imgEdit').dblclick(function(){
			var DATA=[];
			var ID_A;		
			var ID_N;
			var PROY;
			ID_N=$(this).attr("name");
			ID_A=$('#div_imgPrincipal').attr("alt");
			PROY=$('#div_imgPrincipal').attr("name");
			if(confirm("¿Desea establecer esta imagen como la principal del proyecto?")){
				var ru=$(this).attr("src");
				$('#div_imgPrincipal').fadeIn("slow", function(){
					$('#div_imgPrincipal').attr("src", ru);
				});		

				item={};
				item["n"]=ID_N;
				item["a"]=ID_A;
				item["p"]=PROY;
				DATA.push(item);
				INFO=new FormData();
				aInfo=JSON.stringify(DATA);
				INFO.append('data',aInfo);

				$.ajax({
					data: INFO,
					type: 'POST',
					url : './cambiarPrincipal.php',
					processData: false, 
					contentType: false,
					success: function(r){
						alert("Imagen principal actualizada correctamente "+ r);
					}
				});					
			}
		});
	});
		
</script>

</body>
</html>
