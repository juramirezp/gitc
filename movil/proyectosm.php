
<!DOCTYPE html>
<html>
<head>
	<title>NUESTROS PROYECTOS</title>
	<link rel="stylesheet" href="../boot/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/font/fuente.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<meta content="text/html" charset="iso-8859-1" http-equiv="Content-Type" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	
</head>
<body>

<nav class="navbar navbar-default" style="margin-top:0em;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    	<img src="../img/gitc-logo.jpg" class="hidden-md hidden-lg" alt="">
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
				<div class="col-md-1 col-md-offset-3 btn" id="col-borde"><li class="li-boton pri "><a href="indexm.php">HOME</a></li></div>
				<div class="col-md-1 btn"><li class="li-boton seg "><a href="proyectosm.php">OBRAS</a></li></div>
				<div class="col-md-3 " id="col-centro"><li class="li-logo hidden-sm hidden-xs" id="logo" ><a href="#"><img src="../img/gitc-logo.jpg" id="logo_inicio" alt=""></a></li></div>
				<div class="col-md-1 btn"><li class="li-boton ter	 "><a href="nosotrosm.php">NOSOTROS</a></li></div>
				<div class="col-md-2 btn"><li class="li-boton cua"><a href="http://plazadinamarca.cl/">PLAZA DINAMARCA</a></li></div>
			</div>
		</ul>
    </div>
   </div>
</nav>

<div class="col-md-12 col-md-offset-1 col-sm-12" id="proyectos" style="padding-top:5em;">
	<?php

	$link = @mysqli_connect("localhost", "gitccl_manager", "systematico7378");
		@mysqli_select_db($link,"gitccl_data") or die ("no Base");
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
		echo "<table class='text-center' style='margin: 0 auto !important; float: none !important;'>
				<tbody>
					<tr>
						<td colspan='2'>
							<a href='ver_proyectom.php?id=".$id."'><img src='../img/tumb/".$img.".jpg' alt='".$nombre."' id='img_lista' style='margin-left:0;'></a>
						</td>
					</tr>
					<tr>
						<td colspan='2'><a href='ver_proyectom.php?id=".$id."' id='titulo_lista' class='col-sm-12 text-justify'>".$nombre."</a></td>
					</tr>
					<tr>
						<td colspan='2'><p id='direccion_lista' class='col-sm-12'>".$direccion."</p></td>
					</tr>
					<tr>
						<td colspan='2'><p>".$constructor."</p></td>
					</tr>
					<tr>
						<td colspan='2'><p>".$anio."</p></td>
					</tr>
					<tr>
						<td colspan='2'><span class='label label-default'>".$tipo."</span><span class='label label-default'>".$estado."</span></td>
					</tr>
				</tbody>
			</table>
			<hr noshade='noshade' style='color: #b02042; size:1px; width:80%;'/>";

	};
	
	


	?>
			
</div>







<footer>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 col-xs-12 col-sm-12 text-center" style="margin-top:4em;" id="foot">
				<p class="dir">Miguel Claro 070 of. 604. Providencia, Santiago</p>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-md-2 col-md-offset-4 col-xs-6">
				<p class="dir">
					<span class="glyphicon glyphicon-earphone" id="fono"> </span> (02)4153233
				</p>
			</div>
			<div class="col-md-2 col-xs-6">
				<p class="dir">
					<span class="glyphicon glyphicon-envelope"  id="mail"></span> info@gitc.cl
				</p>
			</div>
		</div>
	</div>
</footer>
<script src="../js/jquery.min.js"></script>
	<script src="../boot/js/bootstrap.min.js"></script>
	<script>
		var mediaquery = window.matchMedia("(max-width: 768px)")

		    if (mediaquery.matches) {
		    } else {
		        window.location.href = "../proyectos.php";

		    }
	</script>
</body>
</html>
