<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/logincss.css">
</head>
<body>
	<h2>로그인</h2>
	<form method="post" action="login_ok.php">
		<table width="350px">
			<tr>
				<td style="width: 100px">ID</td>
				<td><input type="text" name="id" tabindex="1"/></td> <!-- tabindex = tab key -->
			</tr>
			<tr>
				<td>PW</td>
				<td><input type="password" name="pw" tabindex="2"></td>
			</tr>
			<tr>
				<td colspan="2" class="center">
					<input type="submit" value="Login" tabindex="3">
					<input type="submit" value="Sign Up" tabindex="4">
				</td>
			</tr>
		</table>
	</form>
</body>	
</html>
