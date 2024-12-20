<?
$uid = $_SESSION["uid"];
$no_time = date('Y-m-d H:i:s');
$time = "'".$no_time."'";

while($data = $button->getNextSelectedRecord()){
	//初期化
	$log_text = "";
	$sel_sql = "";
	$rs = "";
	// $data = "";
	$old_REG_AUTHOR = "";
	$old_DT_UP_DATE = "";
	$old_AWAZU_NIN = "";
	$old_AWAZU_DATE = "";
	$old_status = "";
	$old_updated_by = "";
	$old_updated_at = "";

	$up_id = $data["product_id"];
	$up_status = $data["status"];

	$up_kanryo_time = $time;
	if(isset($data["kanryou_henbi"])){
		if(
			($data["kanryou_henbi"] != null)
			and($data["kanryou_henbi"] != "")
			and($data["kanryou_henbi"] != '0000-00-00 00:00:00')
		){
			$up_kanryo_time = $data["kanryou_henbi"];
		}
	}



	//完了のとき、完了変更日
	$sel_sql = "SELECT
	shouhin.`status`
	, shouhin.updated_by
	, shouhin.updated_at
	, shouhin.REG_AUTHOR
	, shouhin.DT_UP_DATE
	, shouhin.AWAZU_NIN
	, shouhin.AWAZU_DATE
	, shouhin.`line`
	, shouhin.item_name
	, shouhin.comment
	, shouhin.kanryou_henbi
	, shouhin.yahoo_sinaban
	, shouhin.yahoo_junle
	, shouhin.title
	, shouhin.raku_title
	, shouhin.price_secret
	, shouhin.sales_price_secret
	, shouhin.nyuukin_price
	, shouhin.satei_by
	, DATEDIFF({$time},shouhin.DT_UP_DATE) AS sabun
	, shouhin.`price`
	, shouhin.`cost`
	, shouhin.`identification_cost`
	, shouhin.`other_cost`
	, shouhin.yahoo_saisun_sha
	, shouhin.REG_PHOTOGRAPHER
	, shouhin.REG_PACKINGS
	, shouhin.REG_EXHIBITOR
	, shouhin.sales_price
	, shouhin.destination_sold_out
	, shouhin.product_num
	, shouhin.mst_business_partner_id
	, shouhin.sales_cost
	, sales_report.sales_date
	FROM shouhin LEFT JOIN sales_report ON shouhin.product_id = sales_report.product_id
	WHERE shouhin.product_id = {$up_id}";
	$rs = CustomQuery($sel_sql);
	$data = db_fetch_array($rs);

	$old_REG_AUTHOR = $data["REG_AUTHOR"];
	$old_DT_UP_DATE = $data["DT_UP_DATE"];
	$old_AWAZU_NIN = $data["AWAZU_NIN"];
	$old_AWAZU_DATE = $data["AWAZU_DATE"];
	$old_status = $data["status"];
	$old_updated_by = $data["updated_by"];
	$old_updated_at = $data["updated_at"];

	if($up_status == 10){
		$price = $data['price'];
	//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	//買取額抜き表示処理　　
	//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	$price_without_tax = 0;
	if(($price!="")and($price!=0)){
		$seiyaku_date = $data["DT_UP_DATE"];
		$tax_rate = 1.08;
	  if($seiyaku_date!=""){
	    $mst_tax_query = "SELECT `rate` FROM `mst_tax` WHERE `start_time` < '{$seiyaku_date}' ORDER BY `id` DESC LIMIT 1";
	    $mst_tax_rs = CustomQuery($mst_tax_query);
	    if($mst_tax_rs!==false){
	      $mst_tax_data = db_fetch_array($mst_tax_rs);
				if(($mst_tax_data["rate"]!=0)or($mst_tax_data["rate"]!="")){
					$tax_rate = $mst_tax_data["rate"];
				}//if(($mst_tax_data["rate"]!=0)or($mst_tax_data["rate"]!=""))
			}//if($mst_tax_rs!==false)
		}//if($seiyaku_date!="")
	  $price_without_tax = $price/$tax_rate;
	  $price_without_tax = round($price_without_tax);
	}

	if($price_without_tax!=''){
		$price_without_tax_secret = file_get_contents("http://rifa.life/lounge_API/evaeva/create_price_ingo.php?price={$price_without_tax}");
	}else{
		$price_without_tax_secret = "";
	}
	// if(($price_secret == "")and($data['price'] != "")){
	// 	$price_secret = file_get_contents("http://rifa.life/lounge_API/evaeva/create_price_ingo.php?price={$data['price']}");
	// }
	// if(($sales_price_secret == "")and($data['sales_price'] != "")){
	// 	$sales_price_secret = file_get_contents("http://rifa.life/lounge_API/evaeva/create_price_ingo.php?price={$data['sales_price']}");
	// }
	//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	//買取額抜き表示処理　　END
	//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	//粗利率計算　　
	//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	//（入金額-買取額(税抜)-仕上コスト-鑑別コスト-その他コスト）÷入金額
	if(($data["nyuukin_price"]!="")or($data["nyuukin_price"]!=0)){
		$rough_profit_rate = ($data["nyuukin_price"]-$price_without_tax-$data['cost']-$data['identification_cost']-$data['other_cost'])/$data["nyuukin_price"];
		$rough_profit_rate = floor($rough_profit_rate*10000)/10000;
	}else{
		$rough_profit_rate = "";
	}
	//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	//粗利率計算　　END
	//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

		$cost = $data['cost'];
		$identification_cost = $data['identification_cost'];
		$other_cost = $data['other_cost'];

		$sel_kanryou_henbi = $data["kanryou_henbi"];
		$yahoo_sinaban = $data["yahoo_sinaban"];
		$yahoo_junle = $data["yahoo_junle"];
		$yahoo_junle = str_replace("&","＆",$yahoo_junle);
		$yahoo_junle_array = explode("/",$yahoo_junle);
		$yahoo_junle = $yahoo_junle_array[0];
		if($yahoo_junle == ""){
			$product_num = $data["product_num"];
			if($product_num > 0){
				$sql = "SELECT `name` FROM `mst_brand` WHERE `id` = '{$product_num}' LIMIT 1";
				$rs = CustomQuery($sql);
				if($rs != false){
					$brand_name = db_fetch_array($rs);
					$yahoo_junle = $brand_name["name"];
				}
			}
		}
		if($data["raku_title"] != ""){
			$title = $data["raku_title"];
		}else{
			$title = $data["title"];
		}
		if($title == ""){
			$create_title_api_url = "https://rifa.life/evaProject/api/satei_func/create_title/".$up_id;
			$title = file_get_contents($create_title_api_url);
		}

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

		//成約人
		$REG_AUTHOR = $data["REG_AUTHOR"];
		//採寸者
		$yahoo_saisun_sha = $data["yahoo_saisun_sha"];
		//撮影者
		$REG_PHOTOGRAPHER = $data["REG_PHOTOGRAPHER"];
		//梱包者
		$REG_PACKINGS = $data["REG_PACKINGS"];
		//出品者
		$REG_EXHIBITOR = $data["REG_EXHIBITOR"];

		if(
			($sel_kanryou_henbi == NULL) OR ($sel_kanryou_henbi == "") OR ($sel_kanryou_henbi == '0000-00-00 00:00:00')
		){
			$sql = "UPDATE shouhin SET `status` = '{$up_status}' ,updated_by = {$uid} , updated_at = {$time} , kanryou_henbi = '{$up_kanryo_time}' WHERE product_id = {$up_id}";
			//追加ログ
			$log_text .= "kanryou_henbi[old]:{$sel_kanryou_henbi}\n";
			$log_text .= "kanryou_henbi[new]:{$up_kanryo_time}\n";

			$hanbaisaki_url = "https://rifa.life/evaProject/sales_report/single/{$up_id}";
			try {
				file_get_contents($hanbaisaki_url);
			} catch (\Exception $e) {
				//throw $th;
			}
			try {
				// 販売口銭の処理
				file_get_contents("https://rifa.life/evaProject/tasks/sales_cost/{$up_id}");
			} catch (\Exception $e) {
				//throw $th;
			}
			

			$satei_name = "査定人不明";
			if($satei_by > 0){
				$satei_sql = "SELECT first_name FROM users WHERE user_id = '{$satei_by}' LIMIT 1";
				$satei_rs = CustomQuery($satei_sql);
				if($satei_rs != false){
					$satei = db_fetch_array($satei_rs);
					$satei_name = $satei["first_name"];
				}
			}

			$seiyaku_name = "成約人不明";
			if($REG_AUTHOR > 0){
				$seiyaku_sql = "SELECT first_name FROM users WHERE user_id = '{$REG_AUTHOR}' LIMIT 1";
				$seiyaku_rs = CustomQuery($seiyaku_sql);
				if($seiyaku_rs != false){
					$seiyaku = db_fetch_array($seiyaku_rs);
					$seiyaku_name = $seiyaku["first_name"];
				}
			}

			$saisun_name = "";
			if($yahoo_saisun_sha > 0){
				$saisun_sql = "SELECT first_name FROM users WHERE user_id = '{$yahoo_saisun_sha}' LIMIT 1";
				$saisun_rs = CustomQuery($saisun_sql);
				if($saisun_rs != false){
					$saisun = db_fetch_array($saisun_rs);
					$saisun_name = $saisun["first_name"];
				}
			}

			$konpou_name = "";
			if($REG_PACKINGS > 0){
				$konpou_sql = "SELECT first_name FROM users WHERE user_id = '{$REG_PACKINGS}' LIMIT 1";
				$konpou_rs = CustomQuery($konpou_sql);
				if($konpou_rs != false){
					$konpou = db_fetch_array($konpou_rs);
					$konpou_name = $konpou["first_name"];
				}
			}

			$satuei_name = "";
			if($REG_PHOTOGRAPHER > 0){
				$satuei_sql = "SELECT first_name FROM users WHERE user_id = '{$REG_PHOTOGRAPHER}' LIMIT 1";
				$satuei_rs = CustomQuery($satuei_sql);
				if($satuei_rs != false){
					$satuei = db_fetch_array($satuei_rs);
					$satuei_name = $satuei["first_name"];
				}
			}

			$syuppin_name = "";
			if($REG_EXHIBITOR > 0){
				$syuppin_sql = "SELECT first_name FROM users WHERE user_id = '{$REG_EXHIBITOR}' LIMIT 1";
				$syuppin_rs = CustomQuery($syuppin_sql);
				if($syuppin_rs != false){
					$syuppin = db_fetch_array($syuppin_rs);
					$syuppin_name = $syuppin["first_name"];
				}
			}

			if($uid != ""){
				$loginuser_sql = "SELECT first_name FROM users WHERE user_id = {$uid} LIMIT 1";
				$loginuser_rs = CustomQuery($loginuser_sql);
				$loginuser = db_fetch_array($loginuser_rs);
				$loginuser_name = $loginuser["first_name"];
			}else{
				$loginuser_name = "";
			}

			$sold_out_prace_name = '';
			if($data["destination_sold_out"] > 0){
				$destination_sold_out = $data["destination_sold_out"];
				$sold_out_prace_sql = "SELECT `name` from mst_business_partner where id = '{$destination_sold_out}' LIMIT 1";
				$sold_out_prace_rs = CustomQuery($sold_out_prace_sql);
				if($sold_out_prace_rs != false){
					$sold_out_prace = db_fetch_array($sold_out_prace_rs);
					$sold_out_prace_name = $sold_out_prace["name"];
				}
			}


			//隠語生成API
			// if(isset($_GET["test"])){
			if(($sales_price_secret=="")or($price_secret=="")){
				$url="http://rifa.life/lounge_API/evaeva/create_ingo.php?product_id={$up_id}";
				$ingo = file_get_contents($url);
				$ingo_array = explode(',',$ingo);
				if(isset($ingo_array[0])){
					$sales_price_secret = $ingo_array[0];
				}
				if(isset($ingo_array[1])){
					$price_secret = $ingo_array[1];
				}
			}

			// }
			//end 隠語生成API

			//完了時、チャットワーク流す
			// $word = "[info]";
			$word = "SEQ：https://rifa.life/shop5/shouhin_list.php?q=(product_id~equals~{$up_id})\n";
			$word .= "品番：{$yahoo_sinaban}\n";
			$word .= "ブランドID：{$yahoo_junle}\n";
			$word .= "タイトル：{$title}\n";
			$rakuurl = strtolower($yahoo_sinaban);
			$word .= "URL：http://item.rakuten.co.jp/rfstore/{$rakuurl}/\n";
			$word .= "ライン：{$line}\n";
			$word .= "アイテム名：{$item_name}\n";
			$word .= "買取額(税抜)：{$price_without_tax_secret}\n";
			$word .= "買取額(税込)：{$price_secret}\n";
			$word .= "販売額：{$sales_price_secret}\n";
			$word .= "仕上コスト：{$cost}\n";
			$word .= "鑑別コスト：{$identification_cost}\n";
			$word .= "その他コスト：{$other_cost}\n";
			$word .= "販売口銭：{$data['sales_cost']}\n";
			$word .= "入金額：{$nyuukin_price}\n";
			$word .= "粗利率：{$rough_profit_rate}\n";
			if($sold_out_prace_name != ""){
				$word .= "販売先：{$sold_out_prace_name}\n";
				$display_kanryo_date = date('Y-m-d', strtotime($up_kanryo_time));
				$word .= "販売日：'{$display_kanryo_date}'\n";
				$sales_date = urlencode($data['sales_date']);
				$word_url = "https://rifa.life/shop5/shouhin_list.php?q=(mst_business_partner_id~equals~{$data['mst_business_partner_id']})(sales_date~equals~{$sales_date}~date11)";
				$word .= "販売先集計：{$word_url}\n";
			}else{
				$word .= "コメント：{$comment}\n";
			}

			$word .= "査定人：{$satei_name}\n";
			$word .= "成約人：{$seiyaku_name}\n";
			$word .= "採寸者：{$saisun_name}\n";
			$word .= "撮影者：{$satuei_name}\n";
			$word .= "梱包者：{$konpou_name}\n";
			$word .= "出品者：{$syuppin_name}\n";
			$word .= "販売日数：{$sabun}\n";
			$word .= "メモ：{$memo}\n";
			$word .= "バッチ処理担当者：{$loginuser_name}";
			// $word .= "[/info]";


			$word = mb_convert_encoding($word, "UTF-8", "auto");
			$word = str_replace("&","＆",$word);


			//メール送信
			$mail_body = $word;
			$sendPostData = array(
				"subject" => "商品完了バッチ",
				"text" => $mail_body,
			);
			$sendPostData = http_build_query($sendPostData, "", "&");
			$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => $sendPostData));
			$sendPostContext = stream_context_create($sendPostDataOptions);
			try{
				file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, $sendPostContext);
			}catch(Exception $e){}

			usleep(700000);


		}else{
			$sql = "UPDATE shouhin SET `status` = '{$up_status}' ,updated_by = {$uid} , updated_at = {$time} WHERE product_id = {$up_id}";
		}

	}elseif($up_status == 33){
		//売却済のとき、成約人、成約日
		$sql = "UPDATE shouhin SET `status` = '{$up_status}' ,updated_by = {$uid} , updated_at = {$time} , REG_AUTHOR = {$uid} , DT_UP_DATE = {$time} WHERE product_id = {$up_id}";
		//追加ログ
		$log_text .= "REG_AUTHOR[old]:{$old_REG_AUTHOR}\n";
		$log_text .= "REG_AUTHOR[new]:{$uid}\n";
		$log_text .= "DT_UP_DATE[old]:{$old_DT_UP_DATE}\n";
		$log_text .= "DT_UP_DATE[new]:{$no_time}\n";
	}elseif($up_status == 34){
		//合わずのとき、返却日、返却人
		$sql = "UPDATE shouhin SET `status` = '{$up_status}' ,updated_by = {$uid} , updated_at = {$time} , AWAZU_NIN = {$uid} , AWAZU_DATE = {$time} WHERE product_id = {$up_id}";
		//追加ログ
		$log_text .= "AWAZU_NIN[old]:{$old_AWAZU_NIN}\n";
		$log_text .= "AWAZU_NIN[new]:{$uid}\n";
		$log_text .= "AWAZU_DATE[old]:{$old_AWAZU_DATE}\n";
		$log_text .= "AWAZU_DATE[new]:{$no_time}\n";
	}else{
		//他のとき
		$sql = "UPDATE shouhin SET `status` = '{$up_status}' ,updated_by = {$uid} , updated_at = {$time} WHERE product_id = {$up_id}";
	}
	CustomQuery($sql);


	$log_descri = "---Keys\n";
	$log_descri = $log_descri."product_id : {$up_id}\n";
	$log_descri = $log_descri."---Fields\n";
	//-------追加ログ全てのパターン
	$log_text .= "status[old]:{$old_status}\n";
	$log_text .= "status[new]:{$up_status}\n";
	$log_text .= "updated_by[old]:{$old_updated_by}\n";
	$log_text .= "updated_by[new]:{$uid}\n";
	$log_text .= "updated_at[old]:{$old_updated_at}\n";
	$log_text .= "updated_at[new]:{$no_time}\n";
	//-------追加ログ全てのパターン END
	$log_descri = $log_descri.$log_text;

	$log_ip = $_SERVER["REMOTE_ADDR"];
	$log_table = "shouhin_batch";
	$log_action = "edit";//ここでは固定

	$log_user_sql = "SELECT user_login FROM users WHERE user_id = {$uid} LIMIT 1";
	$log_user_rs = CustomQuery($log_user_sql);
	$log_user_name = db_fetch_array($log_user_rs);
	$log_user = $log_user_name["user_login"];

	$insert_sql = "INSERT INTO evav62122_audit (`datetime`,ip,`user`,`table`,`action`,`description`) VALUES ({$time},'{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
	CustomQuery($insert_sql);


};


// バッチ終わった後で、販売先バッチまわす
// file_get_contents("https://rifa.life/evaProject/api/ichiba_hanbaisaki_batch/J");
// file_get_contents("https://rifa.life/evaProject/api/ichiba_hanbaisaki_batch/D");
// file_get_contents("https://rifa.life/evaProject/api/direct_g_kanryou_hanbaisaki_batch");
// file_get_contents("https://rifa.life/evaProject/api/jigane_hanbaisaki_batch");
file_get_contents("https://rifa.life/evaProject/sales_report/two_week");
