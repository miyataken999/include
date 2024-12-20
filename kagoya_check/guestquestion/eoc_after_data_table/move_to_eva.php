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

ini_set("display_errors",1);
include $_SERVER["DOCUMENT_ROOT"]."/include/connection_kagoya.php";

	$query = 'SELECT * FROM internet.Eoc_guestquestion WHERE id='.$move_id.' LIMIT 1';
	print "query ".$query;
	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	$result = mysql_fetch_assoc($sql);



	$data = array();
array_push($data,'timestamp');
array_push($data,'service-name');
array_push($data,'service-name-text');
array_push($data,'service-story');
array_push($data,'service-story-text');
array_push($data,'service-satisfied');
array_push($data,'sold-this-time');
array_push($data,'cancel-reason');
array_push($data,'cancel-reason-text');
array_push($data,'other-reason-text');
array_push($data,'how-much-cheap');
array_push($data,'how-much-cheap-text');
array_push($data,'dissatisfied-reason-text');
array_push($data,'service-speed');
array_push($data,'service-speed-text');
array_push($data,'service-description');
array_push($data,'service-description-text');
array_push($data,'site-level');
array_push($data,'site-level-text');
array_push($data,'choice-reason-text');
array_push($data,'search-keyword');
array_push($data,'search-keyword-text');
array_push($data,'search-engine');
array_push($data,'search-engine-text');
array_push($data,'search-medium');
array_push($data,'search-medium-text');
array_push($data,'freely-write-text');
array_push($data,'a-word-text');
array_push($data,'customer-sex');
array_push($data,'customer-age');
array_push($data,'customer-address');
array_push($data,'mail-or-tel-text');
array_push($data,'comment-agree');


include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";

include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

$into_col = "";
$into_val = "";

for ($into_i=0; $into_i < count($data); $into_i++) {
	if($into_col != ""){
		$into_col .= ",";
		$into_val .= ",";
	}
	$into_col .= "`".$data[$into_i]."`";
	$result[$data[$into_i]] = str_replace("'","’",$result[$data[$into_i]]);
	$into_val .= "'".$result[$data[$into_i]]."'";
}
$into_col .= ",ecc_id";
$into_val .= ",'".$ins_ecc_id."'";

$into_col = "({$into_col})";
$into_val = "({$into_val})";

$query = "INSERT INTO internet.Eoc_guestquestion{$into_col} VALUES{$into_val}";
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);
$eoc_guestquestion_last_id = mysql_insert_id();


	if (!$sql) {
	    //チャットワーク流す
		$text_table = "[info][title]Eoc自動反映 guestquestionテーブル移動クエリ失敗[/title]";
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
		$log_table = "Eoc_guestquestion";
		$key_val = $eoc_guestquestion_last_id;
		$user_id = $uid;
		$key_name = "id"; //ログテキスト上のkeyの項目名
		$log_action = "add";

		insert_log($log_table,$key_val,$into_col,$into_val,$user_id,$key_name,$log_action);
	}
include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";




$delete_id = htmlspecialchars($_GET["delete_id"]);
if(($delete_id == "") AND ($move_id != "")){
	$delete_id = $move_id;
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/kagoya_check/guestquestion/delete.php";
}




?>
		<h2>成功しました。一覧ページへ戻ります。</h2>
		<script type="text/javascript">
			window.location.href = "/include/kagoya_check/guestquestion/list.php";
		</script>
