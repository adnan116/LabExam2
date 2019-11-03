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
				<a href="index.php">Home</a>|
				<a href="login.php">Login</a>|
				<a href="reg.php">Registration</a>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<fieldset>
					<legend>LOGIN</legend>
					<form method="POST">
						<table>
							<tr>
								<td>User Name</td>
								<td>
									:<input type="text" name="user">
								</td>
							</tr>
							<tr>
								<td>Password</td>
								<td>
									:<input type="Password" name="upass">
								</td>
							</tr>
							<tr><td colspan="2"><hr></td></tr>	
							<tr>
								<td colspan="2">
									<input type="checkbox" name="opt" value="Remember Password">Remember Password
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<input type="submit" name="submit" value="Submit">
									<a href="forgot.php">Forgot Password?</a>
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