<html>
<head>
	<title>hello</title>
	<link rel="stylesheet" type="text/css" href="forumf.css">
	<script type="text/javascript" src="hackingf.js"></script>
	
</head>
<body>

<?php
session_start();
include "header.php";
include "checkuserlogin.php";
?>

<span id="head">Forum</span>


<ul id="postbar">

	<li class="left newpost"><a href="post.php">New post</a></li>
	<li class="right"><a href="#">Goto: 1 ..</a></li>
	<li class="right"><a href="website.php">Back</a></li>
</ul>


<?php

echo "<span id='postcontent'>Title: ".$_SESSION['title']."<br/> Subject: ".$_SESSION['subject']."<br/> by: ".$_SESSION['author']."</span>";

?>



</body>
</html>
