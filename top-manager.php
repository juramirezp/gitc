<?php

	session_start(); 

		
		if (!isset($_SESSION["cuenta"])){ 
		   	print "<script>alert(\"ERROR. No ha iniciado sesion.\");window.location='login.html';</script>";
		}else{
			$segundos = time();
			$tiempo_transcurrido = $segundos;
			$tiempo_maximo = $_SESSION['inicio']  + ( $_SESSION['intervalo'] * 60 ) ; // se multiplica por 60 segundos ya que se configura en minutos
			if($tiempo_transcurrido > $tiempo_maximo){
				print "<script>alert(\"ERROR. No ha iniciado sesion.\");window.location='login.html';</script>";
				include("salir.php");
			}else{
			// se resetea el inicio
			$_SESSION['inicio'] = time();
			}
		}

?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="boot/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dropzone.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/font/fuente.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<link rel="stylesheet" href="css/justifiedGallery.min.css" />
	<link rel="stylesheet" href="iconos/redes.css"  />
	<script src="js/jquery.min.js"></script>
    <script src="js/dropzone.min.js"></script>
    <script src="boot/js/bootstrap.js"></script>
	
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
    	.salir{
    		color:#b02042;
    		position:fixed;
    		bottom: 15px;
    		right:15px;
    		font-size: 1.3em;
    		text-decoration: none;
    	}
		#imagenes{
			height: 38vw;
			overflow: auto;
		}
    </style>
</head>
<body>

<a href="salir.php" class="salir">Salir</a>

<nav>
	<div class="col-sm-2" id="divLogo"><img src="img/gitc-logo.jpg" alt=""></div>
	<div class="col-sm-2"><a href="crear_proyecto.php">CREAR PROYECTO</a></div>
	<div class="col-sm-2"><a href="editar_proyecto.php">EDITAR PROYECTO</a></div>
	<div class="col-sm-2"><a href="lista_img.php">GALERIA DE INICIO</a></div>
	<div class="col-sm-2"><a href="orden.php">ORDEN DE PROYECTOS</a></div>
	<div class="col-sm-2"><a href="redes.php">REDES SOCIALES</a></div>
</nav>