<?php
	if(!isset($_SESSION['permission']))
 		header('location:./login.php');

	else if($_SESSION['permission']==100)
  		header('location:./admin.php');

?>