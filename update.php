<?php
include 'header.php';
?>

<?php 
	include("connection.php");
	include("functions.php");

    $user_id=$_GET['updateid'];
    $sql = "select * from users where user_id=$user_id";
    $result = new MySQLi($con,$sql);
    $row = mysqli_fetch_assoc($result);
            $user_id =$row['user_id'];
            $user_name =$row['user_name'];
            $name =$row['name'];
            $email =$row['email'];
            $address =$row['address'];

	if(isset($_POST['submit']))
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$address = $_POST['address'];

		$sql = "update users set user_id =$user_id, user_name='$user_name',name='$name',
        email='$email',address='$address' where user_id=$user_id";
        $result= mysqli_query($con,$sql);
        if($result){
            //echo"updated";
			echo '<script type="text/javascript"> window.location="read.php";</script>'; //js code to redirect to index page
        }

	}

	
?>



<div>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 5px;
		width: 100px;
		color: white;
		background-color:lightblue;
		border: none;
        border-radius: 5px;

	}

	#box{

		margin: auto;
		width: 400px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: coral;">Update</div>
            User ID<input id="text" type="int" name="user_id"placeholder="User ID" value="<?php echo $user_id;?>"> <br><br>
			User Name<input id="text"type="text" name="user_name"placeholder="User Name"value="<?php echo $user_name;?>"><br><br>
			Full Name<input id="text" type="text" name="name" placeholder="Full Name"value="<?php echo $name;?>"><br><br>
			Email<input id="text" type="email" name="email" placeholder="Email"value="<?php echo $email;?>" ><br><br>
			Address<input id="text" type="text" name="address" placeholder="Address"value="<?php echo $address;?>"><br><br>

			<input id="button" name="submit"type="submit" value="update"><b><br><br>

		</form>
	</div>
</div>