<?php
	include("./global/control.php");
	include("./global/permission_check/member_check.php");

	if(!isset($_POST["topic"])){
		alertwar("請輸入主題");
	}
	else if(!isset($_POST["content"])){
		alertwar("請輸入內容");
	}
	else{
		$mId = $_SESSION["mId"];
		$sId = $_SESSION["sId"];
		$topic = clean($_POST["topic"]);
		$content = clean($_POST["content"]);

		$sql = "insert into news (mId, sId, topic, content) values ('$mId','$sId','$topic','$content')";
		if($query = mysqli_query($conn, $sql)){
			alertsuc("新增成功！","./news.php");
		}
		else{
			alertwar("新增失敗！請聯絡管理員");
		}
		echo $sql;
	}	

?>

	