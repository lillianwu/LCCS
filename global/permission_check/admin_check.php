<?php
	if(!isset($_SESSION['permission']))
 		header('location:./login.php');

	else if($_SESSION['permission']==1)
  		header('location:./index.php');

?>