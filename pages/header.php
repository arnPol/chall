<html>
<head>
	<title></title>
<?php
$logout = isset($_POST['logout']);
if($logout){
	$_SESSION['user'] = false;
	header("Location: login.php");
}
?>

<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>


<nav class="navbar navbar-inverse">
	<div class="container">
	<div class="navbar-header">
        <a class="navbar-brand" href="index.php">Home forum</a>
     </div>
	 <ul class="nav navbar-nav">
		<li class="active"><a href="website.php">Home</a></li>
		<li><a href="#">About</a></li>
		<li><a href="#">Contact</a></li>
	 </ul>
	 <ul class="nav navbar-nav navbar-right">
	 	<li><?php
			echo "<span style='color:rgba(255, 255, 255, 0.8); padding: 15px; position: relative; top: 15px;'>"."Hello ".$_SESSION['new_account']."</span>";
			?>
		</li>	
	</ul>
	<form method="post">
		<input type="submit" name="logout" value="log out" style='position: relative; float:right; top: 13px; border: none; background-color: rgb(34, 34, 34); color: white; font-size: 15px; '>
	</form>
	</div>
</nav>


</body>
</html>
