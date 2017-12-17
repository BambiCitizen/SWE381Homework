<!DOCTYPE html>
<?php 
	session_start();
	if (isset($_SESSION["error"])) {
		echo "<p style = 'color:red'>".$_SESSION["error"]."</p>";
		unset($_SESSION["error"]);
	}
?>
<html>
<head>
	<title>JavaScript</title>

	<script type="text/javascript">
		var name;
		name = prompt("Enter your name");
		var today = new Date();
		var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
		document.writeln("<h1>Welcome "+name+" to our page, today's date is "+date+"</h1>");

		if(name == "mohammad")
			document.writeln("<p>You Are The Best Teacher</p>");

		var list = ["Mohammad", "Abdulmajeed", "Abdulaziz"];
		var numberOfStudents = prompt("Enter a number of students");

		document.writeln("<ol>");

		var numM=0;
		var numA=0;
		var numAz=0;
		for (var i = 0; i < parseInt(numberOfStudents); i++) {
			var student = list[Math.floor(Math.random()*list.length)];
			document.writeln("<li>" + student + "</li>");
			if (student == "Mohammad")
				numM++;
			else if(student == "Abdulmajeed")
				numA++;
			else
				numAz++;
		}

		document.writeln("</ol>");
		document.writeln("<p>Number of times Mohammad was displayed: "+numM+", Percantage: "+numM/numberOfStudents*100+"%</p>");
		document.writeln("<p>Number of times Abdulmajeed was displayed: "+numA+", Percantage: "+numA/numberOfStudents*100+"%</p>");
		document.writeln("<p>Number of times Abdulaziz was displayed: "+numAz+", Percantage: "+numAz/numberOfStudents*100+"%</p>");
		function changeBackground() {
			document.body.style.backgroundColor = "gray";
		}

	</script>
</head>
<body>
	<button onclick="changeBackground()">Change Background</button>
	<h1>Login</h1>
		<p>Please enter information to login</p>
		<form method = "post" action = "checkLogin.php">
			<h2>User information</h2>
			<label>E-mail: </label><input type = "text" name = "email"><br>
			<label>Password: </label><input type = "password" name = "password"><br>
			<p><input type = "submit" value = "Login" name = "submit"></p>
		</form>
</body>
</html>