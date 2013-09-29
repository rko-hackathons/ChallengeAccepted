<?php

	require '../includes/connection.php';
	require '../includes/session.php';
	require '../includes/header.php';
	require '../includes/menu_public.php';


	//echo $_POST['user_id'];
	if(isset($_SESSION['user_id'])){

		//header("location: ./index.php");

		echo "hi!";

	}

	if(isset($_POST['name'])){

		$username = trim($_POST['name']);
		$password = trim($_POST['pass']);
		// Check database to see if username and the hashed password exist there.
		//$query = "SELECT * FROM admins WHERE admin_user =  " . $username . " ";
		//$query .= "AND admin_password = " . $password . " ";
		//$query .= "LIMIT 1";

		//echo $query;

		$query = "SELECT user_id, user_name ";
		$query .= "FROM users ";
		$query .= "WHERE user_name = '{$username}' ";
		$query .= "AND user_password = '{$password}' ";
		$query .= "LIMIT 1";
		$result_set = mysql_query($query) or die(mysql_error());

		if (mysql_num_rows($result_set) == 1) {
			// username/password authenticated
			// and only 1 match
			$found_user = mysql_fetch_array($result_set);
			$_SESSION['user_id'] = $found_user['user_id'];
			$_SESSION['username'] = $found_user['user_name'];
			header("Location: ../user/index.php");
		} 
		else {
			// username/password combo was not found in the database
			$message = "Username/password combination incorrect.<br />
				Please make sure your caps lock key is off and try again.";
			echo "$message";
		}
	}

?>

<h1> Login </h1>

<form action="" method="post">

	username: 
	<br>
 	<input type="text" name="name">
 	<br>

 	password: 
	<br>
 	<input type="password" name="pass">
 	<br>

 	<input type="submit" value="Login">
</form>


<?php
	require '../includes/footer.php';
?>

