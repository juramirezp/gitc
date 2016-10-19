<?php
	function incompletos(){
		include("coneccion.php");
	
		$query0="SELECT ruta_original FROM imagenes WHERE id_proyecto=999";
		$res0=mysqli_query($link, $query0);
		while($datos=mysqli_fetch_assoc($res0)){
			$id=$datos['ruta_original'];
			$ruta_original="img/original/".$id.".jpg";
			$ruta_mini="img/mini/".$id.".jpg";
			unlink($ruta_original);
			unlink($ruta_mini);
			$query1="DELETE FROM imagenes WHERE id_proyecto=999";
			if(mysqli_query($link, $query1)){
				
			}
		}	
	}
	
?>