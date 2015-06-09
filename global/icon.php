<?php
/*define('HOST','');
define('USER','group5');
define('PASS','');
define('DB','group5');
*/
$host = HOST;
$user = USER;
$pass = PASS;
$db = DB;

$conn = mysqli_connect($host,$user,$pass,$db);
mysqli_set_charset($conn,"utf8");

if (!$conn)
{
  die('Could not connect: ' . mysql_error());
}

//發送指令到資料庫 成功回傳資料 失敗回傳0
function sql_push($sql){
	global $conn;
	return mysqli_query($conn,$sql);
}

//計算sql_push回傳的東西 回傳結果
function sql_count($sql){
	return mysqli_num_rows($sql);	
}

//把sql_push傳回的資料存成array (一次只存入一筆資料)
function sql_to_array($sql){
	return mysqli_fetch_array($sql);
}
		    
?>
