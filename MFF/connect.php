<?php

	$host = "localhost";
	$db_user = "root";
	$db_password = "";
	$db_name = "projekt";

	$mysqli = new mysqli($host, $db_user, $db_password, $db_name);
	if(mysqli_connect_errno()) {
	    echo 'B��d bazy danych';
	}
?>