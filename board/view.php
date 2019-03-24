<html>
<head>
	<meta charset="UTF-8">
	<title>Board</title>
	<link rel="stylesheet" type="text/css" href="css/boardstyle.css">
</head>

<body class="board-list">

	<?php
		include "db/db.php";
		$connect = dbconn();

		$id = $_GET[id];
		$result = mysqli_query($connect, "select * from boards where id=$id");
		$data = mysqli_fetch_array($result);
		$date = date_create($data[regdate]);

	?>

	<font color="black" size="50">View</font>
	<form action="edit.php?id=<?=$id?>" method="post">
		<table width="100%" border="1">
			<tr>
				<td width="60" align="left" size="50">제목</td>
				<td align="left"><?=$data[title]?></td>
			</tr>
			<tr>
				<td width="60">등록일</td>
				<td align="left"><?=date_format($date, "Y-m-d")?></td>
			</tr>
			<tr>
				<td colspan="2" height="200px"><?=$data[content]?></td>
			</tr>

			<tr class="border-none">
				<td colspan="2">
					<input type="button" value="목록" onclick="window.open('./list.php')">
					<input type="submit" value="수정">
					<input type="button" value="삭제" onclick="window.open('./del.php?id=<?=$id?>')">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
