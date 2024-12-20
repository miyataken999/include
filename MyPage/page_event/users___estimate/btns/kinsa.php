<?
$uid = $_SESSION["uid"];
$time_no = date('Y-m-d H:i:s');
$time = "'".$time_no."'";

$log_ip = $_SERVER["REMOTE_ADDR"];
$log_table = "users___estimate";
$log_action = "btn";//ここでは固定
//user_login取得
$user_login_query = " SELECT user_login FROM lounge_users WHERE user_id={$uid} LIMIT 1";

$rs = CustomQuery($user_login_query);
while ($data = db_fetch_array($rs))
{
	$log_user = $data["user_login"];
}


$product_id_list_array = array();
$params["txt"] = "";
while($data = $button->getNextSelectedRecord()){
	//各キー
	$estimate_type = $data["estimate_type"];//見積もり種類
	$estimate_id = $data["id"];//見積もり種類
	$ecc_id = $data["ecc_id"];//顧客SEQ
	$product_id = $data["product_id"];//SEQ
	$chigin_id = $data["chigin_id"];//地金SEQ
	if(!$ecc_id > 0){
		$params["txt"] .= "顧客SEQがありません。先に顧客を紐づけてください。<br>";
		continue;
	}
	$dt_query = "";
	$dt_rs = "";
	$dt_data = "";
	if($estimate_type == 'brand'){
		include $_SERVER["DOCUMENT_ROOT"]."/include/MyPage/page_event/users___estimate/btns/up_brand.php";
	}elseif($estimate_type == 'dia'){
		include $_SERVER["DOCUMENT_ROOT"]."/include/MyPage/page_event/users___estimate/btns/up_dia.php";
	}elseif($estimate_type == 'metal'){
		include $_SERVER["DOCUMENT_ROOT"]."/include/MyPage/page_event/users___estimate/btns/up_metal.php";
	}elseif($estimate_type == 'standard'){
		include $_SERVER["DOCUMENT_ROOT"]."/include/MyPage/page_event/users___estimate/btns/up_standard.php";
	}else{
		$params["txt"] .= "見積もり種類がありません。もしくはデータが足りません。";
	}


}

