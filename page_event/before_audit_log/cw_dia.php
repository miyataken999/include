<?
/*----------------------------------------------------------

NEW D在
2018/10/16
shouhin
チャットワーク送信

----------------------------------------------------------*/


if($newvalues["status"] == 120){
	if($newvalues['product_id'] > 0){
		$d_query = "SELECT * FROM shouhin WHERE product_id={$newvalues['product_id']} LIMIT 1";
		$d_rs = CustomQuery($d_query);
		$d_data = db_fetch_array($d_rs);
		foreach ($d_data as $newVal_key => $newVal_value) {
			if($newvalues[$newVal_key] == ''){
				$newvalues[$newVal_key] = $newVal_value;
			}
		}
	}
	// define(room,"68102709");	//テスト用
	define(room,"78692181");	//本番用

	if($newvalues['satei_by'] != ""){
		$satei_sql = "SELECT first_name FROM users WHERE user_id = {$newvalues['satei_by']} LIMIT 1";
		$satei_rs = CustomQuery($satei_sql);
		$satei = db_fetch_array($satei_rs);
		$satei_name = $satei["first_name"];
	}

	if($newvalues['DA_INTENSITY'] != ""){
		$intensity_sql = "SELECT name FROM mst_Intensity WHERE ID0 = {$newvalues['DA_INTENSITY']} LIMIT 1";
		$intensity_rs = CustomQuery($intensity_sql);
		$intensity = db_fetch_array($intensity_rs);
		$intensity_name = $intensity["name"];
	}

	if($newvalues['DA_OVERTONE'] != ""){
		$overtone_sql = "SELECT Name FROM mst_overtone WHERE Id = {$newvalues['DA_OVERTONE']} LIMIT 1";
		$overtone_rs = CustomQuery($overtone_sql);
		$overtone = db_fetch_array($overtone_rs);
		$overtone_name = $overtone["Name"];
	}



	if($newvalues['DA_COLOR_FLUO'] != ""){
		$cofl_sql = "SELECT Name FROM mst_color_fluo WHERE Id = {$newvalues['DA_COLOR_FLUO']} LIMIT 1";
		$cofl_rs = CustomQuery($cofl_sql);
		$cofl = db_fetch_array($cofl_rs);
		$cofl_name = $cofl["Name"];
	}


	if($newvalues['satei_hi'] != ""){
		$date1 = strtotime($newvalues['satei_hi']);
		$date2 = strtotime(date("Y-m-d H:i:s"));
		$diff = time_diff($date1,$date2);
		// $diff = $date1;
		// $diff .= "   ".$date2;
	}else{
		$diff = 0;
	}

	if($newvalues['price'] != ""){
		$tax_rate = 1.08;
		$today_date = date('Y-m-d H:i:s');
		$mst_tax_query = "SELECT `rate` FROM `mst_tax` WHERE `start_time` < '{$today_date}' ORDER BY `id` DESC LIMIT 1";
		$mst_tax_rs = CustomQuery($mst_tax_query);
		if($mst_tax_rs!==false){
			$mst_tax_data = db_fetch_array($mst_tax_rs);
			if(($mst_tax_data["rate"]!=0)or($mst_tax_data["rate"]!="")){
				$tax_rate = $mst_tax_data["rate"];
			}//if(($mst_tax_data["rate"]!=0)or($mst_tax_data["rate"]!=""))
		}//if($mst_tax_rs!==false)
	}
	// $siire_zeinuki = floor($newvalues['price'] / $tax_rate);
	$siire_zeinuki = $newvalues['price'] / $tax_rate;
	$siire_zeinuki = number_format($siire_zeinuki);
	// $siire_zeinuki = $newvalues['price'] / $tax_rate;
	// $doru = urlencode("$");
	$doru = "";

	$siire = number_format($newvalues['price']);
	$gai = number_format($newvalues['DA_UNIT_PRICE_UNPLUG']);
	$daikin = number_format($newvalues['nyuukin_price']);
	$siire_ritsu = $newvalues['DA_RAPA']*100;
	$DA_RAPAB = $newvalues['DA_RAPAB']*100;
	$DA_GROSSPROFIT = $newvalues['DA_GROSSPROFIT']*100;
	$DA_PER_CARAT = number_format($newvalues['DA_PER_CARAT']);

	if($newvalues['DA_YOURNAME'] != ""){
		$YOURNAME_sql = "SELECT name FROM _DIA_DA_CUSTOMER WHERE id = {$newvalues['DA_YOURNAME']} LIMIT 1";
		$YOURNAME_rs = CustomQuery($YOURNAME_sql);
		$YOURNAME = db_fetch_array($YOURNAME_rs);
		$YOURNAME_name = $YOURNAME["name"];
	}
	if(($newvalues['DA_FLUO'] != "")or($cofl_name != "")){
		$fluo_txt="-{$newvalues['DA_FLUO']} {$cofl_name}";
	}else{
		$fluo_txt='';
	}
	$DA_INTEREST_1 = "";
	if($newvalues['DA_INTEREST_1'] != ""){
		$DA_INTEREST_1 = number_format($newvalues['DA_INTEREST_1']);
	}
	// $word = "[info]";
	$word = "";
	$word .= "SEQ：{$newvalues['product_id']}"."\n";
	$word .= "品番：{$newvalues['yahoo_sinaban']}"."\n";
	$word .= "Carat：{$newvalues['Parent_stone']}ct"."\n";
	$word .= "自グレ：{$newvalues['DA_SELFGRES']}"."\n";
	$word .= "元グレ：{$newvalues['DA_ORIGINALGRADEMLIKENED']}"."\n";
	$word .= "Grade：{$intensity_name} {$overtone_name} {$newvalues['DA_COLOR']} {$newvalues['DA_CLARITY']} {$newvalues['DA_CUT']}{$fluo_txt}"."\n";
	// $word .= "仕入：{$siire}"."\n";
	$word .= "仕入(税抜)：{$siire_zeinuki}"."\n";
	$word .= "鑑別コスト：{$newvalues['identification_cost']}"."\n";
	$word .= "その他コスト：{$newvalues['other_cost']}"."\n";
	$word .= "仕上げコスト：{$newvalues['cost']}"."\n";
	$word .= "Per carat：{$DA_PER_CARAT}"."\n";
	$word .= "仕入率：{$siire_ritsu}%"."\n";
	$word .= "Full Rapa：{$doru}{$newvalues['DA_FRAPA']} / {$newvalues['DA_RATE']}円"."\n";
	$word .= "ガイ：{$gai}"."\n";
	$word .= "代金：{$daikin}"."\n";
	$word .= "Rapa B：{$DA_RAPAB}%"."\n";
	$word .= "粗利：{$DA_GROSSPROFIT}%"."\n";
	$word .= "利1：{$DA_INTEREST_1}"."\n";
	$word .= "メモ：{$newvalues['description']}"."\n";
	$word .= "芳名：{$YOURNAME_name}"."\n";
	$word .= "LABO：{$newvalues['Appraiser']}"."\n";
	$word .= "COMME：{$newvalues['Remarks']}"."\n";
	$word .= "査定人：{$satei_name}"."\n";
	$word .= "登録日：{$newvalues['satei_hi']}"."\n";
	$word .= "販売日数：{$diff}";
	// $word .= "[/info]";

	$word = str_replace("&","＆",$word);


	// GCPサーバーのAPI通し
	$token = 'bot';

	//メール送信
	$mail_body = $word;
	$sendPostData = array(
		"subject" => "【D完了】NEW D在",
		"text" => $mail_body,
	);
	$sendPostData = http_build_query($sendPostData, "", "&");
	$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => $sendPostData));
	$sendPostContext = stream_context_create($sendPostDataOptions);
	try{
		file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, $sendPostContext);
	}catch(Exception $e){}
}
