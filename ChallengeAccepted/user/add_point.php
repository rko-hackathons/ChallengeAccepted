<?php

	require '../includes/connection.php';
	require '../includes/header.php';
	require '../includes/menu_user.php';
	require '../includes/session.php';

	$id = $_REQUEST['id'];
 	$sql = "SELECT * FROM feed WHERE feed_id= '" . $id . "';";

 	$result = mysql_query($sql) or die("query error");
	$row = mysql_fetch_array($result) or die("error");

	echo $result[0];

	$sql = "UPDATE feed SET " . "feed_point = '" .  stripslashes(($row['feed_point'] + 1)) . "' WHERE feed_id = '" . $id . "';";

	mysql_query($sql) or die(mysql_error());

	header("Location: index.php")

?>