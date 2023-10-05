<?php

	$localhost = "localhost";
	$user = "root";
	$password = "";
	$db = "php_test";

	$conn = new mysqli_connect($localhost, $user, $password, $db);

	if ($conn -> connect_error) {
		die("connection failed" . $conn->connect_error);
	}

?>