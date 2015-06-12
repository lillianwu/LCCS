<?php
	include("./global/control.php");
	include("./global/permission_check/member_check.php");

	if(!$_GET["nId"]){
		header("location:./news.php");
	}
	else{
		$nId = $_GET["nId"];
		$sql = "SELECT * FROM news NATURAL JOIN member WHERE nId=$nId";
		if($query = mysqli_query($conn,$sql)){
			$list = mysqli_fetch_array($query);
			
			if($list["mId"] != $_SESSION["mId"]){
				header("location:./news.php");
			}

			$mId = $list['mId'];
			$nId = $list['nId'];
			$time = $list['time'];
			$topic = $list['topic'];
			$content = $list['content'];
			$hasEdit = $list['hasEdit'];
			$editTime = $list['editTime'];
			$nickName = $list['nickName'];

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
	<form action="./edit_news.php" name="newsEditForm" method="post" >
		<label>主題</label>
		<input type="text" name="topic" id="topic" placeholder="TOPIC" value="<?php echo $topic; ?>" required>
		<label>內容</label>
		<textarea id="content" cols="86" rows ="20" name="content" ><?php echo $content; ?></textarea>
		<input type="hidden" name="mId" value="<?php echo $mId ?>" >
  		<input type="hidden" name="nId" value="<?php echo $nId ?>" >
  
		<button type="submit" class="btn btn-primary">修改</button>
		<?php
			echo "<a href='./del_news.php?nId=$nId'>delete</a>";
		?>
		<p>張貼時間：<?php echo $time;?></p>
		<?php 
			if($hasEdit)
				echo "<p>上次修改時間：$editTime</p>";
		?>
		
	</form>
</body>

</html>
