<?php

$host = 'db';
$user = 'root';
$pass = 'password';
$db_name = 'signup';

$con = new mysqli($host, $user, $pass, $db_name);

if ($con->connect_error) {
    die('Database connection error: ' . $con->connect_error);
}

