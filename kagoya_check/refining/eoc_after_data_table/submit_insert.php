<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
header("Content-Type:text/html; charset=UTF-8");
include_once $_SERVER["DOCUMENT_ROOT"]."/include/kagoya_check/function.php";
?>
<pre>
<?
// var_dump($_POST);
foreach ($_POST as $key => $value){
	$$key = str_replace("'","’",htmlspecialchars($value));
}


//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//顧客SEQ作成
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

// ini_set("display_errors",1);
/*********************************************************
@値の初期設置
**********************************************************/
// $purchase_type;


//買い取りタイプの取得（IDからの取得）
$query = " SELECT purchaze_type FROM internet._purchase_type WHERE purchase_id={$purchase_type} LIMIT 1";
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);
$result = mysql_fetch_assoc($sql);
$purchaze_type = $result["purchaze_type"];
// print "purchaze_type ".$purchaze_type;

//顧客IDの取得
//問題 TとTKなどあると、LIKEだと0001になり下がる
$where = " where ecc_seq like '%".$purchaze_type."%'";
$query = "SELECT max(ecc_seq) as mecc_seq,max(ecc_id) as max from internet.Eoc ".$where;
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);
$result = mysql_fetch_assoc($sql);
$mecc_seq = $result["mecc_seq"];

//現在の顧客IDのカウントに1を足す
$count =  intval(substr($mecc_seq,1,5));
$count = $count + 1;

//顧客IDを5ケタ0埋め
$koban = $purchaze_type.str_pad($count, 5, "0", STR_PAD_LEFT);
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//END 顧客SEQ作成
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

$into_col = 'sagawa_shuuka_flag';
$into_col .= ',rakuda_csv_flag';
$into_col .= ',FLAG_SPEED';
$into_col .= ',size_kosuu';
$into_col .= ',EOC_REUSE';
$into_col .= ',EOC_SIZE';
$into_col .= ',EOC_NUMBER';
$into_col .= ',EOC_SPECIFIED_TIME';
$into_col .= ',EOC__DATE_AND_TIME_2';
$into_col .= ',EOC__DELIVERY_DATES';
$into_col .= ',EOC__BOX_NUMBER';
$into_col .= ',purchase_type';
$into_col .= ',name1';
$into_col .= ',LAST_NAME2';
$into_col .= ',FIRST_NAME2';
$into_col .= ',name2';
$into_col .= ',LAST_NAME_KANA';
$into_col .= ',FIRST_NAME_KANA';
$into_col .= ',option5';
$into_col .= ',tel';
$into_col .= ',tel2';
$into_col .= ',mail1';
$into_col .= ',mail_check_type';
$into_col .= ',hentou_houhou';
$into_col .= ',zip1';
$into_col .= ',zip2';
$into_col .= ',address1';
$into_col .= ',address2';
$into_col .= ',address3';
$into_col .= ',EOC_COURIER_CHECK';
$into_col .= ',kaitori_staff_id';
$into_col .= ',remark';
$into_col .= ',_registerd_id';
$into_col .= ',created_t';
$into_col .= ',key_code';
$into_col .= ',mousikomi_id';
$into_col .= ',SEARCH_SITE';
$into_col .= ',SEARCH_MEDIA';
$into_col .= ',eoc_search_keyword';
$into_col .= ',ecc_seq';
$into_col .= ',kit_flag';



	$into_val = "'{$sagawa_shuuka_flag}'";
	$into_val .=",'{$haisou_insatsu}'";
	$into_val .=",'{$FLAG_SPEED}'";
	$into_val .=",'{$kit_detail}'";
	$into_val .=",'{$reuse_box}'";
	$into_val .=",'{$kit_size}'";
	$into_val .=",'{$kit_kosuu}'";
	$into_val .=",'{$time_select}'";
	if($speed_date != ""){
		$speed_date = str_replace("/","-",$speed_date)." 00:00:00";
	}
	$into_val .=",'{$speed_date}'";
	$into_val .=",'{$speed_time}'";
	$into_val .=",'{$speed_box}'";
	$into_val .=",'{$purchase_type}'";
	$into_val .=",'{$user_name_sei}　{$user_name_mei}'";
	$into_val .=",'{$user_name_sei}'";
	$into_val .=",'{$user_name_mei}'";
	$into_val .=",'{$user_name_kana_sei}　{$user_name_kana_mei}'";
	$into_val .=",'{$user_name_kana_sei}'";
	$into_val .=",'{$user_name_kana_mei}'";
	$into_val .=",'{$sex}'";
	$into_val .=",'{$tel}'";
	$into_val .=",'{$tel2}'";
	$into_val .=",'{$user_mail}'";
	$into_val .=",'{$mail_magazin}'";
	$into_val .=",'{$tel_mail_line}'";
	$into_val .=",'{$user_yuubinn_1}'";
	$into_val .=",'{$user_yuubinn_2}'";
	$into_val .=",'{$user_todou}'";
	$into_val .=",'{$user_sikutyouson}'";
	$into_val .=",'{$user_banti}'";
	$into_val .=",'{$takuhai_check}'";
	$into_val .=",'{$kaitori_staff_id}'";
	$bikou = str_replace("★time★",$cv_time,$bikou);
	$into_val .=",'{$bikou}'";
	$into_val .=",'{$_registerd_id}'";
	$into_val .=",'".date("Y-m-d H:i:s")."'";
	$into_val .=",'{$key_code}'";
	$into_val .=",'{$REMOTE_ADDR}'";
	$into_val .=",'{$SEARCH_SITE}'";
	$into_val .=",'{$SEARCH_MEDIA}'";
	$into_val .=",'{$eoc_search_keyword}'";
	$into_val .=",'{$koban}'";
	$into_val .=",'{$kit_flag}'";


	$into_col = "({$into_col})";
	$into_val = "({$into_val})";


$query = "INSERT INTO internet.Eoc{$into_col}VALUES{$into_val}";
// print $query;
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);
$sql_error = mysql_error();
$last_id = mysql_insert_id();

	//E飛伝、郵便CSVのデータを作るeditのDBトリガーを起動させるだけのためのクエリ
	$last_query = "UPDATE internet.Eoc SET updated_at=NOW() WHERE ecc_id={$last_id} ";
	$last_sql = mysql_query('SET NAMES utf8');
	$last_sql = mysql_query($last_query);




	if (!$sql) {

	    //チャットワーク流す
		$text_table = "[info][title]Eoc自動反映クエリ失敗 ■ Eoctakuhai INSERT[/title]";
		$text_table .= "[info]".$sql_error."[/info][hr]";
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

	}else{
		$log_table = "Eoc";
		if($last_id != ""){
			$key_val = $last_id;
		}else{
			$key_val = $ecc_id;
		}
		$user_id = $uid;
		$key_name = "ecc_id"; //ログテキスト上のkeyの項目名
		$log_action = "add";

		insert_log($log_table,$key_val,$into_col,$into_val,$user_id,$key_name,$log_action);

		include $_SERVER["DOCUMENT_ROOT"]."/include/kagoya_check/takuhai/eoc_after_data_table/move_to_eva.php";

		// $log_table = "Eoc_takuhai";
		// if($last_id != ""){
		// 	$key_val = $last_id;
		// }else{
		// 	$key_val = $ecc_id;
		// }
		// $user_id = $uid;
		// $key_name = "ecc_id"; //ログテキスト上のkeyの項目名
		// $log_action = "add";

		// insert_log($log_table,$key_val,$into_col,$into_val,$user_id,$key_name,$log_action);


		?>
		<!-- <h2>成功しました。一覧ページへ戻ります。</h2>
		<h3>すみません！向山がいまシステム変更に伴うテスト中なので下記をクリックして一覧に戻ってください！</h3> -->
		<!-- →<a href="http://urlounge.co.jp/include/kagoya_check/takuhai/list.php">一覧に戻る</a>← -->

		<!-- <br><br><br><br>----------ここから下は触らないでください--------------<br><br> -->

		<!-- <a href="https://urlounge.co.jp/shop5/Eoc_takuhai_speed_list.php?orderby=did">集荷申込</a> -->
		<?
	}


?>
</pre>

