<?php
//Parameters
// $data       - array of field values of the record being processed. To access specific
//               field value use $data["FieldName"]
//               "rs" is an alternate name for this parameter.
// $row        - array representing a row on the page
// $record     - array representing a table record on the page
// $pageObject - an object of Page class representing the current page

// $record["css"]="background: {$backcolor}; color: {$font_color};";

//'color',
include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/function/qr_replace.php";

// if($data["status"] == 122){
if(1 == 1){
  $col_array = array('serial_number','parent_stone','size1','size2','size3','clarity','pol_sym','pol_sym2');
  // var_dump($col_array);
  foreach($col_array as $col){
    $col_data = $data[$col];
    $col_ref =$col.'_ref';
    $col_data_ref = $data[$col_ref];
    // echo "<br>";
    if(($col == 'pol_sym')or($col == 'pol_sym2')){
        $col_data_ref = pol_sym($data[$col_ref]);
    }
    if($col_data != $col_data_ref){
      $flag = "error";
    }else{
      $flag = "ok";
    }//end if
    $col_css = $col."_css";
    if($flag=="ok"){
      $background_color = '#0F0';//green
      $font_color = '#111';
    }else{
      $background_color = '#F00';//red
      $font_color = '#FFF';
    }//end if flg
    $record["$col_css"] ="background:{$background_color}; color:{$font_color};";
  }//end forech

//start fluo_cofl//
  if($data["fluo_cofl_ref"] != ''){
    $fluo_name = $data["fluo"];
    if($data["cofl"] != ''){
      $cofl_values = $data["cofl"];
      $sql = "SELECT * FROM mst_color_fluo WHERE Id = '$cofl_values' LIMIT 1";
      $rs = CustomQuery($sql);
      $cofl_data = db_fetch_array($rs);
      $cofl_name = $cofl_data["Name"];
      if($fluo_name != ''){
        $fluo_cofl = $fluo_name.' '.$cofl_name;
      }else{
        $fluo_cofl = $cofl_name;
      }//end if $fluo_name
    }else{
      $fluo_cofl = $fluo_name;
    }// end if
    if($data["fluo_cofl_ref"]==$fluo_cofl){
      $background_color = '#0F0';//green
      $font_color = '#111';
    }else{
      $background_color = '#F00';//red
      $font_color = '#FFF';
    }//end if
    $record["fluo_cofl_ref_css"] ="background:{$background_color}; color:{$font_color};";
  }else{}//end $data["fluo"]//
    //end fluo_cofl//

    //start color.intensity.ovto//
    if($data["color_ref"]!=''){
      $intensity_values = $data["DA_INTENSITY"];
      $overtone_values = $data["DA_OVERTONE"];
      $color_name = $data["color"];
      $where = '';
      if($intensity_values != ''){
        if($where !=''){$where .= ' AND ';}
        $where .= "intensity = '".$intensity_values."'";
      }
      if($overtone_values != ''){
        if($where !=''){$where .= ' AND ';}
        $where .= "overtone = '".$overtone_values."'";
      }
      if($color_name != ''){
        if($where !=''){$where .= ' AND ';}
        $where .= "color = '".$color_name."'";
      }

      $sql = "SELECT * FROM mst_sorting_color_apart WHERE \"{$where}\" LIMIT 1";
      // echo $sql;
      // exit;
      $rs = CustomQuery($sql);
      $data = db_fetch_array($rs);
      }//if end color

      if($data["color_ref"]==$data["sorting_color"]){
        $background_color = '#0F0';//green
        $font_color = '#111';
      }else{
        $background_color = '#F00';//red
        $font_color = '#FFF';
      }//end if
      $record["color_ref_css"] ="background:{$background_color}; color:{$font_color};";
    //end color.intensity.ovto//


    //cut ref 値の比較
    $cut_ref = $data["DA_CUT_ref"];
    $sql = "SELECT name FROM _DIA_DA_CUT WHERE name = '$cut_ref' LIMIT 1";
    $rs = CustomQuery($sql);
    $cut_ref_data = db_fetch_array($rs);
    if($cut_ref_data == false){
      $sql = "SELECT name FROM _DIA_DA_CUT WHERE short_name = '$cut_ref' LIMIT 1";
      $rs = CustomQuery($sql);
      $cut_ref_data = db_fetch_array($rs);
      if($cut_ref_data["name"]!=''){
          $cut_ref = $cut_data["name"];
      }else{}//end if($cut_data["name"]!='')
    }else{}//end if($cut_ref_data  == false)
      echo $cut_ref;

      if($cut_ref==$data["DA_CUT"]){
        $background_color = '#0F0';//green
        $font_color = '#111';
        // echo 111111111111;
      }else{
        $background_color = '#F00';//red
        $font_color = '#FFF';
        // echo 2222222222222;
      }//end if
      $record["DA_CUT_css"] ="background:{$background_color}; color:{$font_color};";






}// if status 122
if($_GET['test']=='test'){
  // &test=test

  exit;
}

// $record["css"]="background: {$backcolor}; color: {$font_color};";
// $record["fluo_css"]='background:red;';

 ?>
