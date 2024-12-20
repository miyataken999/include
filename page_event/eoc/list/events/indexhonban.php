<?
ini_set("display_errors",1);
	$html = "";
	$val = '';

		$alertArray = array();

		$name1 = $data["name1"];
		$name1_check = mb_convert_encoding($name1,"iso-2022-jp","UTF-8");
		$name1_check = mb_convert_encoding($name1_check,"UTF-8","iso-2022-jp");
		if(stristr($name1_check,'??')){
			$alertArray[] = array($name1_check,$name1);
		}
		$name1 = $name1_check;

		if(count($alertArray) > 0){
			$alert_html = "";
			$alert_html .= "<div class='row alert alert-danger' role='alert'><div class='col-12'>文字化け発見しました！</div></div>";

			$alert_html .= "<div class='alert_details'>";
			$alert_html .= "<table class='alert alert-warning' role='alert'>";
			$alert_html .= "<tr class='row'>";
			$alert_html .= "<td class='col-6'>変換前</td>";
			$alert_html .= "<td class='col-6'>変換後</td>";
			$alert_html .= "</tr>";
			for ($al_i=0; $al_i < count($alertArray); $al_i++) {
				$after_val = $alertArray[$al_i][0];
				$before_val = $alertArray[$al_i][1];
				$alert_html .= "<tr class='row'>";
				$alert_html .= "<td class='col-6'>{$before_val}</td>";
				$alert_html .= "<td class='col-6'>{$after_val}</td>";
				$alert_html .= "</tr>";
			}

			$alert_html .= "</table>";
			$alert_html .= "</div>";

			$alert_html = "<div class='alert_origin'>{$alert_html}</div>";
			$html .= $alert_html;
		}


	$ecc_id=$value;

	$fieldLabelsEoc_takuhai_events["Japanese"]["id"] = "Id";
	$fieldLabelsEoc_takuhai_events["Japanese"]["event"] = "イベント";
	$fieldLabelsEoc_takuhai_events["Japanese"]["content"] = "内容";
	$fieldLabelsEoc_takuhai_events["Japanese"]["content_by_text"] = "内容(テキスト)";
	$fieldLabelsEoc_takuhai_events["Japanese"]["create_at"] = "登録日";
	$fieldLabelsEoc_takuhai_events["Japanese"]["create_by"] = "登録者";
	$fieldLabelsEoc_takuhai_events["Japanese"]["update_at"] = "更新日";
	$fieldLabelsEoc_takuhai_events["Japanese"]["update_by"] = "更新者";


	//スピード希望集荷日時の取得
	$speed_takuhai_sql = "SELECT DISTINCT date_and_time_hidden FROM Eoc_takuhai WHERE ecc_id='{$value}' AND `status`=1 AND type_selection LIKE '%スピード%' ORDER BY id desc";
	$speed_takuhai_rs = CustomQuery($speed_takuhai_sql);
	$speed_date_and_time = '';
	while($speed_takuhai_data = db_fetch_array($speed_takuhai_rs)){
		if($speed_takuhai_data["date_and_time_hidden"] != ''){
			$kiboutime = $speed_takuhai_data["date_and_time_hidden"];
		}else{
			$kiboutime = '希望なし(フォーム修正前の申込)';
		}
		$speed_date_and_time .= $kiboutime.'<br>';
	}



	$takuhai_sql = "SELECT id,type_selection,haisou_bangou FROM Eoc_takuhai WHERE ecc_id='{$value}' AND `status`!=11 ORDER BY id desc limit 1";
	$takuhai_rs = CustomQuery($takuhai_sql);
	$takuhai_data = db_fetch_array($takuhai_rs);
	$value = $takuhai_data["id"];
	$type_selection = $takuhai_data["type_selection"];
	$takuhai_haisou_bangou = $takuhai_data["haisou_bangou"];


	$html .= "<table class='event_all_table' >";
	$html .= "<tr>";
		$html .= "<td colspan='2' class='table_box_td'>";
			//URLによるファイル振り分け
			$current_page_pass = $_SERVER["REQUEST_URI"];
			if(!stristr($current_page_pass, "/shop5/")){
				include 'Eoc_detailstest.php';
			}else{
				include 'Eoc_details.php';
			}
		$html .= "</td>";
	$html .= "</tr>";
	$html .= "<tr>";

		$html .= "<td>";

			$html .= '<table class="event_table table table-bordered table-striped bs-flexgrid rnr-b-grid rnr-gridtable" cellpadding="0">';


				$html .= '<tr class=" bs-gridrow">';
				$html .= '<th class=" rnr-gridfieldlabel takuhai_id_cell">宅配取引Id</th>';
				$html .= '<td class=" bs-gridcell">';
				$html .= $value;
				$html .= '</td>';
				$html .= '</tr>';


				$html .= '<tr class=" bs-gridrow">';
				// $html .= '<th class=" rnr-gridfieldlabel">Id</th>';
				// $html .= '<th class=" rnr-gridfieldlabel">イベント</th>';
				$html .= '<th class=" rnr-gridfieldlabel">イベント・内容</th>';
				// $html .= '<th class=" rnr-gridfieldlabel">内容<br>(テキスト)</th>';
				$html .= '<th class=" rnr-gridfieldlabel">登録・更新</th>';
				// $html .= '<th class=" rnr-gridfieldlabel">登録者</th>';
				// $html .= '<th class=" rnr-gridfieldlabel">更新日</th>';
				// $html .= '<th class=" rnr-gridfieldlabel">更新者</th>';
				$html .= '</tr>';


				$sql = "SELECT * FROM Eoc_takuhai_events WHERE Eoc_takuhai_id='{$value}' ORDER BY id ";
				$rs = CustomQuery($sql);

				$htmldata='';
				while($event_data = db_fetch_array($rs)){

					$html .= '<tr class=" bs-gridrow event_'.$event_data["content"].'">';
					// $html .= '<td class=" bs-gridcell">'.$event_data["id"];

					// $html .= '<td class=" bs-gridcell">';
					// $html .= '</td>';

					$html .= '<td class=" bs-gridcell">';
					if($event_data["event"] != ''){
						$html .= '<span class="border_btm">';
						$in_sql = "SELECT `name` FROM mst_Eoc_received_events WHERE id='".$event_data["event"]."' limit 1";
						$in_rs = CustomQuery($in_sql);
						$in_data = db_fetch_array($in_rs);
						$html .= $in_data["name"];
						$html .= '</span>';
					}


					if($event_data["content"] != ''){
						$in_sql = "SELECT `name` FROM mst_Eoc_received_event_contents WHERE id='".$event_data["content"]."' limit 1";
						$in_rs = CustomQuery($in_sql);
						$in_data = db_fetch_array($in_rs);
						$html .= $in_data["name"];
					}

					$html .= '<br>';

					$html .= $event_data["content_by_text"];
					$html .= '</td>';







					$html .= '<td class=" bs-gridcell event_time"><span>';

					$html .= '<span class="border_btm">';
					$html .= '登録：';
					if($event_data["create_by"] != ''){
						$in_sql = "SELECT `first_name` FROM users WHERE user_id='".$event_data["create_by"]."' limit 1";
						$in_rs = CustomQuery($in_sql);
						$in_data = db_fetch_array($in_rs);
						$first_name_array = explode("　",$in_data["first_name"]);
						$html .= $first_name_array[0];
					}
					$encoding = 'UTF-8';
					$html .= ' ';
					if($event_data["create_at"] != ''){
						$create_at = date("Y",strtotime($event_data["create_at"])) - 2000 . date("md/Hi",strtotime($event_data["create_at"]));
						// $create_at = mb_convert_kana($create_at,'A',$encoding);
						// $create_at = str_replace("／","/",$create_at);
						$html .= $create_at;
					}
					$html .= '</span>';


					$html .= '更新：';
					if($event_data["update_by"] != ''){
						$in_sql = "SELECT `first_name` FROM users WHERE user_id='".$event_data["update_by"]."' limit 1";
						$in_rs = CustomQuery($in_sql);
						$in_data = db_fetch_array($in_rs);
						$first_name_array = explode("　",$in_data["first_name"]);
						$html .= $first_name_array[0];
					}
					$html .= ' ';
					if($event_data["update_at"] != ''){
						$update_at = date("Y",strtotime($event_data["update_at"])) - 2000 . date("md/Hi",strtotime($event_data["update_at"]));
						// $update_at = mb_convert_kana($update_at,'A',$encoding);
						// $update_at = str_replace("／","/",$update_at);
						$html .= $update_at;

					}
					$html .= '</span></td>';

					$html .= '</tr>';

					$htmldata='on';
				}


			$html .= '</table>';// 宅配イベント

		$html .= "</td>";

		$html .= "<td rowspan='2' class='table_box_td'>";
			//URLによるファイル振り分け
			$current_page_pass = $_SERVER["REQUEST_URI"];
			if(!stristr($current_page_pass, "/shop5/")){
				include 'timelinetest.php';
			}else{
				include 'timeline.php';
			}
		$html .= "</td>";

	$html .= "</tr>";


	$html .= "<tr>";

		$html .= "<td class='table_box_td'>";
		include 'mail_log.php';
		include 'sagawa_log.php';
		$html .= "</td>";

	$html .= "</tr>";

	if(isset($_GET["sagawa_test"])){
		$html .= "<tr>";

		$html .= "<td class='table_box_td'>";
		$html .= "</td>";

		$html .= "</tr>";

	}


	$html .= "</table>";// end event_all_table



	// if($htmldata == ''){
	// 	$html = '';
	// }


	$value = $html;

	//URLによるファイル振り分け
	$current_page_pass = $_SERVER["REQUEST_URI"];
	if(!stristr($current_page_pass, "/shop5/")){
		include_once 'oncetest.php';
	}else{
		include_once 'once.php';
	}
