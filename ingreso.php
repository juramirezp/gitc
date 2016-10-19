<?php
	$user=$_POST["user"];
	$pass=$_POST["pass"];
	if($user=="manager@contenido" && $pass=="gitc-manager"){
		session_start(); 
		if (!isset($_SESSION["cuenta"])){ 
		   	$_SESSION["cuenta"] = "Administrador"; 
		   	$_SESSION['intervalo']  = 30; // en minutos
			$_SESSION['inicio'] = time();
		}
		print "<script>window.location='manager.php';</script>";
	}else{
		print "<script>alert(\"ERROR. Verifique los datos ingresados.\");window.location='login.html';</script>";
	}


?>