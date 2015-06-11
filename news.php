<?php
	include("./global/control.php");
	include("./global/permission_check/member_check.php");
?>

<!DOCTYPE html>
<html>
<head>
	
</head>

<body>
	<form action="./add_news.php" name="newsCreateForm" method="post" >
		<label>主題</label>
		<input type="text" name="topic" id="topic" placeholder="TOPIC" required>
		<label>內容</label>
		<textarea id="content" cols="86" rows ="20" name="content"></textarea>
		<button type="submit" class="btn btn-primary">登入</button>
	</form>
</body>

</html>