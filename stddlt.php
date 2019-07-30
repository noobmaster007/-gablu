<?php
include("mydb.php");

if (isset($_GET['id'])) {
	
	$id = $_GET['id'];
	$query = "DELETE FROM addstd WHERE id = $id";
	$result = mysqli_query($connect,$query);

	if (!$result) {
		die("Query Failed!");
	}

	$_SESSION['message'] = 'Task Removed Successfully';
  	$_SESSION['message_type'] = 'danger';
  	header('Location: adminShow.php');
}
?>