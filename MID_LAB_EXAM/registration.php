<center>
	<form action="registration.inc.php" method="POST">
		<table border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td>
					<fieldset>
						<legend>
							<h3>REGISTRATION</h3>
						</legend>
						Id<br /><input type="text" name="id"><br />
						Password<br /><input type="password" name="pwd"><br />
						Confirm Password<br /><input type="password" name="cpwd"><br />
						Name<br /><input type="text" name="name"><br />
						User Type
						<hr />
						<input type="radio" name="type" value="User" />User
						<input type="radio" name="type" value="Admin" />Admin
						<hr />
						<input type="submit" value="Sign Up" name="submit">
						<a href="login.php">Sign In</a>
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
</center>