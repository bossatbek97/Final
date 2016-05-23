<?php
	include "dbconnect.php";
	$email =$_POST["email"];
	$password = $_POST["pass"];
	$query = "SELECT * FROM users WHERE email = '".$email."' AND password = '".$password."'";
	$koks = mysql_query($query);
	//echo $query;
	if (mysql_num_rows($koks)>0) {
		session_start();
		$row = mysql_fetch_assoc($koks);
		$SESSION["user_id"] = $row["user_Id"];
		$SESSION["Usern`ame"] = $row["Username"];
		$SESSION["Email"] = $row["Email"];
		$SESSION["Password"] = $row["Password"];
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
