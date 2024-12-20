<?php
// Description
// Occurs before record is exported
// Use this event to modify record before it is exported.
//
// Parameters
// $data       - array of values selected from the database table
// $values     - array of values to be written to the export
//               file
// $pageObject - an object of Page class representing the current page
//
//URLによるファイル振り分け
$current_page_pass = $_SERVER["REQUEST_URI"];
if(stristr($current_page_pass, "/shop5/")){
	include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/mst_finish_terms/export/before_export/honban.php';
}else{
	include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/mst_finish_terms/export/before_export/test.php';
}
