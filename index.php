<?php
	include("./global/control.php");
	include("./global/permission_check/member_check.php");
?>	
	
<!DOCTYPE html>
<html>
<head>
	
</head>

<body>
	<form action="./check_logout.php" method="post" >	
		<a href="./news.php">公告</a>
		<button type="submit" class="btn btn-primary">登出</button>
	</form>
</body>

</html>