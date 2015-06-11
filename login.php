<?php
	include("./global/control.php");
	include("./global/permission_check/login_check.php");
?>

<!DOCTYPE html>
<html>
<head>
	
</head>

<body>
	<form action="./check_login.php" method="post" >
		<label>學號</label>
		<input type="text" name="sId" id="sId" placeholder="SID" required>
		<label>密碼</label>
		<input type="password" name="password" id="password" placeholder="Password" required>

		<button type="submit" class="btn btn-primary">登入</button>
	</form>
</body>

</html>