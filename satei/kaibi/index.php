<?
mb_internal_encoding("utf-8");
// ini_set("display_errors",1);

//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";

include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

$ecc_id = htmlspecialchars($_GET["ecc_id"]);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>買い備自動生成</title>
</head>
<body>
<?


mysql_query('SET NAMES utf8');
$housyoku_array = array(10,12,17,18,19,50,20,51,21,22,23,69,68,67,66,65);


//進行中の宅配取引idの計算
// 現在進行中のステータス「新規申込」「到着済」「成約あり」「振込確認済み」「査定中」の一番古い宅配取引IDを抽出
// ※「振込確認済み」は、成約し、次の到着と一緒にされたい場合、確認画面に出して控えさせるためにこのSTにする為。

$Eoc_takuhai_query = "SELECT id FROM Eoc_takuhai WHERE ecc_id='{$ecc_id}' AND ((`status`=1) OR (`status`=4) OR (`status`=5) OR (`status`=6) OR (`status`=12)) order by id asc limit 1";
$Eoc_takuhai_rs = mysql_query($Eoc_takuhai_query);
$Eoc_takuhai_data = mysql_fetch_assoc($Eoc_takuhai_rs);
if((!isset($Eoc_takuhai_data["id"])) OR ($ecc_id =='')){
	echo "<h2>該当する宅配取引データがありません</h2>";
	exit();
}else{
	$Eoc_takuhai_id = $Eoc_takuhai_data["id"];
}

/*
地金スクラップ 119 142 148
D-C待ち 127
売却済み 33
D-C済み 134
*/

// 販促費中カテの抽出
$store_sub_categories_query = "SELECT id FROM store_sub_categories where hansokuhi_flag=1";
$store_sub_categories_rs = mysql_query($store_sub_categories_query);
$hansoku_array = array();
while($store_sub_categories_data = mysql_fetch_assoc($store_sub_categories_rs)){
	$hansoku_array[] = $store_sub_categories_data["id"];
}

$sumprice["H"]["price"] = 0;
$sumprice["H"]["remark"] = '';

$sumprice["K"]["price"] = 0;
$sumprice["K"]["remark"] = '';

$sumprice["D"]["price"] = 0;
$sumprice["D"]["remark"] = '';

$sumprice["W"]["price"] = 0;
$sumprice["W"]["remark"] = '';

$sumprice["J"]["price"] = 0;
$sumprice["J"]["remark"] = '';

$sumprice["B"]["price"] = 0;
$sumprice["B"]["remark"] = '';



// 111	服飾市場
// 113	アパオク
// 125	ブティック
// 132	委託
// 10	完了
// 114	処分
// 106	加工待ち
// 107	P待ち
// 108	入庫待ち
// 109	捜査中
// 112	保留
// 115	洗濯中
// 117	屑関連
// 116	IM
// 118	宝飾完了
// 126	No売却
// 128	D-Recut
// 129	D-製品化
// 120	D完了
// 123	海外持出
// 130	Sample
// 131	Pricelist_d





// 33	売却済
// 119	地金スクラップ
// 121	宝飾出品待機
// 122	D-Wait
// 127	D-C待ち
// 110	修理待機
// 124	ストック
// 29	未採寸
// 133	修理中-発送済
// 134	D-C済み



$shouhin_query = "SELECT * FROM shouhin where `status`!=34 AND Eoc_takuhai_id={$Eoc_takuhai_id} order by product_id";
$shouhin_rs = mysql_query($shouhin_query);
$count = 0;
$satei_by = '';
while($res = mysql_fetch_assoc($shouhin_rs)){
	$count++;
	if($satei_by == ''){
		$satei_by = $res["satei_by"];
	}

	var_export($housyoku_array);
	if($res["meisai_number"] != ''){
		$meisai_number = "【".$res["meisai_number"]."】";
	}else{
		$meisai_number = "";
	}

	if($res["sub_category_id1"] == 838){
		$category = "B";
		$price = $res["price"];
		$sumprice[$category]["price"] += $price;
		if($sumprice[$category]["remark"] != ''){
			$sumprice[$category]["remark"] .= "\n";
		}

		include $_SERVER["DOCUMENT_ROOT"]."/include/satei/kin_satei/create_title.php";
		$sumprice[$category]["remark"] .= "{$count}{$meisai_number} {$title} = {$price} 円";
	}elseif((in_array($res["sub_category_id1"], $hansoku_array)) AND (($res["status"] == 119) OR ($res["status"] == 142) OR ($res["status"] == 148))){
		$category = "H";
		$price = $res["price"];
		$sumprice[$category]["price"] += $price;
		if($sumprice[$category]["remark"] != ''){
			$sumprice[$category]["remark"] .= "\n";
		}
		include $_SERVER["DOCUMENT_ROOT"]."/include/satei/kin_satei/create_title.php";
		$sumprice[$category]["remark"] .= "{$count}{$meisai_number} {$title} = {$price} 円";
	}elseif(($res["status"] == 127 OR $res["status"] == 134 OR $res["status"] == 122 OR $res["status"] == 119 OR $res["status"] == 142 OR $res["status"] == 148) AND (($res["category_id"] == 17) AND (($res["sub_category_id1"] == 415) OR ($res["sub_category_id1"] == 420)))){
		$category = "D";
		$price = $res["price"];
		$sumprice[$category]["price"] += $price;
		if($sumprice[$category]["remark"] != ''){
			$sumprice[$category]["remark"] .= "\n";
		}
		include $_SERVER["DOCUMENT_ROOT"]."/include/satei/kin_satei/create_title.php";
		$sumprice[$category]["remark"] .= "{$count}{$meisai_number} {$title} = {$price} 円";
	}elseif((($res["status"] == 33) OR ($res["status"] == 107) OR ($res["status"] == 108) OR ($res["status"] == 110) OR ($res["status"] == 133) OR ($res["status"] == 121) OR ($res["status"] == 29) OR ($res["status"] == 7)) AND ($res["category_id"] == 10)){
		$category = "W";
		$price = $res["price"];
		$sumprice[$category]["price"] += $price;
		if($sumprice[$category]["remark"] != ''){
			$sumprice[$category]["remark"] .= "\n";
		}
		include $_SERVER["DOCUMENT_ROOT"]."/include/satei/kin_satei/create_title.php";
		$sumprice[$category]["remark"] .= "{$count}{$meisai_number} {$title} = {$price} 円";
	}elseif((in_array($res["category_id"], $housyoku_array)) AND (($res["status"] == 33) OR ($res["status"] == 107) OR ($res["status"] == 108) OR ($res["status"] == 110) OR ($res["status"] == 133) OR ($res["status"] == 121) OR ($res["status"] == 124) OR ($res["status"] == 29) OR ($res["status"] == 7))){
		$category = "J";
		$price = $res["price"];
		$sumprice[$category]["price"] += $price;
		if($sumprice[$category]["remark"] != ''){
			$sumprice[$category]["remark"] .= "\n";
		}
		include $_SERVER["DOCUMENT_ROOT"]."/include/satei/kin_satei/create_title.php";
		$sumprice[$category]["remark"] .= "{$count}{$meisai_number} {$title} = {$price} 円";
	}elseif(($res["status"] == 33) OR ($res["status"] == 107) OR ($res["status"] == 108) OR ($res["status"] == 110) OR ($res["status"] == 133) OR ($res["status"] == 121) OR ($res["status"] == 29) OR ($res["status"] == 7)){
		$category = "B";
		$price = $res["price"];
		$sumprice[$category]["price"] += $price;
		if($sumprice[$category]["remark"] != ''){
			$sumprice[$category]["remark"] .= "\n";
		}
		include $_SERVER["DOCUMENT_ROOT"]."/include/satei/kin_satei/create_title.php";
		$sumprice[$category]["remark"] .= "{$count}{$meisai_number} {$title} = {$price} 円";
	}elseif($res["status"] == 119 OR $res["status"] == 142 OR $res["status"] == 148){
		$category = "K";
		$price = $res["price"];
		$sumprice[$category]["price"] += $price;
		if($sumprice[$category]["remark"] != ''){
			$sumprice[$category]["remark"] .= "\n";
		}
		include $_SERVER["DOCUMENT_ROOT"]."/include/satei/kin_satei/create_title.php";
		$sumprice[$category]["remark"] .= "{$count}{$meisai_number} {$title} = {$price} 円";
	}elseif(($res["status"] == 111) OR ($res["status"] == 113)){
		if(in_array($res["category_id"], $housyoku_array)){
			$category = "J";
		}else{
			$category = "B";
		}

		$price = $res["price"];
		$sumprice[$category]["price"] += $price;
		if($sumprice[$category]["remark"] != ''){
			$sumprice[$category]["remark"] .= "\n";
		}
		include $_SERVER["DOCUMENT_ROOT"]."/include/satei/kin_satei/create_title.php";
		$sumprice[$category]["remark"] .= "{$count}{$meisai_number} {$title} = {$price} 円";

	}

		// echo "product_id ".$res["product_id"]."  ".$sumprice[$category]["remark"];
		// echo "<br>";
		// echo "product_id ".$res["product_id"]."category {$category} status".$res["status"]." category_id ".$res["category_id"];
		// var_dump($res["status"]);
		// var_dump($res["category_id"]);
		// echo "<br>";
		// echo "<br>";
		$date = date('Y-m-d H:i:s');
		$product_id = $res["product_id"];
		$market_query = "SELECT `product_id` FROM `market_product_performance_original` WHERE `product_id` ='{$product_id}' LIMIT 1";
		$market_rs = mysql_query($market_query);
		$market_res = mysql_fetch_assoc($market_rs);
		if(!(isset($market_res['product_id']))){
			$market_insert_sql = "INSERT INTO `market_product_performance_original` (`product_id`,`front_hidden_flg`,`created_at`) VALUES ('$product_id','True','$date')";
			$market_insert = mysql_query($market_insert_sql);
		}
}//end while


// $sumprice["H"]
// $sumprice["K"]
// $sumprice["D"]
// $sumprice["W"]
// $sumprice["J"]
// $sumprice["B"]




?>
<pre>
<?
echo var_export($sumprice);
?>
</pre>
<?




// include $_SERVER["DOCUMENT_ROOT"]."/include/kagoya_check/function.php";


function insert_log($log_table,$key_val,$into_col,$into_val,$user_id,$key_name,$log_action){
	$log_time = date("Y-m-d H:i:s");
	$log_ip = $_SERVER["REMOTE_ADDR"];

	//user_login取得
	$user_login_query = " SELECT user_login FROM internet.users WHERE user_id={$user_id} LIMIT 1";
	$user_login_sql = mysql_query('SET NAMES utf8');
	$user_login_sql = mysql_query($user_login_query);
	$user_login_result = mysql_fetch_assoc($user_login_sql);
	$log_user = $user_login_result["user_login"];
	//user_login取得 end
	$into_col = str_replace("(","",$into_col);
	$into_col = str_replace(")","",$into_col);
	$into_col_array = explode(",",$into_col);

	$into_val = str_replace("(","",$into_val);
	$into_val = str_replace(")","",$into_val);
	$into_val_array = explode("','",$into_val);


	$log_descri = "";
	$log_descri .= "---Keys\n{$key_name}:{$key_val}\n";
	$log_descri .= "---Fields\n";
	for ($i=0; $i < count($into_col_array); $i++) {
		$into_val_array[$i] = str_replace("'","",$into_val_array[$i]);
		if($into_val_array[$i] != ""){
			$log_descri .= "{$into_col_array[$i]}[new]:{$into_val_array[$i]}\n";
		}
	}

	// $log_descri;

	// $insert_sql = "INSERT INTO evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ('{$log_time}','{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
	$insert_sql = "INSERT INTO internet.evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ('{$log_time}','{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
	// print $insert_sql."<br><br>";
	$result_flag = mysql_query('SET NAMES utf8');
	$result_flag = mysql_query($insert_sql);
	if (!$result_flag) {
		print mysql_error();
		// exit('データを登録できませんでした。');
	}


}//end insert_log


function data_select($db_name,$table,$key_name,$key){
	$query = " SELECT * FROM {$db_name}.{$table} WHERE {$key_name}={$key} LIMIT 1";
	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	$data = mysql_fetch_assoc($sql);
	return $data;
}//end data_select

//例

function update_log($before_data,$after_data,$log_table,$key_val,$up_col,$user_id,$key_name,$log_action){
	$log_time = date("Y-m-d H:i:s");
	$log_ip = $_SERVER["REMOTE_ADDR"];

	//user_login取得
	$user_login_query = " SELECT user_login FROM internet.users WHERE user_id={$user_id} LIMIT 1";
	$user_login_sql = mysql_query('SET NAMES utf8');
	$user_login_sql = mysql_query($user_login_query);
	$user_login_result = mysql_fetch_assoc($user_login_sql);
	$log_user = $user_login_result["user_login"];
	//user_login取得 end

	$log_descri = "";
	$log_descri .= "---Keys\n{$key_name}:{$key_val}\n";
	$log_descri .= "---Fields\n";


	foreach ($after_data as $key => $new_val) {
		$new_val = str_replace("'","",$new_val);
		$old_val = $before_data[$key];
		$old_val = str_replace("'","",$old_val);
		if($new_val != ""){
			if($new_val != $old_val){
				$log_descri .= "{$key}[old]:{$old_val}\n";
				$log_descri .= "{$key}[new]:{$new_val}\n";
			}
		}
	}

	// $insert_sql = "INSERT INTO evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ('{$log_time}','{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
	$insert_sql = "INSERT INTO internet.evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ('{$log_time}','{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
	// print $insert_sql."<br><br>";
	$result_flag = mysql_query('SET NAMES utf8');
	$result_flag = mysql_query($insert_sql);
	if (!$result_flag) {
		print mysql_error();
		// exit('データを登録できませんでした。');
	}
}//end update_log















function kaibi_up($chigin_type, $category, $haraidasi, $ching_price, $remark, $Eoc_takuhai_id, $ecc_id, $tablename, $satei_by, $uid, $ching_created_at){
	$remark = str_replace("'","’",$remark);
	$remark = str_replace("\"","”",$remark);

	$query = "SELECT chigin_id FROM {$tablename} where `chigin_type`='{$chigin_type}' AND Eoc_takuhai_id={$Eoc_takuhai_id} AND chigin_ecc_id={$ecc_id} limit 1";
	$rs = mysql_query($query);
	$chigin_data = mysql_fetch_assoc($rs);
	if(isset($chigin_data["chigin_id"])){
		//更新用
		$chigin_id = $chigin_data["chigin_id"];


		$up_col = "chigin_ecc_id='{$ecc_id}'";
		$up_col .= ",Eoc_takuhai_id='{$Eoc_takuhai_id}'";
		$up_col .= ",satei_by='{$satei_by}'";
		$up_col .= ",chigin_type='{$chigin_type}'";
		$up_col .= ",ching_price='{$ching_price}'";
		$up_col .= ",remark='{$remark}'";
		$up_col .= ",updated_by='{$uid}'";
		$up_col .= ",updated_at='".date("Y-m-d H:i:s")."'";
		$up_col .= ",haraidasi='{$haraidasi}'";


		// /var/www/html/include/kagoya_check/takuhai/eoc_after_data_table/submit_update.php
		// 106G

		// $query = "UPDATE {$tablename} SET
		// 	where chigin_id='{$chigin_id}' limit 1
		// ";




		if($chigin_id != ""){
			//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
			//up前データ取得
			//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
			$db_name = "internet";
			$table = $tablename;
			$key_name = "chigin_id";
			$key = $chigin_id;
			$before_data = data_select($db_name,$table,$key_name,$key);
			//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
			//up前データ取得 END
			//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

			$query = "UPDATE internet.{$table} SET {$up_col} WHERE {$key_name}='{$key}' ";

			$sql = mysql_query('SET NAMES utf8');
			echo $query;
			// exit();
			$sql = mysql_query($query);


			//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
			//up後データ取得
			//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
			$db_name = "internet";
			$table = $tablename;
			$key_name = "chigin_id";
			$key = $chigin_id;
			$after_data = data_select($db_name,$table,$key_name,$key);
			//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
			//up後データ取得 END
			//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

			if (!$sql) {

			    //チャットワーク流す
				$text_table = "[info][title]買い備自動生成クエリ失敗 ■ Eoc_chigins UPDATE[/title]";
				$text_table .= "[info]".mysql_error()."[/info][hr]";
				$text_table .= "[info]";
				$text_table .= "{$query}[/info][/info]";
				$text_table = str_replace("&","＆",$text_table);
				$text_table = str_replace("'","’",$text_table);
			    $text_table = mb_convert_encoding($text_table, "UTF-8", "auto");

				$word = $text_table;
				//メール送信
				$subject = '買い備自動生成クエリ失敗 ■ Eoc_chigins UPDATE';
				$mail_body = $word;
				$sendPostData = array("subject" => $subject, "text" => $mail_body);
				$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => http_build_query($sendPostData, "", "&")));
				try{ file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, stream_context_create($sendPostDataOptions)); }catch(\Exception $e){}


			    ?>
			    <h2>失敗しました。チャットワークに流します。</h2>
			    <div>詳細</div>
			    <div>
					<?=$text_table?>
			    </div>
			    <?
			}else{
				//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
				//アップデートログ
				//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
				$log_table = $tablename;
				$key_val = $chigin_id;
				$user_id = $uid;
				$key_name = "chigin_id"; //ログテキスト上のkeyの項目名
				$log_action = "edit";
				update_log($before_data,$after_data,$log_table,$key_val,$up_col,$user_id,$key_name,$log_action);
				//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
				//アップデートログ END
				//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

			}

		}// end if ecc_id


	}else{
		//新規追加用
		if($ching_price !== 0){

			$into_col = 'chigin_ecc_id';
			$into_col .= ',Eoc_takuhai_id';
			$into_col .= ',satei_by';
			$into_col .= ',chigin_type';
			$into_col .= ',ching_price';
			$into_col .= ',remark';
			$into_col .= ',create_by';
			$into_col .= ',ching_created_at';
			$into_col .= ',haraidasi';


			$into_val = "'{$ecc_id}'";
			$into_val .=",'{$Eoc_takuhai_id}'";
			$into_val .=",'{$satei_by}'";
			$into_val .=",'{$chigin_type}'";
			$into_val .=",'{$ching_price}'";
			$into_val .=",'{$remark}'";
			$into_val .=",'{$uid}'";
			$into_val .=",'{$ching_created_at}'";
			$into_val .=",'{$haraidasi}'";


			$into_col = "({$into_col})";
			$into_val = "({$into_val})";


			$query = "INSERT INTO {$tablename}{$into_col}VALUES{$into_val}";

			echo $query."<br>";
			try {
				mysql_query($query);
			} catch (Exception $e) {
				echo $e->getMessage();
				exit();
			}

			//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
			//INSERTログ
			//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
			$log_table = $tablename;
			$key_val = $chigin_id;
			$user_id = $uid;
			$key_name = "chigin_id"; //ログテキスト上のkeyの項目名
			$log_action = "add";
			insert_log($log_table,$key_val,$into_col,$into_val,$user_id,$key_name,$log_action);
			//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
			//INSERTログ END
			//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■


		}
	}// end else insert query

}// end kaibi_up



// ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
// 買取備考の生成SQL作成
// ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
// $tablename = "Eoc_chigins";
$tablename = "Eoc_chigins";

if(intval(date("His")) >= 160000){
	$ching_created_at = date("Y-m-d 9:00:00",strtotime('+1 day'));
}else{
	$ching_created_at = date("Y-m-d H:i:s");
}
// 貴金属買取
$chigin_type = 1;
$category = "K";
$haraidasi = 3;
$ching_price = $sumprice[$category]["price"];
$remark = $sumprice[$category]["remark"];
kaibi_up($chigin_type,$category,$haraidasi,$ching_price,$remark,$Eoc_takuhai_id,$ecc_id,$tablename,$satei_by,$uid,$ching_created_at);

// ダイヤ買取
$chigin_type = 2;
$category = "D";
$haraidasi = 9;
$ching_price = $sumprice[$category]["price"];
$remark = $sumprice[$category]["remark"];
kaibi_up($chigin_type,$category,$haraidasi,$ching_price,$remark,$Eoc_takuhai_id,$ecc_id,$tablename,$satei_by,$uid,$ching_created_at);

// 宝飾品買取
$chigin_type = 4;
$category = "J";
$haraidasi = 4;
$ching_price = $sumprice[$category]["price"];
$remark = $sumprice[$category]["remark"];
kaibi_up($chigin_type,$category,$haraidasi,$ching_price,$remark,$Eoc_takuhai_id,$ecc_id,$tablename,$satei_by,$uid,$ching_created_at);

// 時計買取
$chigin_type = 8;
$category = "W";
$haraidasi = 4;
$ching_price = $sumprice[$category]["price"];
$remark = $sumprice[$category]["remark"];
kaibi_up($chigin_type,$category,$haraidasi,$ching_price,$remark,$Eoc_takuhai_id,$ecc_id,$tablename,$satei_by,$uid,$ching_created_at);

// ブランド買取
$chigin_type = 3;
$category = "B";
$haraidasi = 4;
$ching_price = $sumprice[$category]["price"];
$remark = $sumprice[$category]["remark"];
kaibi_up($chigin_type,$category,$haraidasi,$ching_price,$remark,$Eoc_takuhai_id,$ecc_id,$tablename,$satei_by,$uid,$ching_created_at);

// 販売促進費
$chigin_type = 6;
$category = "H";
$haraidasi = 10;
$ching_price = $sumprice[$category]["price"];
$remark = $sumprice[$category]["remark"];
kaibi_up($chigin_type,$category,$haraidasi,$ching_price,$remark,$Eoc_takuhai_id,$ecc_id,$tablename,$satei_by,$uid,$ching_created_at);


$sum_price_total = $sumprice["K"]["price"]+$sumprice["D"]["price"]+$sumprice["J"]["price"]+$sumprice["W"]["price"]+$sumprice["B"]["price"]+$sumprice["H"]["price"];
if($sum_price_total > 0){
	$Eoc_takuhai_up_query = "UPDATE Eoc_takuhai SET `status`=5 where id='{$Eoc_takuhai_id}' limit 1";
	try {
		$Eoc_takuhai_up_rs = mysql_query($Eoc_takuhai_up_query);
	} catch (Exception $e) {
		echo $e->getMessage();
		exit();
	}
}

// if(isset($_GET["test"])){
	$Eoc_guestquestion_query = "UPDATE `Eoc_guestquestion` SET `status` = '使用' WHERE `status`='使用済控え' AND `ecc_id`='$ecc_id' ORDER BY `id` DESC LIMIT 1";
	$Eoc_guestquestion_sql = mysql_query('SET NAMES utf8');
	try{
		$Eoc_guestquestion_sql = mysql_query($Eoc_guestquestion_query);
	}catch(Exception $e){
		echo $e->getMessage();
		exit;
	}
// }




if(!isset($_GET["nishitani"])){
	$HTTP_REFERER = $_SERVER["HTTP_REFERER"];
	header("location: {$HTTP_REFERER}");
	exit();
}


?>











</body>
</html>
