<?

//URLによるファイル振り分け
$current_page_pass = $_SERVER["REQUEST_URI"];
if(stristr($current_page_pass, "/shop5/")){
	include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/before_audit_log/honban.php';
}else{
	include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/before_audit_log/test.php';
}

// include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/before_audit_log/index.php';
