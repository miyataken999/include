<?php
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
// session_start();
// var_dump($_SESSION);
// $updated_by = $_SESSION["uid"];
//エラー出力⇒これ出したらCSVぐちゃぐちゃになる
ini_set( 'display_errors', 1 );
mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";
include $_SERVER["DOCUMENT_ROOT"]."/include/function/log.php";



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<pre>
<?

//結果文言
$result = array();

$time_no = date('Y-m-d H:i:s');
$time = "'".$time_no."'";

// 名前取得
$query = "SELECT first_name FROM users WHERE user_id = {$uid} limit 1";
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);

$user = mysql_fetch_array($sql);
$first_name = $user["first_name"];


$nameArray = explode("　",$first_name);
$first_name = $nameArray[0];

// var_dump($first_name);


// SEQを配列に変換
$product_id_text = htmlspecialchars($_POST["product_id_text"],ENT_QUOTES);
$product_id_text = trim($product_id_text);

$product_id_array = explode("\n",$product_id_text);
// var_dump($product_id_array);









//帳票登録　製品の場合
if($_POST["process_content"] == "chohyo_touroku_seihin"){
	$chohyo_date = date("Y-m-d");


	for ($product_id_array_i=0; $product_id_array_i < count($product_id_array); $product_id_array_i++) {
		$memo = date("ymd")."/{$first_name}/帳票登録　製品";

		if($product_id_array[$product_id_array_i] != ''){
			$dafault =  "AND ((`status` = 110 OR `status` = 33) AND (((SELECT `chohyo_flag` FROM `mst_Finish` AS `f` WHERE `f`.`val` = `shouhin`.`Finish` limit 1 ) =1) OR (Discrimination != '')))";
			$query = "SELECT * FROM shouhin WHERE product_id=".$product_id_array[$product_id_array_i]." {$dafault} limit 1";

			$sql = mysql_query($query);
			$data = mysql_fetch_array($sql);
			$description = $data["description"];
			if($description != ''){
				$memo = $description."\n".$memo;
			}
			$memo = str_replace("'","’",$memo);


			$up_id = $data["product_id"];
			$chohyo_id = $data["chohyo_id"];
			$discrimination = $data["Discrimination"];

			if($data["Finish"] != ''){
				$finish_flag = '1';// あったら1
			}else{
				$finish_flag = '0';//なかったら0
			}


			if($discrimination != ''){
				$discrimination_query = " SELECT * FROM mst_Discrimination WHERE val='{$discrimination}' limit 1 ";
				$discrimination_res = mysql_query($discrimination_query);
				$discrimination_data = mysql_fetch_array($discrimination_res);


				if($discrimination_data["destination"] != ''){
					$discrimination = $discrimination_data["destination"];
				}
			}



			if(($data["Finish"] == "大樹") && ($data["category_id"] == 10)){
				$discrimination = $data["Finish"];
			}
			if($chohyo_id == ''){
				//帳票IDがない場合のみ作動させる


				//データ検索し、存在確認
				$count_query = " SELECT COUNT(`id`) as `id_count` FROM chohyo WHERE `date`='{$chohyo_date}' AND discrimination='{$discrimination}' AND `type`=1 AND finish_flag={$finish_flag} LIMIT 1";
				$count_res = mysql_query($count_query);
				$count_data = mysql_fetch_array($count_res);
				if($count_data["id_count"] < 1){
					//帳票データの作成
					$chohyo_insert_sql = "INSERT INTO chohyo (`create_at`, `create_by`, `date`, `discrimination`, `type`, `finish_flag`) VALUES ({$time},'{$uid}','{$chohyo_date}','{$discrimination}',1,'{$finish_flag}')";
					// var_dump($chohyo_insert_sql);
					mysql_query($chohyo_insert_sql);
				}


				//作成済み、若しくは作成したデータのID取得
				$chohyo_query = " SELECT `id` FROM chohyo WHERE `date`='{$chohyo_date}' AND discrimination='{$discrimination}' AND `type`=1 AND finish_flag={$finish_flag} LIMIT 1";

				try {
					$chohyo_res = mysql_query($chohyo_query);
					while($chohyo_data = mysql_fetch_array($chohyo_res)){
						$chohyo_id = $chohyo_data["id"];
						// $result_txt = $chohyo_id;
					}
				} catch (Exception $e) {
					echo $e->getMessage();
					exit;
				}


				//商品に帳票IDを反映,ステータスを変更
				if($up_id != ''){
					$sql = "UPDATE shouhin SET `chohyo_type`=1, `status`=133 , chohyo_id = '{$chohyo_id}' , updated_by = {$uid} , updated_at = {$time} , description = '{$memo}' WHERE product_id = {$up_id} limit 1";
					// $result_txt = $sql;
				}

				// var_dump($sql);
				mysql_query($sql);
				// $result_txt[] = "OK";

			}else{
				$result_txt[] = "すでに帳票IDが登録されています。";
			}



		}


		if($chohyo_id != ''){
			$count_query = " SELECT COUNT(`product_id`) as `id_count` FROM shouhin WHERE chohyo_id={$chohyo_id} ";
			$count_res = mysql_query($count_query);
			$count_data = mysql_fetch_array($count_res);

			$id_count = $count_data["id_count"];
			//メール送信
			$mail_body = "製品：{$id_count}件 \n";
			$mail_body .= "鑑別：{$discrimination}\nSEQ：{$up_id}";
			$subject = "帳票id {$chohyo_id}";
			$sendPostData = array("subject" => $subject, "text" => $mail_body);
			$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => http_build_query($sendPostData, "", "&")));
			try{ file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, stream_context_create($sendPostDataOptions)); }catch(\Exception $e){}

		}else{
			//メール送信
			$mail_body = "SEQ：{$up_id}";
			$subject = "帳票登録エラー";
			$sendPostData = array("subject" => $subject, "text" => $mail_body);
			$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => http_build_query($sendPostData, "", "&")));
			try{ file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, stream_context_create($sendPostDataOptions)); }catch(\Exception $e){}

		}




	}// end for


	// var_dump($result_txt);
	// exit;

	if(count($result_txt) > 0){
		var_dump($result_txt);
		exit();
	}else{
		header("location: /shop5/chohyo_by_seihin_list.php");
		exit();
	}


// end 帳票登録　製品
}elseif($_POST["process_content"] == "chohyo_touroku_dia"){
	//帳票登録　diaの場合

	$chohyo_date = date("Y-m-d");


	for ($product_id_array_i=0; $product_id_array_i < count($product_id_array); $product_id_array_i++) {
		$memo = date("ymd")."/{$first_name}/帳票登録　dia";

		if($product_id_array[$product_id_array_i] != ''){
			$default = "AND (`status` = 127)";
			$query = "SELECT * FROM shouhin WHERE product_id=".$product_id_array[$product_id_array_i]." {$default} limit 1";
			$sql = mysql_query($query);
			$data = mysql_fetch_array($sql);
			$description = $data["description"];
			if($description != ''){
				$memo = $description."\n".$memo;
			}
			$memo = str_replace("'","’",$memo);


			$up_id = $data["product_id"];
			$chohyo_id = $data["chohyo_id"];
			$discrimination = $data["Discrimination"];


			if($chohyo_id == ''){
				//帳票IDがない場合のみ作動させる



				//データ検索し、存在確認
				$count_query = " SELECT COUNT(`id`) as `id_count` FROM chohyo WHERE `date`='{$chohyo_date}' AND discrimination='{$discrimination}' AND `type`=2 LIMIT 1";
				$count_res = mysql_query($count_query);
				$count_data = mysql_fetch_array($count_res);
				if($count_data["id_count"] < 1){
					//帳票データの作成
					$chohyo_insert_sql = "INSERT INTO chohyo (`create_at`, `create_by`, `date`, `discrimination`, `type`) VALUES ({$time},'{$uid}','{$chohyo_date}','{$discrimination}',2)";
					mysql_query($chohyo_insert_sql);
				}


				//作成済み、若しくは作成したデータのID取得
				$chohyo_query = " SELECT `id` FROM chohyo WHERE `date`='{$chohyo_date}' AND discrimination='{$discrimination}' AND `type`=2 LIMIT 1";

				try {
					$chohyo_res = mysql_query($chohyo_query);
					while($chohyo_data = mysql_fetch_array($chohyo_res)){
						$chohyo_id = $chohyo_data["id"];
						// $result_txt = $chohyo_id;
					}
				} catch (Exception $e) {
					echo $e->getMessage();
					exit;
				}


				//商品に帳票IDを反映,ステータスを変更
				if($up_id != ''){
					$sql = "UPDATE shouhin SET `chohyo_type`=2, `status`=134 , chohyo_id = '{$chohyo_id}' , updated_by = {$uid} , updated_at = {$time} , description = '{$memo}' WHERE product_id = {$up_id} limit 1";
					// $result["txt"] = $sql;
				}

				// var_dump($sql);
				mysql_query($sql);
				// $result_txt[] = "OK";

			}else{
				$result_txt[] = "すでに帳票IDが登録されています。";
			}



		}


		if($chohyo_id != ''){
			$count_query = " SELECT COUNT(`product_id`) as `id_count` FROM shouhin WHERE chohyo_id={$chohyo_id} ";
			$count_res = mysql_query($count_query);
			$count_data = mysql_fetch_array($count_res);

			$id_count = $count_data["id_count"];

			//メール送信
			$mail_body = "ダイヤモンド：{$id_count}件 \n";
			$mail_body .= "鑑別：{$discrimination}\nSEQ：{$up_id}";
			$subject = "帳票id {$chohyo_id}";
			$sendPostData = array("subject" => $subject, "text" => $mail_body);
			$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => http_build_query($sendPostData, "", "&")));
			try{ file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, stream_context_create($sendPostDataOptions)); }catch(\Exception $e){}

		}else{
			//メール送信
			$mail_body = "SEQ：{$up_id}";
			$subject = "帳票登録エラー";
			$sendPostData = array("subject" => $subject, "text" => $mail_body);
			$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => http_build_query($sendPostData, "", "&")));
			try{ file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, stream_context_create($sendPostDataOptions)); }catch(\Exception $e){}
		}

	}// end for


	// var_dump($result_txt);
	// exit;

	if(count($result_txt) > 0){
		var_dump($result_txt);
		exit();
	}else{
		header("location: /shop5/chohyo_by_dia_list.php");
		exit();
	}




// ini_set("display_error",1);


// end 帳票登録　dia
}elseif($_POST["process_content"] == 'none'){
	echo '「選択してください」で送信されています。処理を中止します！！！！！！！！！！！！！！(>_<)';
	exit;
}else{

	// switch ($_POST["process_content"]) {
	// 	case 'o_toutyaku':
	// 		$up_word = "O到着";
	// 		$up_status = 137;
	// 		break;
	// 	case 'os_hassou_satuei':
	// 		$up_word = "OS発送/撮影";
	// 		$up_status = 136;
	// 		break;
	// 	case 'os_toutyaku_satuei':
	// 		$up_word = "OS到着/撮影";
	// 		$up_status = 146;
	// 		break;
	//
	// 	default:
	// 		$up_word = '';
	// 		$up_status = '';
	// 		break;
	// }
	if($_POST["process_content"] != ''){
			$up_status = $_POST["process_content"];
			$status_sql = "SELECT goods_status FROM _goods_status2 WHERE `goods_id`= $up_status LIMIT 1";
			$status_rs = mysql_query($status_sql);
			$status_data = mysql_fetch_array($status_rs);
			$up_word = $status_data[0];

	}else{
			$up_status = '';
			$up_word = '';
	}
	if($up_word === ''){
		echo '変更内容が指定されていません。処理を中止します！！！！！！！！！！！！！！(>_<)';
		exit;
	}

	for ($product_id_array_i=0; $product_id_array_i < count($product_id_array); $product_id_array_i++) {
		$memo = date("ymd")."/{$first_name}/{$up_word}";

		if($product_id_array[$product_id_array_i] != ''){
			// $default = "AND (`status` = 127)";
			$default = '';
			$query = "SELECT * FROM shouhin WHERE product_id=".$product_id_array[$product_id_array_i]." {$default} limit 1";
			$sql = mysql_query($query);
			$data = mysql_fetch_array($sql);

			//更新データ
			$product_id = $data["product_id"];
			$description = $data["description"].$memo;






			if($product_id != ''){
				$up_col = array();
				$up_data = array();

				$up_col[] = 'status';
				$up_data[] = $up_status;
				$up_col[] = 'description';
				$up_data[] = $description;
				$up_col[] = 'updated_at';
				$up_data[] = $time_no;
				$up_col[] = 'updated_by';
				$up_data[] = $uid;
				if($up_status == 10){
					$up_col[] = 'kanryou_henbi';
					$up_data[] = $time_no;
				}elseif($up_status == 34){
					$up_col[] = 'AWAZU_NIN';
					$up_data[] = $uid;
					$up_col[] = 'AWAZU_DATE';
					$up_data[] = $time_no;
				}elseif($up_status == 33){
					$up_col[] = 'DT_UP_DATE';
					$up_data[] = $uid;
					$up_col[] = 'REG_AUTHOR';
					$up_data[] = $time_no;
				}

				$up_query = '';
				for ($up_i=0; $up_i < count($up_col); $up_i++) {
					if($up_query != ''){
						$up_query .= ',';
					}
					$up_query .= "`".$up_col[$up_i]."`='".$up_data[$up_i]."'";
				}
				$sql = "UPDATE shouhin SET {$up_query}  WHERE product_id = {$product_id} limit 1";
				// var_dump($sql);
				// exit;
				// $result[] = ;
				// echo "<br>";
				// echo $up_query;
				// echo "<br>";

				$log_table = "shouhin";
				$where_key = "product_id";
				$where_value = $product_id;
				$user_id = $uid;
				$log_action = "edit";
				$up_table = "shouhin";//いま関係ない
				log_input($log_table,$where_value,$up_col,$up_data,$user_id,$where_key,$log_action,$up_table);

				// exit;
				//完了時CW
				if($up_status == 10){
					$sel_kanryou_henbi = $data["kanryou_henbi"];
					$yahoo_sinaban = $data["yahoo_sinaban"];
					$yahoo_junle = $data["yahoo_junle"];
					$yahoo_junle = str_replace("&","＆",$yahoo_junle);
					$yahoo_junle_array = explode("/",$yahoo_junle);
					$yahoo_junle = $yahoo_junle_array[0];
					$title = $data["raku_title"];
					$title = str_replace("&","＆",$title);
					$price_secret = $data["price_secret"];
					$sales_price_secret = $data["sales_price_secret"];
					$nyuukin_price = number_format($data["nyuukin_price"]);
					$satei_by = $data["satei_by"];
					$sabun = $data["sabun"];

					$line = $data["line"];
					$item_name = $data["item_name"];
					$comment = $data["comment"];
					$memo = $data["memo"];

					$cost = $data["cost"];

					if($satei_by != ""){
						$satei_sql = "SELECT first_name FROM users WHERE user_id = {$satei_by} LIMIT 1";
						$satei_rs = mysql_query($satei_sql);
						$satei = mysql_fetch_array($satei_rs);
						$satei_name = $satei["first_name"];
					}else{
						$satei_name = "査定人不明";
					}

					//成約人
					$REG_AUTHOR = $data["REG_AUTHOR"];
					if($REG_AUTHOR != ""){
						$seiyaku_sql = "SELECT first_name FROM users WHERE user_id = {$REG_AUTHOR} LIMIT 1";
						$seiyaku_rs = mysql_query($seiyaku_sql);
						$seiyaku = mysql_fetch_array($seiyaku_rs);
						$seiyaku_name = $seiyaku["first_name"];
					}else{
						$seiyaku_name = "成約人不明";
					}


					$word = "SEQ：{$product_id}\n";
					$word .= "品番：{$yahoo_sinaban}\n";
					$word .= "ブランドID：{$yahoo_junle}\n";
					$word .= "タイトル：{$title}\n";
					$rakuurl = strtolower($yahoo_sinaban);
					$word .= "URL：http://item.rakuten.co.jp/rfstore/{$rakuurl}/\n";
					$word .= "ライン：{$line}\n";
					$word .= "アイテム名：{$item_name}\n";
					$word .= "買取額：{$price_secret}\n";
					$word .= "コスト：{$cost}\n";
					$word .= "販売額：{$sales_price_secret}\n";
					$word .= "入金額：{$nyuukin_price}\n";
					$word .= "販売先：{$comment}\n";
					$word .= "査定人：{$satei_name}\n";
					$word .= "成約人：{$seiyaku_name}\n";
					$word .= "販売日数：{$sabun}\n";
					$word .= "メモ：{$memo}\n";

					$word = mb_convert_encoding($word, "UTF-8", "auto");

					//メール送信
					$mail_body = $word;
					$subject = "商品完了バッチ";
					$sendPostData = array("subject" => $subject, "text" => $mail_body);
					$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => http_build_query($sendPostData, "", "&")));
					try{ file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, stream_context_create($sendPostDataOptions)); }catch(\Exception $e){}

        		}


				try{
					// echo ($sql);
					mysql_query($sql);
				}catch(Exception $e){
					$result[] = 'SEQ:'.$product_id."<br>status：{$up_word}<br>".$e->getMessage()."<br>";
				}

				if(mysql_error() != ''){
					$result[] = 'SEQ:'.$product_id."<br>".mysql_error()."<br>";
				}
			}


		}// end if product_id
	}//end for


	if(count($result) > 0){
		echo "下記のエラー文を開発部までキャプチャして送ってください。<br>";
		var_dump($result);
		exit;
	}else{
		$url = $_SERVER['HTTP_REFERER'];
		// exit;
		//////////////////////////CSVファイル作成(O到着)////////////////////////////////////////
		$url_csv_create = $_SERVER["HTTP_REFERER"];
			if($up_status == 137){
				//O到着時のCSV生成

				ini_set("display_errors",1);
				//PDO 読み込み
				include_once $_SERVER["DOCUMENT_ROOT"]."/include/classes/pdo_connect.php";

				// 出力情報の設定
				$csv_download_flag = "on";
				$file = 'Otoutyaku_batch.csv';
				// 変数の初期化

				// 出力したいデータ
				$pdo = new pdo_connect;
				$csv_create_sql = "SELECT * FROM shouhin WHERE product_id = ? limit 1";
				$csv_create_stmt = $pdo->pdo()->prepare($csv_create_sql);

				//和名変換
				//brand_id
				function brand_id($data){
					$pdo_brand_id = new pdo_connect;
					$sql = "SELECT * FROM mst_brand WHERE id = ? limit 1";
					$where_val = array($data);
					$stmt = $pdo_brand_id->pdo()->prepare($sql);
					$stmt->execute($where_val);
					$result = $stmt->fetch();
					$brand_id = "";
					if(isset($result["name"])){
						$brand_id = $result["name"];
					}
					return $brand_id;
				}
				//大カテゴリ
				function category_id($data){
					$pdo_category_id = new pdo_connect;
					$sql = "SELECT * FROM store_categories WHERE category_id = ? limit 1";
					$where_val = array($data);
					$stmt = $pdo_category_id->pdo()->prepare($sql);
					$stmt->execute($where_val);
					$result = $stmt->fetch();
					$category_id = $result["category_name"];
					return $category_id;
				}
				//中カテゴリー
				function sub_category_id1($data){
					$pdo_sub_category_id = new pdo_connect;
					$sql = "SELECT * FROM store_sub_categories WHERE id = ? limit 1";
					$where_val = array($data);
					$stmt = $pdo_sub_category_id->pdo()->prepare($sql);
					$stmt->execute($where_val);
					$result = $stmt->fetch();
					$sub_category_id = "";
					if(isset($result["name"])){
						$sub_category_id = $result["name"];
					}
					return $sub_category_id;
				}
				//users
				function users($data){
					$pdo_users = new pdo_connect;
					$sql = "SELECT * FROM users WHERE user_id = ? limit 1";
					$where_val = array($data);
					$stmt = $pdo_users->pdo()->prepare($sql);
					$stmt->execute($where_val);
					$result = $stmt->fetch();
					$users = "";
					if(isset($result["first_name"])){
						$users = $result["first_name"];
					}
					return $users;
				}
				//status
				function goods_status($data){
					$pdo_goods_status = new pdo_connect;
					$sql = "SELECT * FROM _goods_status2 WHERE goods_id = ? limit 1";
					$where_val = array($data);
					$stmt = $pdo_goods_status->pdo()->prepare($sql);
					$stmt->execute($where_val);
					$result = $stmt->fetch();
					$goods_status = $result["goods_status"];
					return $goods_status;
				}

				// 1行目のラベルを作成
				$current = '"Id","SEQ","品番","機番","ブランドID","大カテゴリー","中カテゴリー","タイトル","買取額","販売額","コメント","メモ","宝飾備考","査定人","査定日","成約人","成約日","【本番】ステータス","帳票ID"'."\n";

				// 出力データ生成
				foreach($product_id_array as $product_id){
					// echo $product_id;
					$where_val = array($product_id);
					$csv_create_stmt->execute($where_val);
					foreach ($csv_create_stmt as $csv_item){
						$current .= '"'.$csv_item["product_id"].'","'.$csv_item["ecc_id"].'","'.$csv_item["yahoo_sinaban"].'","'.$csv_item["serial_number"].'","'.brand_id($csv_item["product_num"]).'","'.category_id($csv_item["category_id"]).'","'.sub_category_id1($csv_item["sub_category_id1"]).'","'.$csv_item["title"].'","'.$csv_item["price"].'","'.$csv_item["sales_price"].'","';
						$current .= $csv_item["comment"].'","'.$csv_item["description"].'","'.$csv_item["Remarks"].'","'.users($csv_item["satei_by"]).'","'.$csv_item["satei_hi"].'","'.users($csv_item["REG_AUTHOR"]).'","'.$csv_item["DT_UP_DATE"].'","'.goods_status($csv_item["status"]).'","'.$csv_item["chohyo_id"].'"'."\n";
					}//end foreach ($csv_create_stmt as $csv_item)
				}//end foreach($product_id_array as $product_id)
				$current = mb_convert_encoding($current,"UTF-8");
				file_put_contents($file,$current);
				// readfile($file);

		//////////////////////////end　CSVファイル作成(O到着)////////////////////////////////////////
				$pal_old = strstr($url,'?');
				$pal = "?file_name={$file}&csv_download_flag={$csv_download_flag}";
				if($pal_old!=''){
					$url = str_replace($pal_old,$pal,$url);
				}else{
					$url = $url.$pal;
				}
		}//end if($up_status == 137)
		header("location:{$url}");
	}//end if(count($result) > 0)
	// end O到着
}

?>
</pre>
</body>
</html>
