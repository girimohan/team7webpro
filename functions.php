<?php

function check_login($con)
{

if(isset($_SESSION['user_id']))
{

$id = $_SESSION['user_id'];
$query = "select * from users where user_id = '$id' limit 1";

$result = mysqli_query($con,$query);
if($result && mysqli_num_rows($result) > 0)
{

$user_data = mysqli_fetch_assoc($result);
return $user_data;
}
}

//redirect to login
header("Location: login.php");
die;

}

function random_num($length)//to create unique user_id number
{

	$text = "";
	if($length < 3)
	{
		$length = 3;
	}

	$len = rand(2,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}
