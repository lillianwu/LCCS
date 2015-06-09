<?php
	session_start();
	include("./global/icon.php");
	
	//debug
	error_reporting(E_ALL);
	ini_set("display_errors", 1);	
	ini_set("log_errors",1);

	//sql rejection
	function clean($str) {
		if(!get_magic_quotes_gpc()) {
			$str = addslashes($str);
		}
		$str = strip_tags(htmlspecialchars($str));
		return $str;
	}

	function alertwar($str){
		echo "<script>alert('$str'); history.back(); </script>";
	}

	function alertsuc($str,$url){
		echo "<script>alert('$str'); location.replace('$url'); </script>";
	}
?>