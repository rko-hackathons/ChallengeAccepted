<?php

	require '../includes/connection.php';
	require '../includes/session.php';

	$id = addslashes($_REQUEST['id']);

	$image = mysql_query("SELECT * FROM comments WHERE comment_image_id=$id") or die(mysql_error());
	$image = mysql_fetch_assoc($image);
	$image = $image['comment_image'];

	//header("Content-type: image/jpeg");

	//$base64  = base64_encode($image); 
	// $img = 'data:image/png;base64,' . $base64;
	echo $image;
?>