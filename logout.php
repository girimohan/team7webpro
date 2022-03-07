<?php

session_start();

if(isset($_SESSION['id']))
{
	unset($_SESSION['id']);

}
//echo '<script type="text/javascript"> window.location="https://www.google.com/";</script>'; //js code to redirect to index page
//echo '<script type="text/javascript"> window.location="login.php";</script>'; //js code to redirect to index page
echo"<h1>Thank you!<h1>";
echo '<h4>Do you want to <a href="login.php">Login</a> again?</h4>';

die;

?>