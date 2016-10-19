<?php
	include("coneccion.php");

	$query2="SELECT * FROM imagenes";
	$res2=mysqli_query($link, $query2);

?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="boot/css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="boot/js/bootstrap.min.js"></script>
	<script src="js/funciones.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/font/fuente.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<link rel="stylesheet" href="css/stylegal.css">
	<script src="js/pace.js"></script>
	<link rel="stylesheet" href="css/pace.css">
	<script src="js/galleria.js"></script>
	<script type></script>
	<script>
		
	</script>
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

<div id="galeriaInicio" class="col-md-12"  style"color:black; z-index:200;	">
	<div id="otro"></div>
	<!-- <div class="galleria col-md-9">
	    <a href="img/original/1.jpg"><img src="img/mini/1.jpg" data-big="img/original/1.jpg" data-title="My title" data-description="My description"></a>
	    <a href="img/original/75.jpg"><img src="img/mini/75.jpg" data-big="img/original/75.jpg" data-title="My title" data-description="My description"></a>
	    <a href="img/original/36.jpg"><img src="img/mini/36.jpg" data-big="img/original/36.jpg" data-title="My title" data-description="My description"></a>
	    <a href="img/original/56.jpg"><img src="img/mini/56.jpg" data-big="img/original/56.jpg" data-title="My title" data-description="My description"></a>
	</div>
	<div class="col-md-3" id="col_datos">
		<a href="" id="x">x</a>
		<p id="direccion_lista" style="margin-top:2em;">Proyecto</p>
		<p id="titulo_lista">Casa Chamisero</p>
		<a href="ver_proyecto.php?id=14" id="ver_proyecto">Ver Proyecto</a>
		<img src="img/gitc-logo.jpg" id="logo_galeria">
	</div> -->
</div>	


			<div class="col-md-12" id="margen-galeria"></div>
			<div class="col-md-12 col-sm-10" style=" margin:40px auto; height: 100px;" id="galeria">
				<div class="am-container col-md-10 col-md-offset-1" id="am-container">
					<?php
					    $directory="img/inicio/";
					    $dirint = dir($directory);
					    $files=array();
					    while (($archivo = $dirint->read()) !== false)
					    {
					    	if (eregi("jpg", $archivo)){
					    		array_push($files, $archivo);
					    	}
					    }
					    $dirint->close();
					    $largo=count($files);
					    shuffle($files);

					    if(!isset($_GET['r']))
						{
						echo "<script language=\"JavaScript\">
						<!-- 
						document.location=\"$PHP_SELF?r=1&Ancho=\"+screen.width+\"&Alto=\"+screen.height;
						//-->
						</script>";
						}
						else {    

						// Código a mostrar en caso que se detecte la resolución de la pantalla
						     if(isset($_GET['Ancho']) && isset($_GET['Alto'])) {
						               if($_GET['Ancho']<768){
						               		$max=10;
						               }else{
						               		$max=$largo;
						               }
						     }
						}

					    for($i=0; $i<$max;$i++){
					    	echo "<a href='#' class='link-imagen'><img src='img/inicio/".$files[$i]."' class='imagen' name='".$files[$i]."' alt='GITC Arquitectura' style='height: 250px;'></a>";	
					    }

					    
					?>
				</div>
			</div>
			

<footer>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 col-xs-12" style="margin-top:150em;" id="foot">
				<p class="dir">Miguel Claro 070 of. 604. Providencia, Santiago</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 col-md-offset-4 col-xs-6">
				<p class="dir">
					<span class="glyphicon glyphicon-earphone" id="fono"> </span>(02)4153233
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


<script type="text/javascript" src="js/jquery.montage.js"></script>
		<script type="text/javascript">
			$(function() {
				/* 
				 * just for this demo:
				 */
				$('#showcode').toggle(
					function() {
						$(this).addClass('up').removeClass('down').next().slideDown();
					},
					function() {
						$(this).addClass('down').removeClass('up').next().slideUp();
					}
				);
				$('#panel').toggle(
					function() {
						$(this).addClass('show').removeClass('hide');
						$('#overlay').stop().animate( { left : - $('#overlay').width() + 20 + 'px' }, 300 );
					},
					function() {
						$(this).addClass('hide').removeClass('show');
						$('#overlay').stop().animate( { left : '0px' }, 300 );
					}
				);
				
				var $container 	= $('#am-container'),
					$imgs		= $container.find('img').hide(),
					totalImgs	= $imgs.length,
					cnt			= 0;
				
				$imgs.each(function(i) {
					var $img	= $(this);
					$('<img/>').load(function() {
						++cnt;
						if( cnt === totalImgs ) {
							$imgs.show();
							$container.montage({
								liquid 	: false,
								fillLastRow : false
							});
							
							/* 
							 * just for this demo:
							 */
							$('#overlay').fadeIn(500);
						}
					}).attr('src',$img.attr('src'));
				});	
				
			});
			
			$('.imagen').click(function(){
				Galleria.loadTheme('js/galleria_classic/galleria.classic.min.js');
    			Galleria.run('.galleria');
				var DATA=[];
				var ID;
				ID=$(this).attr('name');
				item={};
				item["id"]=ID;
				DATA.push(item);

				INFO=new FormData();
				aInfo=JSON.stringify(DATA);
				INFO.append('data',aInfo);
				$('#galeriaInicio').css("display", "inline");

				$.ajax({
	                data: INFO,
					type: 'POST',
	                url:   'cargaImagenes.php',
	                processData: false, 
					contentType: false,
	        		success:  function (r) {
		            $('#galeriaInicio').html(r);
		        	}
		        });
		        
			});
			$('#x').click(function(){
				$('#galeriaInicio').css("display", "none");
			});


			var mediaquery = window.matchMedia("(min-width: 768px)"),
		    content = document.querySelector("#am-container");

		    if (mediaquery.matches) {
		        $('#am-container').addClass('am-container');
		    } else {
		        $('#am-container').removeClass('am-container');
		        $('.navbar').css("margin-top","-3em");
		        $('#foot').css("margin-top", "70em");
		    }
		</script>
</body>
</html>
