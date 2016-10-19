<?php
  $id= $_GET["id"];

    include("coneccion.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Galeria del Proyecto</title>
  <link rel="stylesheet" href="css/superslides.css">
  <link rel="stylesheet" href="boot/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font/fuente.css">
  <style>
    *{
      font-family:'Avenir LT Std 45 Book';
      font-weight: normal;
      font-style: normal;
    }
    span{
      font-size: 2em;
      color:#b02042;
    }
    #volver{
      font-family:'Avenir LT Std 45 Book';
      font-size: 0.6em;
      position: absolute;
      z-index: 200;
      text-align: right;
      width: 100%;
      padding-right: 1em;
    }

  </style>
</head>
<body>

  <a href="ver_proyecto.php?id=<?php echo $id;?>" id="volver"><span class="glyphicon glyphicon-arrow-left" style="color: #b02042;"> Volver</span></a>
  

  <div id="slides">
      <div class="slides-container">
          <?php
          $query2="SELECT ruta_original as ruta FROM imagenes WHERE id_proyecto='$id'";
          $res2=mysqli_query($link, $query2);
          while($imagenes=mysqli_fetch_assoc($res2)){
            echo "<img src='img/original/".$imagenes['ruta']."' class='imagen' name='".$imagenes['ruta']."' style='max-heigth:100%;'>";

          }
          ?>
      </div>

      <nav class="slides-navigation">
        <a href="#" class="next"><span class="glyphicon glyphicon-menu-right"></span></a>
        <a href="#" class="prev"><span class="glyphicon glyphicon-menu-left"></span></a>
      </nav>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.animate-enhanced.min.js"></script>
  <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="boot/js/bootstrap.min.js"></script>
  <script>
    $('#slides').superslides({
      animation: 'fade'
    });
  </script>
</body>
</html>

