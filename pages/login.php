<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
<body>


<div id="container">
	<div class='jumbotron'>
		<form action="login.php" method="post" autocomplete="off">
			<h2>Login!</h2>
			<input type="text" placeholder="username" name="username" id="username" value=""/>
			<input type="password" placeholder="password" minlength="4" maxlength="10" name="password" id="password" />
			<input type="submit" name="submitbutton" value="Login" class="btn btn-success"/>
			<br />
			<br />
			<h4> Don't Have an account yet? Get free account now! <input type="submit" name="register" value="Register here!" class="btn btn-success register"></h4>
			
		</form>
	</div>
</div>




<?php
session_start();
$submitbutton = isset($_POST['submitbutton']);
$register = isset($_POST['register']);

if($submitbutton){
	$name = $_POST['username'];
	$password = $_POST['password'];
	if(!empty($name) && !empty($password)){
		if($name == $_SESSION['new_account'] and $password == $_SESSION['new_password']){
			$_SESSION['user'] = true;
			header("Location: website.php");
		}
		else{
			echo "<p id='failed'>"."Username or Password is incorrect!"."</p>";
		}	
	}
}

if($register){
	header("Location: register.php");
}

if($_SESSION['user'] == true){
	header("Location: website.php");
}
?>

</body>
</html>