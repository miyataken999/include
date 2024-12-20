<?
// ini_set("display_errors",1);
$table_name = "Eoc_takuhai";
$target_table = "Eoc";

if($_GET["table_name"] != ""){
	$table_name = htmlspecialchars($_GET["table_name"]);
}

include_once $_SERVER["DOCUMENT_ROOT"]."/include/kagoya_check/function.php";

?>
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


if($_GET["hikaku_id"] != ""){
	$hikaku_id = htmlspecialchars($_GET["hikaku_id"]);
}else{
	print "対象データがありません。<a href='/include/kagoya_check/takuhai/Eoc_takuhai_list.php?table_name=Eoc_takuhai'>一覧ページに戻る</a>";
	exit();
}



mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection_kagoya.php";
?>


<?
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


<table cellpadding="0" cellspacing="0" id="main_table">
	<tr>
<?
for ($column_i=0; $column_i < count($column_name); $column_i++) {
	if($column_name[$column_i] == "date_and_time"){continue;}
	if($column_name[$column_i] == "date_select"){continue;}
	if($column_name[$column_i] == "time_select"){continue;}
	if($column_name[$column_i] == "mail_text"){continue;}
?>
		<th class="th_<?=$column_name[$column_i]?> col_<?=$column_name[$column_i]?>"><span><?=$column_comment[$column_i]?></span></th>
<?
}
?>
	</tr>
<?
	$query = 'SELECT * FROM internet.'.$table_name.' WHERE id='.$hikaku_id.' LIMIT 1';
	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	while ($result = mysql_fetch_assoc($sql)) {
?>
	<tr>
<?
		for ($column_i=0; $column_i < count($column_name); $column_i++) {
			$column_val = "";
			// $column_val = mb_strimwidth($result[$column_name[$column_i]], 0, 100, "...");
			$column_val = $result[$column_name[$column_i]];
			$column_val = str_replace("\r\n",'',$column_val);
			if($column_name[$column_i] == "date_and_time"){continue;}
			if($column_name[$column_i] == "date_select"){continue;}
			if($column_name[$column_i] == "time_select"){continue;}
			if($column_name[$column_i] == "mail_text"){continue;}
			if($column_name[$column_i] == "user_mail"){$user_mail = $column_val;}
			if($column_name[$column_i] == "user_name_kana"){$user_name_kana = $column_val;}
			if($column_name[$column_i] == "user_tel"){$user_tel = $column_val;}
			if($column_name[$column_i] == "user_name"){$user_name = $column_val;}
?>
		<td class="td_<?=$column_name[$column_i]?> col_<?=$column_name[$column_i]?>"><span id="<?=$column_name[$column_i]?>_data" data="<?=$column_val?>"><?=$column_val?></span></td>
<?
		}
?>
	</tr>
<?
	}
?>

</table>

<?
$close_flag = mysql_close($link);
if ($close_flag){
// print('<br>切断に成功しました。<br>');
}
$close_flag = mysql_close($link_internet);
if ($close_flag){
// print('<br>切断に成功しました。<br>');
}
?>





<h3 id="takuhai_eoc_sakaime">
	↓↓↓検索結果↓↓↓
</h3>


















<?
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

$eoc_column_name = array();
	array_push($eoc_column_name,array('name'=>'ecc_id','wamei'=>'顧客SEQ'));
	// array_push($eoc_column_name,array('name'=>'UN_REACHABLE','wamei'=>'到着'));
	// array_push($eoc_column_name,array('name'=>'FLAG_SPEED','wamei'=>'スピード'));
	// array_push($eoc_column_name,array('name'=>'ALLSEIYAKU','wamei'=>'全成約'));
	// array_push($eoc_column_name,array('name'=>'ICHIBUSEIYAKU','wamei'=>'一部成約'));
	// array_push($eoc_column_name,array('name'=>'FLG_MAIL_SAGAWA','wamei'=>'佐川'));
	// array_push($eoc_column_name,array('name'=>'FLG_MAIL_OTHER','wamei'=>'その他'));
	// array_push($eoc_column_name,array('name'=>'seiyakukin','wamei'=>'成約金額'));
	array_push($eoc_column_name,array('name'=>'rakuda_csv_flag','wamei'=>'配送印刷'));
	array_push($eoc_column_name,array('name'=>'size_kosuu','wamei'=>'キット種別'));
	// array_push($eoc_column_name,array('name'=>'sagawa_shuuka_flag','wamei'=>'佐川集荷依頼'));
	// array_push($eoc_column_name,array('name'=>'haisou_bangou','wamei'=>'配送番号'));
	array_push($eoc_column_name,array('name'=>'EOC_REUSE','wamei'=>'再利用'));
	array_push($eoc_column_name,array('name'=>'EOC_SIZE','wamei'=>'サイズ'));
	array_push($eoc_column_name,array('name'=>'EOC_NUMBER','wamei'=>'個数'));
	array_push($eoc_column_name,array('name'=>'EOC_SPECIFIED_TIME','wamei'=>'時間帯指定'));
	array_push($eoc_column_name,array('name'=>'EOC__DATE_AND_TIME_2','wamei'=>'日時'));
	array_push($eoc_column_name,array('name'=>'EOC__DELIVERY_DATES','wamei'=>'集荷日時'));
	array_push($eoc_column_name,array('name'=>'EOC__BOX_NUMBER','wamei'=>'箱数'));
	array_push($eoc_column_name,array('name'=>'purchase_type','wamei'=>'買取種別'));
	array_push($eoc_column_name,array('name'=>'ecc_seq','wamei'=>'顧客番号'));
	array_push($eoc_column_name,array('name'=>'name1','wamei'=>'名前'));
	array_push($eoc_column_name,array('name'=>'name2','wamei'=>'フリガナ'));
	array_push($eoc_column_name,array('name'=>'option5','wamei'=>'性別'));
	array_push($eoc_column_name,array('name'=>'tel','wamei'=>'電話'));
	array_push($eoc_column_name,array('name'=>'tel2','wamei'=>'携帯'));
	array_push($eoc_column_name,array('name'=>'mail1','wamei'=>'メアド'));
	array_push($eoc_column_name,array('name'=>'mail2','wamei'=>'メアド2'));
	array_push($eoc_column_name,array('name'=>'mail_check_type','wamei'=>'メルマガ拒否'));
	array_push($eoc_column_name,array('name'=>'zip1','wamei'=>'郵便番号'));
	array_push($eoc_column_name,array('name'=>'zip2','wamei'=>'郵便番号2'));
	array_push($eoc_column_name,array('name'=>'address1','wamei'=>'都道府県'));
	array_push($eoc_column_name,array('name'=>'address2','wamei'=>'市区町村'));
	array_push($eoc_column_name,array('name'=>'address3','wamei'=>'以下住所'));
	array_push($eoc_column_name,array('name'=>'EOC_COURIER_CHECK','wamei'=>'宅配チェック'));
	array_push($eoc_column_name,array('name'=>'kaitori_staff_id','wamei'=>'買取者'));
	array_push($eoc_column_name,array('name'=>'line_check','wamei'=>'ライン本確'));
	// array_push($eoc_column_name,array('name'=>'remark','wamei'=>'備考'));
	array_push($eoc_column_name,array('name'=>'bank_name','wamei'=>'金融機関名'));
	array_push($eoc_column_name,array('name'=>'_registerd_id','wamei'=>'顧客登録者'));
	array_push($eoc_column_name,array('name'=>'created_t','wamei'=>'顧客登録日'));
	array_push($eoc_column_name,array('name'=>'updated_at','wamei'=>'更新日'));
	array_push($eoc_column_name,array('name'=>'registerd_id','wamei'=>'更新者'));
	array_push($eoc_column_name,array('name'=>'sagawa_shuukairai_denwabangou','wamei'=>'佐川集荷依頼電話番号'));
	array_push($eoc_column_name,array('name'=>'kaitori_sougak','wamei'=>'買取総額'));
	array_push($eoc_column_name,array('name'=>'flag','wamei'=>'その他'));


$eoc_select = "";
for ($eoc_column_name_i=0; $eoc_column_name_i < count($eoc_column_name); $eoc_column_name_i++) {
	if($eoc_select != ""){
		$eoc_select .= ",";
	}
	$eoc_select .= $eoc_column_name[$eoc_column_name_i]['name'];
}


// print $eoc_select;

$user_name_no_space = str_replace("　","",$user_name);
$user_name_no_space = str_replace(" ","",$user_name_no_space);
$user_name_kana_no_space = str_replace("　","",$user_name_kana);
$user_name_kana_no_space = str_replace(" ","",$user_name_kana_no_space);
//★★★★★★★★★★★★★★★★★★電話番号★★★★★★★★★★★★★★★★★★
	$default_tel = $user_tel;
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
	}
	$tel_res = str_replace("--","-",$tel_res);
//★★★★★★★★★★★★★★★★★★電話番号★★★★★★★★★★★★★★★★★★

	$eoc_query = 'SELECT COUNT(ecc_id) FROM Eoc WHERE mail1=\''.$user_mail.'\'';
	$eoc_query .= 'OR mail2=\''.$user_mail.'\'';
	$eoc_query .= 'OR name1=\''.$user_name.'\'';
	$eoc_query .= 'OR name1=\''.$user_name_no_space.'\'';
	$eoc_query .= 'OR CONCAT(LAST_NAME2,FIRST_NAME2)=\''.$user_name_no_space.'\'';//新規追加行
	$eoc_query .= 'OR REPLACE(name1,\' \',\'\')=\''.$user_name_no_space.'\'';
	$eoc_query .= 'OR REPLACE(name1,\'　\',\'\')=\''.$user_name_no_space.'\'';
	$eoc_query .= 'OR name2=\''.$user_name_kana.'\'';
	$eoc_query .= 'OR name2=\''.$user_name_kana_no_space.'\'';
	$eoc_query .= 'OR CONCAT(LAST_NAME_KANA,FIRST_NAME_KANA)=\''.$user_name_kana_no_space.'\'';//新規追加行
	$eoc_query .= 'OR REPLACE(name2,\' \',\'\')=\''.$user_name_kana_no_space.'\'';
	$eoc_query .= 'OR REPLACE(name2,\'　\',\'\')=\''.$user_name_kana_no_space.'\'';
	$eoc_query .= 'OR tel=\''.$default_tel.'\'';
	$eoc_query .= 'OR tel2=\''.$default_tel.'\'';
	if($tel_res != ""){
		$eoc_query .= 'OR tel=\''.$tel_res.'\'';
		$eoc_query .= 'OR tel2=\''.$tel_res.'\' ';
	}
	$eoc_sql = mysql_query('SET NAMES utf8');
	$eoc_sql = mysql_query($eoc_query);
	$count_res = mysql_fetch_assoc($eoc_sql);
	// print "saaaaa".$count_res['COUNT(ecc_id)'];
	$up_type = "";
	if($count_res['COUNT(ecc_id)'] < 1){
		print "合致する顧客が居ません。新規顧客獲得です！";
		$up_type = "add";
	}else{
		print $count_res['COUNT(ecc_id)']."人発見しました！！";
		$up_type = "update";
	}




	$eoc_query = "SELECT {$eoc_select} FROM Eoc WHERE mail1='{$user_mail}'";
	$eoc_query .= " OR mail2='{$user_mail}'";
	$eoc_query .= " OR name1='{$user_name}'";
	$eoc_query .= " OR name1='{$user_name_no_space}'";
	$eoc_query .= " OR CONCAT(LAST_NAME2,FIRST_NAME2)='{$user_name_no_space}'";//新規追加行
	$eoc_query .= " OR name2='{$user_name_kana}'";
	$eoc_query .= " OR name2='{$user_name_kana_no_space}'";
	$eoc_query .= " OR CONCAT(LAST_NAME_KANA,FIRST_NAME_KANA)='{$user_name_kana_no_space}'";//新規追加行
	$eoc_query .= " OR tel='{$user_tel}'";
	$eoc_query .= " OR tel2='{$user_tel}'";
	if($tel_res != ""){
		$eoc_query .= " OR tel='{$tel_res}'";
		$eoc_query .= " OR tel2='{$tel_res}'";
	}
	$eoc_query .= " ORDER BY ecc_id DESC LIMIT 50";


	// print $eoc_query;
	$eoc_sql = mysql_query('SET NAMES utf8');
	$eoc_sql = mysql_query($eoc_query);
?>

<table cellpadding="0" cellspacing="0" id="eoc_table">
	<tr>
		<th><span>選択</span></th>
<?
	for ($eoc_column_name_i=0; $eoc_column_name_i < count($eoc_column_name); $eoc_column_name_i++) {
?>
		<th class="th_<?=$eoc_column_name[$eoc_column_name_i]['name']?> td_<?=$eoc_column_name[$eoc_column_name_i]['name']?>"><span><?=$eoc_column_name[$eoc_column_name_i]['wamei']?></span></th>
<?
	}
?>
	</tr>
	<tr class="ecc_row">
		<td class="kousin_id_box"><span><input class="kousin_id" type="radio" name="kousin_id" value="new" form='Eoc_takuhai_up_Eoc'></span></td>
		<td colspan="37" id="sinki_td"><span>新規追加</span></td>
	</tr>

<?
	// mysql_error();
	while ($eoc_result = mysql_fetch_assoc($eoc_sql)) {
?>
	<tr class="ecc_row">
		<td class="kousin_id_box"><span><input class="kousin_id" type="radio" name="kousin_id" value="<?=$eoc_result['ecc_id']?>" form='Eoc_takuhai_up_Eoc'></span></td>
<?
		for ($eoc_column_name_i=0; $eoc_column_name_i < count($eoc_column_name); $eoc_column_name_i++) {
?>
		<td class="td_<?=$eoc_column_name[$eoc_column_name_i]['name']?> col_<?=$eoc_column_name[$eoc_column_name_i]['name']?>"><span>
			<?
			if(($eoc_column_name[$eoc_column_name_i]['name'] == '_registerd_id') OR
			($eoc_column_name[$eoc_column_name_i]['name'] == 'kaitori_staff_id') OR
			($eoc_column_name[$eoc_column_name_i]['name'] == 'registerd_id')
			){
				$user___id = $eoc_result[$eoc_column_name[$eoc_column_name_i]['name']];
				user_name_change($user___id);
				$user___id = "";
			}elseif($eoc_column_name[$eoc_column_name_i]['name'] == 'purchase_type'){
				$query = "SELECT purchase_name FROM _purchase_type WHERE purchase_id={$eoc_result[$eoc_column_name[$eoc_column_name_i]['name']]}";
				$sql = mysql_query('SET NAMES utf8');
				$sql = mysql_query($query);
				$result = mysql_fetch_assoc($sql);
				print $result['purchase_name'];
			}elseif($eoc_column_name[$eoc_column_name_i]['name'] == 'mail_check_type'){
				$query = "SELECT mail_check_name FROM _mail_check_type WHERE mail_check_id={$eoc_result[$eoc_column_name[$eoc_column_name_i]['name']]}";
				$sql = mysql_query('SET NAMES utf8');
				$sql = mysql_query($query);
				$result = mysql_fetch_assoc($sql);
				print $result['mail_check_name'];
			}elseif(($eoc_column_name[$eoc_column_name_i]['name'] == 'rakuda_csv_flag') OR ($eoc_column_name[$eoc_column_name_i]['name'] == 'line_check')){
				check_img($eoc_result[$eoc_column_name[$eoc_column_name_i]['name']]);
			}elseif($eoc_column_name[$eoc_column_name_i]['name'] == 'kaitori_sougak'){
				print number_format($eoc_result[$eoc_column_name[$eoc_column_name_i]['name']]).'円';
			}else{
				print $eoc_result[$eoc_column_name[$eoc_column_name_i]['name']];
			}
			?>
		</span></td>
<?
		}
?>
	</tr>
<?
	}
?>
</table>


<!-- <form id="Eoc_takuhai_up_Eoc" action="Eoc_takuhai_up_Eoc.php" method="post" >
	<input type="radio" name="up_action" value="add" id="up_action_add" <?if($up_type == "add"){?>checked<?}?>>
	<label for="up_action_add">新規追加</label>
	<input type="radio" name="up_action" value="update" id="up_action_update" <?if($up_type == "update"){?>checked<?}?>>
	<label for="up_action_update">更新確認</label>
	<input type="hidden" name="hikaku_id" value="<?=$hikaku_id?>">
	<input id="to_Eoc_submit" type="submit" name="" value="上記内容で送信する">
</form> -->




<div id="sousin_name_box">
	選択対象
	<div id="sousin_name"></div>

	<form action="/include/kagoya_check/takuhai/eoc_after_data_table/eoc_after_data_table.php" method="get" accept-charset="utf-8">
		<input type="hidden" name="hikaku_id" value="<?=$hikaku_id?>">
		<input type="hidden" name="uid" value="<?=$uid?>">
		<input type="hidden" name="kousin_id" id="kousin_id_data" value="new">
		<input type="submit" name="" value="編集開始！">
	</form>

</div>

<div class="return_btn">
	<a href="/include/kagoya_check/takuhai/list.php" >一覧へ戻る</a>
</div>


<!-- <h3>↓↓↓送信内容↓↓↓</h3> -->


<div id="eoc_after_data_table_box"></div>





<script type="text/javascript">

$(window).load(function(){
	$(".kousin_id:first").prop("checked",true);



	//changeでid送付、ajaxで結果戻し、インライン編集したものを送信、insert OR update



	// $up_eoc_id = "";
	// $("#eoc_table").find("td").click(function(){
	// 	$(this).siblings('.kousin_id_box').find("input").prop("checked",true);
	// 	$up_eoc_id = $(this).siblings('.kousin_id_box').find("input").val();
	// 	// alert("up_eoc_id "+$up_eoc_id);
	// 	if($up_eoc_id != ""){
	// 		$("#eoc_after_data_table_box").load("/include/kagoya_check/takuhai/eoc_after_data_table/eoc_after_data_table.php?hikaku_id=<?=$hikaku_id?>&kousin_id="+$up_eoc_id+"&uid=<?=$uid?>");
	// 		if($up_eoc_id == "new"){
	// 			// alert("新規追加ajax開始");
	// 		}else{
	// 			// alert("更新ajax開始");
	// 		}
	// 	}
	// });


	$up_eoc_id = "";
	$up_eoc_name = "";
	$("#eoc_table").find("td").click(function(){
		$(this).siblings('.kousin_id_box').find("input").prop("checked",true);
		$up_eoc_id = $(this).siblings('.kousin_id_box').find("input").val();
		$up_eoc_name = $(this).siblings('.td_name1').text();

		// alert("up_eoc_id "+$up_eoc_id);
		if($up_eoc_id != ""){
			if($up_eoc_name == ""){
				$up_eoc_name = "新規追加";
			}
			$("#sousin_name").text($up_eoc_id+$up_eoc_name);
			$("#kousin_id_data").val($up_eoc_id);
		}
	});


	$("#sinki_td").click();







})
</script>










</body>
</html>
