<html>
<head>
	<title>Welcome to the website!</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="web.css">
	
</head>

<body>

<?php
session_start();
include "header.php";
include "checkuserlogin.php";
?>




<!-- <header class="header"></header> -->
<div class="center">Welcome to My forum!</div>


<div class="imgcontainer">
	<a href="hackingf.php">
	<img src="img1.jpg" alt="hacking" class="image">
	<div class="overlay">
		<div class="text">Home forum</div>
	</div>
	</a>
</div>

<div class="imgtcontainer">
  <img src="img1.jpg" alt="hacking" class="image">
  <div class="overlay">
      <div class="text">Computer forum</div>
  </div>
</div>


</body>
</html>
