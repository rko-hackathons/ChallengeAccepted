<?php

	require '../includes/connection.php';
	require '../includes/session.php';
	require '../includes/header.php';
	require '../includes/menu_user.php';

	if (isset($_POST['title'])) {

		$title = $_POST['title'];
		$content = $_POST['content'];
		$time = date("Y/m/d");
		$points = 0;
		$prize = $_POST['prize'];

		$sql = "INSERT INTO feed VALUES('', ". 
											"'" . mysql_real_escape_string($_SESSION['username']) . "',".
											"'" . mysql_real_escape_string($title) . "',".
											"'" . mysql_real_escape_string($content) . "',".
											"'" . mysql_real_escape_string($time) . "',".
											"'" . mysql_real_escape_string($points) . "',".
											"'" . mysql_real_escape_string($prize) . 
											 "')";
		mysql_query($sql) or die(mysql_error());

		header("Location: index.php");
	}

	echo "<h3>Insert Form</h3>";
		echo "<form action='insert_form.php' method='post'>";
		echo 'Title: <br><input type="text" name="title"><br>';
		echo 'Message: <br><textarea rows="10" cols="40" name="content"></textarea><br>';
		//echo 'Prize: <br><input type="text" name="prize"><br>';
		echo  '<input type="submit" value="POST">';
	echo '</form>';

?>



<?php
	require '../includes/footer.php';
?>
