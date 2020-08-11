<html>
<head>
	<title>Register!</title>
	<link rel="stylesheet" type="text/css" href="registerstyle.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>

<div class="container">
	<form action="connect.php" method="post" autocomplete="off">
		<span>Username:</span><input type="text" name="username" placeholder="Choose a name" /> <br />
		<span>Password:</span><input type="password" name="password" placeholder="Choose a Password" /> <br />
		<span>Password:</span><input type="password" name="passwordtwo" placeholder="Rewrite your passsword" />

		<input type="submit" name="new_user" value="Create!" class="btn btn-success"/>

		
	</form>
	<form action="login.php">
		<p id="gotologin">Already have an account? Log in now! </p>
		<input type="submit" name="login" value="Log in!" class="btn btn-warning"/>
	</form>
</div>


</body>
</html>