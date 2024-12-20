<?php
if(isset($_GET["test_tamiya"])){
	// ini_set("display_errors",1);
}
// $str_pc = str_replace("<name>",$eoc_res["name1"],$str_pc);
if($replace_data["Eoc"]["mail1"] != ''){
	$to_addr = $replace_data["Eoc"]["mail1"];
}else{
	$to_addr = $replace_data["Eoc"]["mail2"];
}

/*
テンプレート
リストの取得
*/
$first_name = "";//★連絡担当★用変数

$replace_pdo = new pdo_connect;
if(isset($_GET["test"])){
	$replace_result = $replace_pdo->select_many("SELECT * from mst_mail_replace_test");
}else{
	$replace_result = $replace_pdo->select_many("SELECT * from mst_mail_replace");
}


// var_dump($replace_data["Eoc_takuhai"]);

foreach ($replace_result as $item) {
	$before_txt = $item["before_txt"];
	if($item["replace_data_table"] != '編集不可'){
		$replace_data_table = $item["replace_data_table"];

		$replace_data_name = $item["replace_data"];
		$after_val = $replace_data[$replace_data_table][$replace_data_name];


		//集荷予定日
		if(($replace_data_table=='Eoc') AND ($replace_data_name=='EOC__DATE_AND_TIME_2')){
			$after_val = date("Y-n-j",strtotime($after_val));
			if($after_val == '1970-1-1'){
				$after_val = '';
			}
		}

		//集荷予定日
		if(($replace_data_table=='Eoc') AND ($replace_data_name=='EOC__DELIVERY_DATES')){
			if($after_val == "01"){
				$after_val = "午前中";
			}elseif($after_val == "11"){
				$after_val = "11～13時前後";
			}elseif($after_val == "13"){
				$after_val = "13～15時前後";
			}elseif($after_val == "15"){
				$after_val = "15～17時前後";
			}elseif($after_val == "17"){
				$after_val = "17～19時前後";
			}elseif($after_val == "19"){
				$after_val = "19～21時前後";
			}

		}

		//担当者 スペース区切りの一個目苗字
		if(($replace_data_table=='users') AND ($replace_data_name=='first_name')){
			$after_val_array = explode("　",$after_val);
			$after_val = $after_val_array[0];
		}

	}// end 編集不可 以外

	//TODO





	if($item["id"] == 8){
		if((isset($saisoku_auto_flg))and($saisoku_auto_flg=="on")){
			require_once('./../../connection.php');
		}else{
			require_once('./../connection.php');
		}
		mysql_query("SET NAMES 'utf8'");

		// 金地金・ダイヤ少量による ※規約第8条14項
		$kokyaku = $ecc_id;

		if((strstr($str_header, '★査定明細★')) OR (strstr($str_pc, '★査定明細★')) OR (strstr($str2_pc, '★査定明細★')) OR (strstr($str3_pc, '★査定明細★')) ){
			//大量査定で宅配ID上書きをしていた。
			//大量査定でご負担金作成していたので、コメントアウトして対応
			// include $_SERVER["DOCUMENT_ROOT"]."/include/satei/kin_satei/check/syouryou.php";
			if($Eoc_takuhai_id != ""){
			  $query = "SELECT is_many_product FROM Eoc_takuhai WHERE id= '{$Eoc_takuhai_id}' limit 1";
			  $sql = mysql_query($query);
			  $res = mysql_fetch_assoc($sql);

				// if(isset($_GET["nishitaniaaaa"])){
			  if($res["is_many_product"] == 1){
					$meisai_state = 'satei';
					if(isset($_GET["nishitaniaaaa"])){
						include "sateimeisai_many_product_test.php";
					}else{
						include "sateimeisai_many_product.php";
					}
			  }else{
					include "sateimeisai.php";
				}
			}else{
				include "sateimeisai.php";
			}


		}

	}elseif($item["id"] == 13){
		if((isset($saisoku_auto_flg))and($saisoku_auto_flg=="on")){
			require_once('./../../connection.php');
		}else{
			require_once('./../connection.php');
		}
		mysql_query("SET NAMES 'utf8'");
		// 金地金・ダイヤ少量による ※規約第8条14項
		$kokyaku = $ecc_id;
		if((strstr($str_header, '★返却明細★')) OR (strstr($str_pc, '★返却明細★')) OR (strstr($str2_pc, '★返却明細★')) OR (strstr($str3_pc, '★返却明細★')) ){
			// include $_SERVER["DOCUMENT_ROOT"]."/include/satei/kin_satei/check/syouryou.php";

			$awazu_Eoc_takuhai_pdo = new pdo_connect;
			$awazu_Eoc_takuhai = $awazu_Eoc_takuhai_pdo->select_one("SELECT id, is_many_product from Eoc_takuhai where ecc_id={$ecc_id} AND (Eoc_takuhai.`status`=1 OR Eoc_takuhai.`status`=12 OR Eoc_takuhai.`status`=5 OR Eoc_takuhai.`status`=6 OR Eoc_takuhai.`status`=9 ) order by Eoc_takuhai.id desc limit 1");

			// $awazu_query = "SELECT id, is_many_product FROM Eoc_takuhai WHERE id= '{$Eoc_takuhai_id}' limit 1";
			// $awazu_Eoc_takuhai = $awazu_Eoc_takuhai_pdo->select_one($awazu_query);

			$awazu_Eoc_takuhai_id = $awazu_Eoc_takuhai["id"];

			if(isset($_GET["nishitaniaaaa"])){

				echo "awazu_Eoc_takuhai_id {$awazu_Eoc_takuhai_id}";
				echo $awazu_Eoc_takuhai["is_many_product"];
			}


			if($awazu_Eoc_takuhai["is_many_product"] == 1){
				// $Eoc_takuhai_id = $awazu_Eoc_takuhai_id;
				$meisai_state = 'awazu';

				if(isset($_GET["nishitaniaaaa"])){
					include "sateimeisai_many_product_test.php";
				}else{
					include "sateimeisai_many_product.php";
				}

			}else{
				include "awazumeisai.php";
			}

		}

	}elseif($item["id"] == 14){
		if((isset($saisoku_auto_flg))and($saisoku_auto_flg=="on")){
			require_once('./../../connection.php');
		}else{
			require_once('./../connection.php');
		}
		mysql_query("SET NAMES 'utf8'");

		// 金地金・ダイヤ少量による ※規約第8条14項
		$kokyaku = $ecc_id;

		if((strstr($str_header, '★成約明細★')) OR (strstr($str_pc, '★成約明細★')) OR (strstr($str2_pc, '★成約明細★')) OR (strstr($str3_pc, '★成約明細★')) ){
			//大量査定で宅配ID上書きをしていた。
			//大量査定でご負担金作成していたので、コメントアウトして対応
			// include $_SERVER["DOCUMENT_ROOT"]."/include/satei/kin_satei/check/seiyaku_syouryou.php";


			// $Eoc_takuhai_id = $replace_data["Eoc_takuhai"]["id"];


			$query = "SELECT is_many_product FROM Eoc_takuhai WHERE id= '{$Eoc_takuhai_id}' limit 1";
			$sql = mysql_query($query);
			$res = mysql_fetch_assoc($sql);

			// if(isset($_GET["nishitaniaaaa"])){

			if(isset($_GET["nishitaniaaaa"])){

				echo "Eoc_takuhai_id {$Eoc_takuhai_id}";
				echo $res["is_many_product"];
			}


			if($res["is_many_product"] == 1){
				$meisai_state = 'seiyaku';

				if(isset($_GET["nishitaniaaaa"])){
					include "sateimeisai_many_product_test.php";
				}else{
					include "sateimeisai_many_product.php";
				}

			}else{
				include "seiyaku.php";
			}

		}
	}elseif($item["id"] == 15){
		if((isset($saisoku_auto_flg))and($saisoku_auto_flg=="on")){
			require_once('./../../connection.php');
		}else{
			require_once('./../connection.php');
		}
		mysql_query("SET NAMES 'utf8'");

		// 金地金・ダイヤ少量による ※規約第8条14項
		$kokyaku = $ecc_id;
		if((strstr($str_header, '★査定経過明細★')) OR (strstr($str_pc, '★査定経過明細★')) OR (strstr($str2_pc, '★査定経過明細★')) OR (strstr($str3_pc, '★査定経過明細★')) ){
			// include $_SERVER["DOCUMENT_ROOT"]."/include/satei/kin_satei/check/seiyaku_syouryou.php";
			if(isset($_GET["test"])){
				include "saisoku_test.php";
			}else{
				include "saisoku.php";
			}
		}
	}elseif($item["id"] == 16){
		if((isset($saisoku_auto_flg))and($saisoku_auto_flg=="on")){
			require_once('./../../connection.php');
		}else{
			require_once('./../connection.php');
		}
		mysql_query("SET NAMES 'utf8'");
		// 金地金・ダイヤ少量による ※規約第8条14項
		$days_elapsed_query = "SELECT * FROM `shouhin` WHERE `Eoc_takuhai_id`= '$Eoc_takuhai_id' AND `satei_hi` != '' ORDER BY `satei_hi` DESC LIMIT 1";
		$days_elapsed_sql = mysql_query('SET NAMES utf8');
		$days_elapsed_sql = mysql_query($days_elapsed_query);
		$days_elapsed_res = mysql_fetch_assoc($days_elapsed_sql);
		if($days_elapsed_res!=false){
			$satei_hi =	$days_elapsed_res["satei_hi"];
			$satei_hi_second = date("Y-m-d",strtotime($satei_hi));
			$satei_hi_second = strtotime($satei_hi_second);
			$today_second = strtotime(date("Y-m-d"));
			$days_elapsed_count=$today_second-$satei_hi_second;
			$days_elapsed_count_second = $days_elapsed_count;
			$days_elapsed_count = $days_elapsed_count/86400;
			$days_elapsed_count = floor($days_elapsed_count)+1;
		}else{
			$days_elapsed_count = "";
		}
		$subject_pc = str_replace('★経過日数★',$days_elapsed_count,$subject_pc);
		$str_header = str_replace('★経過日数★',$days_elapsed_count,$str_header);
		$str_pc = str_replace('★経過日数★',$days_elapsed_count,$str_pc);
		$str2_pc = str_replace('★経過日数★',$days_elapsed_count,$str2_pc);
		$str3_pc = str_replace('★経過日数★',$days_elapsed_count,$str3_pc);

	}elseif($item["id"] == 17){
		if((isset($saisoku_auto_flg))and($saisoku_auto_flg=="on")){
			require_once('./../../connection.php');
		}else{
			require_once('./../connection.php');
		}
		mysql_query("SET NAMES 'utf8'");
		$contact_person_query = "SELECT substring_index(`first_name`,'　',1) AS `last_name` FROM `users` WHERE `user_id`=$uid LIMIT 1";
		$contact_person_sql = mysql_query('SET NAMES utf8');
		$contact_person_sql = mysql_query($contact_person_query);
		$contact_person_res = mysql_fetch_assoc($contact_person_sql);
		$first_name = $contact_person_res["last_name"];

		$subject_pc = str_replace('★連絡担当★',$first_name,$subject_pc);
		$str_header = str_replace('★連絡担当★',$first_name,$str_header);
		$str_pc = str_replace('★連絡担当★',$first_name,$str_pc);
		$str2_pc = str_replace('★連絡担当★',$first_name,$str2_pc);
		$str3_pc = str_replace('★連絡担当★',$first_name,$str3_pc);
	}elseif($item["id"] == 18){
			$satei_query = "SELECT
												`shouhin`.`satei_by`
											from
												`shouhin`
											where
											  `shouhin`.`ecc_id` = {$ecc_id}
											and
											  `shouhin`.`Eoc_takuhai_id` = {$Eoc_takuhai_id}
											and
											  `shouhin`.`purchase_category` != 'H'
											and
												(
													`shouhin`.`sub_category_id1` != 840
													and
													`shouhin`.`sub_category_id1` != 839
													and
													`shouhin`.`sub_category_id1` != 31
												)
											group by `satei_by`
											order by `product_id` desc
										";
			$satei_sql = mysql_query('SET NAMES utf8');
			$satei_sql = mysql_query($satei_query);

			$first_name = "";
			while($satei_res = mysql_fetch_assoc($satei_sql)){
				$satei_person_by = $satei_res["satei_by"];
				$satei_person_query = "SELECT substring_index(`first_name`,'　',1) AS `last_name`, `user_login` FROM `users` WHERE `user_id`='$satei_person_by' LIMIT 1";
				$satei_person_sql = mysql_query('SET NAMES utf8');
				$satei_person_sql = mysql_query($satei_person_query);
				$satei_person_res = mysql_fetch_assoc($satei_person_sql);
				$satei_by_check_query = "SELECT `UserName` FROM `evashop5ugmembers` where `UserName` = '{$satei_person_res['user_login']}' AND `GroupID` = 4 LIMIT 1";
				$satei_by_check_sql = mysql_query('SET NAMES utf8');
				$satei_by_check_sql = mysql_query($satei_by_check_query);
				$satei_by_check_res = mysql_fetch_assoc($satei_by_check_sql);
				if($satei_by_check_sql != false){
					if($first_name != ""){
						$first_name .= ",";
					}
					$first_name .= $satei_person_res["last_name"];
				}
			}
			
			if($first_name == ""){
				mysql_query("SET NAMES 'utf8'");
				$contact_person_query = "SELECT substring_index(`first_name`,'　',1) AS `last_name` FROM `users` WHERE `user_id`=$uid LIMIT 1";
				$contact_person_sql = mysql_query('SET NAMES utf8');
				$contact_person_sql = mysql_query($contact_person_query);
				$contact_person_res = mysql_fetch_assoc($contact_person_sql);
				$first_name = $contact_person_res["last_name"];
			}

			$subject_pc = str_replace('★査定担当★',$first_name,$subject_pc);
			$str_header = str_replace('★査定担当★',$first_name,$str_header);
			$str_pc = str_replace('★査定担当★',$first_name,$str_pc);
			$str2_pc = str_replace('★査定担当★',$first_name,$str2_pc);
			$str3_pc = str_replace('★査定担当★',$first_name,$str3_pc);

	}elseif($item["id"] == 22){
		if(($Eoc_takuhai_id != "") && ($to_addr != "")){
	    // オプションを設定
	    $post_data = array(
	      'mail' => $to_addr,
	      'Eoc_takuhai_id' => $Eoc_takuhai_id,
	      'type' => "static",
	    );
	    $curl_url = "https://kinkaimasu.jp/mypage/api/delivery_check/create_check_url";
			$post_data = json_encode($post_data);
			$options = array(
				'http' => array(
					'method'=> 'POST',
					'header'=> 'Content-type: application/json; charset=UTF-8', //JSON形式で表示
					'content' => $post_data
				)
			);
			$context = stream_context_create($options);
			if($contents = file_get_contents($curl_url, false, $context)){
				$contents = json_decode($contents, false);
				$after_val = $contents->url;
				$subject_pc = str_replace($before_txt, $after_val,$subject_pc);
				$str_header = str_replace($before_txt, $after_val,$str_header);
				$str_pc = str_replace($before_txt, $after_val,$str_pc);
				$str2_pc = str_replace($before_txt, $after_val,$str2_pc);
				$str3_pc = str_replace($before_txt, $after_val,$str3_pc);
			}
		}
	}elseif($item["id"] == 23){
		$after_val = $mail_comment;
		// var_dump($after_val);
		$subject_pc = str_replace('★コメント★', $after_val,$subject_pc);
		$str_header = str_replace('★コメント★', $after_val,$str_header);
		$not_replace_str_pc = $str_pc;
		$str_pc = str_replace('★コメント★', $after_val,$str_pc);
		$str2_pc = str_replace('★コメント★', $after_val,$str2_pc);
		$str3_pc = str_replace('★コメント★', $after_val,$str3_pc);

	}elseif($item["id"] == 26){//★査定総額★
		$sum_satei_price = 0;
		$satei_price_query = "SELECT
											sum(`shouhin`.`price`) as `sum_satei_price`
										FROM
											`shouhin`
										WHERE
											`shouhin`.`ecc_id` = {$ecc_id}
										AND
											`shouhin`.`Eoc_takuhai_id` = {$Eoc_takuhai_id}
										AND
											(
												`shouhin`.`status` = 32 OR `shouhin`.`status` = 126
											)
		";

		$satei_price_sql = mysql_query('SET NAMES utf8');
		$satei_price_sql = mysql_query($satei_price_query);
		if($satei_price_sql != false){
			$satei_price_res = mysql_fetch_assoc($satei_price_sql);
			$sum_satei_price = $satei_price_res["sum_satei_price"];
		}
		$after_val = number_format($sum_satei_price);
		$subject_pc = str_replace($before_txt, $after_val,$subject_pc);
		$str_header = str_replace($before_txt, $after_val,$str_header);
		$str_pc = str_replace($before_txt, $after_val,$str_pc);
		$str2_pc = str_replace($before_txt, $after_val,$str2_pc);
		$str3_pc = str_replace($before_txt, $after_val,$str3_pc);

	}elseif($item["id"] == 27){//★ご送金総額★
		$sum_seiyaku_price = 0;
		$seiyaku_price_query = "SELECT
														sum(`shouhin`.`price`) as `sum_seiyaku_price`
													FROM
														`shouhin`
													WHERE
														`shouhin`.`ecc_id` = {$ecc_id}
													AND
														`shouhin`.`Eoc_takuhai_id` = {$Eoc_takuhai_id}
													AND
														`shouhin`.`status` != '34'
		";
		$seiyaku_price_sql = mysql_query('SET NAMES utf8');
		$seiyaku_price_sql = mysql_query($seiyaku_price_query);
		if($seiyaku_price_sql != false){
			$seiyaku_price_res = mysql_fetch_assoc($seiyaku_price_sql);
			$sum_seiyaku_price = $seiyaku_price_res["sum_seiyaku_price"];
		}
		$after_val = number_format($sum_seiyaku_price);
		$subject_pc = str_replace($before_txt, $after_val,$subject_pc);
		$str_header = str_replace($before_txt, $after_val,$str_header);
		$str_pc = str_replace($before_txt, $after_val,$str_pc);
		$str2_pc = str_replace($before_txt, $after_val,$str2_pc);
		$str3_pc = str_replace($before_txt, $after_val,$str3_pc);

	}elseif($item["id"] == 31){//★査定返答ボタン★

		$after_val = "";
		if (!empty($_GET['Eoc_takuhai_id'])) {
			$Eoc_takuhai_id = $_GET['Eoc_takuhai_id'];
			try {
				$after_val = file_get_contents("https://rifa.life/evaProject/api/Eoc_takuhai_satei_tokens/btn_html/{$Eoc_takuhai_id}");
			} catch (Exception $e) {}
		}
		$subject_pc = str_replace($before_txt, $after_val,$subject_pc);
		$str_header = str_replace($before_txt, $after_val,$str_header);
		$str_pc = str_replace($before_txt, $after_val,$str_pc);
		$str2_pc = str_replace($before_txt, $after_val,$str2_pc);
		$str3_pc = str_replace($before_txt, $after_val,$str3_pc);

	}else{
		// if(isset($_GET["test"])){
		$after_val_check = mb_convert_encoding($after_val,"iso-2022-jp","UTF-8");
		$after_val_check = mb_convert_encoding($after_val_check,"UTF-8","iso-2022-jp");
		if(stristr($after_val_check,'??')){
			$alertArray[] = array($after_val_check,$after_val);
		}
		$after_val = $after_val_check;
		// }

		$str_header = preg_replace('/'.$before_txt.'/i',$after_val,$str_header);
		$subject_pc = str_replace($before_txt, $after_val,$subject_pc);
		$str_pc = preg_replace('/'.$before_txt.'/i',$after_val,$str_pc);
		$str2_pc = preg_replace('/'.$before_txt.'/i',$after_val,$str2_pc);
		$str3_pc = preg_replace('/'.$before_txt.'/i',$after_val,$str3_pc);
	}
}// end foreach


if(count($alertArray) > 0){
	$alert_html = "";
	$alert_html .= "<div class='row alert alert-danger' role='alert'><div class='col-12'>文字化け発見しました！</div></div>";

	$alert_html .= "<div class='alert alert-warning' role='alert'>";
	$alert_html .= "<div class='row'>";
	$alert_html .= "<div class='col-6'>変換前</div>";
	$alert_html .= "<div class='col-6'>変換後</div>";
	$alert_html .= "</div>";
	for ($al_i=0; $al_i < count($alertArray); $al_i++) {
		$after_val = $alertArray[$al_i][0];
		$before_val = $alertArray[$al_i][1];
		$alert_html .= "<div class='row'>";
		$alert_html .= "<div class='col-6'>{$before_val}</div>";
		$alert_html .= "<div class='col-6'>{$after_val}</div>";
		$alert_html .= "</div>";
	}

	$alert_html .= "</div>";

	$alert_html = "<div class='container'>{$alert_html}</div>";

}

// EOC__BOX_NUMBER

// //----------------<name>の処理
// 	$str_header = preg_replace('/<name>/i',$name,$str_header);
// 	$str_pc = preg_replace('/<name>/i',$name,$str_pc);
// 	$str2_pc = preg_replace('/<name>/i',$name,$str2_pc);
// 	$str3_pc = preg_replace('/<name>/i',$name,$str3_pc);

// //----------------<tantousha>の処理
// 	$str_header = preg_replace('/<tantousha>/i',$staff_name,$str_header);
// 	$str_pc = preg_replace('/<tantousha>/i',$staff_name,$str_pc);
// 	$str2_pc = preg_replace('/<tantousha>/i',$staff_name,$str2_pc);
// 	$str3_pc = preg_replace('/<tantousha>/i',$staff_name,$str3_pc);


// //----------------<delivery_date>の処理
// 	$str_header = preg_replace('/<delivery_date>/i',$delivery_date,$str_header);
// 	$str_pc = preg_replace('/<delivery_date>/i',$delivery_date,$str_pc);
// 	$str2_pc = preg_replace('/<delivery_date>/i',$delivery_date,$str2_pc);
// 	$str3_pc = preg_replace('/<delivery_date>/i',$delivery_date,$str3_pc);


// //----------------<box_number>の処理
// 	$str_header = preg_replace('/<box_number>/i',$box_number,$str_header);
// 	$str_pc = preg_replace('/<box_number>/i',$box_number,$str_pc);
// 	$str2_pc = preg_replace('/<box_number>/i',$box_number,$str2_pc);
// 	$str3_pc = preg_replace('/<box_number>/i',$box_number,$str3_pc);


// //----------------<date_and_time>の処理
// 	$str_header = preg_replace('/<date_and_time>/i',$date_and_time,$str_header);
// 	$str_pc = preg_replace('/<date_and_time>/i',$date_and_time,$str_pc);
// 	$str2_pc = preg_replace('/<date_and_time>/i',$date_and_time,$str2_pc);
// 	$str3_pc = preg_replace('/<date_and_time>/i',$date_and_time,$str3_pc);

// //----------------<seiyakukin>の処理
// 	$str_header = preg_replace('/<seiyakukin>/i',$seiyakukin,$str_header);
// 	$str_pc = preg_replace('/<seiyakukin>/i',$seiyakukin,$str_pc);
// 	$str2_pc = preg_replace('/<seiyakukin>/i',$seiyakukin,$str2_pc);
// 	$str3_pc = preg_replace('/<seiyakukin>/i',$seiyakukin,$str3_pc);

// //----------------<kaitorihuka>の処理
// 	$str_header = preg_replace('/<kaitorihuka>/i',$kaitorihuka,$str_header);
// 	$str_pc = preg_replace('/<kaitorihuka>/i',$kaitorihuka,$str_pc);
// 	$str2_pc = preg_replace('/<kaitorihuka>/i',$kaitorihuka,$str2_pc);
// 	$str3_pc = preg_replace('/<kaitorihuka>/i',$kaitorihuka,$str3_pc);

// //----------------<haisou_bangou>の処理
// 	$str_header = preg_replace('/<haisou_bangou>/i',$haisou_bangou,$str_header);
// 	$str_pc = preg_replace('/<haisou_bangou>/i',$haisou_bangou,$str_pc);
// 	$str2_pc = preg_replace('/<haisou_bangou>/i',$haisou_bangou,$str2_pc);
// 	$str3_pc = preg_replace('/<haisou_bangou>/i',$haisou_bangou,$str3_pc);
