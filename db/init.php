<?php

// Create database initialization connection
$init_db = true;
$connection = include "connect.php";

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS floradb";
if (mysqli_query($connection, $sql)) {
    echo "Database created successfully";
} else {
    die("Error creating database: " . mysqli_error($connection));
}

// Close database initialization connection
mysqli_close($connection);

// Reconnect with normal connection
$init_db = NULL;
$connection = include "connect.php";

// Create tables
$sql = "CREATE TABLE IF NOT EXISTS users (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30),
	email VARCHAR(50),
	username VARCHAR(50),
	address_street VARCHAR(200),
	address_city VARCHAR(50),
	address_state VARCHAR(20),
	address_postcode INT(5),
	phone INT(20),
	reg_date TIMESTAMP,
	password_salt TODO!(),
	password_salted_hash TODO!()
	)";

if (mysqli_query($connection, $sql)) {
    echo "Table users created successfully";
} else {
    die("Error creating table users: " . mysqli_error($connection));
}

$sql = "CREATE TABLE IF NOT EXISTS enquiries (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30),
	email VARCHAR(50),
	phone INT(20),
	enquiry VARCHAR(20),
	comments TEXT
	)";

if (mysqli_query($connection, $sql)) {
    echo "Table enquiries created successfully";
} else {
    die("Error creating table enquiries: " . mysqli_error($connection));
}

$sql = "CREATE TABLE IF NOT EXISTS contributions (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	contributor_name VARCHAR(30) NOT NULL,
	plant_name VARCHAR(50),
	file_name VARCHAR(50),
	comments TEXT
	)";

if (mysqli_query($connection, $sql)) {
    echo "Table contributions created successfully";
} else {
    die("Error creating table contributions: " . mysqli_error($connection));
}

// Close normal connection
mysqli_close($connection);
