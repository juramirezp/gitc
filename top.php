
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">


    <meta name="description" content="Somos un grupo de personas especializadas en crear ese espacio que sueñas" />
    <meta name="author" content="bitealo.cl" />
    <meta name="keywords" content="arquitectura, arquitectos, providencia, gitc, edificios, casas" />
    <meta name="robots" content="index" />
    <meta name="organization" content="GITC" />



	<link rel="stylesheet" href="boot/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/font/fuente.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<link rel="stylesheet" href="css/justifiedGallery.min.css" />
	<link rel="stylesheet" href="iconos/redes.css"  />
	
	<style>
		nav{
			position: fixed;
			top:0;
			width: 100%;
			background-color: white;
			z-index:100;
		}
    	nav div{
			text-align: center;
			white-space:nowrap;
			padding-top: 2.5em;
    	}
    	nav div a{
    		color:#666;
    		text-decoration: none;
    	}
    	nav div a:hover{
    		color:#666;
    	}
    	nav #divLogo{
    		padding-top: 0;
    	}
    	nav img{
			width: 45%;
			padding-top: .8em;
			padding-bottom: .5em;
    	}
    	#home{
    		margin-top: 8em;
    	}
    	#redes{
    		position: fixed;
    		bottom: 10px;
    		left: 15px;
    		z-index: 100;
    		margin-top: 20em;
    	}
    	#redes tr td{
    		width: 3em;
    		padding: 6px;
    	}
    	#redes span{
    		font-size: 25px
    	}
    	#redes a{
    		text-decoration: none;
    	}
    	#redes a:hover{
    		text-decoration: none;
    	}
    	#redes a:link{
    		text-decoration: none;
    	}
    	#redes a:click{
    		text-decoration: none;
        }
        #contenido {
          width: 100%;
          max-width: 960px;
          overflow: hidden;
          margin: auto;
        }
        #grid {
          -webkit-column-count: 4;
          -webkit-column-gap: 5px;
          -moz-column-count: 4;
          -moz-column-gap: 5px;
          column-count: 4;
          column-gap: 5px;
          margin-top: 2em;
        }
        section.columna {
          -moz-column-break-inside: avoid;
          -webkit-column-break-inside: avoid;
          column-break-inside: avoid;
        }
        section.columna img{
            width: 100%;
            margin-top: 5px;
        }
    </style>
	
</head>
<body>

<table id="redes">

    <?php
        include("coneccion.php");
        
        $query1="SELECT * FROM redes WHERE estado=1";
        $res1=mysqli_query($link, $query1);


        while($redes=mysqli_fetch_assoc($res1)){
            $id=$redes['id'];   
            $nombre=$redes['nombre'];
            $link=$redes['link'];
            $icono=$redes['icono'];
            $estado=$redes['estado'];
            $color=$redes['color'];

            echo    "<tr>
                        <td><a href='".$link."'><span class='".$icono."'></span></a></td>
                    </tr>";
        }
        mysql_close($link);
        ?>
</table>

<nav>
	<div class="col-sm-2 col-sm-offset-2"><a href="index.php">HOME</a></div>
	<div class="col-sm-1"><a href="proyectos.php">OBRAS</a></div>
	<div class="col-sm-2" id="divLogo"><img src="img/logo-web.png" alt=""></div>
	<div class="col-sm-1"><a href="nosotros.php">NOSOTROS</a></div>
	<div class="col-sm-2"><a href="http://plazadinamarca.cl/">PLAZA DINAMARCA</a></div>
</nav>