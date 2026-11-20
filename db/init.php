<?php

// Create database initialization connection
$init_db = true;
$connection = include "connect.php";

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS floradb";
if (!mysqli_query($connection, $sql)) {
    die("Error creating database: " . mysqli_error($connection));
}

// Close database initialization connection
mysqli_close($connection);

// Reconnect with normal connection
$init_db = NULL;
$connection = include "connect.php";

// Create tables
$sql = "CREATE TABLE IF NOT EXISTS register (
	id INT(6) UNSIGNED AUTO_INCREMENT UNIQUE PRIMARY KEY, 
	firstname VARCHAR(25) NOT NULL,
	lastname VARCHAR(25),
	email VARCHAR(100) NOT NULL UNIQUE,
	username VARCHAR(50) NOT NULL UNIQUE,
	address_street VARCHAR(200),
	address_city VARCHAR(50),
	address_state VARCHAR(20),
	address_postcode VARCHAR(5),
	phone VARCHAR(20),
	reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
	)";

if (!mysqli_query($connection, $sql)) {
    die("Error creating table register: " . mysqli_error($connection));
}


$sql = "CREATE TABLE IF NOT EXISTS users (
	id INT(6) UNSIGNED AUTO_INCREMENT UNIQUE PRIMARY KEY, 
	firstname VARCHAR(25) NOT NULL,
	lastname VARCHAR(25),
	email VARCHAR(100) NOT NULL UNIQUE,
	username VARCHAR(50) NOT NULL UNIQUE,
	password_hash VARCHAR(60),
	profile_picture BLOB
	)";

if (!mysqli_query($connection, $sql)) {
    die("Error creating table users: " . mysqli_error($connection));
}

$sql = "CREATE TABLE IF NOT EXISTS enquiries (
	id INT(6) UNSIGNED AUTO_INCREMENT UNIQUE PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30),
	email VARCHAR(50),
	phone VARCHAR(20),
	enquiry VARCHAR(20),
	comments TEXT
	)";

if (!mysqli_query($connection, $sql)) {
    die("Error creating table enquiries: " . mysqli_error($connection));
}

$sql = "CREATE TABLE IF NOT EXISTS contributions (
	id INT(6) UNSIGNED AUTO_INCREMENT UNIQUE PRIMARY KEY, 
	contributor_name VARCHAR(30) NOT NULL,
	plant_name VARCHAR(50),
	plant_photo BLOB,
	comments TEXT
	)";

if (!mysqli_query($connection, $sql)) {
    die("Error creating table contributions: " . mysqli_error($connection));
}

// Close normal connection
mysqli_close($connection);
