<?php

if ($init_db == NULL) {
	$dbname = "floradb";
}

$conn = mysqli_connect("localhost", "root", "", $dbname);

// Check connection
if ($conn) {
	return $conn;
} else {
	die("Connection failed: " . mysqli_connect_error());
}
