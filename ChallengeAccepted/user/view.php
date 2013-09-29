<?php 

	include("../includes/connection.php"); 
	require '../includes/session.php';
	include("../includes/header.php"); 
	include("../includes/menu_user.php"); 

	$id = $_REQUEST['id'];

	$sql = "SELECT * FROM feed WHERE feed_id= '" . $id. "';";
	
	$result = mysql_query($sql) or die(mysql_error());

	$row = mysql_fetch_array($result) or die(mysql_error());

	echo "<h2 id='view_title'>";
		echo ($row['feed_title']);
	echo "</h2>";

	echo "<div id='view_date'>";
		echo ("posted on: " . $row['feed_time'] . " by " . $row['feed_user'] . "<br><br>");
	echo "</div>";

	print nl2br($row['feed_content']);
?>

<?php
	echo "<h2>  Comments/Challengers </h2>";
	//display comments
		$query = mysql_query("SELECT * FROM comments WHERE comment_id='{$id}'") or die(mysql_error());
		while($row = mysql_fetch_array($query)){
			echo $row[2] . " says: <br><br>"; 
			echo $row[1];
			echo "<br><br>";
			echo "Posted on: " . $row[3];
			echo "<br><hr>";
		}
	//"<img src=get.php?id=$id>";
		
	//insert comments and photo
	echo "<form action='insert_comment.php?id=" .  $_REQUEST['id'] . " 'method='post' enctype='multipart/form-data'>";
		echo  $_SESSION['username'] . "'s comment:";
		echo "<br>";
		echo "<textarea type='text' name='comment' rows='5' cols='50'></textarea>"; 
		echo "<br>";
		echo 'File: <input type="file" name="image">';
		echo "<br><br>";
		echo "<input type='submit' value='Go' >";
	echo "</form>";

?>


<?php include("../includes/footer.php"); ?>