<?

//URLによるファイル振り分け
$current_page_pass = $_SERVER["REQUEST_URI"];
if(stristr($current_page_pass, "/shop5/")){
	include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/PMT_EV001/add/process_record_values/honban.php';
}else{
	include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/PMT_EV001/add/process_record_values/test.php';
}
