gt
<?
// ini_set("display_errors",1);
$table_name = "Eoc_guestquestion";
?>
<!DOCTYPE html>
<html>
<head>
<!--NO INDEX -->
<meta name="robots" content="noindex">
<!--/NO INDEX -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>【更新画面】買取サイトアンケート</title>
	<link rel="stylesheet" href="/include/kagoya_check/style.css">
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<?
// include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header_shop5.php";
// include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/header.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/include/kagoya_check/function.php";

//権限ファイル
include "./auth.php";

?>


<?
mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection_kagoya.php";
?>
<a class="list_type_btn" href="https://rifa.life/shop5/Eoc_guestquestion_list.php" >大枠修正</a>
<a class="list_type_btn" href="https://rifa.life/kagoya/Eoc_guestquestion_list.php" >小窓修正</a>



<a class="list_type_btn" href="/include/kagoya_check/guestquestion/list.php" >未処理一覧</a>
<a class="list_type_btn" href="/include/kagoya_check/guestquestion/list.php?type=unknown" >不明処理一覧</a>
<a class="list_type_btn" href="/include/kagoya_check/guestquestion/list.php?type=syorizumi" >処理済</a>
<!-- <a class="list_type_btn" href="https://rifa.life/newshop2/voice_sub_list.php" >voice sub</a> -->
<a class="list_type_btn" href="/shop5/Eoc_guestquestion_list.php" >アンケート一覧</a>

<a class="list_type_btn" href="/kagoya/Eoc_guestquestion_list.php">アンケート元データ一覧(kagoyaEVA)</a>


<?
	$column_name = array();
	$column_comment = array();

	// $query = 'SELECT COLUMN_NAME , COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_NAME=\''.$table_name.'\' ORDER BY ORDINAL_POSITION';

	// $sql = mysql_query('SET NAMES utf8');
	// $sql = mysql_query($query);
	// mysql_error();
	// while ($schema_result = mysql_fetch_assoc($sql)) {
	// 	array_push($column_name,$schema_result['COLUMN_NAME']);
	// 	array_push($column_comment,$schema_result['COLUMN_COMMENT']);
	// }

	// array_push($column_name,'eva_id');array_push($column_comment,'アンケートID');
	array_push($column_name,'ecc_id');array_push($column_comment,'顧客SEQ');
	array_push($column_name,'id');array_push($column_comment,'');
	array_push($column_name,'site-reflect');array_push($column_comment,'サイト反映');
	array_push($column_name,'voice_sub_id_reflect');array_push($column_comment,'voice反映');
	array_push($column_name,'voice_sub_id');array_push($column_comment,'voice_sub_id');
	array_push($column_name,'service-satisfied');array_push($column_comment,'満足度');
	array_push($column_name,'timestamp');array_push($column_comment,'送信日時');
	array_push($column_name,'freely-write-text');array_push($column_comment,'その他要望・指摘');
	array_push($column_name,'a-word-text');array_push($column_comment,'担当者に一言');
	array_push($column_name,'customer-address');array_push($column_comment,'都道府県');
	array_push($column_name,'customer-sex');array_push($column_comment,'性別');
	array_push($column_name,'customer-age');array_push($column_comment,'年代');
	array_push($column_name,'service-name');array_push($column_comment,'買取種類');
	array_push($column_name,'service-name-text');array_push($column_comment,'その他テキスト');
	array_push($column_name,'service-story');array_push($column_comment,'売却経緯');
	array_push($column_name,'service-story-text');array_push($column_comment,'その他テキスト');
	array_push($column_name,'sold-this-time');array_push($column_comment,'売却結果');
	array_push($column_name,'cancel-reason');array_push($column_comment,'キャンセル理由');
	array_push($column_name,'cancel-reason-text');array_push($column_comment,'その他テキスト');
	array_push($column_name,'other-reason-text');array_push($column_comment,'『なんとなく』『金額以外の理由』');
	array_push($column_name,'how-much-cheap');array_push($column_comment,'『他店より安かった』');
	array_push($column_name,'how-much-cheap-text');array_push($column_comment,'その他テキスト');
	array_push($column_name,'dissatisfied-reason-text');array_push($column_comment,'『不満』理由');
	array_push($column_name,'service-speed');array_push($column_comment,'スピード');
	array_push($column_name,'service-speed-text');array_push($column_comment,'その他テキスト');
	array_push($column_name,'service-description');array_push($column_comment,'説明');
	array_push($column_name,'service-description-text');array_push($column_comment,'その他テキスト');
	array_push($column_name,'site-level');array_push($column_comment,'サイトの質');
	array_push($column_name,'site-level-text');array_push($column_comment,'その他テキスト');
	array_push($column_name,'choice-reason-text');array_push($column_comment,'選んだ理由');
	array_push($column_name,'search-keyword');array_push($column_comment,'検索ワード');
	array_push($column_name,'search-keyword-text');array_push($column_comment,'その他テキスト');
	array_push($column_name,'search-engine');array_push($column_comment,'検索エンジン');
	array_push($column_name,'search-engine-text');array_push($column_comment,'その他テキスト');
	array_push($column_name,'search-medium');array_push($column_comment,'検索媒体');
	array_push($column_name,'search-medium-text');array_push($column_comment,'その他テキスト');
	array_push($column_name,'mail-or-tel-text');array_push($column_comment,'メアドOR電話');
	array_push($column_name,'comment_agree');array_push($column_comment,'コメント許可');

	array_push($column_name,'domain');array_push($column_comment,'入力サイト');
	array_push($column_name,'device');array_push($column_comment,'入力デバイス');

	array_push($column_name,'updated_at');array_push($column_comment,'最終更新');
	// var_dump($column_name);



if($_GET["type"] == "unknown"){
	$where = "WHERE ecc_id=0 ";
}elseif($_GET["type"] == "syorizumi"){
	$where = "WHERE ecc_id>0 ";
}else{
	$where = "WHERE ecc_id IS NULL ";
}


	$query = "SELECT COUNT(id) FROM internet.{$table_name} {$where}";

	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	$count_res = mysql_fetch_assoc($sql);
	$count = $count_res["COUNT(id)"];



?>


<div id="total_count">合計：<?=$count?>件</div>

<table cellpadding="0" cellspacing="0" id="main_table">
	<tr>
<?
for ($column_i=0; $column_i < count($column_name); $column_i++) {
	if($column_name[$column_i] == "date_and_time"){continue;}
	if($column_name[$column_i] == "time_select"){continue;}
	if($column_name[$column_i] == "mail_text"){continue;}

			if($column_name[$column_i] == "id"){
?>
		<th class="th_<?=$column_name[$column_i]?> col_<?=$column_name[$column_i]?>"><span><?=$column_comment[$column_i]?></span></th>
		<th class="th_kensaku col_kensaku"><span>対象発掘</span></th>
		<th class="th_voice_edit col_voice_edit"><span></span></th>
		<th class="th_kensaku col_kensaku"><span></span></th>
		<!-- <th class="th_kensaku col_kensaku"><span>対象発掘</span></th> -->
<?
			}elseif($column_name[$column_i] == "ecc_id"){
?>
		<th class="th_ecc_id col_ecc_id"><span>顧客SEQ</span></th>
		<th class="th_ecc_id col_ecc_id"><span>金査最終作成者</span></th>
		<th class="th_ecc_id col_ecc_id"><span>査物最終査定人</span></th>
<?
			}else{

?>
		<th class="th_<?=$column_name[$column_i]?> col_<?=$column_name[$column_i]?>"><span><?=$column_comment[$column_i]?></span></th>
<?
			}
}
?>
	</tr>
<?


	$query = "SELECT * FROM internet.{$table_name} {$where} ORDER BY id DESC LIMIT 100";

	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	while ($result = mysql_fetch_assoc($sql)) {
		$flag = "";
		if($result["site-reflect"] == 1){
			$flag = "reflect_ok";
		}elseif($result["site-reflect"] == 2){
			$flag = "reflect_ng";
		}else{
			$flag = "reflect_no";
		}

		$voice_flag = "";
		if($result["voice_sub_id"] != ""){
			$voice_flag = "voice_sub_ok";
		}else{
			$voice_flag = "";
		}



?>
	<tr class="<?=$flag?> <?=$voice_flag?>">
<?
		for ($column_i=0; $column_i < count($column_name); $column_i++) {
			$column_val = "";
			// $column_val = mb_strimwidth($result[$column_name[$column_i]], 0, 100, "...");
			$column_val = $result[$column_name[$column_i]];
			$column_val = str_replace("\r\n",'',$column_val);

			// if($column_name[$column_i] == "date_and_time"){continue;}
			// if($column_name[$column_i] == "time_select"){continue;}
			// if($column_name[$column_i] == "mail_text"){continue;}


			if($column_name[$column_i] == "id"){
				$id = $column_val;
?>
		<td class="td_<?=$column_name[$column_i]?> col_<?=$column_name[$column_i]?>"><span><?=$column_val?></span></td>
		<td class="th_kensaku col_kensaku"><span class="reflect_label"><a href="/include/kagoya_check/guestquestion/hikaku_list.php?hikaku_id=<?=$column_val?>">対象発掘</a></span></td>
		<!-- <td class="td_<?=$column_name[$column_i]?> col_<?=$column_name[$column_i]?>"><span class="delete_label" data="<?=$column_val?>">削除</span></td> -->
		<td class="td_<?=$column_name[$column_i]?> col_<?=$column_name[$column_i]?>">
			<span class="reflect_label"><a href='/include/kagoya_check/guestquestion/eoc_after_data_table/reflect.php?reflect_id=<?=$column_val?>&reflect_num=1' >小窓反映</a></span>
			<span class="reflect_label"><a href='/include/kagoya_check/guestquestion/eoc_after_data_table/reflect.php?reflect_id=<?=$column_val?>&reflect_num=2' >NG</a></span>
		</td>
		<td class="td_voice_edit col_voice_edit"><span class="reflect_label"><a href='/include/kagoya_check/guestquestion/eoc_after_data_table/voice_edit.php?voice_edit_id=<?=$column_val?>' >voice編集</a></span></td>
		<!-- <td class="td_<?=$column_name[$column_i]?> col_<?=$column_name[$column_i]?>"><span><a href='/include/kagoya_check/guestquestion/hikaku_list.php?hikaku_id=<?=$column_val?>' >対象発掘</a></span></td> -->
<?
			}elseif($column_name[$column_i] == "ecc_id"){

				include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";
				include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

				$ecc_satei_query = "SELECT satei_by FROM shouhin WHERE ecc_id={$column_val} ORDER BY updated_at DESC LIMIT 1";
				$ecc_satei_sql = mysql_query('SET NAMES utf8');
				$ecc_satei_sql = mysql_query($ecc_satei_query);
				$ecc_satei_result = mysql_fetch_array($ecc_satei_sql);
				$ecc_satei = $ecc_satei_result["satei_by"];

				$staff_query = "SELECT first_name FROM users WHERE user_id={$ecc_satei} LIMIT 1";
				$staff_sql = mysql_query('SET NAMES utf8');
				$staff_sql = mysql_query($staff_query);
				$staff_result = mysql_fetch_array($staff_sql);
				$ecc_satei = $staff_result["first_name"];

				$ecc_chigin_query = "SELECT created_by FROM Eoc_chigins2 WHERE chigin_ecc_id={$column_val} ORDER BY create_at DESC LIMIT 1";
				$ecc_chigin_sql = mysql_query('SET NAMES utf8');
				$ecc_chigin_sql = mysql_query($ecc_chigin_query);
				$ecc_chigin_result = mysql_fetch_array($ecc_chigin_sql);
				$ecc_chigin = $ecc_chigin_result["created_by"];

				$staff_query = "SELECT first_name FROM users WHERE user_id={$ecc_chigin} LIMIT 1";
				$staff_sql = mysql_query('SET NAMES utf8');
				$staff_sql = mysql_query($staff_query);
				$staff_result = mysql_fetch_array($staff_sql);
				$ecc_chigin = $staff_result["first_name"];

?>
		<td class="td_ecc_id col_ecc_id"><span><?=$column_val?></span></td>
		<td class="td_ecc_id col_ecc_id"><span><?=$ecc_chigin?></span></td>
		<td class="td_ecc_id col_ecc_id"><span><?=$ecc_satei?></span></td>
<?




			}elseif(($column_name[$column_i] == "freely-write-text") OR ($column_name[$column_i] == "a-word-text")){
?>
		<td class="td_<?=$column_name[$column_i]?> col_<?=$column_name[$column_i]?>">
			<span class="dataBox"><?=$column_val?></span>
			<span class="editBox">
				<form action="./list_edit.php" method="POST">
					<input type="hidden" name="edit_id" value="<?=$id?>">
					<textarea name="text_<?=$column_name[$column_i]?>" ><?=$column_val?></textarea>
					<input type="submit" name="" value="送信">
					<span class="inline_edit_close">閉じる</span>
				</form>
			</span>
			<span class="inline_edit">インライン編集</span>
		</td>
<?
			}else{


				if($column_name[$column_i] == "site-reflect"){
					if($column_val == 1){
						$column_val = "<img src='/include/img/check_yes.gif'>";
					}else{
						$column_val = "<img src='/include/img/check_no.gif'>";
					}
				}elseif($column_name[$column_i] == "voice_sub_id_reflect"){
					if($voice_flag != ""){
						$column_val = "<img src='/include/img/check_yes.gif'>";
					}else{
						$column_val = "<img src='/include/img/check_no.gif'>";
					}
				}



				if($column_name[$column_i] == "voice_sub_id"){
?>
		<td class="td_<?=$column_name[$column_i]?> col_<?=$column_name[$column_i]?>"><span class="dataBox">
			<a href="https://rifa.life/kagoya/voice_sub_list.php?q=(id~contains~<?=$column_val?>)" >[shop5]voice_sub編集ページ</a>
		</span></td>
<?
				}else{
?>
		<td class="td_<?=$column_name[$column_i]?> col_<?=$column_name[$column_i]?>"><span class="dataBox"><?=$column_val?></span></td>
<?

				}

			}
		}
?>
	</tr>
<?
	}
?>

</table>


<script type="text/javascript">
	var delete_id = "";
	$("#main_table").find(".delete_label").click(function() {
		delete_id = $(this).attr("data");
		if(delete_id != undefined){
			if (window.confirm("選択した情報を削除します。よろしいですか？")) {
				window.open("/include/kagoya_check/guestquestion/eoc_after_data_table/move_to_eva.php?move_id="+delete_id);
			}else{
				// alert("キャンセルしました。");
			}
		}
	});

	$("#main_table").find(".inline_edit").click(function(){
		$(this).parent().addClass("editOpen").find("textarea").focus();
	});
	$("#main_table").find(".inline_edit_close").click(function(){
		$(this).parents(".editOpen").removeClass("editOpen");
	});

	$("#main_table").find(".reflect_ng").find(".td_voice_edit a").click(function(){
		return false;
	})


</script>
<style type="text/css">
#main_table .reflect_ok {
    background: url(/include/img/ok.png) 0px 0px no-repeat;
    background-size: 5%;
    background-position-y: center;
}
#main_table .reflect_no{
	background: url(/include/img/tententen.png) 0px 0px no-repeat;
    background-size: 5%;
    background-position-y: center;
}
#main_table .reflect_ng{
	background: url(/include/img/ng.png) 0px 0px no-repeat;
    background-size: 5%;
    background-position-y: center;
}
#main_table .reflect_ok td{
	background: rgba(255,255,255,0.5);
}
#main_table .reflect_no td{
	background: rgba(255,255,255,0.5);
}
#main_table .reflect_ng td{
	background: rgba(0,0,0,0.5);
}
#main_table .reflect_ok.voice_sub_ok td{
	background: rgba(22, 227, 0,0.5);
	border-color: #16e300;
}

#main_table .th_other-reason-text.col_other-reason-text span{
	line-height: 1;
}
#main_table .reflect_label {
    display: block;
    cursor: pointer;
    background-color: #efefef;
    border: 1px solid #111;
    margin: 0 10px;
    font-size: 12px;
    padding: 0;
}
#main_table .reflect_label a {
	display: block;
	padding: 10px 5px;
}
#main_table .inline_edit , #main_table .inline_edit_close {
    display: block;
    cursor: pointer;
    background-color: #efefef;
    border: 1px solid #111;
    margin: auto;
    font-size: 12px;
    padding: 5px 0;
    text-align: center;
    width: 150px;
}
#main_table .editBox{
	display: none;
}
#main_table .editOpen .editBox{
	display: block;
}
#main_table .editOpen .editBox textarea{
	width: 95%;
	height: 400px;
}
#main_table .dataBox{
	display: block;
}
#main_table .editOpen .dataBox{
	display: none;
}
#main_table .inline_edit_close{

}
#main_table .editOpen .inline_edit{
	display: none;
}
.list_type_btn:hover{
	opacity: 0.5;
}
.list_type_btn{
	display: inline-block;
	color: #111;
	background-color: #eee;
	padding: 5px 10px;
	border: 1px solid #111;
	border-radius: 6px;
	text-decoration: none;
}
</style>
</body>
</html>
