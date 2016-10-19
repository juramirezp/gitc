<?php
  $id= $_GET["id"];

    include("coneccion.php");
?>
<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<title>Galeria del Proyecto</title>
  	<link rel="stylesheet" href="boot/css/bootstrap.min.css">
  	<link rel="stylesheet" href="css/font/fuente.css">
  	<link rel="stylesheet" type="text/css" href="slider/dist/css/slider-pro.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="css/examples.css" media="screen"/>
	<link rel="stylesheet" href="css/style.css">
	<style>
		span{
			color: #b02042;
			font-size: 1.5em;
		}
		span:hover{
			color: grey;
		}
	</style>
</head>
<body>
<a href="#" onclick="history.back()" style=" margin:0; position:fixed; top:0.8em; left:1em; right:auto; font-size: 1.7em; z-index:999; color:#b02042;">
  <span class="glyphicon glyphicon-circle-arrow-left" style="color:#b02042"></span>
</a>
  	<div id="example3" class="slider-pro col-md-9 col-md-offset-1"; style="margin:0; padding:0; margin-top:10px;">
  		<div class="sp-slides">
          <?php
          $query1="SELECT id_proyecto as proyecto FROM imagenes WHERE ruta_original='$id'";
          $res1=mysqli_query($link, $query1);
          while($proy=mysqli_fetch_assoc($res1)){
          	$proyecto=$proy['proyecto'];
          }
          $query2="SELECT ruta_original as ruta FROM imagenes WHERE id_proyecto='$proyecto'";
          $res2=mysqli_query($link, $query2);
          while($imagenes=mysqli_fetch_assoc($res2)){
            echo 	"<div class='sp-slide'>
						<img class='sp-image' src='img/blank.gif'
						data-src='img/original/".$imagenes['ruta'].".jpg'
						data-large='img/original/".$imagenes['ruta'].".jpg'/>
					</div>";
          }
          echo "</div>
          		<div class='sp-thumbnails'style='margin:0; padding:0;'>";
          $query3="SELECT ruta_original as ruta FROM imagenes WHERE id_proyecto='$proyecto'";
          $res3=mysqli_query($link, $query3);
          while($imagenes3=mysqli_fetch_assoc($res3)){
            echo 	"<img class='sp-thumbnail' src='img/mini/".$imagenes3['ruta'].".jpg'/>";
          }

          echo "</div>";
          ?>
    </div>

	<script type="text/javascript" src="slider/libs/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="slider/dist/js/jquery.sliderPro.min.js"></script>
  <script>
    $( document ).ready(function( $ ) {	
    	ancho=$(window).width()-30;
      alto=$(window).height()-110;
		$( '#example3' ).sliderPro({
			width: ancho,
			height: alto,
      imageScaleMode: 'contain',
			fade: true,
			arrows: true,
			buttons: false,
			fullScreen: true,
			shuffle: true,
			smallSize: 500,
			mediumSize: 1000,
			largeSize: 3000,
			thumbnailArrows: true,
			autoplay: false
		});
	});
  </script>
</body>
</html>

