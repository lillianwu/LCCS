<?php
	if($_SESSION['permission']==1)
		header('location:./index.php');

	else if($_SESSION['permission']==100)
		header('location:./admin.php');
?>