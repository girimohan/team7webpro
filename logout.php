<?php

session_start();

if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);

}
echo '<script type="text/javascript"> window.location="https://www.google.com/";</script>'; //js code to redirect to index page
die;
