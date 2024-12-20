<?
// Description
// Occurs after record was updated

// Parameters
// $values     - array of values has been written to the database.
//               To access specific field value use $values["FieldName"]
//               "dict" is an alternate name for this parameter.
// $where      - WHERE clause that points to the edited record. Example: ID=19
// $oldvalues  - array with replaced field values. To access specific column value use
//               $oldvalues["FieldName"]
// $keys       - array of key column values that point to the edited record. To access
//               specific key column use $keys["KeyFieldName"]
// $inline     - equals to true when the Inline Edit in process, false otherwise
// $pageObject - an object of Page class representing the current page

//user_id 習得

// exit;
$user_id = $_SESSION['uid'];
// $user_id = 106;

// $pageObject->stopPRG = true;
// $pageObject->setProxyValue("user_id", $user_id);

$new_st = $values["status"];
// $new_st = 33;
$nowtime_no = date("Y/m/d H:i:s");
$nowtime = "'".$nowtime_no."'";
// echo 111111111111;
if(($new_st == 33) OR ($new_st == 111) OR ($new_st == 113) OR ($new_st == 121)){
// echo 111111111111;
  $product_id = $values['product_id'];//$data["product_id"];

// $product_id = 210583;//$data["product_id"];
// echo $product_id;
/******************************************************************
シーケンスの取得
*******************************************************************/


  $sql = "SELECT * FROM seq where product_id=".$product_id;
  // echo $sql;
	$rs = CustomQuery($sql);
	$data = db_fetch_array($rs);

  // var_dump($data);



  if($data["initial_name"] == ""){
		$ini = "X";
	}else{
		$ini= $data["initial_name"];
	}


$yahoo_seq =
	$data["sub_cate"].
	$ini.
	$data["c"].
	$data["d"].
	$data["sex_ini"];

	$sql = "UPDATE shouhin SET yahoo_sinaban = '".$yahoo_seq."' where product_id = ".$product_id;
  //exit();
  $rs = CustomQuery($sql);


	/**********************************************************
	ログ
	**********************************************************/
	$log_ip = $_SERVER["REMOTE_ADDR"];
	$log_table = "saisun";
	$log_action = "edit";//ここでは固定
	//user_login取得
	$user_login_query = " SELECT user_login FROM users WHERE user_id={$_SESSION['uid']} LIMIT 1";
	$rs = CustomQuery($user_login_query);
	while ($data = db_fetch_array($rs))
	{
		$log_user = $data["user_login"];
	}
	$log_descri = "---Keys\n";
	$log_descri = $log_descri."product_id : {$product_id}\n";
	$log_descri = $log_descri."---Fields\n";
	$log_descri = $log_descri."yahoo_sinaban[new]:{$yahoo_seq}\n";
	$insert_sql = "INSERT INTO evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ({$nowtime},'{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
	CustomQuery($insert_sql);

}



//価格更新判定処理
include_once $_SERVER["DOCUMENT_ROOT"]."/include/page_event/function/kakaku.php";






//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//宅配取引更新
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
// $Eoc_takuhai_id = $values["Eoc_takuhai_id"];
$Eoc_takuhai_id = $values["Eoc_takuhai_id"];

if($Eoc_takuhai_id > 0){

	//買い備が存在すれば、成約あり、なければ査定中
	$kaibi_query = "SELECT COUNT(chigin_id) as 'kaibi_ct' FROM Eoc_chigins WHERE Eoc_takuhai_id={$Eoc_takuhai_id} ";
	$kaibi_rs = CustomQuery($kaibi_query);
	$kaibi_data = db_fetch_array($kaibi_rs);
	$kaibi_ct = $kaibi_data["kaibi_ct"];
	if($kaibi_ct >= 1){
		//宅配取引のステータス 「成約あり」に変更
		$Eoc_takuhai_query = "UPDATE Eoc_takuhai SET `status`=5,`updated_by`='{$user_id}' WHERE id='{$Eoc_takuhai_id}' limit 1";
		CustomQuery($Eoc_takuhai_query);
	}else{

		//宅配取引の総数
		$query = "SELECT COUNT(product_id) as `ct` FROM shouhin WHERE Eoc_takuhai_id='{$Eoc_takuhai_id}' ";
		$rs = CustomQuery($query);
		$data = db_fetch_array($rs);
		$total_ct = $data["ct"];

		//合わず数
		$query = "SELECT COUNT(product_id) as `ct` FROM shouhin WHERE Eoc_takuhai_id='{$Eoc_takuhai_id}' AND `status`=34 ";
		$rs = CustomQuery($query);
		$data = db_fetch_array($rs);
		$awazu_ct = $data["ct"];

		//「未売却」「No売却」数
		$query = "SELECT COUNT(product_id) as `ct` FROM shouhin WHERE Eoc_takuhai_id='{$Eoc_takuhai_id}' AND ((`status`=32) OR (`status`=126)) ";
		$rs = CustomQuery($query);
		$data = db_fetch_array($rs);
		$mibaikyaku_ct = $data["ct"];

		//宅配取引のステータス
		$query = "SELECT `status` FROM Eoc_takuhai WHERE id='{$Eoc_takuhai_id}' limit 1";
		$rs = CustomQuery($query);
		$data = db_fetch_array($rs);
		$Eoc_takuhai_status = $data["status"];

		if($total_ct == $awazu_ct){
			//全て合わずだったら
			//宅配取引ST 「合わず」に変更
			$Eoc_takuhai_query = "UPDATE Eoc_takuhai SET `status`=9,`updated_by`='{$user_id}' WHERE id='{$Eoc_takuhai_id}' limit 1";
			CustomQuery($Eoc_takuhai_query);
		}elseif($mibaikyaku_ct > 0){
			//「未売却」「No売却」があれば
			//宅配取引ST 「査定中」に変更
			$Eoc_takuhai_query = "UPDATE Eoc_takuhai SET `status`=12,`updated_by`='{$user_id}' WHERE id='{$Eoc_takuhai_id}' limit 1";
			CustomQuery($Eoc_takuhai_query);
		}elseif(($Eoc_takuhai_status == 9) OR ($Eoc_takuhai_status == 12)){
			//上記条件 (宅配取引ST 「合わず」「査定中」)に当てはまらず、今のSTが「合わず」「査定中」だった場合
			//＝「合わず」「査定中」から、「合わず」「査定中」以外になりえる場合
			//宅配取引ST 「成約あり」に変更
			$Eoc_takuhai_query = "UPDATE Eoc_takuhai SET `status`=5,`updated_by`='{$user_id}' WHERE id='{$Eoc_takuhai_id}' limit 1";
			CustomQuery($Eoc_takuhai_query);
		}
	}// end 買い備なし



}
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//宅配取引更新　END
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

if($new_st == 33){

  //自動ラベルのテンプレートIDの振り分け
  $current_page_pass = $_SERVER["HTTP_REFERER"];
  if(stristr($current_page_pass, "satei_of_brand1_list")){
  	$label_tmp = 2;
  }else{
  	$label_tmp = 1;
  }

  $product_id = $values['product_id'];

  $label_query = "SELECT `product_id`,`number_of_sheets` FROM user_label_output WHERE `product_id`='{$product_id}' limit 1 ";
  $label_res = CustomQuery($label_query);
  $label_data = db_fetch_array($label_res);


  $label_output_count = 0;
  if($values["Discrimination"] != ''){
    $label_output_count++;
  }
  if(($values["accessories"] != '') AND ($values["accessories"] != '付無し')){
    $label_output_count++;
  }

  if($label_data == NULL){
    $label_output_count++;
    $user_label_output_query = "INSERT INTO user_label_output (`user_id`, `product_id`, `create_at`, `type`, `number_of_sheets`)VALUES('{$user_id}', '{$product_id}', NOW(), '{$label_tmp}', '{$label_output_count}')";
    CustomQuery($user_label_output_query);
  }else{
    foreach ($values as $key => $value) {
      if(
        ($key == 'status')
        OR ($key == 'updated_at')
        OR ($key == 'updated_by')
        OR ($key == 'AWAZU_DATE')
        OR ($key == 'AWAZU_NIN')
        OR ($key == 'kaitory_hi')
        OR ($key == 'kaitori_by')
        OR ($key == 'DT_UP_DATE')
        OR ($key == 'REG_AUTHOR')
        OR ($key == 'satei_hi')
        OR ($key == 'satei_by')
        OR ($key == 'zipper')
        OR ($key == 'plate')
        OR ($key == 'country_of_origin')
        OR ($key == 'satei_error')
        OR ($key == 'errors')
        OR ($key == 'title')
      ){
        continue;
      }
      if($value != $oldvalues[$key]){
        $label_output_count++;
        break;
      }
    }//end foreach

    if($label_output_count > 0){
      $user_label_output_query = "UPDATE user_label_output SET `user_id`='{$user_id}',`output`=1,`number_of_sheets`='{$label_output_count}' WHERE `product_id`='{$product_id}' limit 1 ";
      // echo '$user_label_output_query'.$user_label_output_query;
      CustomQuery($user_label_output_query);
    }

  }
}

if($new_st == 33){
  $token = 'jieowbvhinfonrioe3n2rt4h89foo';
  $set_buying_column = file_get_contents("http://rifa.life/lounge_API/evaeva/set_buying_column_test.php?uid={$user_id}&token={$token}&product_id={$product_id}");
  if($set_buying_column != ''){
    echo $set_buying_column;
  }
}
