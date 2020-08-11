<?php

// check if the user is not logged in. if not redirect to login.
$logged_user = $_SESSION['user'];
if(!$logged_user){ 
	header ("Location: login.php");
	die();
}
?>
