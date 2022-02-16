<?php

$dbhost = "db";
$dbuser = "root";
$dbpass = "password";
$dbname = "signup";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}