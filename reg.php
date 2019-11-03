<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION</title>
</head>
<body>
	<table border="1" width="50%" height ="350px" align="center">
		<tr>
			<td>
				<h2>X Company</h2>
			</td>
			<td align="right">
				<a href="index.php">Home</a>|
				<a href="login.php">Login</a>|
				<a href="reg.php">Registration</a>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<form method="POST" action="">
					<fieldset>
						<legend>REGISTRATION</legend>
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
								<tr><td colspan="2"><hr></td></tr>
								<tr>
									<td>
										Email
										
									</td>
									<td>
										:<input type="text" name="email">
										
									</td>
									
								</tr>
								<tr><td colspan="2"><hr></td></tr>
								<tr>
									<td>
										User Name
										
									</td>
									<td>
										:<input type="text" name="uname">
										
									</td>
									
								</tr>
								<tr><td colspan="2"><hr></td></tr>
								<tr>
									<td>
										Password
										
									</td>
									<td>
										:<input type="Password" name="pass">
										
									</td>
									
								</tr>
								<tr><td colspan="2"><hr></td></tr>
								<tr>
									<td>
										Confirm Password
										
									</td>
									<td>
										:<input type="Password" name="conpass">
										
									</td>
									
								</tr>
								<tr><td colspan="2"><hr></td></tr>
								<tr>
									<td colspan="2">
										<fieldset>
											<legend>Gender</legend>
											<input type="radio" name="gender" value="Male">Male
											<input type="radio" name="gender" value="Female">Female
											<input type="radio" name="gender" value="Other">Other
										</fieldset>
										<hr>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<fieldset>
											<legend>Date of Birth</legend>
											<input type="Date" name="dob">
										</fieldset>
										<hr>
									</td>
								</tr>
								<tr>
									<td>
										<input type="submit" name="submit" value="Submit">
										<input type="reset" name="reset" value="Reset">
									</td>
								</tr>
							</table>
						</form>
					</fieldset>
				</form>
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