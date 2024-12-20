<?php
	$html .= "<table class='Eoc_details_table top_details_table' >";
		$html .= "<tr>";
			$html .= "<th class='ecc_id_box'><span>顧客SEQ</span></th>";
			$html .= "<th><span>フリガナ</span></th>";
			$html .= "<th><span>名前</span></th>";
			$html .= "<th><span>電話</span></th>";
			$html .= "<th><span>携帯</span></th>";
			$html .= "<th><span>メアド</span></th>";
			$html .= "<th><span>メアド2</span></th>";
		$html .= "</tr>";
		$html .= "<tr>";
			$html .= "<td class='ecc_id_box'><span>";
			$html .= $data["ecc_id"];
			$html .= "</span></td>";

			$html .= "<td class=''><span>";
			$html .= $data["name2"];
			$html .= "</span></td>";

			$html .= "<td class=''><span>";
			$html .= $data["name1"];
			$html .= "</span></td>";

			// $html .= "<td colspan='2'><span>";
			// $html .= $data["name2"];
			// $html .= "<br>";
			// $html .= $data["name1"];
			// $html .= "</span></td>";

			$html .= "<td class=''><span>";
			$html .= $data["tel"];
			$html .= "</span></td>";

			$html .= "<td class=''><span>";
			$html .= $data["tel2"];
			$html .= "</span></td>";

			// $html .= "<td colspan='2'><span>";
			// $val = $data["tel"];
			// if($data["tel2"] != ''){
			// 	if($val != ""){
			// 		$val .= "<br>";
			// 	}
			// 	$val .= $data["tel2"];
			// }
			// $html .= $val;
			// $val = '';
			// $html .= "</span></td>";

			$html .= "<td class=''><span>";
			$val = '';
			if($data["mail1"] != ''){
				$val = "<a href='mailto:".$data["mail1"]."' >".$data["mail1"]."</a>";
			}
			$html .= $val;
			$html .= "</span></td>";

			$html .= "<td class=''><span>";
			$val = '';
			if($data["mail2"] != ''){
				$val = "<a href='mailto:".$data["mail2"]."' >".$data["mail2"]."</a>";
			}
			$html .= $val;
			$html .= "</span></td>";

			// $html .= "<td colspan='2'><span>";
			// $val = '';
			// if($data["mail1"] != ''){
			// 	$val = "<a href='mailto:".$data["mail1"]."' >".$data["mail1"]."</a>";
			// }
			// if($data["mail2"] != ''){
			// 	if($val != ""){
			// 		$val .= "<br>";
			// 	}
			// 	$val = "<a href='mailto:".$data["mail2"]."' >".$data["mail2"]."</a>";
			// }
			// $html .= $val;
			// $val = '';
			// $html .= "</span></td>";
		$html .= "</tr>";
	$html .= "</table>";//end Eoc_details_table top_details_table

	if(!stristr($current_page_pass, "/shop5/")){
		include 'mypage_info_test.php';
	}else{
		// include 'mypage_info.php';
	}

	$html .= "<table class='Eoc_details_table line_chat_content'>";
	$html .= "<tr>";
	$html .= "<th>LinechatURL</th>";
	$html .= "<td><a href ='".$data["line_chat_url"]."' target='_blank'>".$data["line_chat_url"]."</a></td>";
	$html .= "</tr>";
	$html .= "</table>";

	if($speed_date_and_time != ''){
		$html .= "<table class='Eoc_details_table speed_date_and_time_table'>";
		$html .= "<tr>";
		$html .= "<th>スピード希望集荷日時</th>";
		$html .= "<td>{$speed_date_and_time}</td>";
		$html .= "</tr>";
		$html .= "</table>";
	}




	$html .= "<table class='Eoc_details_table' >";

		if(strstr($type_selection,'スピード')){
			if($data["haisou_bangou"] != ''){
				$html .= "<tr>";

				$html .= "<th><span>クロス到確</span></th>";

				$html .= "<td colspan='11'><span><a href='";
				$html .= 'http://jizen.kuronekoyamato.co.jp/jizen/servlet/crjz.b.NQ0010?id='.$data["haisou_bangou"];
				$html .= "' target='_blank'>";
				$html .= 'http://jizen.kuronekoyamato.co.jp/jizen/servlet/crjz.b.NQ0010?id='.$data["haisou_bangou"];
				$html .= "</a></span></td>";
				$html .= "</tr>";
			}
		}

		$html .= "<tr>";
			$html .= "<th><span>買取総額</span></th>";
			$html .= "<th><span>ライン本確</span></th>";
			$html .= "<th><span>到着</span></th>";
			$html .= "<th><span>スピード</span></th>";
			$html .= "<th><span>佐川</span></th>";
			$html .= "<th><span>その他　</span></th>";
			$html .= "<th><span>成約金額</span></th>";
			$html .= "<th><span>配送印刷</span></th>";
			$html .= "<th><span>キット種別</span></th>";
			$html .= "<th><span>佐川集荷依頼</span></th>";
			$html .= "<th><span>宅配キット</span></th>";
			$html .= "<th><span>宅配キット完了</span></th>";
		$html .= "</tr>";
		$html .= "<tr>";
			$html .= "<td><span>";
			$html .= number_format($data["sougaku"]);
			$html .= "</span></td>";

			$html .= "<td><span>";
			if($data["line_check"] == 1){
				$html .= "<img src='images/check_yes.gif' border='0'>";
			}else{
				$html .= "<img src='images/check_no.gif' border='0'>";
			}
			$html .= "</span></td>";

			$html .= "<td><span>";
			if($data["UN_REACHABLE"] == 1){
				$html .= "<img src='images/check_yes.gif' border='0'>";
			}else{
				$html .= "<img src='images/check_no.gif' border='0'>";
			}
			$html .= "</span></td>";

			$html .= "<td><span>";
			if($data["FLAG_SPEED"] == 1){
				$html .= "<img src='images/check_yes.gif' border='0'>";
			}else{
				$html .= "<img src='images/check_no.gif' border='0'>";
			}
			$html .= "</span></td>";

			$html .= "<td><span>";
			if($data["FLG_MAIL_SAGAWA"] == 1){
				$html .= "<img src='images/check_yes.gif' border='0'>";
			}else{
				$html .= "<img src='images/check_no.gif' border='0'>";
			}
			$html .= "</span></td>";

			$html .= "<td><span>";
			if($data["FLG_MAIL_OTHER"] == 1){
				$html .= "<img src='images/check_yes.gif' border='0'>";
			}else{
				$html .= "<img src='images/check_no.gif' border='0'>";
			}
			$html .= "</span></td>";

			$html .= "<td><span>";
			$html .= $data["seiyakukin"];
			$html .= "</span></td>";

			$html .= "<td><span>";
			if($data["rakuda_csv_flag"] == 1){
				$html .= "<img src='images/check_yes.gif' border='0'>";
			}else{
				$html .= "<img src='images/check_no.gif' border='0'>";
			}
			$html .= "</span></td>";

			$html .= "<td><span>";
			$val = str_replace("個","個<br>",$data["size_kosuu"]);
			$val = str_replace("個\n","個<br>",$val);
			$val = str_replace("\n","<br>",$val);
			$val = str_replace("<br><br>","<br>",$val);
			$val = str_replace("<br><br>","<br>",$val);
			$html .= $val;
			$val = '';
			$html .= "</span></td>";

			$html .= "<td><span>";
			if($data["sagawa_shuuka_flag"] == 1){
				$html .= "<img src='images/check_yes.gif' border='0'>";
			}else{
				$html .= "<img src='images/check_no.gif' border='0'>";
			}
			$html .= "</span></td>";

			$html .= "<td><span>";
			if($data["kit_flag"] == 1){
				$html .= "<img src='images/check_yes.gif' border='0'>";
			}else{
				$html .= "<img src='images/check_no.gif' border='0'>";
			}
			$html .= "</span></td>";

			$html .= "<td><span>";
			if($data["kit_done_flag"] == 1){
				$html .= "<img src='images/check_yes.gif' border='0'>";
			}else{
				$html .= "<img src='images/check_no.gif' border='0'>";
			}
			$html .= "</span></td>";

		$html .= "</tr>";
		$html .= "<tr>";

			$html .= "<th><span>配送番号</span></th>";
			$html .= "<th><span>再利用</span></th>";
			$html .= "<th><span>サイズ</span></th>";
			$html .= "<th><span>個数</span></th>";
			$html .= "<th><span>時間帯指定</span></th>";
			$html .= "<th><span>日時</span></th>";
			$html .= "<th><span>集荷日時</span></th>";
			$html .= "<th><span>箱数</span></th>";
			$html .= "<th><span>買取種別</span></th>";
			$html .= "<th><span>顧客番号</span></th>";
			$html .= "<th colspan='2'><span>金融機関情報</span></th>";
		$html .= "</tr>";
		$html .= "<tr>";

			$html .= "<td><span>";
			$html .= $data["haisou_bangou"];
			$html .= "</span></td>";

			$html .= "<td><span>";
			$html .= $data["EOC_REUSE"];
			$html .= "</span></td>";

			$html .= "<td><span>";
			$html .= $data["EOC_SIZE"];
			$html .= "</span></td>";

			$html .= "<td><span>";
			$html .= $data["EOC_NUMBER"];
			$html .= "</span></td>";

			$html .= "<td><span>";
			$html .= $data["EOC_SPECIFIED_TIME"];
			$html .= "</span></td>";

			$html .= "<td><span>";
			$html .= str_replace(" ","<br>",$data["EOC__DATE_AND_TIME_2"]);
			$html .= "</span></td>";

			$html .= "<td><span>";
			$html .= $data["EOC__DELIVERY_DATES"];
			$html .= "</span></td>";

			$html .= "<td><span>";
			$html .= $data["EOC__BOX_NUMBER"];
			$html .= "</span></td>";

			$html .= "<td><span>";
			$val = $data["purchase_type"];
			if($val != ''){
				$purchase_sql = "SELECT * from _purchase_type where purchase_id = {$val} limit 1";
				$purchase_rs = CustomQuery($purchase_sql);
				$purchase_data = db_fetch_array($purchase_rs);
				$html .= $purchase_data["purchase_name"];
			}
			$val = '';
			$html .= "</span></td>";

			$html .= "<td><span>";
			$html .= $data["ecc_seq"];
			$html .= "</span></td>";

			$html .= "<td rowspan='3' colspan='2'><span>";
			$html .= str_replace("\n","<br>",$data["bank_name"]);
			$html .= "</span></td>";
		$html .= "</tr>";
		$html .= "<tr>";
			$html .= "<th><span>性別</span></th>";
			$html .= "<th><span>宅配チェック</span></th>";
			$html .= "<th><span>買取者</span></th>";
			$html .= "<th colspan='2'><span>郵便番号</span></th>";
			$html .= "<th colspan='4'><span>住所</span></th>";
			$html .= "<th><span>その他</span></th>";
		$html .= "</tr>";
		$html .= "<tr>";

			$html .= "<td><span>";
			$html .= $data["option5"];
			$html .= "</span></td>";

			$html .= "<td><span>";
			$html .= $data["EOC_COURIER_CHECK"];
			$html .= "</span></td>";

			$html .= "<td><span>";
			$val = $data["kaitori_staff_id"];
			if($val != ''){
				$user_sql = "SELECT first_name from users where user_id = {$val} limit 1";
				$user_rs = CustomQuery($user_sql);
				$user_data = db_fetch_array($user_rs);
				$html .= $user_data["first_name"];
			}
			$val = '';
			$html .= "</span></td>";

			$html .= "<td colspan='2'><span>";
			$html .= $data["zip1"]."-".$data["zip2"];
			$html .= "</span></td>";

			$html .= "<td colspan='4'><span>";
			$html .= $data["address1"];
			$html .= $data["address2"];
			$html .= "<br>";
			$val = str_replace("\n","<br>",$data["address3"]);
			$val = str_replace(" ","<br>",$val);
			$val = str_replace("　","<br>",$val);
			$html .= $val;
			$html .= "</span></td>";

			$html .= "<td><span>";
			$html .= $data["flag"];
			$html .= "</span></td>";

		$html .= "</tr>";




	$html .= "</table>";//end Eoc_details_table
