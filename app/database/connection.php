<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'blog';

$con = new MySQLi($host, $user, $pass, $db_name);

if ($con->connect_error) {
    die('Database connection error: ' . $con->connect_error);
}

