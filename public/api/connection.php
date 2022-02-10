<?php
	
	$connection = mysqli_connect("localhost","root","","db_data");

	if (mysqli_connect_error()) {
		echo "Error Connection :".mysqli_connect_error();
	}

?>