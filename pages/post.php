<html>
<head>
	<title>New Post</title>
	<link rel="stylesheet" type="text/css" href="post.css">
</head>
<body>

<?php
session_start();
include "header.php";
include "checkuserlogin.php";

?>

<h2>New post by '<?php echo $_SESSION['new_account'] ?>'</h2> 


<div class="containerbox">
  <form autocomplete="off" method="post">
  <div class="row">
    <div class="col-25">
      <label for="fname">Title</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="title" placeholder="Your title..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Subject</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row flow">
    <input type="submit" value="Post" name="post" id="submit">
  </div>
  </form>
  <form>
	  <div class="row">
	    <input type="submit" value="Cancel" id="cancel" name="cancel">
	  </div>
  </form>
</div>


<?php
$goback = isset($_GET['cancel']);
$post = isset($_POST['post']);

if($post){
	$title = $_POST['title'];
	$content = $_POST['subject'];
	if(!empty($title) && !empty($content)){
		$_SESSION['title'] = $title;
		$_SESSION['subject'] = $content;
		$_SESSION['author'] = $_SESSION['new_account'];
		header("Location: hackingf.php");
	}
}

if($goback){
	header("Location: hackingf.php");
}

?>

</body>
</html>