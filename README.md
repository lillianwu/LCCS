# LCCS

##include
* global/control.php >控制各種狀況，已經加function
* global/permission_check/admin_check.php >管理員驗證,如果進入其不該進入的畫面就會跳轉
* global/permission_check/member_check.php >會員驗證,如果進入其不該進入的畫面就會跳轉
* global/permission_check/login_check.php >登入驗證,如果進入其不該進入的畫面就會跳轉

##function 
* alertwar($str); >alert($str),然後返回上一頁
* alertsuc($str,$url); >alert($str), 然後前往$url
