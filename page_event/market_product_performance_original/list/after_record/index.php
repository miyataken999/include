<?php
//Parameters
// $data       - array of field values of the record being processed. To access specific
//               field value use $data["FieldName"]
//               "rs" is an alternate name for this parameter.
// $row        - array representing a row on the page
// $record     - array representing a table record on the page
// $pageObject - an object of Page class representing the current page

// $record["{column_name}_css"]="background: {$backcolor}; color: {$font_color};";


//URLによるファイル振り分け
$current_page_pass = $_SERVER["REQUEST_URI"];
if(stristr($current_page_pass, "/shop5/")){
	include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/market_product_performance_original/list/after_record/honban.php';
}else{
	include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/market_product_performance_original/list/after_record/test.php';
}






 ?>
