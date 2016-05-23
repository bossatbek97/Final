<?php
	include "conn.php";
	$id = $_GET['id'];
	$sql = "delete from users where user_id = '$id'";
	if ($db->query($sql)){
		header("Location:adminpage.php");
	}
 ?>
