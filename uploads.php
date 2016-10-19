<?php

// Incluimos la clase
require_once("resize.php");


if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
{

	if(isset($_GET["delete"]) && $_GET["delete"] == true)
	{
		$name = $_POST["filename"];
		if(file_exists('./img/original/'.$name))
		{
			unlink('./img/original/'.$name);
			unlink('./img/mini/'.$name);
			$link = new mysqli("localhost", "ferremas_manager", "systematico7378", "ferremas_data");
		if ($link === false){
			die("ERROR: No se estableció la conexión. ". mysqli_connect_error());
		} 
			mysqli_query($link,"DELETE FROM imagenes WHERE ruta_original = '$name'");
			mysqli_close($link);
			echo json_encode(array("res" => true));
		}
		else
		{
			echo json_encode(array("res" => false));
		}
	}
	else
	{
		$file = $_FILES["file"]["name"];
		$filetype = $_FILES["file"]["type"];
		$filesize = $_FILES["file"]["size"];
		
		if(!is_dir("img/original/"))
			mkdir("img/original/", 0777);

		$link = new mysqli("localhost", "ferremas_manager", "systematico7378", "ferremas_data");
		if ($link === false){
			die("ERROR: No se estableció la conexión. ". mysqli_connect_error());
		} 

			$query2="SELECT MAX(ruta_original) as num FROM imagenes";
			$res2=mysqli_query($link, $query2);
			$datos=mysqli_fetch_assoc($res2);
			$num=$datos['num'];
			$num=$num+1;

		if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "img/original/".$num.".jpg"))
		{
			
			mysqli_query($link,"INSERT INTO imagenes VALUES (null, '$num', 999, 0, 0)");

			$imagen=getimagesize('img/original/' . $num.'.jpg');
			$ancho=$imagen[0];
			$alto=$imagen[1];
			
			if($ancho>$alto){
				$porc=(60000/$ancho)/100;
				$ancho=$ancho*$porc;
				$alto=$alto*$porc;
			}else{
				$porc=(60000/$alto)/100;
				$ancho=$ancho*$porc;
				$alto=$alto*$porc;
			}

			// creamos el objeto y cargamos la imagen
			$resizeObjTumb = new resize('img/original/' . $num.'.jpg');
			// Proporcianos el nuevo tamaño de la imagen
			$resizeObjTumb->resizeImage($ancho, $alto, 0);
			// Guardamos la imagen con una calidad del 100%
			$resizeObjTumb->saveImage('img/mini/' . $num.'.jpg', 100);

			//-------------------------------------------------------------

			$imagen=getimagesize('img/original/' . $num.'.jpg');
			$ancho=$imagen[0];
			$alto=$imagen[1];
			
			if($ancho>$alto){
				$porc=(20000/$ancho)/100;
				$ancho=$ancho*$porc;
				$alto=$alto*$porc;
			}else{
				$porc=(20000/$alto)/100
				$ancho=$ancho*$porc;
				$alto=$alto*$porc;
			}

			// creamos el objeto y cargamos la imagen
			$resizeObjTumb = new resize('img/original/' . $num.'.jpg');
			// Proporcianos el nuevo tamaño de la imagen
			$resizeObjTumb->resizeImage($ancho, $alto, 0);
			// Guardamos la imagen con una calidad del 100%
			$resizeObjTumb->saveImage('img/tumb/' . $num.'.jpg', 100);


			mysqli_close($link);
		}
	}
}
