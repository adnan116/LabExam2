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
					<legend>EDIT PROFILE</legend>
					<form method="POST">
						<table>
							<tr>
								<td>
									Name
								</td>
								<td>
									:<input type="text" name="name">
								</td>
							</tr>
							<tr><td colspan="2"></td></tr>
							<tr>
								<td>
									Email
								</td>
								<td>
									:<input type="text" name="email">
								</td>
							</tr>
							<tr><td colspan="2"></td></tr>
							<tr>
								<td>
									Gender
								</td>
								<td>
									:<input type="radio" name="gender" value="Male">Male
									<input type="radio" name="gender" value="Female">Female
									<input type="radio" name="gender" value="Other">Other
								</td>
							</tr>
							<tr><td colspan="2"></td></tr>
							<tr>
								<td>
									Date of Birth
								</td>
								<td>
									:<input type="Date" name="dob">
								</td>
							</tr>
							<tr><td colspan="3"><hr></td></tr>
							<tr>
								<td colspan="3">
									<input type="submit" name="submit" value="Submit">
								</td>
							</tr>
						</table>
					</form>
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