<?

//URLによるファイル振り分け
$current_page_pass = $_SERVER["REQUEST_URI"];
if(stristr($current_page_pass, "/shop5/")){
	include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/gold_check_item/add/before_record/honban.php';
}else{
	include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/gold_check_item/add/before_record/test.php';
}