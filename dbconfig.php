<?php
// Database configuration
$dbHost     = "foodsnapno01.mysql.domeneshop.no"; 	//Server adress
$dbUsername = "foodsnapno01"; 						//Username
$dbPassword = "************************";			//Password
$dbName     = "foodsnapno01";						//Name off database

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>