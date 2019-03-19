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

		$id = $_GET['id'];
		$result = mysqli_query($connect, "select * from board where id=$id");
		$data = mysqli_fetch_array($result); // data라는 변수이름으로 data를 가져옴

		$date = date_create($data[regdate]);

	?>

	<font color="black" size="50">View</font>
	<form action="edit.php" method="post">
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
					<input type="submit" value="목록">
					<input type="submit" value="수정">
					<input type="submit" value="삭제" onclick="window.open('./del.php?id=<?=$id?>')">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
