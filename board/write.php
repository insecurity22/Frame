<html>
<head>
	<meta charset="UTF-8">
	<title>Board</title>
	<link rel="stylesheet" type="text/css" href="css/boardleft.css" />
</head>

<body class="board-left">
	<font color="black" size="50">Write</font>
	<form action="write_post.php" method="post">
		<input type="hidden" name="id" value="id">
		<table width="500" border="0">
			<tr>
				<td width="60" align="left">Title</td>
				<td align="left">
					<input type="text" name="title" size="30">
				</td>
			</tr>
			<tr>
				<td width="60">Content</td>
				<td align="left">
					<input type="text" name="content" style="width:335px; height:100px;">
				</td>
			</tr>
			<tr>
				<td width="60">Name</td>
				<td align="left">
					<input type="text" name="user_name" size="15"><br>
				</td>
			</tr>
			<tr>
				<td width="60">Password</td>
				<td align="left">
					<input type="password" name="password" size="15"><br>
				</td>
			</tr>

			<tr>
				<td colspan="2" style="padding-top:10px;">
					<input type="submit" value="생성하기">
					<input type="reset" value="지우기">
					<input type="button" value="이전으로" onclick="history.back(-1)">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
