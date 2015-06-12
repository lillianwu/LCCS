<?php
	include("./global/control.php");
	include("./global/permission_check/member_check.php");


	$nId = clean($_POST["nId"]);
	$mId = clean($_POST["mId"]);
	$topic = clean($_POST["topic"]);
	$content = clean($_POST["content"]);
	$hasEdit = 1;

	if($mId != $_SESSION["mId"]){
		header("location:./news.php");
	}
	else{
		$sql = "UPDATE group5.news SET topic = '$topic', content = '$content', hasEdit = '$hasEdit' WHERE `news`.`nId` = '$nId';";
		if($query = mysqli_query($conn,$sql)){
			alertsuc("修改成功！","./news-details.php?nId=$nId");
		}
		else{
			alertwar("修改失敗！請聯絡管理員");
		}
	}



	
?>
