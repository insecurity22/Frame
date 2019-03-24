<html>
<head>
	<meta charset="UTF-8">
	<title>Board</title>
	<link rel="stylesheet" type="text/css" href="css/boardleft.css" />
</head>

<body class="board-left">

	<?php
		include "db/db.php";
		$connect = dbconn();
	
		$id = $_GET['id'];
		$result = mysqli_query($connect, "select * from boards where id=$id");
		$data = mysqli_fetch_array($result); 
	?>

	<font color="black" size="50">Edit</font>
	<form action="edit_post.php?id=<?=$id?>" method="post">
		<table width="500" border="0">
			<tr>
				<td width="60" align="left">Title</td>
				<td align="left">
					<input type="text" name="title" size="30" value="<?=$data[title]?>">
				</td>
			</tr>

			<tr>
				<td width="60">Content</td>
				<td align="left">
					<input type="text" name="content" style="width:335px; height: 100px;" value="<?=$data[content]?>">
				</td>
			</tr>

			<tr>
				<td width="60">Name</td>
				<td align="left">
					<input type='text' name='user_name' size='15' value="<?=$data[name]?>"><br>
				</td>
			</tr>
			<tr>
				<td width="60">Password</td>
				<td align="left">
					<input type='password' name='password' size='15' value=""><br>
				</td>
			</tr>

			<tr>
				<td colspan="2">
					<input type="submit" value="수정하기">
					<input type="reset" value="지우기">
					<input type="button" value="이전으로" onclick="history.back(-1)">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
<?
	mysqli_close($connect);
?>