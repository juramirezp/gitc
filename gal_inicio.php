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
			margin-top: 2em;
			color: #b02042;
			font-size: 1.5em;
		}
		span:hover{
			color: grey;
		}
	</style>
</head>
<body>



  <div class="container-fluid" style="height:100vh; width:100%;padding-top:1em;">

    <div id="example3" class="slider-pro col-sm-10" style="padding:1em;">
      <div class="sp-slides">
          <?php
          $query1="SELECT id_proyecto as proyecto FROM imagenes WHERE ruta_original='$id'";
          $res1=mysqli_query($link, $query1);
          while($proy=mysqli_fetch_assoc($res1)){
            $proyecto=$proy['proyecto'];
          }

          echo  "<div class='sp-slide'>
                      <img class='sp-image' src='img/blank.gif'
                      data-src='img/original/".$id.".jpg'
                      data-large='img/original/".$id.".jpg'/>
                    </div>";


          $query2="SELECT ruta_original as ruta FROM imagenes WHERE id_proyecto='$proyecto'";
          $res2=mysqli_query($link, $query2);
          while($imagenes=mysqli_fetch_assoc($res2)){
                      if($imagenes['ruta']<>$id){
                          echo  "<div class='sp-slide'>
                            <img class='sp-image' src='img/blank.gif'
                            data-src='img/original/".$imagenes['ruta'].".jpg'
                            data-large='img/original/".$imagenes['ruta'].".jpg'/>
                          </div>";  
                      }
          }
          echo "</div>
          <div class='sp-thumbnails'>";

               echo  "<img class='sp-thumbnail' src='img/tumb/".$id.".jpg'/>"; 

          $query3="SELECT ruta_original as ruta FROM imagenes WHERE id_proyecto='$proyecto'";
          $res3=mysqli_query($link, $query3);
          while($imagenes3=mysqli_fetch_assoc($res3)){
                if($imagenes3['ruta']<>$id){
                    echo  "<img class='sp-thumbnail' src='img/tumb/".$imagenes3['ruta'].".jpg'/>";      
                }
          }

          echo "</div>";
          ?>
    </div>










    <div class="col-sm-2" style="width:21%;">
    <center>
    <?php
      $qavatar="SELECT ruta_original as ruta FROM imagenes WHERE id_proyecto='$proyecto' AND principal=1";
      $ravatar=mysqli_query($link, $qavatar);
      while($favatar=mysqli_fetch_assoc($ravatar)){
        $imgPrincipal=$favatar['ruta'];
      }

      $qinfo="SELECT nombre, descripcion FROM proyectos WHERE id_proyecto='$proyecto'";
      $rinfo=mysqli_query($link, $qinfo);
      while($finfo=mysqli_fetch_assoc($rinfo)){
        $nombre=$finfo['nombre'];
        $ubicacion=$finfo['descripcion'];
      }

    ?>
    <table>
      <tr>
        <td style="height:15vh">
          <img src="img/gitc-logo.jpg" alt="" class="col-md-2 col-md-offset-7" style="width:32%; margin-left:30%;">
          </td>
      </tr>
      <tr>
        <td style="height:15vh">
          <a href="ver_proyecto.php?id=<?php echo $proyecto; ?>" style="color:#b02042; font-size:1.3em;">
            <p class="col-md-12" style="color:#b02042;"><?php echo utf8_encode($nombre);?></p>
          </a>
        </td>
      </tr>
      <tr>
        <td style="height:11vh; text-align:center;"><p class="col-md-12"><?php echo utf8_encode($ubicacion);?></p></td>
      </tr>
      <tr>
        <td style="height:43vh"><a href="ver_proyecto.php?id=<?php echo $proyecto; ?>">
        <img src="img/mini/<?php echo $imgPrincipal;?>.jpg" alt="" id="img_lista" style=" margin-left:25%; position:relative;">
      </a></td>
      </tr>
      <tr>
        <td style="height:10vh"><a href="#" onclick="history.back()" class="col-md-12"><span class="glyphicon glyphicon-circle-arrow-left"></span></a></td>
      </tr>
    </table>

      
      </center>
      

    </div>
  	
    
  </div>

	<script type="text/javascript" src="slider/libs/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="slider/dist/js/jquery.sliderPro.min.js"></script>
  <script>
    $( document ).ready(function( $ ) {	
    	alto=$(window).height()-110;
		$( '#example3' ).sliderPro({
			width: '76%',
			height: alto,
      imageScaleMode: 'contain',
			fade: true,
			arrows: true,
			buttons: false,
			fullScreen: true,
			shuffle: false,
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

