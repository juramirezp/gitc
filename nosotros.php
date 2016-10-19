
<!DOCTYPE html>
<html>
<head>
	<title>NOSOTROS</title>
	<meta charset="utf-8">
	<?php
		include("top.php");
	?>

<!-- Inicio de Contenido -->
<div id="nosotros" style="width:80%; margin:0 auto;">
	<div class="container-fluid">
		<!-- Imagen -->
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<picture>
				  <source
				    media="(min-width: 768px)"
				    srcset="img/team.jpg">
				  <img
				    src="img/team_m.jpg"
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
				    srcset="img/arbol.jpg">
				  <img
				    src="img/arbol_m.jpg"
				    alt="" id="team" style="width:100%;">
				</picture>
			</div>
		</div>
	</div>
</div>
<!--FINAL DEL CONTENIDO-->

	<?php
		include("footer.php");
	?>
	<script>
		var mediaquery = window.matchMedia("(min-width: 768px)")

		    if (mediaquery.matches) {
		    } else {
		        window.location.href = "movil/nosotrosm.php";

		    }
	</script>
</body>
</html>
