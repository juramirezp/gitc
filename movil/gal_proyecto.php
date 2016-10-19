<?php
  $id= $_GET["id"];

    $link = @mysqli_connect("localhost", "gitccl_manager", "systematico7378");
    @mysqli_select_db($link,"gitccl_data") or die ("no Base");
?>
<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<title>Galeria del Proyecto</title>
  	<link rel="stylesheet" href="../boot/css/bootstrap.min.css">
  	<link rel="stylesheet" href="../css/font/fuente.css">
  	<link rel="stylesheet" type="text/css" href="../slider/dist/css/slider-pro.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="../css/examples.css" media="screen"/>
	<link rel="stylesheet" href="../css/style.css">
	<style>
		span{
			margin-top: 2em;
			color: #b02042;
			font-size: 1.5em;
		}
		span:hover{
			color: grey;
		}
    .sp-full-screen-button, .sp-fade-full-screen{
      display:none;
    }
	</style>
</head>
<body>
  	<div id="example3" class="slider-pro col-md-9 col-md-offset-1"; style="margin:0;padding:0; position:absolute;">
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
						<img class='sp-image' src='../img/blank.gif'
						data-src='../img/original/".$imagenes['ruta'].".jpg'
						data-large='../img/original/".$imagenes['ruta'].".jpg'/>
					</div>";
          }
          echo "</div>";
          ?>
    </div>

	<script type="text/javascript" src="../slider/libs/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="../slider/dist/js/jquery.sliderPro.min.js"></script>
  <script>
    $( document ).ready(function( $ ) {	
    	largo=$(window).height();
      ancho=$(window).width();
		$( '#example3' ).sliderPro({
			width: ancho,
			height: largo,
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

