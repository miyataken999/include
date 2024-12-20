<?
// ini_set('display_errors', 1);
$id = $_GET["id"];
$type = $_GET["type"];
$requestno = $_GET["no"];
$haisou = $_GET['haisou'];
$user_id = $_GET['u_id'];

if($type == "update"){
	$title_text = "集荷データ更新";
	$submit_name = "update";
	$submit_text = "確認画面へ";
	$action = "confirm";
}elseif($type == "stop"){
	$title_text = "集荷依頼停止";
	$submit_name = "stop";
	$submit_text = "集荷依頼を停止する";
	$action = "result";
}elseif($type == "restart"){
	$title_text = "集荷依頼再開";
	$submit_name = "restart";
	$submit_text = "集荷依頼を再開する";
	$action = "result";
}else{
	$title_text = "新規集荷申し込み";
	$submit_text = "確認画面へ";
	$submit_name = "regist";
	$action = "confirm";
}
?>

<!DOCTYPE html>
<html>
<head>
<!--NO INDEX -->
<meta name="robots" content="noindex">
<!--/NO INDEX -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?=$title_text?>画面</title>
	<link rel="stylesheet" href="/include/kagoya_check/style.css">
	<link rel="stylesheet" href="/include/speed/form_style.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
<?
// include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header_shop5.php";
?>
<?
// ini_set("display_errors",1);
header("Content-Type:text/html; charset=UTF-8");

include_once $_SERVER["DOCUMENT_ROOT"]."/include/kagoya_check/function.php";
$now_time = date("Y/m/d H:i:s");

mb_internal_encoding("utf8");
// include $_SERVER["DOCUMENT_ROOT"]."/include/connection_kagoya.php";
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";
?>

<?
if($type == "update" || $type == "stop" || $type == "restart"){
	$query = "SELECT * FROM Eoc_takuhai WHERE speed_num = {$requestno} LIMIT 1";
}else{
	$query = "SELECT * FROM Eoc_takuhai WHERE id = {$id} LIMIT 1";
}
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);
$result = mysql_fetch_assoc($sql);

$status = $result['status'];

// var_dump($result);
if($type == "" && $status != 14){

$type_selection = $result['type_selection'];
$reuse_box = $result['reuse_box'];
$kit_detail = $result['kit_detail'];
$speed_box = $result['speed_box'];
$date_and_time_hidden = $result['date_and_time_hidden'];
$time_select_hidden = $result['time_select_hidden'];
$user_name = $result['user_name'];
$user_name_kana = $result['user_name_kana'];
$user_tel = $result['user_tel'];
$user_mail = $result['user_mail'];
$user_yuubinn = $result['user_yuubinn'];
$user_todou = $result['user_todou'];
$user_sikutyouson = $result['user_sikutyouson'];

$user_banti = $result['user_banti'];
$user_banti = mb_convert_kana($user_banti, 'A');
$user_banti = str_replace('-','－',$user_banti);
$user_banti = str_replace(" ","　",$user_banti);

$tel_mail_line = $result['tel_mail_line'];
// $bikou = $result['bikou'];
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

//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//データ生成
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★電話番号★★★★★★★★★★★★★★★★★★
	$tel_res = "";
	if((preg_match("/^03/",$user_tel)) or (preg_match("/^06/",$user_tel))){
		$user_tel = str_split($user_tel);
		$c_tel = count($user_tel);
		for ($i=0; $i < $c_tel; $i++) {
			$tel_res = $tel_res.$user_tel[$i];
			if(($i == 1) or ($i == 5)){
				$tel_res = $tel_res."-";
			}
		}
	}elseif((preg_match("/^070/",$user_tel)) or (preg_match("/^080/",$user_tel)) or (preg_match("/^090/",$user_tel)) or (preg_match("/^050/",$user_tel))){
		$user_tel = str_split($user_tel);
		$c_tel = count($user_tel);
		for ($i=0; $i < $c_tel; $i++) {
			$tel_res = $tel_res.$user_tel[$i];
			if(($i == 2) or ($i == 6)){
				$tel_res = $tel_res."-";
			}
		}
	}else{
		$tel_res = $user_tel;
	}

	$speed_box = str_replace("箱","",$speed_box);

	//★★★★★★★★★★★★★★★★★★希望集荷日時 分割★★★★★★★★★★★★★★★★★★
	if(stristr($date_and_time_hidden,"(")){
		$explode_str = "(";
	}else{
		$explode_str = " ";
		$date_and_time_hidden = str_replace("月","-",$date_and_time_hidden);
		$date_and_time_hidden = str_replace("日","",$date_and_time_hidden);
	}

		$date_and_time_hidden_array = explode($explode_str,$date_and_time_hidden);
		$speed_date = $date_and_time_hidden_array[0];
		$speed_date = str_replace("/","-",$speed_date);
		$speed_date_d = explode("-",$speed_date);
		$speed_date_m = $speed_date_d[0];
		$speed_date_m = str_pad($speed_date_d[0], 2, 0, STR_PAD_LEFT);
		$speed_date_d = str_pad($speed_date_d[1], 2, 0, STR_PAD_LEFT);
		$speed_date = $speed_date_m."-".$speed_date_d;
		$now_year = date('Y');
		$speed_date = date($now_year."-".$speed_date);



		$date_and_time_hidden_array_2 = explode(' ',$date_and_time_hidden);

		$speed_time = $date_and_time_hidden_array_2[1];

		// print "speed_time ".$speed_time;
		if($speed_time == "午前中"){
			$speed_time = '09-12';
		}elseif($speed_time == "13～15時"){
			$speed_time = '12-14';
		}elseif($speed_time == "15～17時"){
			$speed_time = '14-16';
		}elseif($speed_time == "17～19時"){
			$speed_time = '16-18';
		}elseif($speed_time == "最終枠"){
			$speed_time = '18-21';
		}
		// print "speed_time ".$speed_time;

	//★★★★★★★★★★★★★★★★★★希望集荷日時 分割★★★★★★★★★★★★★★★★★★
//★★★★★★★★★★★★★★★★★★電話番号★★★★★★★★★★★★★★★★★★
}else{
	$id = $result['id'];
	$speed_box = $result['speed_box'];
	$speed_box = str_replace("箱","",$speed_box);
	$user_name = $result['user_name'];
	$user_name_kana = $result['user_name_kana'];
	$tel_res = $result['user_tel'];
	$user_mail = $result['user_mail'];
	$user_yuubinn = $result['user_yuubinn'];
	$user_todou = $result['user_todou'];
	$user_sikutyouson = $result['user_address1'];
	$user_banti = $result['user_address2'];
	// $user_banti = str_replace(" ","　",$user_address2);
	// $bikou = $result['bikou'];
	$date_and_time_hidden = $result['date_and_time_hidden'];

	$explode_str = " ";
	$date_and_time_hidden_array = explode($explode_str,$date_and_time_hidden);
	$speed_date = $date_and_time_hidden_array[0];
	$speed_time = $date_and_time_hidden_array[1];
}

if($haisou == 'sagawa' OR $result['haisou_gyousha'] == '佐川急便'){
	include $_SERVER["DOCUMENT_ROOT"]."/include/speed/shuka_sagawa.php";
}else{
	include $_SERVER["DOCUMENT_ROOT"]."/include/speed/shuka_yamato.php";
}
?>


<script type="text/javascript">
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■//
// 半角⇒全角変換
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■//
	$(function() {

	$('#furikana').focus(function() {
        monitoring($(this));
    });
    $('#furikana').blur(function() {
        monitoringClear($(this));
    });
	$('#username').focus(function() {
        monitoring($(this));
    });
    $('#username').blur(function() {
        monitoringClear($(this));
    });
	$('#address1').focus(function() {
        monitoring($(this));
    });
    $('#address1').blur(function() {
        monitoringClear($(this));
    });
    $('#address2').focus(function() {
        monitoring($(this));
    });
    $('#address2').blur(function() {
        monitoringClear($(this));
    });
	$('#note').focus(function() {
        monitoring($(this));
    });
    $('#note').blur(function() {
        monitoringClear($(this));
    });

	});

	var monitoringTimer;
	// 入力エリアの監視
	function monitoring(ele) {
	    // 変更前の文字列
	    var before = ele.val();
	    // 現在の文字列
	    var current = ele.val();
	    monitoringTimer = setInterval(function() {
	        // 現在の文字列取得
	        current = ele.val();
	        // 変更があった場合
	        if(before != current) {
	            // 文字列の変換
	            current = convertStr(ele.val());
	            // 各値の上書き
	            before = current;
	            ele.val(current);
	        }
	    }, 10);
	}
	// 入力エリアの監視終了
	function monitoringClear(ele) {
	    clearInterval(monitoringTimer);
	}

	// 変換処理
	function convertStr(str) {
	    var halfStr = str.replace(/-/g, '―').replace(/ /g, '　').replace(/[A-Za-z0-9]/g, function(s) {
	        return String.fromCharCode(s.charCodeAt(0) + 65248);
	    });
	    return halfStr;
	}


//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■//
// 文字数カウント
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■//
$(function(){
	var def = $('#address1').val().length;
	$('.count_address1').html(def);
    $('#address1').bind('keydown keyup keypress change',function(){
        var thisValueLength = $(this).val().length;
        $('.count_address1').html(thisValueLength);
    	var countMax = 20;
    	if(thisValueLength > countMax){
    		$('.count_address1').css({color:'#ff0000',fontWeight:'bold'});
    		$('.alert_address1').html('文字数オーバーです！！！');
    		$('.alert_address1').css({color:'#ff0000',fontWeight:'bold'});
    		$('#address1').css({border:'5px solid #ff0000'});
    	}else{
    		$('.alert_address1').html('');
    		$('.count_address1').css({color:'#111',fontWeight:'normal'});
    		$('#address1').css({border:'0px solid #ff0000'});
    	}
    });
});

$(function(){
	var def = $('#address2').val().length;
	$('.count_address2').html(def);
    $('#address2').bind('keydown keyup keypress change',function(){
        var thisValueLength = $(this).val().length;
        $('.count_address2').html(thisValueLength);
    	var countMax = 20;
    	if(thisValueLength > countMax){
    		$('.count_address2').css({color:'#ff0000',fontWeight:'bold'});
    		$('.alert_address2').html('文字数オーバーです！');
    		$('.alert_address2').css({color:'#ff0000',fontWeight:'bold'});
    		$('#address2').css({border:'5px solid #ff0000'});
    	}else{
    		$('.alert_address2').html('');
    		$('.count_address2').css({color:'#111',fontWeight:'normal'});
    		$('#address2').css({border:'0px solid #ff0000'});
    	}
    });
});

$(function(){
	var def = $('#note').val().length;
	$('.count_note').html(def);
    $('#note').bind('keydown keyup keypress change',function(){
        var thisValueLength = $(this).val().length;
        $('.count_note').html(thisValueLength);
    	var countMax = 15;
    	if(thisValueLength > countMax){
    		$('.count_note').css({color:'#ff0000',fontWeight:'bold'});
    		$('.alert_note').html('文字数オーバーです！');
    		$('.alert_note').css({color:'#ff0000',fontWeight:'bold'});
    		$('#note').css({border:'5px solid #ff0000'});
    	}else{
    		$('.alert_note').html('');
    		$('.count_note').css({color:'#111',fontWeight:'normal'});
    		$('#note').css({border:'0px solid #ff0000'});
    	}
    });
});



</script>

</body>
</html>
