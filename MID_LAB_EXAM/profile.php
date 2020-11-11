<?php
session_start();
if (!isset($_SESSION['userId'])) {
	header("Location: login.php");
}
include_once("profile.inc.php");
?>

<center>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr>
			<td colspan="2" align="CENTER">Profile</td>
		</tr>
		<tr>
			<td>ID</td>
			<td><?php echo $id ?>
		</tr>
		<tr>
			<td>NAME</td>
			<td><?php echo $name ?></td>
		</tr>
		<tr>
			<td>USER TYPE</td>
			<td><?php echo $type ?></td>
		</tr>
		<tr>
			<td colspan="2" align="right"><a href="home.html">Go Home</a></td>
		</tr>
	</table>
</center>