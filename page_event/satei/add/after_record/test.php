<?

$user_id = $_SESSION['uid'];
$product_id = $values['product_id'];
$new_st = $values["status"];

if(($new_st == 32) OR ($new_st == 33) OR ($new_st == 126)){

  //自動ラベルのテンプレートIDの振り分け
  $current_page_pass = $_SERVER["HTTP_REFERER"];
  if(stristr($current_page_pass, "satei_of_brand1_list")){
  	$label_tmp = 2;
  }else{
  	$label_tmp = 1;
  }


  $label_query = "SELECT `product_id` FROM user_label_output WHERE `product_id`='{$product_id}' limit 1 ";
  $label_res = CustomQuery($label_query);
  $label_data = db_fetch_array($label_res);

  if($label_data == NULL){
    $user_label_output_query = "INSERT INTO user_label_output (`user_id`, `product_id`, `create_at`, `type`)VALUES('{$user_id}', '{$product_id}', NOW(), '{$label_tmp}')";
    CustomQuery($user_label_output_query);
  }
}


$rule_array = array();
$rule_array[] = array(
  "name"=>"category_id",
  "rule"=>" = ",
  "column_name"=>"",
  "shouhin_column"=>"category_id",
  "mst_ref_flg"=>"0",
  "nodisplay_column_flg"=>"0",
  "mst_ref_column"=>"",
  "mst_ref_target"=>"",
  "mst_ref_tbl"=>"",
  "target_data"=>"first",
);
$rule_array[] = array(
  "name"=>"colorstone_id",
  "rule"=>" = ",
  "column_name"=>"",
  "shouhin_column"=>"sub_category_id1",
  "mst_ref_flg"=>"1",
  "nodisplay_column_flg"=>"0",
  "mst_ref_column"=>"colorstone_id",
  "mst_ref_target"=>"id",
  "mst_ref_tbl"=>"store_sub_categories",
  "target_data"=>"first",
);
$rule_array[] = array(
  "name"=>"shape",
  "rule"=>" = ",
  "column_name"=>"",
  "shouhin_column"=>"shape",
  "mst_ref_flg"=>"0",
  "nodisplay_column_flg"=>"0",
  "mst_ref_column"=>"",
  "mst_ref_target"=>"",
  "mst_ref_tbl"=>"",
  "target_data"=>"first",
);
$rule_array[] = array(
  "name"=>"cutting_syle",
  "rule"=>" = ",
  "column_name"=>"cutting_style",
  "mst_ref_flg"=>"0",
  "nodisplay_column_flg"=>"0",
  "mst_ref_column"=>"",
  "mst_ref_target"=>"",
  "mst_ref_tbl"=>"",
  "target_data"=>"first",
);
$rule_array[] = array(
  "name"=>"DA_CUT",
  "rule"=>" = ",
  "column_name"=>"",
  "shouhin_column"=>"DA_CUT",
  "mst_ref_flg"=>"1",
  "nodisplay_column_flg"=>"1",
  "mst_ref_column"=>"id",
  "mst_ref_target"=>"name",
  "mst_ref_tbl"=>"_DIA_DA_CUT",
  "target_data"=>"first",
);
$rule_array[] = array(
  "name"=>"status",
  "rule"=>" = ",
  "column_name"=>"",
  "shouhin_column"=>"status",
  "mst_ref_flg"=>"0",
  "nodisplay_column_flg"=>"0",
  "mst_ref_column"=>"",
  "mst_ref_target"=>"",
  "mst_ref_tbl"=>"",
  "target_data"=>"first",
);
$rule_array[] = array(
  "name"=>"parent_stone_lower_limit",
  "rule"=>" <= ",
  "column_name"=>"",
  "shouhin_column"=>"Parent_stone",
  "mst_ref_flg"=>"0",
  "nodisplay_column_flg"=>"0",
  "mst_ref_column"=>"",
  "mst_ref_target"=>"",
  "mst_ref_tbl"=>"",
  "target_data"=>"last",
);
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//仕上コスト　
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
// $product_id = $keys["product_id"];
//仕上
$finish = $values["Finish"];
if($finish!=""){
  $mst_Finish_query = "SELECT `id` FROM `mst_Finish` WHERE `val`=\"$finish\" LIMIT 1";
  $mst_Finish_rs = CustomQuery($mst_Finish_query);
  if($mst_Finish_rs!==false){
    $mst_Finish_data = db_fetch_array($mst_Finish_rs);
    $finish_id = $mst_Finish_data["id"];//mst参照 id;
    $finish_cost_query = "SELECT *
    FROM `mst_finish_terms`
    WHERE `mst_Finish_id`=$finish_id
    ORDER BY
    `finish_sort`,
    `colorstone_id` DESC,
    `cutting_syle` DESC,
    `shape` DESC,
    `DA_CUT` DESC,
    `parent_stone_lower_limit` DESC,
    `id`
    ";
    $finish_cost_rs = CustomQuery($finish_cost_query);
    if($finish_cost_rs!=false){
      $last_column_array = array();
      while($finish_cost_data = db_fetch_array($finish_cost_rs)){
        $all_ok = 'ok';
        for ($rule_i=0; $rule_i < count($rule_array); $rule_i++) {
          $rule = $rule_array[$rule_i];

          if($rule["target_data"] == "last"){
            $last_column_array[] = $rule["name"];
          }

          $column_name = $rule["column_name"];
          if($column_name != ''){
            $master_column = $column_name;
          }else{
            $master_column = $rule["name"];
          }

          //マスター側の参照値
          $master_column_data = $finish_cost_data[$master_column];
          //比較ルール
          $hikaku_rule = $rule["rule"];
          //商品側の参照値
          if($rule["mst_ref_flg"]==1){
            $mst_ref_column = $rule['mst_ref_column'];
            $mst_ref_tbl = $rule['mst_ref_tbl'];
            $mst_ref_target = $rule['mst_ref_target'];

            if($rule["nodisplay_column_flg"]==1){
              $mst_ref_query = "SELECT * FROM `shouhin` WHERE `product_id`='{$product_id}' LIMIT 1";
              $mst_ref_rs = CustomQuery($mst_ref_query);
              $mst_ref_data = db_fetch_array($mst_ref_rs);
              $mst_ref_data = $mst_ref_data[$rule['shouhin_column']];
            }else{
              $mst_ref_data = $values[$rule["shouhin_column"]];
            }
            $mst_query = "SELECT `$mst_ref_column` FROM `$mst_ref_tbl` WHERE `$mst_ref_target`=\"$mst_ref_data\" LIMIT 1";
            $mst_rs = CustomQuery($mst_query);
            $mst_data = db_fetch_array($mst_rs);
            $shouhin_data = $mst_data[$rule['mst_ref_column']];
          }else{
            $shouhin_data = $values[$rule["shouhin_column"]];
          }
          //比較
          if($hikaku_rule == " <= "){
            if(!($master_column_data <= $shouhin_data)){
              $all_ok = 'NG';
              break;// break for rule_array
            }
          }elseif($hikaku_rule == " = "){
            $value_count++;
            if(($master_column_data!=null)and($master_column_data!=0)and($master_column_data!='')){
              if($master_column_data != $shouhin_data){
                $all_ok = 'NG';
                break;// break for rule_array
              }
            }
          }else{
            if(($master_column_data!=null)and($master_column_data!=0)and($master_column_data!='')){
              if($master_column_data != $shouhin_data){
                $all_ok = 'NG';
                break;// break for rule_array
              }
            }
          }
        }// for
        if($all_ok == 'ok'){
          $finish_cost = $finish_cost_data['cost'];
          break;
        }//end
      }// while
    }
      // $values["comment"] = $finish_cost;
    if($finish_cost!=""){
      $shouhin_finish_query = "UPDATE `shouhin` SET `cost` = '{$finish_cost}' WHERE `product_id` = '{$product_id}' LIMIT 1";
      CustomQuery($shouhin_finish_query);
    }
  }
}
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//end 仕上コスト　
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//鑑別コスト　
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//新鑑別
$discrimination = $values["Discrimination"];
$discrimination_cost = "";
if($discrimination!=""){
  $mst_Discrim_query = "SELECT `id` FROM `mst_Discrimination` WHERE `val`=\"$discrimination\" LIMIT 1";
  $mst_Discrim_rs = CustomQuery($mst_Discrim_query);
  if($mst_Discrim_rs!==false){
    $mst_Discrim_data = db_fetch_array($mst_Discrim_rs);
    $discrimination_id = $mst_Discrim_data["id"];//mst参照 id;
    $discrim_cost_query = "SELECT *
    FROM `mst_finish_terms`
    WHERE `Discrimination`=$discrimination_id
    ORDER BY
    `discrimination_sort`,
    `colorstone_id` DESC,
    `cutting_syle` DESC,
    `shape` DESC,
    `DA_CUT` DESC,
    `parent_stone_lower_limit` DESC,
    `id`
    ";
    $discrim_cost_rs = CustomQuery($discrim_cost_query);
    if($discrim_cost_rs!=false){
      $last_column_array = array();
      while($discrim_cost_data = db_fetch_array($discrim_cost_rs)){
        $all_ok = 'ok';
        for ($rule_i=0; $rule_i < count($rule_array); $rule_i++) {
          $rule = $rule_array[$rule_i];

          if($rule["target_data"] == "last"){
            $last_column_array[] = $rule["name"];
          }

          $column_name = $rule["column_name"];
          if($column_name != ''){
            $master_column = $column_name;
          }else{
            $master_column = $rule["name"];
          }

          //マスター側の参照値
          $master_column_data = $discrim_cost_data[$master_column];
          //比較ルール
          $hikaku_rule = $rule["rule"];
          //商品側の参照値
          if($rule["mst_ref_flg"]==1){
            $mst_ref_column = $rule['mst_ref_column'];
            $mst_ref_tbl = $rule['mst_ref_tbl'];
            $mst_ref_target = $rule['mst_ref_target'];

            if($rule["nodisplay_column_flg"]==1){
              $mst_ref_query = "SELECT * FROM `shouhin` WHERE `product_id`='{$product_id}' LIMIT 1";
              $mst_ref_rs = CustomQuery($mst_ref_query);
              $mst_ref_data = db_fetch_array($mst_ref_rs);
              $mst_ref_data = $mst_ref_data[$rule['shouhin_column']];
            }else{
              $mst_ref_data = $values[$rule["shouhin_column"]];
            }

              $mst_query = "SELECT `$mst_ref_column` FROM `$mst_ref_tbl` WHERE `$mst_ref_target`=\"$mst_ref_data\" LIMIT 1";
              $mst_rs = CustomQuery($mst_query);
              $mst_data = db_fetch_array($mst_rs);
              $shouhin_data = $mst_data[$rule['mst_ref_column']];

          }else{
            $shouhin_data = $values[$rule["shouhin_column"]];
          }
          if($hikaku_rule == " <= "){
            if(!($master_column_data <= $shouhin_data)){
              $all_ok = 'NG';
              break;// break for rule_array
            }
          }elseif($hikaku_rule == " = "){
            $value_count++;
            if(($master_column_data!=null)and($master_column_data!=0)and($master_column_data!='')){
              if($master_column_data != $shouhin_data){
                $all_ok = 'NG';
                break;// break for rule_array
              }
            }
          }else{
            if(($master_column_data!=null)and($master_column_data!=0)and($master_column_data!='')){
              if($master_column_data != $shouhin_data){
                $all_ok = 'NG';
                break;// break for rule_array
              }
            }
          }
        }// for
        if($all_ok == 'ok'){
          $discrimination_cost = $discrim_cost_data['cost'];
          break;
        }//end
      }// while
    }

    if($discrimination_cost!=""){
      $shouhin_discrimination_query = "UPDATE `shouhin` SET `identification_cost` = '$discrimination_cost' WHERE `product_id` = '{$product_id}' LIMIT 1";
      CustomQuery($shouhin_discrimination_query);
    }
  }
}
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//鑑別コスト　　END
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
