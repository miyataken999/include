<?

//URLによるファイル振り分け
$current_page_pass = $_SERVER["REQUEST_URI"];
if(stristr($current_page_pass, "/MyPage/")){
	include $_SERVER["DOCUMENT_ROOT"].'/include/MyPage/page_event/post/add/before_record/honban.php';
}else{
	include $_SERVER["DOCUMENT_ROOT"].'/include/MyPage/page_event/post/add/before_record/test.php';
}

