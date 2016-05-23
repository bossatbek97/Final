<?php
	include "dbconnect.php";
	$email = $_POST['email'];
	$password = $_POST["password"];
	$query = "SELECT * FROM users WHERE email = '".$email."' AND password = '".$password."'";
	$koks = mysql_query($query);
	//echo $query;
	if (mysql_num_rows($koks)>0) {
		session_start();
		$row = mysql_fetch_assoc($koks);
		$SESSION["user_id"] = $row["user_Id"];
		$SESSION["Username"] = $row["Username"];
		$SESSION["email"] = $row["email"];
		$SESSION["password"] = $row["password"];
		$SESSION["Status"] = $row["Status"];
		if ($row["Status"] == 1){
			echo "user";
		}else{
			echo "admin";
		}
	}else{
		echo "No such user";
	}
?>
