<?php

$servername="localhost";
$username="root";
$password="";

	$conn=new mysqli('localhors', 'root', '', 'eventos');
	
	if ($conn->connected_error) {
		echo $error -> $conn->connected_error;
	}
?>
