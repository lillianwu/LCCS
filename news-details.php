<?php
	include("./global/control.php");
	include("./global/permission_check/member_check.php");

	if(!$_GET["nId"]){
		header("location:./news.php");
	}
	else{
		$nId = $_GET["nId"];
		$sql = "SELECT * FROM news NATURAL JOIN member WHERE nId=$nId ORDER BY editTime DESC";
		if($query = mysqli_query($conn,$sql)){
			$list = mysqli_fetch_array($query);
			
			$nId = $list['nId'];
			$mId = $list['mId'];
			$time = $list['time'];
			$topic = $list['topic'];
			$content = $list['content'];
			$nickName = $list['nickName'];
			
			$output = "<table>";			
			$output.= "<tr>";
			$output.= "<td>$topic</td>";
			$output.= "<td>$content</td>";
			$output.= "<td>$nickName</td>";
			$output.= "<td>$time</td>";
			
			if($mId == $_SESSION["mId"]){
				$output.= "<td><a href='./news-edit.php?nId=$nId'>edit</a></td>";  //只在開放時使用 之後會用js來跳轉 
			}

			$output.= "</tr>";
			
			$output.= "</table>";
		}
		else{
			alertwar("系統錯誤！請聯絡管理員");
		}
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
