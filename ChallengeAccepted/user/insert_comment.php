<?php	

	include("../includes/connection.php");
	require '../includes/session.php'; 

	$comment_id = $_REQUEST['id'];
	$comment_body = $_REQUEST['comment'];
	$comment_user = $_SESSION['username'];
	$comment_date = date("Y/m/d");
	$comment_image_name = addslashes($_FILES['image']['name']);
	$comment_image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //gets file the content
	
	$sql = "INSERT INTO comments VALUES('{$comment_id}', ". 
										"'" . mysql_real_escape_string($comment_body) . "',".
										"'" . mysql_real_escape_string($comment_user) . "',".
										"'" . mysql_real_escape_string($comment_date) . "',".
										"'" . '' . "',".
										"'" . mysql_real_escape_string($comment_image_name) . "',".
										"'" . mysql_real_escape_string($comment_image) .
										 "')";
	mysql_query($sql) or die(mysql_error());

	header('Location: view.php?id='. $_REQUEST['id']);
?>