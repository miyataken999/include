<?
include 'takuhai_btn_func.php';
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

$user_id = $_SESSION["uid"];

$ecc_id = $values["ecc_id"];
$purchase_type = $values["purchase_type"];
$mail_check_type = $values["mail_check_type"];



//現在進行中のステータス「新規申込」「到着済」「成約あり」が複数あった場合
$err_query = "SELECT COUNT(id) AS ct FROM Eoc_takuhai WHERE ecc_id={$ecc_id} AND ((`status`=1) OR (`status`=4) OR (`status`=5)) ";
$err_rs = CustomQuery($err_query);
$err_data = db_fetch_array($err_rs);
$now_takuhai = $err_data["ct"];

if($now_takuhai > 1){
	$result["txt"] = '<div id="mousikomi_error">';
	$result["txt"] .= '進行中ステータス<br>';
	$result["txt"] .= '「新規申込」「到着済」「成約あり」<br>';
	$result["txt"] .= 'が重複しております。<br>';
	$result["txt"] .= '不要取引はステータス「除外」に変更してください。<br>';
	$result["txt"] .= '</div>';
	$result["txt"] .= '<style>';
	$result["txt"] .= '#mousikomi_error {';
	$result["txt"] .= 'background: #f00;';
	$result["txt"] .= 'color: #fff;';
	$result["txt"] .= 'padding: 100px 10px;';
	$result["txt"] .= 'border: 5px solid #111;';
	$result["txt"] .= 'width: 600px;';
	$result["txt"] .= 'z-index: 100;';
	$result["txt"] .= 'position: absolute;';
	$result["txt"] .= '}';
	$result["txt"] .= '</style>';
	return true;
}








/*■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

まず、当日の受付データが無ければ自動生成する

■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■*/
$toutyakubi = date("Y-m-d");

//「新規申込」「集荷依頼済」「キット配送済」を探す
$Eoc_takuhai_query = "SELECT * FROM Eoc_takuhai WHERE `ecc_id`={$ecc_id} AND ((`status`=1) OR (`status`=2) OR (`status`=3)) ORDER BY id DESC limit 1";
$Eoc_takuhai_rs = CustomQuery($Eoc_takuhai_query);
$Eoc_takuhai_data = db_fetch_array($Eoc_takuhai_rs);
if($Eoc_takuhai_data["id"] > 0){
	//あったら到着済にする。
	$Eoc_takuhai_id = $Eoc_takuhai_data["id"];
	$Eoc_takuhai_query = "UPDATE Eoc_takuhai SET status=4, hakosuu=1, received_time=NOW(), purchase_type='{$purchase_type}' WHERE id={$Eoc_takuhai_id} limit 1";

	try {
		CustomQuery($Eoc_takuhai_query);
	} catch (Exception $e) {
		$result["txt"] = $e->getMessage();
		return true;

	}

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
	}//end if


}else{
	//「到着済」か「査定中」があるか
	//⇒現在進行中の取引があるということ。
	$Eoc_takuhai_query = "SELECT * FROM Eoc_takuhai WHERE `ecc_id`={$ecc_id} AND ((`status`=4) OR (`status`=12)) ORDER BY id DESC limit 1";
	$Eoc_takuhai_rs = CustomQuery($Eoc_takuhai_query);
	$Eoc_takuhai_data = db_fetch_array($Eoc_takuhai_rs);
	if($Eoc_takuhai_data["id"] > 0){

		//あったらIDだけ取得
		$Eoc_takuhai_id = $Eoc_takuhai_data["id"];

	}else{

		//なかったら到着済で生成する。
		$Eoc_takuhai_query = "INSERT INTO Eoc_takuhai(`ecc_id`,`received_time`,`hakosuu`,`purchase_type`,`status`)VALUES({$ecc_id},NOW(),1,'{$purchase_type}',4) ";
		try {
			CustomQuery($Eoc_takuhai_query);
		} catch (Exception $e) {
			$result["txt"] = $e->getMessage();
			return true;

		}

		//いま作った到着済を取得
		$Eoc_takuhai_query = "SELECT * FROM Eoc_takuhai WHERE `ecc_id`={$ecc_id} AND `status`=4 ORDER BY id DESC limit 1";
		$Eoc_takuhai_rs = CustomQuery($Eoc_takuhai_query);
		$Eoc_takuhai_data = db_fetch_array($Eoc_takuhai_rs);
		$Eoc_takuhai_id = $Eoc_takuhai_data["id"];



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
		}//end if
	}//end else
}//end else


/*■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

買取備考のカウントで純新、再来

■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■*/
$query = "SELECT * , COUNT(chigin_id) as `ct` FROM Eoc_chigins WHERE chigin_ecc_id={$ecc_id} ORDER BY ching_created_at DESC";
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





$kokyaku_query = "SELECT COUNT(id) as `ct` FROM Eoc_takuhai_events WHERE Eoc_takuhai_id={$Eoc_takuhai_id} AND event=1";
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
		$Eoc_takuhai_query = "INSERT INTO Eoc_takuhai_events(`Eoc_takuhai_id`,`event`,`content`,`create_at`,`create_by`)VALUES({$Eoc_takuhai_id},1,{$kokyaku},NOW(),'{$user_id}') ";
		try {
			CustomQuery($Eoc_takuhai_query);
		} catch (Exception $e) {
			$result["txt"] = $e->getMessage();
			return true;
		}
	}
}



/*■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

買取種別で「別アプリ申込」

■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■*/

$kokyaku_query = "SELECT COUNT(id) as `ct` FROM Eoc_takuhai_events WHERE Eoc_takuhai_id={$Eoc_takuhai_id} AND event=12";
$kokyaku_rs = CustomQuery($kokyaku_query);
$kokyaku_data = db_fetch_array($kokyaku_rs);

if($kokyaku_data["ct"] == 0){
	if($values["purchase_type"] == 48){
		$betsu_apri = 23;
	}elseif($values["purchase_type"] == 51){
		$betsu_apri = 22;
	}

	if($betsu_apri != ''){
		$Eoc_takuhai_query = "INSERT INTO Eoc_takuhai_events(`Eoc_takuhai_id`,`event`,`content`,`create_at`,`create_by`)VALUES({$Eoc_takuhai_id},12,{$betsu_apri},NOW(),'{$user_id}') ";
		try {
			CustomQuery($Eoc_takuhai_query);
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
		$kokyaku_query = "SELECT COUNT(id) as `ct` FROM Eoc_takuhai_events WHERE Eoc_takuhai_id={$Eoc_takuhai_id} AND event=2";
		$kokyaku_rs = CustomQuery($kokyaku_query);
		$kokyaku_data = db_fetch_array($kokyaku_rs);

		if($kokyaku_data["ct"] == 0){

			if(strtotime("{$first_time} +2 year") <= strtotime("now")){
				$ninen_query = "SELECT b.create_at as 'create_at'
					from Eoc_takuhai as a LEFT JOIN Eoc_takuhai_events as b ON a.id=b.Eoc_takuhai_id
					where 
						(
							b.content=4 
							OR b.content=46 
							OR b.content=67 
							OR b.content=92 
							OR b.content=93

							OR b.content=131
							OR b.content=132
							OR b.content=133
							OR b.content=134
							OR b.content=135
							OR b.content=136

							OR b.content=184
						) 
						AND
						(a.ecc_id='{$ecc_id}')
					ORDER BY b.create_at DESC limit 1
				";
				$ninen_rs = CustomQuery($ninen_query);
				$ninen_data = db_fetch_array($ninen_rs);
				$ninen_last_time = $ninen_data["create_at"];

				//２年超過のOK系があれば、そこから2年計算
				if($ninen_last_time != ""){
					if(strtotime("{$ninen_last_time} +2 year") <= strtotime("now")){
						$ninen = 39;
					}
				}else{
					//無ければ、単純に買取備考から2年たってるのでNGフラグ
					$ninen = 39;
				}
			}
		}


		if($ninen != ''){
			$Eoc_takuhai_query = "INSERT INTO Eoc_takuhai_events(`Eoc_takuhai_id`,`event`,`content`,`create_at`,`create_by`)VALUES({$Eoc_takuhai_id},2,{$ninen},NOW(),'{$user_id}') ";
			try {
				CustomQuery($Eoc_takuhai_query);
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


$kokyaku_query = "SELECT COUNT(id) as `ct` FROM Eoc_takuhai_events WHERE Eoc_takuhai_id={$Eoc_takuhai_id} AND event=10";
$kokyaku_rs = CustomQuery($kokyaku_query);
$kokyaku_data = db_fetch_array($kokyaku_rs);


if($kokyaku_data["ct"] == 0){
	/*■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	宅配取引から取得
	■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■*/
	$takuhai_query = "SELECT insurance_kingaku FROM Eoc_takuhai WHERE `ecc_id`={$ecc_id} AND id={$Eoc_takuhai_id} limit 1";
	$takuhai_rs = CustomQuery($takuhai_query);
	$takuhai_data = db_fetch_array($takuhai_rs);
	$hoken = $takuhai_data["insurance_kingaku"];

	//なければEocから取得
	// if($hoken == ''){
	// 	$hoken = $values["sagawa_haisou_hoken"];
	// }

	if($hoken > 0){
		$hoken = floor($hoken*0.001);
		$Eoc_takuhai_query = "INSERT INTO Eoc_takuhai_events(`Eoc_takuhai_id`,`event`,`content`,`content_by_text`,`create_at`,`create_by`)VALUES({$Eoc_takuhai_id},10,29,{$hoken},NOW(),'{$user_id}') ";

		$content = 29;
		$mainasu_price = $hoken;
		kinsa_seisei($Eoc_takuhai_id,$content,$mainasu_price);

		try {
			CustomQuery($Eoc_takuhai_query);
		} catch (Exception $e) {
			$result["txt"] = $e->getMessage();
			return true;
		}
	}
}





/*■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

沖縄・離島

■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■*/

$kokyaku_query = "SELECT COUNT(id) as `ct` FROM Eoc_takuhai_events WHERE Eoc_takuhai_id={$Eoc_takuhai_id} AND event=9";
$kokyaku_rs = CustomQuery($kokyaku_query);
$kokyaku_data = db_fetch_array($kokyaku_rs);
// 精錬は抜かす。
if(($kokyaku_data["ct"] == 0) && ($purchase_type != 46)){
	$ritou = '';
	$ritou_id = 20;

	$address1 = $values["address1"];
	$address_ika = $values["address2"].$values["address3"];

	//まずは都道府県で絞る
	$ad_1_query = "SELECT todou FROM mst_ritou WHERE todou='{$address1}' ";
	$ad_1_rs = CustomQuery($ad_1_query);
	$ad_1_data = db_fetch_array($ad_1_rs);
	$todou = $ad_1_data["todou"];

	if($todou != ''){
		//市区郡、以下住所を結合し、顧客のと部分一致したら離島判断。
		$ad_2_query = "SELECT CONCAT(sikugun,ika) as concat_ika FROM mst_ritou WHERE todou='{$todou}' ";
		$ad_2_rs = CustomQuery($ad_2_query);
		while($ad_2_data = db_fetch_array($ad_2_rs)){
			if((strstr($address_ika, $ad_2_data["concat_ika"])) OR ($ad_2_data["concat_ika"] == '')){
				$ritou = $ritou_id;
				break;
			}
		}
	}


	if($ritou != ''){
		$Eoc_takuhai_query = "INSERT INTO Eoc_takuhai_events(`Eoc_takuhai_id`,`event`,`content`,`create_at`,`create_by`)VALUES({$Eoc_takuhai_id},9,{$ritou},NOW(),'{$user_id}') ";

		$content = $ritou;
		kinsa_seisei($Eoc_takuhai_id,$content);

		try {
			CustomQuery($Eoc_takuhai_query);
		} catch (Exception $e) {
			$result["txt"] = $e->getMessage();
			return true;
		}
	}
}











/*■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

リピーター感謝祭

■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■*/
if(strtotime(date("Y-m-d H:i:s")) < strtotime('2019-05-31 20:00:00')){
	if($mail_check_type == 2){
		$kokyaku_query = "SELECT COUNT(id) as `ct` FROM Eoc_takuhai_events WHERE Eoc_takuhai_id={$Eoc_takuhai_id} AND event=8 AND content=110";
		$kokyaku_rs = CustomQuery($kokyaku_query);
		$kokyaku_data = db_fetch_array($kokyaku_rs);

		if($kokyaku_data["ct"] == 0){

			$ching_query = "SELECT SUM(ching_price) as 'sumching_price' FROM Eoc_chigins WHERE chigin_ecc_id={$ecc_id} AND (chigin_type=2 OR chigin_type=3 OR chigin_type=4 OR chigin_type=8) LIMIT 1";
			$ching_rs = CustomQuery($ching_query);
			$ching_data = db_fetch_array($ching_rs);

			$sumching_price = floor($ching_data["sumching_price"]*0.01);

			if($sumching_price > 0){
				$Eoc_takuhai_query = "INSERT INTO Eoc_takuhai_events(`Eoc_takuhai_id`,`event`,`content`,`content_by_text`,`create_at`,`create_by`)VALUES({$Eoc_takuhai_id},8,110,'{$sumching_price}',NOW(),'{$user_id}') ";

				try {
					CustomQuery($Eoc_takuhai_query);
				} catch (Exception $e) {
					$result["txt"] = $e->getMessage();
					return true;
				}
			}
		}
	}
}

/*■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
LINE本確済の場合、eventに追加
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■*/
$Eoc_line_check_query = "SELECT `line_check` FROM `Eoc` WHERE `ecc_id`={$ecc_id} LIMIT 1";
$Eoc_line_check_rs = CustomQuery($Eoc_line_check_query);
$Eoc_line_check_data = db_fetch_array($Eoc_line_check_rs);
$line_check = $Eoc_line_check_data["line_check"];
if($line_check==1){
	$line_aleady_query = "INSERT INTO `Eoc_takuhai_events`(`Eoc_takuhai_id`,`event`,`content`,`create_at`,`create_by`)VALUES({$Eoc_takuhai_id},6,14,NOW(),'{$user_id}')";
	// $result["txt"] = $line_aleady_query;
	try{
		CustomQuery($line_aleady_query);
	}catch(Exception $e){
		$result["txt"] = $e->getMessage();
		return true;
	}
}
/*■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
END LINE本確済の場合
■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■*/



// /*■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
// mypage同期処理
// ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■*/

// // if($ecc_id == 4460){
// 	//mypagedataの更新処理
// 	//宅配取引データ、宅配イベントデータ、商品データ同期処理
// 	$mypage_update_prohibited = '';
// 	$base_uri = "https://rifa.life";
// 	$endpoint = "/evaProject/api/mypage/func/transfer_data/sync_data_for_takuhai";
// 	// POSTデータ
// 	$data = array(
// 			"Eoc_takuhai_id" => $Eoc_takuhai_id,
// 			"mypage_update_prohibited" => null,
// 	);
// 	// $data = http_build_query($data, "", "&");
// 	$data = json_encode($data);
// 	// header
// 	$header = array(
// 			"Content-Type: application/json",
// 			// 'User-Agent: Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)',
// 			"Content-Length: " . strlen($data),
// 	);
// 	$context = array(
// 			"http" => array(
// 					"method"  => "POST",
// 					"header"  => implode("\r\n",$header),
// 					"content" => $data,
// 			)
// 	);

// 	file_get_contents($base_uri.$endpoint, false, stream_context_create($context));

// // }
// /*■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
// END mypage同期処理
// ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■*/



	/**
	 * 到着メール自動送信
	 */
	$send_params = json_encode(
		array(
			"template_id" => 79,
			"ecc_id" => $ecc_id,
			"login_user_id" => $user_id,
			"Eoc_takuhai_id" => $Eoc_takuhai_id
		)
	);
	$options = array(
		'http' => array(
			'method'=> 'POST',
			'header'=> 'Content-type: application/json; charset=UTF-8',
			'content' => $send_params
		)
	);
	$context = stream_context_create($options);
	try{
		$contents = file_get_contents('https://rifa.life/evaProject/api/auto_send_mail', false, $context);
	} catch(Exception $e){
		$result["txt"] = 'メール送信に失敗しました。' . $e->getMessage();
	}



if($result["txt"] == ''){
	$result["txt"] = 'OK';
}
