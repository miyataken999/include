<?

//URLによるファイル振り分け
$current_page_pass = $_SERVER["REQUEST_URI"];
if(stristr($current_page_pass, "/shop5/")){
	include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/eoc/list/after_record/honban.php';
}else{
	include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/eoc/list/after_record/test.php';
}
