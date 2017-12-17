<!DOCTYPE html>
<?php 
	session_start();
	if (($_POST["email"] == "mohammad@hotmail.com")&&($_POST["password"] == "moham123")) {
		header("location: Article.html");
	}else {
		$_SESSION["error"] = "Login failed, please try again";
		header("location: Interactive.php");
	}
?>