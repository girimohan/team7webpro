<?php
include 'header.php';
?>

<?php
//session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$address = $_POST['address'];

	if (!empty($user_name) && !empty($password)) {

		//save to database
		$id = random_num(7);
		$query = "insert into `users` (id,user_name,password,name,email,address) values ('$id','$user_name','$password','$name','$email','$address')";

		mysqli_query($con, $query);

		//echo '<script type="text/javascript"> window.location="login.php";</script>'; //js code to redirect to index page
		echo 'You are Registered! <br>';
		echo 'Click to <a href="login.php">Login</a>';
		die;
	} else {
		echo "Please enter some valid information!";
	}
}


?>



<div>

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
			<div style="font-size: 20px;margin: 10px;color: coral;">Signup</div>

			<input id="text" type="text" name="user_name" placeholder="User Name"><br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>
			<input id="text" type="text" name="name" placeholder="Full Name"><br><br>
			<input id="text" type="email" name="email" placeholder="Email"><br><br>
			<input id="text" type="text" name="address" placeholder="Address"><br><br>

			<input id="button" name="submit" type="submit" value="Signup"><b><br><br>

				<a href="login.php">Click to Login</a><br><br>
				<a href="read.php">Click to view users data</a><br>
		</form>

	</div>
</div>
<?php
include 'footer.php';
?>