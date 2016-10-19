<?php

	//$link = @mysqli_connect("localhost", "gitccl_manager", "systematico7378");
	//	@mysqli_select_db($link,"gitccl_data") or die ("no Bakvkvuikjvklhvjhvjljvje");

		$link = new mysqli("localhost", "ferremas_manager", "systematico7378", "ferremas_data");
		if ($link === false){
			die("ERROR: No se estableció la conexión. ". mysqli_connect_error());
		} 

?>