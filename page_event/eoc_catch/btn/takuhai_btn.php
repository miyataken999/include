<?

//URLによるファイル振り分け
$current_page_pass = $_SERVER["REQUEST_URI"];
if(stristr($current_page_pass, "/shop5/")){
	include 'takuhai_btn_honban.php';
}else{
	include 'takuhai_btn_test.php';
}
