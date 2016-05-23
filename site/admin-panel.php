            <table>
				<tr>
					<td><b>ID |</b></td>
					<td><b>NAme |</b></td>
					<td><b>SURNAME |</b></td>
					<td><b>EMAIL |</b></td>
				</tr>
			</table>
<?php
	include "conn.php";
	$sql = "select * from users";
	$result = $db->query($sql);
	$var = 0;
	while(mysqli_num_rows($result)>$var){
		$row = $result->fetch_array();
		echo "
			<table>
				<tr>
					<td>$row[user_id] |</td>
					<td>$row[username] |</td>
					<td>$row[email] |</td>
					<td>$row[password] </td>
				</tr>
			</table>
			<a href=\"del.php?id=$row[user_id]\">delete</a>
			<form method='post' action=\"update.php?id=$row[user_id]\">
				<input type='text' name='name' placeholder='update name'>
				<input type='submit' value='update'>
			</form>
		";
		$var++;
	}
 ?>
