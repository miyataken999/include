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

$user_id = $_SESSION['uid'];



/*******************************************************************
id_keyテーブルにデータ生成し、seqテーブルに生成された値を取得し、品番として商品テーブルに反映する
********************************************************************/
//売却済みかD-Cの場合のみ
$new_st = $values["status"];
if(($values["product_id"] != '') && (($new_st == 33) OR ($new_st == 127))){
	$product_id = $values["product_id"];
	//該当商品のSEQ取得
	try {
		$sql = "SELECT * FROM seq where product_id={$product_id} limit 1";
		$rs = CustomQuery($sql);
		$data = db_fetch_array($rs);
		// $error_txt = "▼成功▼\n";
		// $error_txt .= "\nクエリ\n".$sql;
		// error_log($error_txt,1,"nishitani@urlounge.co.jp");
	} catch (Exception $e) {
		$error_txt = "▼エラー発生▼\n";
		$error_txt .= $e->getMessage();
		error_log($error_txt,1,"nishitani@urlounge.co.jp");
		print $error_txt;
		exit();
	}

	//イニシャルが空欄だったら X
	if($data["initial_name"] == ""){
		$ini = "X";
	}else{
		$ini= $data["initial_name"];
	}

	//seqテーブルの値から品番生成
	$yahoo_seq=$data["sub_cate"].$ini.$data["c"].$data["d"].$data["sex_ini"];

	//生成した品番を商品テーブルに反映
	try {
		$sql = "UPDATE shouhin SET yahoo_sinaban = '{$yahoo_seq}' WHERE product_id={$product_id} limit 1";
		$rs = CustomQuery($sql);
		$data2 = db_fetch_array($rs);
		// $error_txt = "▼成功▼\n";
		// $error_txt .= "\nクエリ\n".$sql;
		// error_log($error_txt,1,"nishitani@urlounge.co.jp");
	} catch (Exception $e) {
		$error_txt = "▼エラー発生▼\n";
		$error_txt .= $e->getMessage();
		error_log($error_txt,1,"nishitani@urlounge.co.jp");
		print $error_txt;
		exit();
	}





	/**********************************************************
	ログ
	**********************************************************/
	$nowtime_no = date("Y/m/d H:i:s");
	$nowtime = "'".$nowtime_no."'";
	$log_ip = $_SERVER["REMOTE_ADDR"];
	$log_table = "kin_satei";
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


	try {
		$insert_sql = "INSERT INTO evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ({$nowtime},'{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
		CustomQuery($insert_sql);
	} catch (Exception $e) {
		$error_txt = "▼エラー発生▼\n";
		$error_txt .= $e->getMessage();
		error_log($error_txt,1,"nishitani@urlounge.co.jp");
		print $error_txt;
		exit();
	}



}








//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//宅配取引更新
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
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


if($new_st == 32){
  $product_id = $values['product_id'];
  $user_label_output_query = "INSERT INTO user_label_output (`user_id`, `product_id`, `create_at`)VALUES('{$user_id}', '{$product_id}', NOW())";
  CustomQuery($user_label_output_query);
}

if($new_st == 33){
  $token = 'jieowbvhinfonrioe3n2rt4h89foo';
  $set_buying_column = file_get_contents("http://rifa.life/lounge_API/evaeva/set_buying_column.php?uid={$user_id}&token={$token}&product_id={$product_id}");
  if($set_buying_column != ''){
    echo $set_buying_column;
  }
}