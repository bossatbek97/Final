<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("dbtest",$conn);
if(count($_POST)>0) {
mysql_query("UPDATE user set username='" . $_POST["username"] . "', password='" . $_POST["password"] . "', email='" . $_POST["email"] .  "' WHERE userId='" . $_POST["userId"] . "'");
$message = "Record Modified Successfully";
}
$result = mysql_query("SELECT * FROM user WHERE userId='" . $_GET["userId"] . "'");
$row= mysql_fetch_array($result);
?>
<html>
<head>
<title>Add New User</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<div align="right" style="padding-bottom:5px;"><a href="list_user.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List User</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2">Edit User</td>
</tr>
<tr>
<td><label>Username</label></td>
<td><input type="hidden" name="userId" class="txtField" value="<?php echo $row['userId']; ?>"><input type="text" name="username" class="txtField" value="<?php echo $row['username']; ?>"></td>
</tr>
<tr>
<td><label>Password</label></td>
<td><input type="password" name="password" class="txtField" value="<?php echo $row['password']; ?>"></td>
</tr>
<td><label>First Name</label></td>
<td><input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>"></td>
</tr>

</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body></html>