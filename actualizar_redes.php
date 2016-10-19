<?php
	$id1=$_POST["red1"];
	$id2=$_POST["red2"];
	$id3=$_POST["red3"];
	$id4=$_POST["red4"];
	$id5=$_POST["red5"];
	$id6=$_POST["red6"];
	$id7=$_POST["red7"];
	$id8=$_POST["red8"];

	$op1=$_POST["redop1"];
	$op2=$_POST["redop2"];
	$op3=$_POST["redop3"];
	$op4=$_POST["redop4"];
	$op5=$_POST["redop5"];
	$op6=$_POST["redop6"];
	$op7=$_POST["redop7"];
	$op8=$_POST["redop8"];

	include("coneccion.php");
	
	$query1="UPDATE redes SET link='$id1', estado='$op1' WHERE id=1";
	$res1=mysqli_query($link,$query1);

	$query2="UPDATE redes SET link='$id2', estado='$op2' WHERE id=2";
	$res2=mysqli_query($link,$query2);

	$query3="UPDATE redes SET link='$id3', estado='$op3' WHERE id=3";
	$res3=mysqli_query($link,$query3);

	$query4="UPDATE redes SET link='$id4', estado='$op4' WHERE id=4";
	$res4=mysqli_query($link,$query4);

	$query5="UPDATE redes SET link='$id5', estado='$op5' WHERE id=5";
	$res5=mysqli_query($link,$query5);

	$query6="UPDATE redes SET link='$id6', estado='$op6' WHERE id=6";
	$res6=mysqli_query($link,$query6);

	$query7="UPDATE redes SET link='$id7', estado='$op7' WHERE id=7";
	$res7=mysqli_query($link,$query7);

	$query8="UPDATE redes SET link='$id8', estado='$op8' WHERE id=8";
	$res8=mysqli_query($link,$query8);

	mysqli_close($link);

	print "<script>alert(\"Redes Sociales Actualizadas Correctamente.\");window.location='redes.php';</script>";


?>