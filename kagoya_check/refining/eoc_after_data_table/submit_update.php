<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
header("Content-Type:text/html; charset=UTF-8");
include_once $_SERVER["DOCUMENT_ROOT"]."/include/kagoya_check/function.php";



// var_dump($_POST);
foreach ($_POST as $key => $value){
	$$key = str_replace("'","’",htmlspecialchars($value));
}


// if($kizon_purchase_type != $purchase_type){
// 	//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
// 	//顧客SEQ作成
// 	//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

// 	// ini_set("display_errors",1);
// 	/*********************************************************
// 	@値の初期設置
// 	**********************************************************/
// 	// $purchase_type;


// 	//買い取りタイプの取得（IDからの取得）
// 	$query = " SELECT purchaze_type FROM internet._purchase_type WHERE purchase_id={$purchase_type} LIMIT 1";
// 	$sql = mysql_query('SET NAMES utf8');
// 	$sql = mysql_query($query);
// 	$result = mysql_fetch_assoc($sql);
// 	$purchaze_type = $result["purchaze_type"];
// 	// print "purchaze_type ".$purchaze_type;

// 	//顧客IDの取得
// 	//問題 TとTKなどあると、LIKEだと0001になり下がる
// 	$where = " where ecc_seq like '%".$purchaze_type."%'";
// 	$query = "SELECT max(ecc_seq) as mecc_seq,max(ecc_id) as max from internet.Eoc ".$where;
// 	$sql = mysql_query('SET NAMES utf8');
// 	$sql = mysql_query($query);
// 	$result = mysql_fetch_assoc($sql);
// 	$mecc_seq = $result["mecc_seq"];

// 	//現在の顧客IDのカウントに1を足す
// 	$count =  intval(substr($mecc_seq,1,5));
// 	$count = $count + 1;

// 	//顧客IDを5ケタ0埋め
// 	$koban = $purchaze_type.str_pad($count, 5, "0", STR_PAD_LEFT);
// 	//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
// 	//END 顧客SEQ作成
// 	//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
// }




$up_col = "sagawa_shuuka_flag='{$sagawa_shuuka_flag}'";
$up_col .= ",rakuda_csv_flag='{$haisou_insatsu}'";
$up_col .= ",FLAG_SPEED='{$FLAG_SPEED}'";
$up_col .= ",kit_flag='{$kit_flag}'";
$up_col .= ",size_kosuu='{$kit_detail}'";
$up_col .= ",EOC_REUSE='{$reuse_box}'";
$up_col .= ",EOC_SIZE='{$kit_size}'";
$up_col .= ",EOC_NUMBER='{$kit_kosuu}'";
$up_col .= ",EOC_SPECIFIED_TIME='{$time_select}'";
if($speed_date != ""){
	$speed_date = str_replace("/","-",$speed_date)." 00:00:00";
}
$up_col .= ",EOC__DATE_AND_TIME_2='{$speed_date}'";
$up_col .= ",EOC__DELIVERY_DATES='{$speed_time}'";
$up_col .= ",EOC__BOX_NUMBER='{$speed_box}'";
// $up_col .= ",purchase_type='{$purchase_type}'";
$up_col .= ",name1='{$user_name_sei}　{$user_name_mei}'";
$up_col .= ",LAST_NAME2='{$user_name_sei}'";
$up_col .= ",FIRST_NAME2='{$user_name_mei}'";
$up_col .= ",name2='{$user_name_kana_sei}　{$user_name_kana_mei}'";
$up_col .= ",LAST_NAME_KANA='{$user_name_kana_sei}'";
$up_col .= ",FIRST_NAME_KANA='{$user_name_kana_mei}'";
$up_col .= ",tel='{$tel}'";
$up_col .= ",tel2='{$tel2}'";
$up_col .= ",mail1='{$user_mail1}'";
$up_col .= ",mail2='{$user_mail2}'";
$up_col .= ",mail_check_type='{$mail_magazin}'";
$up_col .= ",hentou_houhou='{$hentou_houhou}'";
$up_col .= ",zip1='{$user_yuubinn_1}'";
$up_col .= ",zip2='{$user_yuubinn_2}'";
$up_col .= ",address1='{$user_todou}'";
$up_col .= ",address2='{$user_sikutyouson}'";
$up_col .= ",address3='{$user_banti}'";
$up_col .= ",EOC_COURIER_CHECK='{$takuhai_check}'";
$up_col .= ",kaitori_staff_id='{$kaitori_staff_id}'";
$bikou = str_replace("★time★",$cv_time,$bikou);
$up_col .= ",remark='{$bikou}'";
$up_col .= ",key_code='{$key_code}'";
$up_col .= ",mousikomi_id='{$REMOTE_ADDR}'";
$up_col .= ",SEARCH_SITE='{$SEARCH_SITE}'";
$up_col .= ",SEARCH_MEDIA='{$SEARCH_MEDIA}'";
$up_col .= ",eoc_search_keyword='{$eoc_search_keyword}'";
$up_col .= ",updated_at=NOW()";
$up_col .= ",registerd_id='{$uid}'";
// $up_col .= ",ecc_seq='{$koban}'";



if($ecc_id != ""){
	//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	//up前データ取得
	//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	$db_name = "internet";
	$table = "Eoc";
	$key_name = "ecc_id";
	$key = $ecc_id;
	$before_data = data_select($db_name,$table,$key_name,$key);
	//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	//up前データ取得 END
	//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

	$query = "UPDATE internet.Eoc SET {$up_col} WHERE ecc_id={$ecc_id} ";
	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);

	//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	//up後データ取得
	//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	$db_name = "internet";
	$table = "Eoc";
	$key_name = "ecc_id";
	$key = $ecc_id;
	$after_data = data_select($db_name,$table,$key_name,$key);
	//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	//up後データ取得 END
	//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

	if (!$sql) {

	    //チャットワーク流す
		$text_table = "[info][title]Eoc自動反映クエリ失敗 ■ Eoctakuhai UPDATE[/title]";
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
	}else{
		//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
		//アップデートログ
		//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
		$log_table = "Eoc";
		if($last_id != ""){
			$key_val = $last_id;
		}else{
			$key_val = $ecc_id;
		}
		$user_id = $uid;
		$key_name = "ecc_id"; //ログテキスト上のkeyの項目名
		$log_action = "edit";
		update_log($before_data,$after_data,$log_table,$key_val,$up_col,$user_id,$key_name,$log_action);
		//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
		//アップデートログ END
		//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

		include $_SERVER["DOCUMENT_ROOT"]."/include/kagoya_check/takuhai/eoc_after_data_table/move_to_eva.php";
	}

}

?>



