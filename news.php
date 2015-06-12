<?php
	include("./global/control.php");
	include("./global/permission_check/member_check.php");

	$sql = "SELECT * FROM news NATURAL JOIN member ORDER BY editTime DESC";
	if($query = mysqli_query($conn,$sql)){
		$output = "<table>";			
		while($list = mysqli_fetch_array($query)){
			$nId = $list['nId'];
			$time = $list['time'];
			$topic = $list['topic'];
			//$content = $list['content'];
			$nickName = $list['nickName'];

			$output.= "<tr nId=$nId>";  //讓js可以跳轉的條件之一
			$output.= "<td>$topic</td>";
			$output.= "<td>$nickName</td>";
			$output.= "<td>$time</td>";
			$output.= "<td><a href='./news-details.php?nId=$nId'>go</a></td>";  //只在開放時使用 之後會用js來跳轉 
			$output.= "</tr>";
		}
		$output.= "</table>";
	}
	else{
		alertwar("系統錯誤！請聯絡管理員");
	}
?>

<!DOCTYPE html>
<html>
<head>
	
</head>

<body>
	<?php echo $output; ?>
</body>

</html>
