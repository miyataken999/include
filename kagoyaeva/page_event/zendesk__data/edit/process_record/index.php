<?

//URLによるファイル振り分け
$current_page_pass = $_SERVER["REQUEST_URI"];
if(stristr($current_page_pass, "/kagoya/")){
	include "honban.php";
}else{
	include "test.php";
}

