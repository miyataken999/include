<?
$nowtime = date("Y-m-d H:i:s");
$user_id = $_SESSION['uid'];
$brand_id = $values["product_num"];

//必要項目が入ってる場合のみ実行
if(($nowtime != "") && ($user_id != "")){


	/**********************************************************
	更新者
	**********************************************************/
	if($_SESSION['uid'] != ""){
		$values["updated_by"] = $user_id;
	}

	/**********************************************************
	更新日
	**********************************************************/
	if($nowtime != ""){
		$values["updated_at"] = $nowtime;
	}



	/**********************************************************
	ブランドジャンル日本語名項目へ保存
	**********************************************************/
	if($brand_id != ""){
		$sql = "SELECT name FROM mst_brand WHERE id = {$brand_id}";
		$rs = CustomQuery($sql);
		$data = db_fetch_array($rs);
		$brand_name = $data["name"];

		$values["yahoo_junle"] = $brand_name;
	}

}//end if


//完了(10)になってたら、空だったら、入れる。
$_st = $values["status"];
//完了変日が変わるバグのため、コメントアウト20170821nishitani
// if(($_st == 10) && ($nowtime != "") && ($values["kanryou_henbi"] == "")){
		// $values["kanryou_henbi"] = $nowtime;
// }

//売却済(33)になってたら、成約人、成約日いれる
if(($_st == 33) && ($nowtime != "") && ($user_id != "")){
	if($values["DT_UP_DATE"] == ''){
		$values["REG_AUTHOR"] = $user_id;
		$values["DT_UP_DATE"] = $nowtime;
	}
}

//合わず(34)になってたら、空だったら、入れる。
if(($_st == 34) && ($nowtime != "") && ($user_id != "")){
	if($values["AWAZU_DATE"] == ''){
		$values["AWAZU_NIN"] = $user_id;
		$values["AWAZU_DATE"] = $nowtime;
	}
}
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//鑑別、仕入コストのマスタ参照　
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
$product_id = $keys["product_id"];
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
$product_id = $keys["product_id"];
$finish_cost = "";
//仕上
$finish = $values["Finish"];
if($values["cost"]==""){
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
								$mst_ref_query = "SELECT * FROM `shouhin` WHERE `product_id`={$product_id} LIMIT 1";
								$mst_ref_rs = CustomQuery($mst_ref_query);
								$mst_ref_data = db_fetch_array($mst_ref_rs);
								$mst_ref_data = $mst_ref_data[$rule['shouhin_column']];
							}else{
								$mst_ref_data = $values[$rule["shouhin_column"]];
							}
							$mst_query = "SELECT $mst_ref_column FROM $mst_ref_tbl WHERE $mst_ref_target=\"$mst_ref_data\" LIMIT 1";
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
			//   $shouhin_finish_query = "UPDATE `shouhin` SET `cost` = {$finish_cost} WHERE `product_id` = {$product_id} LIMIT 1";
			//   CustomQuery($shouhin_finish_query);
			}
			// 商品の場合
		}
	}
	$values["cost"] = $finish_cost;
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
if($values["identification_cost"] == ""){
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
	              $mst_ref_query = "SELECT * FROM `shouhin` WHERE `product_id`={$product_id} LIMIT 1";
	              $mst_ref_rs = CustomQuery($mst_ref_query);
	              $mst_ref_data = db_fetch_array($mst_ref_rs);
	              $mst_ref_data = $mst_ref_data[$rule['shouhin_column']];
	            }else{
	              $mst_ref_data = $values[$rule["shouhin_column"]];
	            }

	              $mst_query = "SELECT $mst_ref_column FROM $mst_ref_tbl WHERE $mst_ref_target=\"$mst_ref_data\" LIMIT 1";
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
	      // $shouhin_discrimination_query = "UPDATE `shouhin` SET `identification_cost` = $discrimination_cost WHERE `product_id` = {$product_id} LIMIT 1";
	      // CustomQuery($shouhin_discrimination_query);
	    }
			//商品の場合
	  }
	}
	$values["identification_cost"] = $discrimination_cost;
}
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//鑑別コスト　　END
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

?>
