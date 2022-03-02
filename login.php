<?php
//session_start();

include('header.php');

include("connection.php");
include("functions.php");



if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

		//read from database
		$query = "select * from users where user_name = '$user_name' limit 1";
		$result = mysqli_query($con, $query);

		if ($result) {
			if ($result && mysqli_num_rows($result) > 0) {

				$user_data = mysqli_fetch_assoc($result);

				if ($user_data['password'] === $password) {

					$_SESSION['user_id'] = $user_data['name'];

					echo '<script type="text/javascript"> window.location="index.php";</script>'; //js code to redirect to index page
					die;
				}
			}
		}

		echo "Wrong username or password!";
	} else {
		echo "Wrong username or password!";
	}
}

?>


<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
</head>

<body>

	<style type="text/css">
		#text {

			height: 25px;
			border-radius: 5px;
			padding: 4px;
			border: solid thin #aaa;
			width: 100%;
		}

		#button {

			padding: 5px;
			width: 100px;
			color: white;
			background-color: lightblue;
			border: none;
			border-radius: 5px;

		}

		#box {

			margin: auto;
			width: 400px;
			padding: 20px;
		}
	</style>

	<div id="box">

		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: coral;">Login</div>

			<input id="text" type="text" name="user_name" placeholder="Username"><br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>

			<input id="button" type="submit" value="Login"><b><br><br>
				<p>If you dont have an account,
					<a href="signup.php">Click to Signup</a>
				</p><br>
		</form>
	</div>
</body>

</html>

<?php
include 'footer.php';
?>