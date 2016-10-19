	<?php
	include ('incompletos.php');
	incompletos();

	$id= $_GET["id"];

	include("coneccion.php");
	
	$query1="SELECT * FROM proyectos WHERE id_proyecto='$id'";
	$res1=mysqli_query($link, $query1);


	while($proyectos=mysqli_fetch_assoc($res1)){
		$id=$proyectos['id_proyecto'];	
		$nombre=$proyectos['nombre'];
		$direccion=$proyectos['descripcion'];
		$anio=$proyectos['anio'];
		$constructor=$proyectos['constructor'];
		$estado=$proyectos['estado'];
		$tipo=$proyectos['tipo'];
		$importancia=$proyectos['prioridad'];
		$metros=$proyectos['superficie'];


		$query2="SELECT ruta_original as ruta FROM imagenes WHERE id_proyecto='$id' AND principal=1";
		$res2=mysqli_query($link, $query2);
		$imagen=mysqli_fetch_assoc($res2);
		$img=$imagen['ruta'];

	};
	


	?>
<!DOCTYPE html>
<html>
<head>
	<title>Editar Proyecto</title>
	<meta content="text/html" charset="iso-8859-1" http-equiv="Content-Type" />
	<?php
            include("top-manager.php");
        ?>

<div id="upload" class="col-md-12">
	<form action="uploads.php" class="dropzone col-md-6 col-md-offset-3">

		<div class="dz-message needsclick">
		    Arrastra aqui las imagenes o haz click para buscar en tu equipo.
		</div>
	</form>
	<div class="btn btn-default col-md-1 col-md-offset-4 btnUp"><span class="glyphicon glyphicon-remove"></span>Cancelar</div>
	<div class="btn btn-default col-md-1 col-md-offset-2 btnUp"><span class="glyphicon glyphicon-ok"></span>Aceptar</div>
</div>	

<div id="editar" class="col-md-12">
<div class="col-md-12" style="text-align:right; color:#b02042;">
	<h3>Editar Imagenes del Proyecto</h3>
</div>
	<div class="col-md-9 col-md-offset-1" id="imagenes" >
	<?php
	
	$queryImg="SELECT * FROM imagenes WHERE id_proyecto='$id'";
	$resImg=mysqli_query($link, $queryImg);


	while($imagenes=mysqli_fetch_assoc($resImg)){
		$idImg=$imagenes['id'];
		$ruta=$imagenes['ruta_original'];

		echo "<img src='img/tumb/".$ruta.".jpg' class='col-md-2 imgEdit' name=".$ruta.">";

	};

	mysqli_close($link);
	?>
	</div>
		<div class="col-md-2 center-block">
			<div class="btn btn-default btnEliminar" id="volverEliminar" style="margin-top:5em;">Volver</div>
			<div class="btn btn-default btnEliminar" id="selecTodo" style="margin-top:2em;">Seleccionar Todas </br>las Imagenes</div>
			<div class="btn btn-default btnEliminar" id="llamarEliminar" style="margin-top:2em;">Eliminar las </br>Imagenes Seleccionadas</div>
			<p style="margin-top:2em;">Nota: Al eliminar las imagenes desde este panel se eliminar de todas las secciones del sitio.</p>
		</div>
	</div>	

<div class="container main-admin">


		<div class="col-md-9 col-md-offset-2" id="div_crear_proyecto">
			<h2 class="col-sm-6 col-sm-offset-4">Editar Proyecto</h2>


			<form class="form-horizontal" action="actualizar_proyecto.php" nombre="nuevoProyecto" id="modificar" method="post" accept-charset="UTF-8">
  				<div class="form-group">
			    	<label for="nombre" class="col-md-3 col-sm-10 control-label">Nombre:</label>
			    	<div class="col-md-7 col-sm-10">
			      		<input type="text" class="form-control" id="nombre" placeholder="Nombre del Proyecto" name="nombre" value="<?php echo $nombre; ?>">
			    	</div>
			    	<div class="alerta col-md-7 col-md-offset-3" id="al_nombre">Debe asignar un nombre al proyecto</div>
			  	</div>
			  	<div class="form-group">
			    	<label for="anio" class="col-md-3 col-sm-10 control-label">A&ntilde;o:</label>
			    	<div class="col-md-2 col-sm-10">
			      		<input type="text" class="form-control" id="anio" placeholder="Año" name="anio" value="<?php echo $anio;?>">
			    	</div>
			    	<div class="alerta col-md-7 col-md-offset-3" id="al_anio">Debe ingresar un año valido</div>
			  	</div>
			  	<div class="form-group">
			    	<label for="descripcion" class="col-md-3 col-sm-10 control-label">Ubicaci&oacute;n:</label>
			    	<div class="col-md-7 col-sm-10">
			      		<input type="text" class="form-control" id="descripcion" placeholder="Descripción" name="descripcion" value="<?php echo $direccion;?>">
			    	</div>
			    	<div class="alerta col-md-7 col-md-offset-3" id="al_descripcion">Debe ingresar una descripción</div>
			  	</div>
			  	<div class="form-group">
			    	<label for="tipo" class="col-md-3 col-sm-10 control-label">Tipo de Proyecto:</label>
			    	<div class="col-md-3 col-sm-10">
			      		<select class="form-control" name="tipo" id="form-tipo" selected="<?php echo $tipo;?>">
						  <option value="Vivienda" <?php if($tipo==="Vivienda"){echo "selected";}?>>Vivienda</option>
						  <option value="Clinico" <?php if($tipo==="Clinico"){echo "selected";}?>>Clinico</option>
						  <option value="Renovaci&oacute;n" <?php if($tipo==="Renovación"){echo "selected";}?>>Renovaci&oacute;n</option>	
						  <option value="Turistico" <?php if($tipo==="Turistico"){echo "selected";}?>>Turistico</option>
						</select>
			    	</div>
			  	</div>
			  	<!-- <div class="form-group">
			    	<label for="importancia" class="col-md-3 col-sm-10 control-label">Importancia:</label> 
			    	<div class="col-md-2 col-sm-10">-->
						<input type="hidden" class="form-control" id="descripcimportanciaion" placeholder="Importancia" name="importancia" value="<?php echo $importancia;?>">
			    	<!-- </div>
			  	</div> -->
			  	<div class="form-group">
			    	<label for="estado" class="col-md-3 col-sm-10 control-label">Estado del Proyecto:</label>
			    	<div class="col-md-3 col-sm-10">
			      		<select class="form-control" name="estado" id="form-estado">
						  <option value="Terminada" <?php if($estado==="Terminada"){echo "selected";}?>>Terminado</option>
						  <option value="En Ejecucion" <?php if($estado==="En Ejecucion"){echo "selected";}?>>En Ejecuci&oacute;n</option>
						</select>
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label for="constructor" class="col-md-3 col-sm-10 control-label">Constructor:</label>
			    	<div class="col-md-7 col-sm-10">
			      		<input type="text" class="form-control" id="constructor" placeholder="Constructor" name="constructor" value="<?php echo $constructor;?>">
			    	</div>
			    	<div class="alerta col-md-7 col-md-offset-3" id="al_constructor">Debe indicar un constructor</div>
			  	</div>
				<div class="form-group">
			    	<label for="superficie" class="col-md-3 col-sm-10 control-label">Superficie en Mts&sup2;:</label>
			    	<div class="col-md-2 col-sm-10">
			      		<input type="number" class="form-control" id="superficie" placeholder="Superficie" name="superficie" maxlength="4" value="<?php echo $metros;?>">
			    	</div>
			    	<div class="alerta col-md-7 col-md-offset-3" id="al_superficie">Debe ingresar un superficie valida</div>
			  	</div>
					
				<div class="btn btn-default col-md-5 " id="agregarImg">
					<span class="glyphicon glyphicon-plus"></span> Agregar Imagenes al Proyecto
				</div>
				<div class="btn btn-default col-md-5 col-md-offset-1 " id="editarImg">
					<span class="glyphicon glyphicon-pencil"></span> Editar Imagenes del Proyecto
				</div>


				<input type="hidden" name="id" value="<?php echo $id;?>" id="id">
  				<div class="form-group">
				    <div class="col-md-offset-5 col-md-6">
				      <button type="submit" class="btn btn-default" id="btn_grabar">Grabar</button>
				    </div>
			  	</div>
			</form>
			
		</div>
	</div>
</div>

<script>
	$(document).ready(function()
	{	
		var todo=false;
		$('#selecTodo').click(function(){
			if(todo==false){
				$('#imagenes img').each(function(index){
					$(this).addClass('imgSelected');
					todo=true;
				});
			}else{
				$('#imagenes img').each(function(index){
					$(this).removeClass('imgSelected');
					todo=false;
				});
			}
			
		});
		var ok=0;
		

		$('#anio').keyup(function (){
            this.value = (this.value + '').replace(/[^0-9]/g, '');
            if ($('#anio').val().trim() === '') {
		        $('#al_anio').css('display', 'inline');
		    } else {
		        $('#al_anio').css('display', 'none');
		    }
        });
        $('#superficie').keyup(function (){
            $('#superficie').value($('#superficie').value().substr(0, 4));
        });
        $('#nombre').keyup(function(){
        	if ($('#nombre').val().trim() === '') {
		        $('#al_nombre').css('display', 'inline');
		    } else {
		        $('#al_nombre').css('display', 'none');
		    }	
        });
        $('#descripcion').keyup(function(){
        	if ($('#descripcion').val().trim() === '') {
		        $('#al_descripcion').css('display', 'inline');
		    } else {
		        $('#al_descripcion').css('display', 'none');
		    }
        });
        $('#constructor').keyup(function(){
        	if ($('#constructor').val().trim() === '') {
		        $('#al_constructor').css('display', 'inline');
		    } else {
		        $('#al_constructor').css('display', 'none');
		    }
        });
	
		$("#btn_grabar").click(function(){
				ok=0;		

				if ($('#nombre').val().trim() === '') {
			        $('#al_nombre').css('display', 'inline');
			        ok=ok-1;
			    } else {
			        $('#al_nombre').css('display', 'none');
			        ok=ok+1;
			    }
			    if ($('#anio').val().trim() === '') {
			        $('#al_anio').css('display', 'inline');
			        ok=ok-1;
			    } else {
			        $('#al_anio').css('display', 'none');
			        ok=ok+1;
			    }
			    if ($('#descripcion').val().trim() === '') {
			        $('#al_descripcion').css('display', 'inline');
			        ok=ok-1;
			    } else {
			        $('#al_descripcion').css('display', 'none');
			        ok=ok+1;
			    }
			    if ($('#constructor').val().trim() === '') {
			        $('#al_constructor').css('display', 'inline');
			        ok=ok-1;
			    } else {
			        $('#al_constructor').css('display', 'none');
			        ok=ok+1;
			    }
			    

		});

			$('#modificar').submit(function(e){
				if(ok!=4){
					e.preventDefault();
				}
			});
		    $('#agregarImg').click(function(){
				$('#upload').css("display", "inline");
			});
			$('.btnUp').click(function(){
				$('#upload').css("display", "none");
			});
			$('#editarImg').click(function(){
				$('#editar').css("display", "inline");
			});
			$('.imgEdit').click(function(){
				if($(this).hasClass('imgSelected')){
					$(this).removeClass('imgSelected');
				}else{
					$(this).addClass('imgSelected');
				}
			});


	});
	$(function(){
		$('#llamarEliminar').click(function(){
			
			if(confirm("¿Desea Eliminar estas imagenes permanentemente?")){
				var DATA=[];
				var ID;
				var ok=0;
				$('#imagenes img').each(function(index){
					if($(this).hasClass('imgSelected')){
						ID=$(this).attr("name");
						item={};
						item["id"]=ID;
						DATA.push(item);
						$(this).remove();
						ok=ok+1;
					}
				})
				
				if(ok==0){
					alert("No hay imagenes seleccionadas");	
				}else{
					INFO=new FormData();
					aInfo=JSON.stringify(DATA);
					INFO.append('data',aInfo);

					$.ajax({
					data: INFO,
					type: 'POST',
					url : './eliminarImg.php',
					processData: false, 
					contentType: false,
					success: function(r){
						
					}
					});
					alert("Imagenes eliminadas correctamente");
				}
			}
		})
	});
	$(function(){
		$('#volverEliminar').click(function(){
			$('#editar').css("display", "none");
		})
	});
	

	
	
</script>
	
</body>
</html>