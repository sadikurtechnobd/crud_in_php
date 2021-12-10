<?php 
	
	require_once('connection.php');

	$get_ID = $_REQUEST['st_id'];
 
	$sql = "DELETE FROM students WHERE id='$get_ID' ";
	$del = $connection->query($sql);

	header('location:view.php?delete_success');

?>