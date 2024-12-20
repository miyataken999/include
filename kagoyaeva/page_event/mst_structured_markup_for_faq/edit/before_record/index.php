<?

//URLによるファイル振り分け
$current_page_pass = $_SERVER["REQUEST_URI"];
if(stristr($current_page_pass, "/kagoya/")){
	include $_SERVER["DOCUMENT_ROOT"].'/include/kagoyaeva/page_event/mst_structured_markup_for_faq/edit/before_record/honban.php';
}else{
	include $_SERVER["DOCUMENT_ROOT"].'/include/kagoyaeva/page_event/mst_structured_markup_for_faq/edit/before_record/test.php';
}
