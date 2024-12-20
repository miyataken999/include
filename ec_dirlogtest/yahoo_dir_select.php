<?
//ディレクトリID計算ファイル
?>

<?
// phpinfo();
//データベース接続
mb_internal_encoding("utf8");
// echo mb_internal_encoding();
// ini_set( 'display_errors', 1 );
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";
$dir_1 = "";
$dir_2 = "";
$dir_3 = "";
$dir_4 = "";
$dir_5 = "";
$dir_6 = "";
$dir_7 = "";
$dir_8 = "";
$dir_9 = "";
$dir_10 = "";
if($_GET["y_dir_1"] != ""){
	$dir_1 = $_GET["y_dir_1"];
}
if($_GET["y_dir_2"] != ""){
	$dir_2 = $_GET["y_dir_2"];
}
if($_GET["y_dir_3"] != ""){
	$dir_3 = $_GET["y_dir_3"];
}
if($_GET["y_dir_4"] != ""){
	$dir_4 = $_GET["y_dir_4"];
}
if($_GET["y_dir_5"] != ""){
	$dir_5 = $_GET["y_dir_5"];
}
if($_GET["y_dir_6"] != ""){
	$dir_6 = $_GET["y_dir_6"];
}
if($_GET["y_dir_7"] != ""){
	$dir_7 = $_GET["y_dir_7"];
}
if($_GET["y_dir_8"] != ""){
	$dir_8 = $_GET["y_dir_8"];
}
if($_GET["y_dir_9"] != ""){
	$dir_9 = $_GET["y_dir_9"];
}
if($_GET["y_dir_10"] != ""){
	$dir_10 = $_GET["y_dir_10"];
}

// echo "dir_1=#".$dir_1."#<br>";
// echo "dir_2=#".$dir_2."#<br>";
// echo "dir_3=#".$dir_3."#<br>";
// echo "dir_4=#".$dir_4."#<br>";
// echo "dir_5=#".$dir_5."#<br>";


//固定値でtest
// $dir_1 = "バッグ・小物・ブランド雑貨";
// $dir_2 = "レディースバッグ";
// $dir_3 = "ハンドバッグ";
// $dir_4 = "ア行";
// $dir_5 = "アンテプリマ";

$where = ' WHERE dir_1="'.$dir_1.'" ';
// $where = ' WHERE dir_id=301981 ';

if(($dir_2 != "") && ($dir_2 != "null")){
	$where .= ' AND dir_2 = "'.$dir_2.'" ';
}
if(($dir_3 != "") && ($dir_3 != "null")){
	$where .= ' AND dir_3 = "'.$dir_3.'" ';
}
if(($dir_4 != "") && ($dir_4 != "null")){
	$where .= ' AND dir_4 = "'.$dir_4.'" ';
}
if(($dir_5 != "") && ($dir_5 != "null")){
	$where .= ' AND dir_5 = "'.$dir_5.'" ';
}
if(($dir_6 != "") && ($dir_6 != "null")){
	$where .= ' AND dir_6 = "'.$dir_6.'" ';
}
if(($dir_7 != "") && ($dir_7 != "null")){
	$where .= ' AND dir_7 = "'.$dir_7.'" ';
}
if(($dir_8 != "") && ($dir_8 != "null")){
	$where .= ' AND dir_8 = "'.$dir_8.'" ';
}
if(($dir_9 != "") && ($dir_9 != "null")){
	$where .= ' AND dir_9 = "'.$dir_9.'" ';
}
if(($dir_10 != "") && ($dir_10 != "null")){
	$where .= ' AND dir_10 = "'.$dir_10.'" ';
}
// echo $where;
// $where = "";


$dir_sql = mysql_query('SET NAMES utf8');
$dir_sql = mysql_query("SELECT dir_id,origin_dir FROM yahoo_all_dir ".$where." LIMIT 5");

$count= 0;
?>

<?
	while ($dir_res = mysql_fetch_assoc($dir_sql)) {
		$id_sql = mysql_query('SET NAMES utf8');
		$id_sql = mysql_query("SELECT dir_1,dir_2,dir_3,dir_4,dir_5,dir_6,dir_7,dir_8,dir_9,dir_10 FROM yahoo_all_dir WHERE dir_id = ".$dir_res['dir_id']);
		$id_res = mysql_fetch_assoc($id_sql);
		if(preg_match('/商品登録不可/',$id_res['dir_1'])){
		  $result_id = "";
		}elseif(preg_match('/商品登録不可/',$id_res['dir_2'])){
		  $result_id = "";
		}elseif(preg_match('/商品登録不可/',$id_res['dir_3'])){
		  $result_id = "";
		}elseif(preg_match('/商品登録不可/',$id_res['dir_4'])){
		  $result_id = "";
		}elseif(preg_match('/商品登録不可/',$id_res['dir_5'])){
		  $result_id = "";
		}elseif(preg_match('/商品登録不可/',$id_res['dir_6'])){
		  $result_id = "";
		}elseif(preg_match('/商品登録不可/',$id_res['dir_7'])){
		  $result_id = "";
		}elseif(preg_match('/商品登録不可/',$id_res['dir_8'])){
		  $result_id = "";
		}elseif(preg_match('/商品登録不可/',$id_res['dir_9'])){
		  $result_id = "";
		}elseif(preg_match('/商品登録不可/',$id_res['dir_10'])){
		  $result_id = "";
		}else{
			$result_id = $dir_res['dir_id'];
		}

//一つしか出さない。idバグるし、必要ない
if($count == 0){
?>
<div id='result_pass'><?=$dir_res['origin_dir']?></div>

<div id="yahoo_result_area">
	<span id='yahoo_result_id_ttl'>YAHOOカテゴリID</span>
	<span id='yahoo_result_id'><?=$result_id?></span>
</div>
<?
}

	// echo "<div id='result_pass'>".$dir_res['origin_dir']."</div><span id='result_id'>".$result_id."</span>";
	$count++;
	}//end while
	// echo "<div>★下枠に反映されない場合★<br>空欄でも選択し、<br>ディレクトリ５まで入力してください。</div>";
	// echo "<div id='res_id_count'>".$count."</div>";
?>
<div id='yahoo_res_id_count'><?=$count?></div>










