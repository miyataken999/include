<?

//URLによるファイル振り分け
$current_page_pass = $_SERVER["REQUEST_URI"];
if(stristr($current_page_pass, "/newshop3/")){
	include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/store_products/edit/after_record/newshop3.php';
}else{
	include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/store_products/edit/after_record/honban.php';
}
