<?
// $value - a value to be displayed on the page.
// Example:
// $value = strtoupper($value);

// $data - array with all field values.
// Example:
// $value = $data["FirstName"].$data["LastName"];
// where FirstName and LastName are actual field names.
// include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/eoc/list/events/index.php';


$html = '';

//URLによるファイル振り分け
$current_page_pass = $_SERVER["REQUEST_URI"];
if(stristr($current_page_pass, "/shop5/")){


include $_SERVER["DOCUMENT_ROOT"]."/include/page_event/eoc/list/events/indexhonban.php";


}else{


include $_SERVER["DOCUMENT_ROOT"]."/include/page_event/eoc/list/events/indextest.php";


}
