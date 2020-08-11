<?php
session_start();
$submit = isset($_POST['new_user']);


if($submit){
	$name = $_POST['username'];
	$password = $_POST['password'];
	$passwordtwo = $_POST['passwordtwo'];
	if(!empty($name) && !empty($password)){
		if($password !== $passwordtwo){
			echo "<p style='color: red' id='warning'>"."Your password is not match to each other!"."</p>";
			header("refresh:3; register.php");
		}
		else if(strlen($name)<3){
			echo "<p style='color: red' id='warning'>"."The name must be 3 characters or more!"."</p>";
			header("refresh:3; register.php");
		}
		else{
			echo "<p style='color: green;' id='success'>". "welcome ".$name. "</p>";
			// save the currnet user
			$_SESSION['new_account'] = $name;
			$_SESSION['new_password'] = $password;

			// Connect to mysql DB (ip, name, pass)
			$con = mysqli_connect("127.0.0.1", "0sint1sAw3s0me", "fgjfV3B6Faqxga6c");
			if(!$con){
				echo "Not connected to server";
			}

			// Select the name of DB
			if(!mysqli_select_db($con, 'forumdb')){
				echo "Database not selected";
			}

			// Make new variables and insert the value of username and password inputs. 
			$name = $_POST['username'];
			$password = $_POST['password'];

			// New variable which oreder to save the username and encrypted password in the DB
			$sql = "INSERT INTO users(name, password) VALUES('$name', '".md5($password)."')";

			if(!mysqli_query($con, $sql)){
				echo "Not inserted";
			}else{
				echo "The registration completed successfully!";
			}

			header("refresh:4; url=login.php");

		}
		
	}else{
		// If one of the inputs is empty the page returns to register.php
		header("Location: register.php");
	}
}

?>
