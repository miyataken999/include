<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/kagoya_check/function.php";

if($last_id != ""){
	$ins_ecc_id = $last_id;
}elseif($ecc_id != ""){
	$ins_ecc_id = $ecc_id;
}else{
	$ins_ecc_id = "";
}

if($_GET["move_id"] != ""){
	$move_id = htmlspecialchars($_GET["move_id"]);
}

// ini_set("display_errors",1);
include $_SERVER["DOCUMENT_ROOT"]."/include/connection_kagoya.php";

	$query = 'SELECT * FROM internet.Eoc_takuhai WHERE id='.$move_id.' LIMIT 1';
	print "query ".$query."<br>";
	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	$result = mysql_fetch_assoc($sql);

	// var_dump($result);

	$data = array();
	array_push($data,'brand_confirm');
	array_push($data,'number_of_times');
	array_push($data,'type_selection');
	array_push($data,'reuse_box');
	array_push($data,'kit_detail');
	// array_push($data,'date_select');
	// array_push($data,'date_select_hidden');
	array_push($data,'arrival_date');
	array_push($data,'time_select');
	array_push($data,'time_select_hidden');
	array_push($data,'speed_box');
	array_push($data,'date_and_time');
	array_push($data,'date_and_time_hidden');
	array_push($data,'user_name');
	array_push($data,'user_name_kana');
	array_push($data,'user_tel');
	array_push($data,'user_mail');
	array_push($data,'user_yuubinn');
	array_push($data,'user_todou');
	array_push($data,'user_sikutyouson');
	array_push($data,'user_banti');
	array_push($data,'tel_mail_line');
	array_push($data,'bikou');
	array_push($data,'insurance_speed');
	array_push($data,'insurance');
	array_push($data,'insurance_kingaku');
	array_push($data,'mail_magazin');
	array_push($data,'anke_1');
	array_push($data,'anke_2');
	array_push($data,'anke_3');
	array_push($data,'mail_text');
	array_push($data,'REMOTE_HOST');
	array_push($data,'REMOTE_ADDR');
	array_push($data,'USER_AGENT');
	array_push($data,'HTTP_REFERER');
	array_push($data,'key_code');
	array_push($data,'cv_site');
	array_push($data,'cv_device');
	array_push($data,'cv_page');
	array_push($data,'cv_time');
	array_push($data,'kit_denpyou');
	array_push($data,'kit_huutou');
	array_push($data,'kit_S');
	array_push($data,'kit_M');
	array_push($data,'kit_L');
	array_push($data,'service_users_id');
	array_push($data, 'contract_at');
	array_push($data, 'ad_param');


include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";

include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

$into_col = "";
$into_val = "";

for ($into_i=0; $into_i < count($data); $into_i++) {
	if($into_col != ""){
		$into_col .= ",";
		$into_val .= ",";
	}
	$into_col .= $data[$into_i];
	if($data[$into_i]=='arrival_date'){
		$result[$data[$into_i]] = str_replace("'","’",$result['date_select_hidden']);
	}else{
		$result[$data[$into_i]] = str_replace("'","’",$result[$data[$into_i]]);
	}
	$into_val .= "'".$result[$data[$into_i]]."'";
}
$into_col .= ",ecc_id";
$into_val .= ",'".$ins_ecc_id."'";

$into_col = "({$into_col})";
$into_val = "({$into_val})";

$query = "INSERT INTO internet.Eoc_takuhai{$into_col} VALUES{$into_val}";
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);
$eoc_takuhai_last_id = mysql_insert_id();

if((isset($result["contract_at"])) && ($result["contract_at"] != "") && ($result["contract_at"] != "0000-00-00 00:00:00")){
	$contract_query = "INSERT INTO internet.Eoc_takuhai_events(`Eoc_takuhai_id`, `event`, `content`, `create_at`, `create_by`) VALUES('{$eoc_takuhai_last_id}', '12', '185', NOW(), '{$uid}')";
	$contract_sql = mysql_query($contract_query);
}



	if (!$sql) {
	    //チャットワーク流す
		$text_table = "[info][title]Eoc自動反映 takuhaiテーブル移動クエリ失敗[/title]";
		$text_table .= "[info]".mysql_error()."[/info][hr]";
		$text_table .= "[info]";
		$text_table .= "{$query}[/info][/info]";
		$text_table = str_replace("&","＆",$text_table);
	    $text_table = mb_convert_encoding($text_table, "UTF-8", "auto");

	    //本番ルーム
	    // $room = "";
	    //テスト用個人ルーム
	    $room = "67058874";

	    $nishitani = "c1d97cfaf7e544675fad7be63c49a0d5";
	    //誰から発行するか
	    $token = $nishitani;


	    ?>
	    <h2>失敗しました。チャットワークに流します。</h2>
	    <div>詳細</div>
	    <div>
			<?=$text_table?>
	    </div>
	    <?
	    die();
	}else{
		$log_table = "Eoc_takuhai";
		$key_val = $eoc_takuhai_last_id;
		$user_id = $uid;
		$key_name = "id"; //ログテキスト上のkeyの項目名
		$log_action = "add";

		insert_log($log_table,$key_val,$into_col,$into_val,$user_id,$key_name,$log_action);
	}
include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";




$delete_id = htmlspecialchars($_GET["delete_id"]);
if(($delete_id == "") AND ($move_id != "")){
	$delete_id = $move_id;
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/kagoya_check/takuhai/delete.php";
}
?>
		<h2>成功しました。</h2>

		<!-- <a class="for_takihai_list" href="http://urlounge.co.jp/include/kagoya_check/takuhai/list.php">宅配EVA待機一覧に戻る</a> -->
		<!-- <a class="for_speed_list" href="https://urlounge.co.jp/shop5/Eoc_takuhai_speed_list.php">スピード集荷依頼へ進む</a> -->

		<!-- <h3>すみません！向山がいまシステム変更に伴うテスト中なので下記をクリックして一覧に戻ってください！</h3> -->
		<!-- →<a href="http://urlounge.co.jp/include/kagoya_check/takuhai/list.php">一覧に戻る</a>← -->

		<!-- <br><br><br><br>----------ここから下は触らないでください--------------<br><br> -->

		<!-- <a href="https://urlounge.co.jp/shop5/Eoc_takuhai_speed_list.php">集荷申込</a> -->

		<script type="text/javascript">
			window.location.href = "/include/kagoya_check/takuhai/list.php";

			//ハイシューカ
			// window.location.href = "/include/speed/shuka.php?id=<?=$eoc_takuhai_last_id?>&haisou=sagawa&u_id=<?=$user_id?>";
			// window.location.href = "https://urlounge.co.jp/shop5/Eoc_takuhai_speed_list.php?orderby=did";
		</script>

		<style type="text/css">
			a {
				display: block;
				padding: 20px;
				width: 400px;
				margin: 10px;
				text-decoration: none;
				background-color: #45ade9;
				text-align: center;
				font-size: 20px;
				font-weight: bold;
				float: left;
				border-radius: 5px;
				border: 1px solid #888;
				color: #111;
			}
			a:hover {
				background-color: #111;
				color: #fff;
			}
			a.for_takihai_list {
				background-color: #ccc;
			}
			a.for_takihai_list:hover {
				background-color: #111;
				color: #fff;
			}
			h2 {
				padding-left: 20px;
			}
		</style>
