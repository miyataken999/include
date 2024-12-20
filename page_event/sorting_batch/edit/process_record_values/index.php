<?php
// Description
// Occurs before the record is displayed. You can alter the displayed field values here.
//
// Parameters
// $values     - array of values to be displayed on the page.
//               To access specific field value use $values["FieldName"]
// $pageObject - an object of Page class representing the current page

include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/function/qr_replace.php";

$replace_data = qr_replace($values);
// $sorting_column_arr = array('color','DA_INTENSITY','DA_OVERTONE','cut','size1','size2','size3','clarity','fluo','cofl','pol_sym','pol_sym2');
// foreach($sorting_column_arr as $sorting_column){
//   if(isset($replace_data[$sorting_column])){
//     $replace_data[$sorting_column] = strtoupper($replace_data[$sorting_column]);
//   }
// }

$values["serial_number"] = $replace_data["sorting_num"];
$values["parent_stone"] = $replace_data["parent_stone"];
// $values["parent_stone_ref"] = $replace_data["parent_stone"];
// $sorting_color = $replace_data["color"];
$values["color"] = $replace_data["color"];
// $values["DA_INTENSITY"] = 8;
$values["DA_INTENSITY"] = $replace_data["DA_INTENSITY"];
$values["DA_OVERTONE"] = $replace_data["DA_OVERTONE"];
//cut
if($replace_data["cut"]!=""){
  $sql = "SELECT name FROM _DIA_DA_CUT WHERE name = '$replace_data[cut]' LIMIT 1";
  $rs = CustomQuery($sql);
  $cut_data = db_fetch_array($rs);
  if($cut_data == false){
    $sql = "SELECT name FROM _DIA_DA_CUT WHERE short_name = '$replace_data[cut]' LIMIT 1";
    $rs = CustomQuery($sql);
    $cut_data = db_fetch_array($rs);
    if($cut_data["name"]!=''){
        $values["DA_CUT"] = $cut_data["name"];
    }else{
        $values["DA_CUT"] = $replace_data["cut"];
    }//end if($cut_data["name"]!='')
  }else{
    $values["DA_CUT"] = $replace_data["cut"];
  }//end if($cut_data == false)
}else{
}//end if($replace_data["cut"]!="")
//end cut

// $values["DA_CUT"] = $replace_data["cut"];
$values["size1"] = $replace_data["size1"];
$values["size2"] = $replace_data["size2"];
$values["size3"] = $replace_data["size3"];
$values["clarity"]= $replace_data["clarity"];
$values["fluo"]= $replace_data["fluo"];
$values["cofl"]= mst_cofl($replace_data["cofl"]);
$values["pol_sym"] = pol_sym($replace_data["pol_sym"]);
$values["pol_sym2"] = pol_sym($replace_data["pol_sym2"]);
// $values["appraiser"] = '中央宝石研究所ソーティング';
$values["appraiser"] = '中央宝石研究所ダイヤモンドソーティング';

$values["status"] = 122;

// $values["appraiser"] = 'aaaa';
// $values = $replace_data;

 ?>
 <!-- $data
 $data["color"]
 $data["clarity"]
 $data["other1"]
 $data["other2"]
 $data["other3"]
 $data["fluo"]
 $data["cofl"]
 $data
 $data
 $data[
 $data["pol_sym"]
 $data["pol_sym2"]
 $data["pol_sym3"]
 $data["other4"]
 $data["appraiser"] -->
