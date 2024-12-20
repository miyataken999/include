<?php
// Description
// Occurs before record is exported
// Use this event to modify record before it is exported.

// Parameters
// $data       - array of values selected from the database table              
// $values     - array of values to be written to the export file              
// $pageObject - an object of Page class representing the current page
$values["remark"] = str_replace("\n", "", $values["remark"]);
$values["remark"] = str_replace("\r", "", $values["remark"]);

// 
$values["ching_created_at"] = date("Y-m-d", strtotime($values["ching_created_at"]));

$remark_text = mb_substr($values["remark"], 0, 200, "UTF-8");
$values["remark"] = $remark_text;


// 同じ宅配取引IDの合算がマイナスだったときに買取備考の金額をゼロにする処理
$Eoc_takuhai_id = $data["Eoc_takuhai_id"];
if($Eoc_takuhai_id != ""){
    $query = "SELECT SUM(ching_price) as sum_ching_price FROM Eoc_chigins WHERE Eoc_takuhai_id = {$Eoc_takuhai_id} ";
    $rs = CustomQuery($query);
    $sum_ching_price = 0;
    while($data = db_fetch_array($rs)){
        $sum_ching_price = $data["sum_ching_price"];
    }
    if($sum_ching_price < 0){
        $values["ching_price"] = 0;
    }
}


// //URLによるファイル振り分け
// $current_page_pass = $_SERVER["REQUEST_URI"];
// if(stristr($current_page_pass, "/shop5test/")){
// 	include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/Eoc_chigins_for_freee_import/export/before_export/test.php';

// }