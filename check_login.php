<?php
	include("./global/control.php");
	include("./global/permission_check/login_check.php");

	if(!isset($_POST["sId"]) || !isset($_POST["password"])){
		alertsuc("請輸入帳號密碼","./login.php");
	}
	else{
		$sId = clean($_POST["sId"]);
		$password = clean($_POST["password"]);

		$sql = "select * from member where sId='$sId' and password='$password'";
		if($query = mysqli_query($conn, $sql)){
			if(mysqli_num_rows($query) == 1){
				$data = mysqli_fetch_array($query);
				$_SESSION["mId"] = $data["mId"];
				$_SESSION["sId"] = $data["sId"];
				$_SESSION["name"] = $data["name"];
				$_SESSION["nickName"] = $data["nickName"];
				$_SESSION["email"] = $data["email"];
				$_SESSION["permission"] = $data["permission"];
				header("location: ./index.php");
			}
			else{
				alertwar("帳號與密碼錯誤");
			}
		}
		else{
			alertwar("系統錯誤！請聯絡管理員");
		}
	}	

?>

	