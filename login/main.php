<!-- example -->

<?php
	session_start();
	
	if(!isset($_SESSION['userid'])) { 
		// 세션이 존재할 때
		echo "로그인을 해주세요.";
		echo "<br><input type=\"button\" value=\"로그인\" onclick=\"location.href='./login.php'\";>";

	} else {
		echo $_SESSION['userid']."님 안녕하세요";
		echo "<br><input type=\"button\" value=\"로그아웃\" onclick=\"location.href='./logout.php'\";>";
	}
?>