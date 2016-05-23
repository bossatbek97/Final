<?php
	include 'conn.php';
	$newname = $_POST['name'];
	$id = $_GET['id'];
	$sql = "update users set username='$newname' where user_id='$id'";
	if ($db->query($sql)){
		header("Location:adminpage.php");
	}
 ?>
