<?

//URLによるファイル振り分け
$current_page_pass = $_SERVER["REQUEST_URI"];
if(stristr($current_page_pass, "/kagoya/")){
	include $_SERVER["DOCUMENT_ROOT"].'/include/kagoyaeva/page_event/mst_brakai_column_list/edit/after_record/honban.php';
}else{
	include $_SERVER["DOCUMENT_ROOT"].'/include/kagoyaeva/page_event/mst_brakai_column_list/edit/after_record/test.php';
}

