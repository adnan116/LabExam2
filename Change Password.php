<!DOCTYPE html>
<html>
<head>
	<title>PUBLIC HOME</title>
</head>
<body>
	<table border="1" width="50%" height ="350px" align="center">
		<tr>
			<td>
				<h2>X Company</h2>
			</td>
			<td align="right">
				Logged in as | 
				<a href="logout.php">Logout</a>
			</td>
		</tr>
		<tr>
			<td width="35%">
				<h4>Account</h4><hr><br>
				<ol>
					<li><a href="Dashboard.php">Dashboard</a></li>
					<li><a href="View Profile.php">View Profile</a></li>
					<li><a href="Edit Profile.php">Edit Profile</a></li>
					<li><a href="Change Profile Picture.php">Change Profile Picture</a></li>
					<li><a href="Change Password.php">Change Password</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ol>
			</td>
			<td>
				<fieldset>
					<legend>CHANGE PASSWORD</legend>
					<table>
						<form method="POST">
							<tr>
								<td>
									Current Password
								</td>
								<td>
									:<input type="Password" name="cpass">
								</td>
							</tr>
							<tr>
								<td>
									<font color="Green">New Password</font>
								</td>
								<td>
									:<input type="Password" name="npass">
								</td>
							</tr>
							<tr>
								<td>
									<font color="Red">Retype New Password</font>
								</td>
								<td>
									:<input type="Password" name="conpass">
								</td>
							</tr>
							<tr><td colspan="2"><hr></td></tr>
							<tr>
								<td colspan="2">
									<input type="submit" name="submit" value="Submit">
								</td>
							</tr>
						</form>
					</table>
				</fieldset>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				Copyright &copy; 2017
			</td>
		</tr>
	</table>
</body>
</html>