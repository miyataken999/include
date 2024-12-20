<?
/*=======================================================================
======================================================================
$action    - Action occured
$params    - Misc parameters such as IP address and username
$table     - Table being modified
$keys      - Array of key column values pointing to the current record
$newvalues - Array of field values being added to the database
$oldvalues - Array of previous field values. Applies to Edit and Delete functions
======================================================================
=======================================================================*/

//チャットワークトークン
$sugisan = "4207431dc4eb42bb1e13befa2f6657fe";
$nishitani = "c1d97cfaf7e544675fad7be63c49a0d5";
$bot = "ed472827b8dda0ba81ba586c8b0e4bd9";


//***************************************
// 日時の差を計算
//***************************************
function time_diff($time_from, $time_to)
{
    // 日時差を秒数で取得
    $dif = $time_to - $time_from;
    // 時間単位の差
    // $dif_time = date("H:i:s", $dif);
    // 日付単位の差
    $dif_days = (strtotime(date("Y-m-d", $dif)) - strtotime("1970-01-01")) / 86400;
    return "{$dif_days}";
}



if($table == "PMT_EV001"){
	include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/before_audit_log/cw_PMT_EV001.php';
}elseif($table == "dia"){
	include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/before_audit_log/cw_dia.php';
}elseif($table == "mst_brand"){
	include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/before_audit_log/cw_mst_brand.php';
}elseif($table == "mst_item"){
	include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/before_audit_log/cw_mst_item.php';
}elseif(
	($table == "mst_country_of_origin")
	 OR ($table == "mst_zipper")
	 OR ($table == "mst_designer")
	 OR ($table == "mst_hahakai")
	 OR ($table == "mst_effect")
	 OR ($table == "mst_shape")
	 OR ($table == "mst_cutting_style")
	 OR ($table == "mst_chain_type")
	 OR ($table == "mst_number_of_stones")
	 OR ($table == "mst_amount")
	 OR ($table == "mst_motif")
	 OR ($table == "mst_Setting")
	 OR ($table == "mst_Appraiser")
	 OR ($table == "mst_satei_error")
	 OR ($table == "mst_satei_error_item")
	 OR ($table == "mst_producing_area")
	 OR ($table == "mst_side_gem")
	 OR ($table == "mst_processing")
	 OR ($table == "mst_unit")
	 OR ($table == "mst_hall_mark")
	 OR ($table == "_purchase_type")
	 OR ($table == "_chigin_type")
	 OR ($table == "mst_item")
	 OR ($table == "mst_item_name")
	 OR ($table == "mst_gold_property")
	){
	include $_SERVER["DOCUMENT_ROOT"].'/include/page_event/before_audit_log/cw_mst_table.php';
}

usleep(500000);

?>
