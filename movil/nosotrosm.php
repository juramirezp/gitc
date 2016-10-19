
<!DOCTYPE html>
<html>
<head>
	<title>NOSOTROS</title>
	<link rel="stylesheet" href="../boot/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/font/fuente.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	
</head>

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


<!-- Inicio de Contenido -->
<div id="nosotros" style="width:80%; margin:0 auto;">
	<div class="container-fluid">
		<!-- Imagen -->
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<picture>
				  <source
				    media="(min-width: 768px)"
				    srcset="../img/team.jpg">
				  <img
				    src="../img/team_m.jpg"
				    alt="" id="team" style="width:100%;">
				</picture>
			</div>
		</div>
		<!-- Texto -->
		<div class="row">
			<div class="col-md-12" id="txt-nosotros">
				<p>GITC se funda el año 2007 como una empresa centrada en solucionar la problemática global de la obra habitable; con una fuerte preocupación en la Investigación aplicada en la construcción; buscando procesos y productos más amigables con el medio ambiente, de la mano a una constante experimentación formal y optimización en el uso de recursos, logrando con el mínimo de elementos un resultado eficiente y con altos estándares de calidad, funcionalidad, confort y habitabilidad.</p>
				<p>GITC es una organización multidisciplinaria de profesionales y técnicos, a través del cual se integra el desarrollo y ejecución de diversos proyectos constructivos; desde el detalle de revestimientos de maderas nativas, hasta complejas clínicas o centros industriales.</p>
				<p>La diferenciación de GITC en el rubro arquitectura-construcción está en la Dirección Global de proyectos; tomamos el proyecto desde la idea u oportunidad, hasta la obra llave en mano. Reconocemos una oportunidad, el materializar obras e intervenciones propositivas y que respondan eficientemente a cada tipo de entorno y necesidades particulares de cada cliente. Será mediante un diseño eficiente y la dirección de todos los procesos y actores involucrados, que se asegurará el buen término de un proyecto constructivo.</p>
				<p>Se apunta a la eficiencia y a un óptimo en el desarrollo, producción y ejecución de proyectos. Se asume la dirección profesional de todo el proceso: detección de necesidades y oportunidades, análisis urbano y normativo, creación de estrategias y propuestas, conformación y dirección de equipos multidisciplinarios de trabajo, coordinación de recursos y capitales y ejecución de obras.</p>
			</div>
			<div class="col-md-4"></div>
		</div>
		<!-- Imagen -->
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<picture>
				  <source
				    media="(min-width: 768px)"
				    srcset="../img/arbol.jpg">
				  <img
				    src="../img/arbol_m.jpg"
				    alt="" id="team" style="width:100%;">
				</picture>
			</div>
		</div>
	</div>
</div>
<!--FINAL DEL CONTENIDO-->
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
		        window.location.href = "../nosotros.php";

		    }
	</script>
</body>
</html>
