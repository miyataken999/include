<?php
// Description
// Occurs before record is processed
// Return true if you like to display row in the list, return false otherwise
//
// Parameters
// $data       - array of field values of the record being processed. To access specific
//               field value use $data["FieldName"]
//               "rs" is an alternate name for this parameter.
// $pageObject - an object of Page class representing the current page

include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/function/qr_replace.php";

$ref_data = qr_replace($data);


$data["serial_number_ref"] = $ref_data["sorting_num"];
$data["parent_stone_ref"] = $ref_data["parent_stone"];
$data["color_ref"] = $ref_data["color_ref"];
// $data["DA_CUT_ref"] = 'aaaaaaaaaaaaaaaaa';
$data["DA_CUT_ref"] = $ref_data["cut_ref"];
$data["size1_ref"] = $ref_data["size1"];
$data["size2_ref"] = $ref_data["size2"];
$data["size3_ref"] = $ref_data["size3"];
$data["clarity_ref"] = $ref_data["clarity"];
$data["fluo_ref"]= $ref_data["fluo"];
$data["cofl_ref"]= $ref_data["cofl"];
$data["fluo_cofl_ref"]= $ref_data["fluo_cofl"];
$data["pol_sym_ref"] = $ref_data["pol_sym"];
$data["pol_sym2_ref"] = $ref_data["pol_sym2"];
$data["appraiser_ref"] = '中央宝石研究所ソーティング';


 ?>
