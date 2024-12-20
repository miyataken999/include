<?php




function qr_replace($data){
  $text_all = $data["text_all"];
  $text_all_array = explode(',',$text_all);

  $data["sorting_num"] = $text_all_array[0];
  $data["parent_stone"] = $text_all_array[1];
  // $data["color"] = $text_all_array[2];
  $data["color_ref"] = $text_all_array[2];
  $sorting_color = $text_all_array[2];
  //color
  //$text_all_array[2]をcolor,intensity,ovetoneに分ける
  $color = '';
  $intensity = '';
  $overtone = '';
  $str = str_split($sorting_color);
  $count = count($str);
  //if($count == 1)の時はcolorのみ
  if($count == 1){
    $color = $str[0];
  }else{
    //mst参照で三つを分ける
    $sql = "SELECT * FROM mst_sorting_color_apart WHERE sorting_color = '{$sorting_color}' LIMIT 1";
    // echo $sql;
    // exit;
    $rs = CustomQuery($sql);
    $color_data = db_fetch_array($rs);
    //mstのsorting_colorに一致するとき3項目のデータを取る
    if($color_data != false){
      $color = $color_data["color"];
      $intensity = $color_data["intensity"];
      $overtone = $color_data["overtone"];
    }else{
      $color = '';
      $intensity = '';
      $overtone = '';
    }//if($color_data != false) end
  }//if($count == 1) end
  $data["color"] = $color;
  $data["DA_INTENSITY"] = $intensity;
  $data["DA_OVERTONE"] = $overtone;
  //color end


if(strpos($text_all_array[3],"/")!==false){
  $data["clarity"] = str_replace("/","-",$text_all_array[3]);
}else{
  $data["clarity"] = $text_all_array[3];
}
  $data["other1"] = $text_all_array[4];
  $data["other2"] = $text_all_array[5];
  $data["other3"] = $text_all_array[6];

  // $data["pol_sym"] = $text_all_array[11];
  // if(strpos($text_all_array[11],' '))
  $cut_type = "";
  if(strpos($text_all_array[11],' ')!==false){
    $pol_sym_array = explode(' ',$text_all_array[11]);
    $data["pol_sym"] = str_ireplace("POL","",$pol_sym_array[0]);
    // $data["pol_sym"] = str_replace("pol","",$pol_sym_array[0]);
    $str = str_split($data["pol_sym"]);
    $str[0] = '';
    $data["pol_sym"] = implode($str);
    $data["pol_sym"] = strtoupper($data["pol_sym"]);
    // if(ctype_upper($data["pol_sym"]) === false){
      
    // }
    $data["pol_sym2"] = str_ireplace("SYM","",$pol_sym_array[1]);
    // $data["pol_sym2"] = str_replace("sym","",$pol_sym_array[1]);
    $str = str_split($data["pol_sym2"]);
    $str[0] = '';
    $data["pol_sym2"] = implode($str);
    $data["pol_sym2"] = strtoupper($data["pol_sym2"]);
    // $data["pol_sym2"] = $pol_sym_array[1];
    $data["pol_sym3"] = $pol_sym_array[2];
  }else{
    $pol_sym_array = explode('SYM',$text_all_array[11]);
    $data["pol_sym"] = str_replace("POL^","",$pol_sym_array[0]);
    // $data["pol_sym2"] = ;
    $sym_cut = str_replace("^","",$pol_sym_array[1]);
    $split_sym = str_split($sym_cut);
    $sym = '';
    foreach($split_sym as $key => $sym_item){
      if(($key==0)or($key==1)){
        $sym .= $sym_item;
      }else{
        $cut_type .= $sym_item;
      }
    }
    $data["pol_sym2"] = $sym;
  }

  //cut
  $data["other2"] = str_replace("#039;","",$data["other2"]);
  $data["pol_sym3"] = str_replace("#039;","",$data["pol_sym3"]);
  $data["other3"] = str_replace("#039;","",$data["other3"]);
  $cut_flag = '';
  if(($data["other2"]=='3EX')or($data["pol_sym3"]=='3EX')or($data["other3"]=='3EX')){
    $cut_flag["3EX"] = 'on';
  }

  if(($data["other2"]=='H')or($data["pol_sym3"]=='H')or($data["other3"]=='H')or($data["other2"]=='Heart')or($data["pol_sym3"]=='Heart')or($data["other3"]=='Heart')){
    $cut_flag["H"] = 'on';
  }
  if(($data["other2"]=='H&C')or($data["pol_sym3"]=='H&C')or($data["other3"]=='H&C')or($data["other2"]=="H'C")or($data["pol_sym3"]=="H'C")or($data["other3"]=="H'C")){
    $cut_flag["H&C"] = 'on';
  }
  if(($data["other2"]=='C')or($data["pol_sym3"]=='C')or($data["other3"]=='C')){
    $cut_flag["C"] = 'on';
  }
  //「((((」「****」を含むかどうか
  $str = str_split($data["other1"]);

  $count = count($str);

  $special_cut_type = '';
  if($count == 4){
    foreach ($str as $value){
      if($value == $str[0]){
          $special_cut_type++;
      }else{
      }
    }//end foreach
    if($special_cut_type == 4){
      $cut_flag["consecutive_character"] = 'on';////「((((」「****」の場合
    }else{
    }
  }
  if($data["other1"]=='EXCELLENT'){
    $cut_flag["EXCELLENT"] = 'on';
  }//end if($data["other1"]=='EX')


  if(
    ($cut_flag["EXCELLENT"] == 'on')
    or ($cut_flag["3EX"] == 'on')
    or ($cut_flag["H&C"] == 'on')
    or ($cut_flag["H"] == 'on')
    or ($cut_flag["C"] == 'on')
    or ($cut_flag["consecutive_character"] == 'on')
  ){

    $excellent_name = '';
    if($cut_flag["EXCELLENT"] == 'on'){
      if($cut_flag["3EX"] == 'on'){
        $excellent_name = '3EX';
      }else{
        $excellent_name = 'EX';
      }
    }else{
      $excellent_name = '';
    }
    if($cut_flag["H&C"] == 'on'){
      $excellent_name .= 'HC';
    }elseif($cut_flag["H"] == 'on'){
      $excellent_name .= 'H';
    }elseif($cut_flag["C"] == 'on'){
      $excellent_name .= 'C';
    }

    if($excellent_name == 'EX'){
      $excellent_name = 'EXCELLENT';
    }
    //end excellent cut

    //EXCELLENTのやつ
    $data["cut"] = $excellent_name;
    // pol_sym3のみだったら強制的にpol_sym3だけ。 = 「((((」「****」
    if(($data["pol_sym3"] != '')and($data["other2"] == '')and($data["other3"] == '')){
      $data["cut"] = $data["pol_sym3"];
    }
  }else{
      // そのまんまのやつ
      if($data["other1"] == "VERYGOOD"){
        $data["cut"] = "VERY GOOD";
      }else{
        $data["cut"] = $data["other1"];
      }

  }// end if
  if($cut_type != ""){
    $data["cut"] = $cut_type;
  }
  // ref専用カット
  if(($data["other2"]=="H'C")or($data["pol_sym3"]=="H'C")or($data["other3"]=="H'C")){
    $data["other2"]=str_replace("'","&",$data["other2"]);
    $data["pol_sym3"]=str_replace("'","&",$data["pol_sym3"]);
    $data["other3"]=str_replace("'","&",$data["other3"]);
  }
  $cut_ref = '';
  if(($cut_flag["consecutive_character"] == 'on')){
    if($data["pol_sym3"] != ''){
      if($cut_ref != ''){$cut_ref .= ' ';}
      $cut_ref .= $data["pol_sym3"];
    }
    if($data["other2"] != ''){
      if($cut_ref != ''){$cut_ref .= ' ';}
      $cut_ref .= $data["other2"];
    }
    if($data["other3"] != ''){
      if($cut_ref != ''){$cut_ref .= ' ';}
      $cut_ref .= $data["other3"];
    }
  }else{
    if($data["other1"]==="EXCELLENT"){
      if($cut_ref != ''){$cut_ref .= ' ';}
      $cut_ref .= $data["other1"];

      if($data["other2"]!==""){
        if($cut_ref != ''){$cut_ref .= ' ';}
        $cut_ref .= $data["other2"];
      }
      if($data["other3"]!==""){
        if($cut_ref != ''){$cut_ref .= ' ';}
        $cut_ref .= $data["other3"];
      }
      if($data["pol_sym3"]!==""){
        if($cut_ref != ''){$cut_ref .= ' ';}
        $cut_ref .= $data["pol_sym3"];
      }
    }else{
      $cut_ref = $data["other1"];
    }
  }
  $data["cut_ref"] = trim($cut_ref);
  if($cut_type != ""){
    $data["cut_ref"] = $cut_type;
  }
  //そのまんまのやつ

  // end ref専用カット
  $data["cut"] = strtoupper($data["cut"]);
  // $data["fluo_cofl"] = $text_all_array[7];
  //fluo,cofl 分解
  $data["fluo_cofl"] = $text_all_array[7];
  $fluo_cofl = explode(' ',$text_all_array[7]);
  $count =  count($fluo_cofl);
  $fluo_data = "";
  if($count==1){
      $fluo_array = array('VERYSTRONG','VERYSLIGHT','NONE','FAINT','MEDIUM','STRONG','WHITISH');
      $cofl_array = array('YELLOWISHGREEN','YELLOWISHBLUE','BLUISHWHITE');
      foreach($fluo_array as $fluo_item){
        $fluo_cofl_data = $fluo_cofl[0];
        if(stripos($fluo_cofl_data,$fluo_item) !== false){
          if($fluo_item == 'VERYSLIGHT'){
            $fluo_data = 'VERY SLIGHT';
          }elseif($fluo_item == 'VERYSTRONG'){
            $fluo_data = 'VERY STRONG';
          }else{
            $fluo_data = $fluo_item;
          }

          $cofl_data = str_replace($fluo_item,'',$fluo_cofl_data);

          if(stripos($cofl_data,"YELLOWISH") !== false){
            $cofl_data = str_replace("YELLOWISH", $cofl_data);
            $cofl_data = "YELLOWISH ".$cofl_data;
          }elseif(stripos($cofl_data,"BLUISH") !== false){
            $cofl_data = str_replace("BLUISH", $cofl_data);
            $cofl_data = "BLUISH ".$cofl_data;
          }
          break;
        }else{
            $fluo_data = '';
            $cofl_data = '';
        }
      }
    // $data["fluo_cofl"] = $fluo_data;
  }elseif($count==2){
    $fluo_data = $fluo_cofl[0];
    $cofl_data = $fluo_cofl[1];
  }elseif($count==3){
    if(($fluo_cofl[1]=='SLIGHT')or($fluo_cofl[1]=='STRONG')){
      $fluo_data = $fluo_cofl[0].' '.$fluo_cofl[1];
      $cofl_data = $fluo_cofl[2];
    }else{
      $fluo_data = $fluo_cofl[0];
      $cofl_data = $fluo_cofl[1].' '.$fluo_cofl[2];
    }
  }elseif($count==4){
    $fluo_data =$fluo_cofl[0].' '.$fluo_cofl[1];
    $cofl_data=$fluo_cofl[2].' '.$fluo_cofl[3];
  }else{
    $fluo_data='';
    $cofl_data='';
  }//if end

  $data["fluo"] = $fluo_data;
  $data["cofl"] = $cofl_data;

  // if($text_all_array[7]=="STRONGBLUE"){
  //   $data["fluo"] = "STRONG";
  //   $data["cofl"] = "BLUE";
  // }elseif($text_all_array[7]=="MEDIUMBLUE"){
  //   $data["fluo"] = "MEDIUM";
  //   $data["cofl"] = "BLUE";
  // }


  $data["size1"] = $text_all_array[8];
  $data["size2"] = $text_all_array[9];
  $data["size3"] = $text_all_array[10];


  $data["other4"] = $text_all_array[12];
  $data["appraiser"] = $text_all_array[13];
  foreach($data as $data_key => $data_val){
    if(($data_key == "sorting_num")
      ||($data_key == "size1")
      ||($data_key == "size2")
      ||($data_key == "size3")
      ){
        continue;
      }
    $data[$data_key] = strtoupper($data_val);
  }



  return $data;
}

function pol_sym($data){
  if($data == 'EX'){
    $data = 'EXCELL';
  }elseif($data == 'VG'){
    $data = 'V.GOOD';
  }elseif($data == 'GD'){
    $data = 'GOOD';
  }elseif($data == 'FR'){
    $data = 'FAIR';
  }elseif($data == 'PR'){
    $data = 'POOR';
  }else{
    $data = '';
  }
  return $data;
}

function mst_appraiser($data){
    if($data == 'CGL'){
      $appraiser = '中央宝石研究所ソーティング';
    }else{
      $sql = "SELECT * FROM mst_Appraiser WHERE abbreviation = '{$data}' LIMIT 1";
      $rs = CustomQuery($sql);
      $appraiser_data = db_fetch_array($rs);
      if($appraiser_data["val"] != ""){
          $appraiser = $appraiser_data["val"];
      }else{
          $appraiser = "";
      }
    }//if_end
    return $appraiser;
}//function end

function mst_cofl($data){
  $sql = "SELECT * FROM mst_color_fluo WHERE Name = '{$data}' LIMIT 1";
  $rs = CustomQuery($sql);
  $cofl_data = db_fetch_array($rs);
  if($cofl_data["Id"] != ''){
    $cofl = $cofl_data["Id"];
  }else{
    $cofl = '';
  }//if_end
  return $cofl;
}//function end
