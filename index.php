<html>
<head>
	<title>Welcome!</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>

<ul class="slideshow">
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
</ul>




<form>
	<div id="container">
		<input type="submit" name="signin" value="Sign in!" class="btn btn-warning"/>
		<input type="submit" name="register" value="A new user? Register now!" class="btn btn-primary"/>
	</div>

	<?php
		$register = isset($_GET['register']);
		$signin = isset($_GET['signin']);

		if($signin){
			header("Location: login.php");
		}
		if($register){
			header("Location: register.php");
		}
	?>

</form>

</body>
</html>