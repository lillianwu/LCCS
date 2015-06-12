<?php
	include("./global/control.php");
	include("./global/permission_check/member_check.php");

	if(!$_GET["nId"]){
		header("location:./news.php");
	}
	else{
		$nId = $_GET["nId"];

		$sql = "SELECT mId FROM news WHERE nId=$nId";
		if($query = mysqli_query($conn,$sql)){
			$list = mysqli_fetch_array($query);
			
			$mId = $list['mId'];
			if($mId != $_SESSION["mId"]){
				header("location:./news.php");
			}
			else{
				$sql = "DELETE FROM group5.news WHERE news.nId = $nId";
				if($query = mysqli_query($conn,$sql)){
					alertsuc("刪除成功！","./news");
				}
				else{
					alertwar("刪除失敗！請聯絡管理員");
				}
			}
		}
		else{
			alertwar("請聯絡管理員");	
		}
	}


	
?>
