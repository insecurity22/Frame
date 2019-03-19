<?php
	include "db/db.php";
	$connect = dbconn();

	$result = mysqli_query($connect, "select * from board");
	$data = mysqli_fetch_array($result); // data��� �����̸����� data�� ������

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
			<th width="50">�з�</th>
			<th width="300">����</th>
			<th width="80">�۾���</th>
			<th width="80">��ȸ��</th>
			<th width="80">�����</th>
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