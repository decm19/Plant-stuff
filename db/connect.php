<?php

$dbname = NULL;

if (!isset($init_db)) {
	$dbname = "floradb";
}

$conn = mysqli_connect("localhost", "root", "", $dbname);

// Check connection
if ($conn) {
	return $conn;
} else {
	die("Connection failed: " . mysqli_connect_error());
}
