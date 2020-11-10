<!-- DELETE PART -->
<?php
	
	include('db/db.php');
	
	$id = $_GET['id'];

	 $sql ="DELETE FROM posts WHERE id='$id'" ;
	 $conn -> query($sql);
	header('location: profile.php');


?>