<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("dbtest",$conn);
mysql_query("DELETE FROM user WHERE userId='" . $_GET["userId"] . "'");
header("Location:list_user.php");
?>