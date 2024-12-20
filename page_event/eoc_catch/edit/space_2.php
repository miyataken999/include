<?
/*
$value - a value to be displayed on the page.
Example:
$value = strtoupper($value);

$data - array with all field values.
Example:
$value = $data["FirstName"].$data["LastName"];
where FirstName and LastName are actual field names.
*/

// include $_SERVER["DOCUMENT_ROOT"]."/include/page_event/eoc_catch/edit/space_2.php";




$sql = "SELECT line_chat_url FROM Eoc WHERE ecc_id={$data['ecc_id']} limit 1";
$rs = CustomQuery($sql);
$eoc_data = db_fetch_array($rs);
$line_chat_url = $eoc_data["line_chat_url"];

$html = '';

$html .= "<div class='line-box flex'>";
$html .= "<div class='line-head'>LINEチャット</div>";
if($line_chat_url == ''){
	$html .= "　　　　　　　　　　　";
}else{
	$html .= "<a class='' target='_blank' href='{$line_chat_url}'>{$line_chat_url}</a>";
}
$html .= "</div>";


$sql = "SELECT id,type_selection,haisou_bangou FROM Eoc_takuhai WHERE ecc_id={$data['ecc_id']} ORDER BY id desc limit 1";
$rs = CustomQuery($sql);
$takuhai_data = db_fetch_array($rs);
$value = $takuhai_data["id"];
$type_selection = $takuhai_data["type_selection"];
$takuhai_haisou_bangou = $takuhai_data["haisou_bangou"];

$value = '';

if(strstr($type_selection,"スピード")){
	if($data["haisou_bangou"] != ''){

		$html .= '';
		$html .= "<a class='btn btn-primary' href='";
		$html .= 'http://jizen.kuronekoyamato.co.jp/jizen/servlet/crjz.b.NQ0010?id='.$data["haisou_bangou"];
		$html .= "'>";
		// $html .= 'http://jizen.kuronekoyamato.co.jp/jizen/servlet/crjz.b.NQ0010?id='.$data["haisou_bangou"];
		$html .= "クロス到確";

		$html .= "</a>";


		$value = $html;
	}
}


// $html .= "<a class='btn' style='background:#e1e1ea;margin-bottom: 10px;' target='_blank' href='";
// $html .= 'https://rifa.life/include/page_event/eoc_catch/btn/takuhai_btn.php';
// $html .= "'>";
// $html .= "宅配到着反映";
// $html .= "</a>";

$html .= "<a class='btn btn-primary' style='background: #00c;' target='_blank' href='";
$html .= 'https://rifa.life/lounge_API/brother/print_toutyaku.php?user_id='.$_SESSION["uid"].'&ecc_id='.$data["ecc_id"];
$html .= "'>";
$html .= "ラベル発行";

$html .= "</a>";




$query = "SELECT * , COUNT(chigin_id) as `ct` FROM Eoc_chigins WHERE chigin_ecc_id={$data["ecc_id"]} ORDER BY ching_created_at DESC";
$rs = CustomQuery($query);
$Eoc_chigins = db_fetch_array($rs);
if($Eoc_chigins["ct"] > 0){
	$kokyaku = "再来";
}else{
	$awazu_query = "SELECT COUNT(product_id) as `ct` FROM shouhin WHERE ecc_id={$data["ecc_id"]} AND `status`=34 ";
	$awazu_rs = CustomQuery($awazu_query);
	$awazu_data = db_fetch_array($awazu_rs);
	if($awazu_data["ct"] > 0){
		$kokyaku = "再チャレ";
	}else{
		$kokyaku = "純新規";
	}
}

$html .= "<div class='use_history {$kokyaku}'>{$kokyaku}</div>";

$value = $html;
