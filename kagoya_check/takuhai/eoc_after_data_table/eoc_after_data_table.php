<!DOCTYPE html>
<html>
<head>
<!--NO INDEX -->
<meta name="robots" content="noindex">
<!--/NO INDEX -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>宅配データ比較画面</title>
	<link rel="stylesheet" href="/include/kagoya_check/style.css">
</head>
<body>
<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header_shop5.php";
?>


<?
// ini_set("display_errors",1);
header("Content-Type:text/html; charset=UTF-8");

include_once $_SERVER["DOCUMENT_ROOT"]."/include/kagoya_check/function.php";
$now_time = date("Y/m/d H:i:s");

mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection_kagoya.php";


$table_name = "Eoc_takuhai";

$target_table = "Eoc";

$kousin_id = htmlspecialchars($_GET['kousin_id']);
$hikaku_id = htmlspecialchars($_GET["hikaku_id"]);
$uid = htmlspecialchars($_GET["uid"]);

if($kousin_id == ""){
	print '対象データがありません。操作し直してください。';
	exit();
}
if($hikaku_id == ""){
	print '対象データがありません。操作し直してください。';
	exit();
}


	$query = 'SELECT COLUMN_NAME , COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_NAME=\''.$table_name.'\' ORDER BY ORDINAL_POSITION';

	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	mysql_error();
	$column_name = array();
	$column_comment = array();
	while ($schema_result = mysql_fetch_assoc($sql)) {
		array_push($column_name,$schema_result['COLUMN_NAME']);
		array_push($column_comment,$schema_result['COLUMN_COMMENT']);
	}

// var_dump($column_name);



?>

<?

	$query = 'SELECT * FROM internet.'.$table_name.' WHERE id='.$hikaku_id.' LIMIT 1';
	// print "<br>query ".$query;
	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	while ($result = mysql_fetch_assoc($sql)) {

		$type_selection = $result['type_selection'];
		$reuse_box = $result['reuse_box'];
		$kit_detail = $result['kit_detail'];
		$speed_box = $result['speed_box'];
		$date_and_time_hidden = $result['date_and_time_hidden'];
		$date_select_hidden = $result['date_select_hidden'];
		$time_select_hidden = $result['time_select_hidden'];
		$user_name = $result['user_name'];
		$user_name_kana = $result['user_name_kana'];
		$user_tel = $result['user_tel'];
		$user_mail = $result['user_mail'];
		$user_yuubinn = $result['user_yuubinn'];
		$user_todou = $result['user_todou'];
		$user_sikutyouson = $result['user_sikutyouson'];
		$user_banti = $result['user_banti'];
		$tel_mail_line = $result['tel_mail_line'];
		$bikou = $result['bikou'];
		$insurance_speed = $result['insurance_speed'];
		$insurance = $result['insurance'];
		$insurance_kingaku = $result['insurance_kingaku'];
		$line_satei = $result['line_satei'];
		$mail_magazin = $result['mail_magazin'];
		$anke_1 = $result['anke_1'];
		$anke_2 = $result['anke_2'];
		$anke_3 = $result['anke_3'];
		$REMOTE_HOST = $result['REMOTE_HOST'];
		$REMOTE_ADDR = $result['REMOTE_ADDR'];
		$USER_AGENT = $result['USER_AGENT'];
		$HTTP_REFERER = $result['HTTP_REFERER'];
		$key_code = $result['key_code'];
		$cv_site = $result['cv_site'];
		$cv_device = $result['cv_device'];
		$cv_page = $result['cv_page'];
		$cv_time = $result['cv_time'];
	}
?>


<?

//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//データ生成
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//スピード、ベーシック両方

	//★★★★★★★★★★★★★★★★★★電話番号★★★★★★★★★★★★★★★★★★
		// $tel_res = "";
		// if((preg_match("/^03/",$user_tel)) or (preg_match("/^06/",$user_tel))){
		// 	$user_tel = str_split($user_tel);
		// 	$c_tel = count($user_tel);
		// 	for ($i=0; $i < $c_tel; $i++) {
		// 		$tel_res = $tel_res.$user_tel[$i];
		// 		if(($i == 1) or ($i == 5)){
		// 			$tel_res = $tel_res."-";
		// 		}
		// 	}
		// }elseif((preg_match("/^070/",$user_tel)) or (preg_match("/^080/",$user_tel)) or (preg_match("/^090/",$user_tel)) or (preg_match("/^050/",$user_tel))){
		// 	$user_tel = str_split($user_tel);
		// 	$c_tel = count($user_tel);
		// 	for ($i=0; $i < $c_tel; $i++) {
		// 		$tel_res = $tel_res.$user_tel[$i];
		// 		if(($i == 2) or ($i == 6)){
		// 			$tel_res = $tel_res."-";
		// 		}
		// 	}
		// }else{
		// 	$tel_res = $user_tel;
		// }
		$tel_res = $user_tel;
	//★★★★★★★★★★★★★★★★★★電話番号★★★★★★★★★★★★★★★★★★

	//★★★★★★★★★★★★★★★★★★名前★★★★★★★★★★★★★★★★★★
		$user_name_array = explode("　",$user_name);
		$user_name_sei = $user_name_array[0];
		$user_name_mei = $user_name_array[1];
	//★★★★★★★★★★★★★★★★★★名前★★★★★★★★★★★★★★★★★★
	//★★★★★★★★★★★★★★★★★★フリガナ★★★★★★★★★★★★★★★★★★
		$user_name_kana_array = explode("　",$user_name_kana);
		$user_name_kana_sei = $user_name_kana_array[0];
		$user_name_kana_mei = $user_name_kana_array[1];
	//★★★★★★★★★★★★★★★★★★フリガナ★★★★★★★★★★★★★★★★★★
	//★★★★★★★★★★★★★★★★★★買取種別★★★★★★★★★★★★★★★★★★
	if(preg_match("/kinkaimasu.jp/",$HTTP_REFERER)){
		$purchase_type = '3';
	}elseif(preg_match("/diakaimasu.jp/",$HTTP_REFERER)){
		$purchase_type = '25';
	}elseif(preg_match("/brandkaimasu.com/",$HTTP_REFERER)){
		$purchase_type = '5';
	}else{
		$purchase_type = '3';
	}
	// print "purchase_type ".$purchase_type;
	//★★★★★★★★★★★★★★★★★★買取種別★★★★★★★★★★★★★★★★★★

	//★★★★★★★★★★★★★★★★★★返答方法★★★★★★★★★★★★★★★★★★
	if($tel_mail_line == '電話'){
		$tel_mail_line = '2';
	}elseif($tel_mail_line == 'メール'){
		$tel_mail_line = '1';
	}elseif($tel_mail_line == 'LINE'){
		$tel_mail_line = '5';
	}
	// print "tel_mail_line ".$tel_mail_line;
	//★★★★★★★★★★★★★★★★★★返答方法★★★★★★★★★★★★★★★★★★

	$speed_box = str_replace("箱","",$speed_box);

	// if(preg_match("/許可/",$mail_magazin)){
	// 	$mail_magazin = '2';
	// }else{
	// 	$mail_magazin = '1';
	// }
	//宅配フォームからメルマガ配信外し、強制的に許可フラグ。20180925 nishitani
	$mail_magazin = '2';

	$user_yuubinn_1 = substr($user_yuubinn,0,3);
	$user_yuubinn_2 = str_replace($user_yuubinn_1,"",$user_yuubinn);



if(preg_match("/ベーシック/",$type_selection)){
/////////////////////////////////////////////////////////////////
//ベーシック
	//配送印刷
	$haisou_insatsu = '0';
	//★★★★★★★★★★★★★★★★★★キット詳細から、サイズ、個数算出★★★★★★★★★★★★★★★★★★
		$kit_count = "";
		$kit_detail_array = "";
		$kit_size = "";
		$kit_kosuu = "";
		$kit_count = mb_substr_count($kit_detail,'：');
		if($kit_count == 1){
			if(preg_match("/伝票/",$kit_detail)){
				$kit_size = "伝票";
				$kit_detail_array = explode("：",$kit_detail);
				$kit_kosuu = str_replace('個','',$kit_detail_array[1]);
			}elseif(preg_match("/クッション/",$kit_detail)){
				$kit_size = "クッション封筒";
				$kit_detail_array = explode("：",$kit_detail);
				$kit_kosuu = str_replace('個','',$kit_detail_array[1]);
			}else{
				$kit_count = mb_substr_count($kit_detail,'ダンボール');
				if($kit_count == 1){
					$kit_detail_array = explode("：",$kit_detail);
					$kit_size = str_replace('ダンボール','',$kit_detail_array[0]);
					$kit_kosuu = str_replace('個','',$kit_detail_array[1]);
					$kit_kosuu = substr($kit_kosuu,0,1);
					// print "kit_kosuu:a".$kit_kosuu."a";
				}else{
					$kit_count = mb_substr_count($kit_detail,'サイズ');
					if($kit_count == 1){
						$kit_detail_array = explode("：",$kit_detail);
						$kit_size = str_replace('サイズ','',$kit_detail_array[0]);
						$kit_kosuu = str_replace('個','',$kit_detail_array[1]);
						$kit_kosuu = substr($kit_kosuu,0,1);
					}else{
						$kit_size = "その他";
					}
				}
			}
		}else{
			$kit_size = "その他";
		}
		$kit_kosuu = str_replace("\r\n","",$kit_kosuu);
	//★★★★★★★★★★★★★★★★★★キット詳細から、サイズ、個数算出★★★★★★★★★★★★★★★★★★

	//★★★★★★★★★★★★★★★★★★配送日時 分割★★★★★★★★★★★★★★★★★★
	if(stristr($time_select_hidden,"(")){
		$explode_str = "(";
	}else{
		$explode_str = " ";
		$time_select_hidden = str_replace("月","/",$time_select_hidden);
		$time_select_hidden = str_replace("日","",$time_select_hidden);
	}
		$time_select_hidden_array = explode($explode_str,$time_select_hidden);
		$speed_date = $time_select_hidden_array[0];
		$now_year = date('Y');
		$speed_date = date($now_year."/".$speed_date);


		$time_select_hidden_array_2 = explode(' ',$time_select_hidden);

		$time_select = $time_select_hidden_array_2[1];

	//★★★★★★★★★★★★★★★★★★時間帯指定★★★★★★★★★★★★★★★★★★
		// $time_select_hidden
		if($time_select_hidden == "午前中"){
			$time_select = '01';
		}elseif($time_select_hidden == "12～14時"){
			$time_select = '12';
		}elseif($time_select_hidden == "14～16時"){
			$time_select = '14';
		}elseif($time_select_hidden == "16～18時"){
			$time_select = '16';
		}elseif($time_select_hidden == "18～21時"){
			$time_select = '04';
		}
	//★★★★★★★★★★★★★★★★★★時間帯指定★★★★★★★★★★★★★★★★★★
		// print "time_select ".$time_select;

}else{
/////////////////////////////////////////////////////////////////
//スピード
	//配送印刷
	$haisou_insatsu = '0';
	//宅配チェック
	$takuhai_check = 'スピード';

	//★★★★★★★★★★★★★★★★★★希望集荷日時 分割★★★★★★★★★★★★★★★★★★
	if(stristr($date_and_time_hidden,"(")){
		$explode_str = "(";
	}else{
		$explode_str = " ";
		$date_and_time_hidden = str_replace("月","/",$date_and_time_hidden);
		$date_and_time_hidden = str_replace("日","",$date_and_time_hidden);
	}
		$date_and_time_hidden_array = explode($explode_str,$date_and_time_hidden);
		$speed_date = $date_and_time_hidden_array[0];
		$now_year = date('Y');
		$speed_date = date($now_year."/".$speed_date);


		$date_and_time_hidden_array_2 = explode(' ',$date_and_time_hidden);

		$speed_time = $date_and_time_hidden_array_2[1];

		// print "speed_time ".$speed_time;
		if($speed_time == "午前中"){
			$speed_time = '01';
		}elseif($speed_time == "12～14時"){
			$speed_time = '12-14';
		}elseif($speed_time == "14～16時"){
			$speed_time = '14-16';
		}elseif($speed_time == "16～18時"){
			$speed_time = '16-18';
		}elseif($speed_time == "18～21時"){
			$speed_time = '18-21';
		}
		// print "speed_time ".$speed_time;

	//★★★★★★★★★★★★★★★★★★希望集荷日時 分割★★★★★★★★★★★★★★★★★★




}
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//データ生成 END
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

$close_flag = mysql_close($link);
if ($close_flag){
// print('<br>切断に成功しました。<br>');
}
$close_flag = mysql_close($link_internet);
if ($close_flag){
// print('<br>切断に成功しました。<br>');
}



include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";



$eoc_up_col = array();

if($kousin_id == "new"){
	include 'type_insert.php';
}else{
	include 'type_update.php';
}
?>

<div class="return_btn">
	<a href="/include/kagoya_check/takuhai/list.php" >一覧へ戻る</a>
</div>

</body>
</html>
