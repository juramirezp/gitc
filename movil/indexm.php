
<html>
<head>
	<title>HOME</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="../boot/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/font/fuente.css">
	<link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
	<script>
		var mediaquery = window.matchMedia("(max-width: 768px)")

		    if (mediaquery.matches) {
		    } else {
		        window.location.href = "../index.php";

		    }
	</script>
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
			<div class="col-md-12" id="margen-galeria"></div>
			<div class="col-md-12 col-sm-10" style="" id="galeria">
					<?php

						$link = @mysqli_connect("localhost", "gitccl_manager", "systematico7378");
							@mysqli_select_db($link,"gitccl_data") or die ("no Base");
						mysql_set_charset('utf8');
	
						$query1="SELECT * FROM proyectos ORDER BY prioridad ASC";
						$res1=mysqli_query($link, $query1);

						while($proyectos=mysqli_fetch_assoc($res1)){
							$id=$proyectos['id_proyecto'];	
							$nombre=$proyectos['nombre'];
							$query2="SELECT ruta_original as ruta FROM imagenes WHERE id_proyecto='$id' AND inicio=1";
							$res2=mysqli_query($link, $query2);

							while($imagenes=mysqli_fetch_assoc($res2)){
								$ruta=$imagenes['ruta'];
								$imagen="../img/mini/".$ruta.".jpg";
								$img=getimagesize($imagen);
								$ancho=$img[0];
								$alto=$img[1];
								if($ancho>$alto){
									if($id==39){
										echo "<a href='http://plazadinamarca.cl/'><img src='".$imagen."' class='imagen' name='".$ruta."' alt='GITC Arquitectura' style='width:99%; margin-top:1em;'></a>";		
									}else{
										echo "<a href='ver_proyectom.php?id=".$id."'><img src='".$imagen."' class='imagen' name='".$ruta."' alt='GITC Arquitectura' style='width:99%; margin-top:1em;'></a>";			
									}
									
								}
							}
						}

					    
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
		<script type="text/javascript">
			var mediaquery = window.matchMedia("(min-width: 768px)")

		    if (mediaquery.matches) {
		    } else {
		        
		    }
		</script>
</body>
</html>
