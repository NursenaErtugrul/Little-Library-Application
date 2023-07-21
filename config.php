<?php
	$localhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "torkudb";

	$conn = new mysqli($localhost,$dbuser,$dbpass,$dbname);

	if ($conn -> connect_errno) {
		echo "Failed to connect to MySQL: " . $conn -> connect_error;
		exit();
	}
?>