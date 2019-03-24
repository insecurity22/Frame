<?php
	include "db/db.php";
	$connect = dbconn();

	$result = mysqli_query($connect, "select * from boards");
	$data = mysqli_fetch_array($result); // data라는 변수이름으로 data를 가져옴

	$date = date_create($data[regdate]);
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Board</title>
	<link rel="stylesheet" type="text/css" href="css/boardstyle.css" />
</head>

<body class="board-list">
	<h1>Board list</h1>
	<table width="100%">
		<tr>
			<th width="50">분류</th>
			<th width="300">제목</th>
			<th width="80">글쓴이</th>
			<th width="80">조회수</th>
			<th width="80">등록일</th>
		</tr>

		<tr>
			<td><?=$data[id]?></td>
			<td><?=$data[title]?></td>
			<td><?=$data[name]?></td>
			<td><?=$data[hits]?></td>
			<td><?=date_format($date, "Y-m-d")?></td>
		</tr>
	</table>
</body>
</html>