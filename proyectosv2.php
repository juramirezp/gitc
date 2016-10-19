
<!DOCTYPE html>
<html>
<head>
	<title>NUESTROS PROYECTOS</title>
	<meta content="text/html" charset="iso-8859-1" http-equiv="Content-Type" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="boot/css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="boot/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/font/fuente.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    	<img src="img/gitc-logo.jpg" class="hidden-md hidden-lg" alt="">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    	<ul class="nav navbar-nav">

			<div class="container">
				<div class="col-md-1 col-md-offset-3 btn" id="col-borde"><li class="li-boton pri "><a href="index.php">HOME</a></li></div>
				<div class="col-md-1 btn"><li class="li-boton seg "><a href="proyectos.php">OBRAS</a></li></div>
				<div class="col-md-3 " id="col-centro"><li class="li-logo hidden-sm hidden-xs" id="logo" ><a href="#"><img src="img/gitc-logo.jpg" id="logo_inicio" alt=""></a></li></div>
				<div class="col-md-1 btn"><li class="li-boton ter	 "><a href="nosotros.html">NOSOTROS</a></li></div>
				<div class="col-md-2 btn"><li class="li-boton cua"><a href="http://plazadinamarca.cl/">PLAZA DINAMARCA</a></li></div>
			</div>
		</ul>
    </div>
   </div>
</nav>

	<div class="col-md-1  col-md-offset-1 menu-admin" style="margin-top:10em; position:fixed;">
		<div class="btn-group-vertical" role="group" aria-label="...">
			<a href="proyectos.php" class="btn btn-default">Todos</a>
		  	<a href="vista_tipo.php?tipo=Vivienda" class="btn btn-default">Vivienda</a>
  			<a href="vista_tipo.php?tipo=Clinico" class="btn btn-default">Clinico</a>
  			<a href="vista_tipo.php?tipo=Renovacion" class="btn btn-default">Renovaci&oacute;n</a>
			<a href="vista_tipo.php?tipo=Turistico" class="btn btn-default">Turistico</a>
		</div>
	</div>
	<div class="col-md-9 col-md-offset-2" style="margin-top:5em; padding-top:2em;">
		<?php

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
		$constructor=$proyectos['constructor'];
		$estado=$proyectos['estado'];
		$tipo=$proyectos['tipo'];
		
		echo "<div class='col-md-11 col-md-offset-1 col-sm-12' id='lista_proyecto'>";
		echo 	"<div class='col-md-1 col-sm-12'>";
		echo 		"<a href='ver_proyecto.php?id=".$id."'><img src='img/mini/".$img.".jpg' alt='".$nombre."' id='img_lista'></a>";
		echo 	"</div>
		   	 	<div class='col-md-10 col-sm-12' id='datos_lista'>
			 	<a href='ver_proyecto.php?id=".$id."' id='titulo_lista' class='col-md-12 col-sm-12'>".$nombre."</a>
			 	<p id='direccion_lista' class='col-md-12 col-sm-12'>".$direccion."</p>	
			 	<p class='col-md-6 col-sm-12'>Contructor: ".$constructor."</p>
			 	<p class='col-md-5 col-sm-12'>A&ntilde;o: ".$anio."</p>
			 	<p class='col-md-8 col-sm-12'><span class='label label-default'>".$tipo."</span><span class='label label-default'>".$estado."</span></p>
			 	
			 </div></div>";


	};
	
	mysqli_close($link);

	?>
	</div>

	<footer>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 col-xs-12" style="padding-top:4em;">
				<p class="dir">Miguel Claro 070 of. 604. Providencia, Santiago</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 col-md-offset-4 col-xs-6">
				<p class="dir">
					<span class="glyphicon glyphicon-earphone" id="fono"> (02)4153233</span>
				</p>
			</div>
			<div class="col-md-2 col-xs-6">
				<p class="dir">
					<span class="glyphicon glyphicon-envelope"  id="mail"> info@gitc.cl</span>
				</p>
			</div>
		</div>
	</div>
</footer>

</body>
</html>
