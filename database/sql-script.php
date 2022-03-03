<?php
#In this file, we will share our sql scripts, 
#so that we can add those in our databases!

$servername = "localhost";
$username = "username";
$password = "password";

// Creating connection
$conn = new mysqli($servername, $username, $password);

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

$link = mysqli_connect("172.21.0.2", "root", "password", "pinedine"); 
 
 if($link === false) { 
     die("ERROR: Could not connect. " . mysqli_connect_error()); 
 }

?>