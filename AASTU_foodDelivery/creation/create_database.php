<?php
$servername = "localhost"; //server
$username = "root"; //username
$password = ""; //password
$dbname = "deliverysystem_db";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}


// Create database
$sql = "CREATE DATABASE IF NOT EXISTS deliverysystem_db";
if ($db->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $db->error;
}

// Close connection
$db->close();
echo "hello";
