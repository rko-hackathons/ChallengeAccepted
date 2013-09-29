<?php
	require '../includes/connection.php';
	require '../includes/header.php';
	require '../includes/menu_public.php';


	if (isset($_POST["name"])) {

		$username = $_POST['name'];
		$password = $_POST['pass'];
		$email = $_POST['email'];
         
		$sql = "INSERT INTO users VALUES('', ". 
											"'" . mysql_real_escape_string($username) . "',".
											"'" . mysql_real_escape_string($password) . "',".
											"'" . mysql_real_escape_string($email) .
											 "')";

		mysql_query($sql) or die(mysql_error());

		echo "</br> Thanks For Registering!";
	}
?>

<h1> Register </h1>

<form action="" method="post">

	username: 
	<br>
 	<input type="text" name="name">
 	<br>

 	password: 
	<br>
 	<input type="password" name="pass">
 	<br>

 	Email:
 	<br>
 	<input type="text" name="email">
 	<br>

 	<input type="submit" value="Register">
</form>


<?php
	require '../includes/footer.php';
?>

