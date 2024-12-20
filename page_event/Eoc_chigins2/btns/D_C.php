<?
//URLによるファイル振り分け
$current_page_pass = $_SERVER["REQUEST_URI"];
if(stristr($current_page_pass, "/shop5/")){
	include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/Eoc_chigins2/btns/D_C_honban.php';
}else{
	include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/Eoc_chigins2/btns/D_C_test.php';
}

?>
