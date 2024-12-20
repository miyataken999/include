<?
// Description
// PHP code executed on the server side.

// Parameters
// $params - array of parameters sent from the client
// $result - array of values to return from the server

// Notes
// getCurrentRecord() - returns an associative array with field values (field name => value)
//           Example:

// $data = $button->getCurrentRecord();
// $result['record'] = $data;
// $result['email'] = $data["email"];
// getNextSelectedRecord()  - consequently returns arrays with values from records checked off on the List page.


$values = $button->getCurrentRecord();



$ecc_id = $values["ecc_id"];
$purchase_type = $values["purchase_type"];


/*■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

まず、当日の受付データが無ければ自動生成する

■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■*/
$toutyakubi = date("Y-m-d");
$rv_query = "SELECT * FROM Eoc_received WHERE `ecc_id`={$ecc_id} AND `time` LIKE '{$toutyakubi}%' limit 1";
$rv_rs = CustomQuery($rv_query);
$rv_data = db_fetch_array($rv_rs);
if($rv_data["id"] > 0){
	$rv_id = $rv_data["id"];
}else{
	$rv_query = "INSERT INTO Eoc_received(`ecc_id`,`time`,`hokosuu`,`purchase_type`)VALUES({$ecc_id},NOW(),1,'{$purchase_type}') ";
	try {
		CustomQuery($rv_query);
	} catch (Exception $e) {
		$result["txt"] = $e->getMessage();
		return true;

	}

	$rv_query = "SELECT * FROM Eoc_received WHERE `ecc_id`={$ecc_id} AND `time` LIKE '{$toutyakubi}%' limit 1";
	$rv_rs = CustomQuery($rv_query);
	$rv_data = db_fetch_array($rv_rs);
	$rv_id = $rv_data["id"];



	$bikoutxt = "";

	$time_stamp = date("Y")-2000;
	$time_stamp = $time_stamp.date("md/Hi");

	if($_SESSION["uid"] != ''){
		$query = "SELECT first_name FROM users WHERE user_id=".$_SESSION["uid"]." LIMIT 1";
		$rs = CustomQuery($query);
		$data = db_fetch_array($rs);
		$first_name = explode("　",$data["first_name"]);
		$myouji = $first_name[0];

		$bikoutxt .= "\n".$time_stamp;
		$bikoutxt .= "　到着";
		$bikoutxt .= "　{$myouji}\n";

		$query = "SELECT remark FROM Eoc WHERE ecc_id={$ecc_id} LIMIT 1 ";
		try {
			$rs = CustomQuery($query);
			$data = db_fetch_array($rs);
		} catch (Exception $e) {
			$result["txt"] = $e->getMessage();
			return true;
		}

		$remark = $data["remark"];
		$remark .= $bikoutxt;
		$remark = str_replace("'","’",$remark);
		$remark = str_replace("\"","”",$remark);
		// $remark = str_replace(" ","\n",$remark);

		if($ecc_id > 0){
			$up_query = "UPDATE Eoc SET remark='{$remark}' WHERE ecc_id={$ecc_id} LIMIT 1 ";
			// $result["txt"] = $up_query;
			try {
				$rs = CustomQuery($up_query);
			} catch (Exception $e) {
				$result["txt"] = $e->getMessage();
				return true;
			}
		}
	}

}


/*■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

買取備考のカウントで純新、再来

■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■*/
$query = "SELECT * , COUNT(chigin_id) as `ct` FROM Eoc_chigins WHERE chigin_ecc_id={$ecc_id} ORDER BY ching_created_at ASC";
$rs = CustomQuery($query);
while ($data = db_fetch_array($rs)) {
	$chigin_count = $data["ct"];
	if($data["ching_created_at"] != ''){
		$first_time = $data["ching_created_at"];
		break;
	}else{
		$first_time = '';
	}
}





$kokyaku_query = "SELECT COUNT(id) as `ct` FROM Eoc_received_events WHERE Eoc_received_id={$rv_id} AND event=1";
$kokyaku_rs = CustomQuery($kokyaku_query);
$kokyaku_data = db_fetch_array($kokyaku_rs);
if($kokyaku_data["ct"] == 0){
	if($chigin_count > 0){
		$kokyaku = 2;
	}else{
		$awazu_query = "SELECT COUNT(product_id) as `ct` FROM shouhin WHERE ecc_id={$ecc_id} AND `status`=34 ";
		$awazu_rs = CustomQuery($awazu_query);
		$awazu_data = db_fetch_array($awazu_rs);
		if($awazu_data["ct"] > 0){
			$kokyaku = 3;
		}else{
			$kokyaku = 1;
		}
	}

	if($kokyaku != ''){
		$rv_query = "INSERT INTO Eoc_received_events(`Eoc_received_id`,`event`,`content`)VALUES({$rv_id},1,{$kokyaku}) ";
		try {
			CustomQuery($rv_query);
		} catch (Exception $e) {
			$result["txt"] = $e->getMessage();
			return true;
		}
	}
}



/*■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

買取種別で「別アプリ申込」

■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■*/

$kokyaku_query = "SELECT COUNT(id) as `ct` FROM Eoc_received_events WHERE Eoc_received_id={$rv_id} AND event=12";
$kokyaku_rs = CustomQuery($kokyaku_query);
$kokyaku_data = db_fetch_array($kokyaku_rs);

if($kokyaku_data["ct"] == 0){
	if($values["purchase_type"] == 48){
		$betsu_apri = 23;
	}elseif($values["purchase_type"] == 51){
		$betsu_apri = 22;
	}

	if($betsu_apri != ''){
		$rv_query = "INSERT INTO Eoc_received_events(`Eoc_received_id`,`event`,`content`)VALUES({$rv_id},12,{$betsu_apri}) ";
		try {
			CustomQuery($rv_query);
		} catch (Exception $e) {
			$result["txt"] = $e->getMessage();
			return true;
		}
	}
}




/*■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

2年超過

■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■*/
//買取備考がある場合のみ

if($chigin_count > 0){
	if($first_time > 0){
		$kokyaku_query = "SELECT COUNT(id) as `ct` FROM Eoc_received_events WHERE Eoc_received_id={$rv_id} AND event=13";
		$kokyaku_rs = CustomQuery($kokyaku_query);
		$kokyaku_data = db_fetch_array($kokyaku_rs);

		if($kokyaku_data["ct"] == 0){

			if(strtotime("{$first_time} +2 year") <= strtotime("now")){
				$ninen = 24;
			}
		}

		if($ninen != ''){
			$rv_query = "INSERT INTO Eoc_received_events(`Eoc_received_id`,`event`,`content`)VALUES({$rv_id},13,{$ninen}) ";
			try {
				CustomQuery($rv_query);
			} catch (Exception $e) {
				$result["txt"] = $e->getMessage();
				return true;
			}
		}
	}else{
		// $result["txt"] = "買取備考の登録日がありません。";
	}
}







/*■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

 佐川配送保険実費
 『佐川配送保険』新設×0.001の値

■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■*/


$kokyaku_query = "SELECT COUNT(id) as `ct` FROM Eoc_received_events WHERE Eoc_received_id={$rv_id} AND event=10";
$kokyaku_rs = CustomQuery($kokyaku_query);
$kokyaku_data = db_fetch_array($kokyaku_rs);

$hoken = $values["sagawa_haisou_hoken"];

if($kokyaku_data["ct"] == 0){
	if($hoken > 0){
		$hoken = floor($hoken*0.001);
		$rv_query = "INSERT INTO Eoc_received_events(`Eoc_received_id`,`event`,`content`,`content_by_text`)VALUES({$rv_id},10,29,{$hoken}) ";
		try {
			CustomQuery($rv_query);
		} catch (Exception $e) {
			$result["txt"] = $e->getMessage();
			return true;
		}
	}
}











if($result["txt"] == ''){
	$result["txt"] = 'OK';
}

