<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	#link_box_back{
		/*display: none!important;*/
	}
</style>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ZIPファイル作成画面</title>
</head>
<body>
<h1>ダウンロード用のボタンが出たら成功です。	</h1>
楽天CSVデータ作成スタート<br>

<?

mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

// ini_set( 'display_errors', 1 );


//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//★★----------危険 削除コマンド-----★★
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
// ZIP削除
$path_file = "./tmp/raku_zip/*.zip";
$listfile = system("rm {$path_file}", $rtf);
$path_file = "./tmp/yahoo_zip/*.zip";
$listfile = system("rm {$path_file}", $rtf);
$path_file = "./tmp/yahoo/*.csv";
$listfile = system("rm {$path_file}", $rtf);
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//★★----------危険 削除コマンド-----★★
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★





//+++++++++++++++++++++++++++++++++++++++
//各種GETパラメータ取得
//+++++++++++++++++++++++++++++++++++++++
$box_id = htmlspecialchars($_GET["box_id"]);//box_id
if($box_id == ""){
	// $box_id = 5166;
	$box_id = 5170;
}


$box_id_default = $box_id;
$box_id_name = str_replace("_","&",$box_id);
if(!stristr($box_id, "_")){
	$box_id_array = array($box_id);
}else{
	$box_id_array = explode("_",$box_id);
}
$where_box = " WHERE ( box_id={$box_id_array[0]}";
if(count($box_id_array) > 0){
	for ($box_ii=1; $box_ii < count($box_id_array); $box_ii++) {
		$where_box .= " OR box_id={$box_id_array[$box_ii]}";
	}
}
$where_box .= " )";
print "where_box ".$where_box."<br>";
print "<br>box_id_array<br>";
var_dump($box_id_array);
print "<br><br>";



$user_id = htmlspecialchars($_GET["user_id"]);//ユーザーID
if($user_id == ""){
	$user_id = 71;
}

$img_set_name = "";
$img_set_array = "";
for ($box_iii=0; $box_iii < count($box_id_array); $box_iii++) {
	$img_set_name = "img_set_{$box_id_array[$box_iii]}";
	$img_set_array[$box_id_array[$box_iii]] = htmlspecialchars($_GET[$img_set_name]);//画像セット何枚ずつか
}
print "<br>img_set_array<br>";
var_dump($img_set_array);
print "<br><br>";
// if($img_set == ""){
// 	$img_set = 5;
// }
$raku_new_arrival_url = htmlspecialchars($_GET["raku_new_arrival_url"]);//新着URL部分
$raku_shouhin_bangou = htmlspecialchars($_GET["raku_shouhin_bangou"]);//商品番号
$raku_shouhinmei = htmlspecialchars($_GET["raku_shouhinmei"]);//商品名
$raku_zaikosuu = htmlspecialchars($_GET["raku_zaikosuu"]);//在庫数
$y_key_word = htmlspecialchars($_GET["y_key_word"]);//ストア内検索キーワード
$raku_hanbaikikan = htmlspecialchars($_GET["raku_hanbaikikan"]);//販売期間指定

//販売開始日の取得
if($raku_hanbaikikan){
	$raku_hanbai_start = $raku_hanbaikikan;
$raku_hanbai_start = split(" ",$raku_hanbai_start);
$raku_hanbai_start = $raku_hanbai_start[0];
$raku_hanbai_start = split("/",$raku_hanbai_start);

$start_month = $raku_hanbai_start[1];
$start_month = str_split($start_month);
if($start_month[0] == "0"){
    $start_month[0] = "";
}
$start_month = implode("", $start_month);
$start_day = $raku_hanbai_start[2];
$start_day = str_split($start_day);
if($start_day[0] == "0"){
    $start_day[0] = "";
}
$start_day = implode("", $start_day);
$raku_hanbai_start = $start_month."月".$start_day."日";




}



//+++++++++++++++++++++++++++++++++++++++
//box_idから、box_nameを取得、ファイル名に使用
//+++++++++++++++++++++++++++++++++++++++
$box_query = " SELECT box_id , box_name , raku_image_name FROM box {$where_box} ";
$box_sql = mysql_query('SET NAMES utf8');
$box_sql = mysql_query($box_query);
	while ($box_result = mysql_fetch_assoc($box_sql)) {
		$box_name_array[$box_result["box_id"]] = $box_result["box_name"];
		$raku_image_name_array[$box_result["box_id"]] = $box_result["raku_image_name"];
	}
print "<br>box_name_array<br>";
var_dump($box_name_array);
print "<br>raku_image_name_array<br>";
var_dump($raku_image_name_array);


?>
<div class="csv_box">
<?
//★★★★★★★★各CSV作成ファイル★★★★★★★★

//★★★★楽天 item.csv★★★★
// include $_SERVER["DOCUMENT_ROOT"]."/include/zip_shop5/process/multiple/rakuten/item_csv.php";
?>
<div class="green">item_csv処理終了</div>
</div>
<div class="csv_box">
<?
//★★★★楽天 item-cat.csv★★★★
// include $_SERVER["DOCUMENT_ROOT"]."/include/zip_shop5/process/multiple/rakuten/item-cat_csv.php";
?>
<div class="green">item-cat_csv処理終了</div>
</div>
<div class="csv_box">
<?
//★★★★楽天 select.csv★★★★
// include $_SERVER["DOCUMENT_ROOT"]."/include/zip_shop5/process/multiple/rakuten/select_csv.php";
?>
<div class="green">select_csv処理終了</div>
</div>
<div class="csv_box">
<?
//★★★★楽天 next.csv★★★★
// include $_SERVER["DOCUMENT_ROOT"]."/include/zip_shop5/process/multiple/rakuten/next_csv.php";
?>
<div class="green">next_csv処理終了</div>
<div class="green">楽天CSV処理完了</div>
</div>
<div class="csv_box">
YAHOO　CSVデータ作成開始<br>
<?

//★★★★yahoo  csv★★★★
include $_SERVER["DOCUMENT_ROOT"]."/include/zip_shop5/process/multiple/yahoo/yahoo_auction_csv.php";
?>
<h2 class="green">yahoo_auction_csv完了</h2>
</div>
<br clear="all">

<?
// print $box_name."<br>";
//画像ファイル
//楽天キャビネット内に一時的にコピー
//ボックスの数だけパスを作成して繰り返す

// $box_name_array = array($box_result["box_id"] => $box_result["box_name"]);
// $raku_image_name_array = array($box_result["box_id"] => $box_result["raku_image_name"]);


$exclude = "";
for ($i=0; $i < count($jogai_array); $i++) {
	if($jogai_array[$i] != ""){
		if($exclude == ""){
			$exclude .= " -x '{$jogai_array[$i]}*.jpg'";
		}else{
			$exclude .= " '{$jogai_array[$i]}*.jpg'";
		}
	}
}

for ($box_iiii=0; $box_iiii < count($box_id_array); $box_iiii++) {
	$box_name = $box_name_array[$box_id_array[$box_iiii]];
	$raku_image_name = $raku_image_name_array[$box_id_array[$box_iiii]];
	print "<br>box_name {$box_name}<br>";
	print "<br>raku_image_name {$raku_image_name}<br>";
	$listfile = system("mkdir rakuten/cabinet/images/{$raku_image_name}");
	$listfile = system("cp /var/www/html/shop/services/image/{$box_name}/{$box_name}/*.jpg rakuten/cabinet/images/{$raku_image_name} ",$ret);
	$image_pass = "./rakuten/cabinet/images/{$raku_image_name}/";


	//ZIPにまとめる
	// $rakuten_zip_res = system("zip tmp/raku_zip/rakuten_{$box_id_default}.zip ./rakuten/next.csv ./rakuten/ritem/batch/*.csv {$image_pass}*.jpg ", $re_rakuten_zip); //{$box_name}/
	// $rakuten_zip = system("chmod -R 777 tmp/raku_zip/rakuten_{$box_id_default}.zip ", $re_rakuten_zip_mod);

	if($box_name != ""){
		// print "aaaaaaaaaaaaaaaaaaaaaaaaaa"."zip tmp/yahoo_zip/yahoo_{$box_id_default}.zip -j ./tmp/yahoo/{$box_id_default}.csv {$image_pass}*.jpg {$exclude} ";
		$yahoo_zip_res = system("zip tmp/yahoo_zip/yahoo_{$box_id_default}.zip -j ./tmp/yahoo/{$box_id_default}.csv {$image_pass}*.jpg {$exclude} ", $re_yahoo_zip); //{$box_name}/
		$yahoo_zip = system("chmod -R 777 tmp/yahoo_zip/yahoo_{$box_id_default}.zip ", $re_yahoo_zip_mod);
	}

	//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
	//★★----------危険 削除コマンド-----★★
	//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
	//cabinet内一時コピー分削除
	//フォルダパスがあったら削除
	if($raku_image_name != ""){
		$listfile = system("rm -r ./rakuten/cabinet/images/{$raku_image_name}", $rtf);
	}
	//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
	//★★----------危険 削除コマンド-----★★
	//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★

} //end for文








// print($rakuten_zip_res);
// print($yahoo_zip_res);

// if(($rakuten_zip_res == true) && ($yahoo_zip_res == true)){

?>
<div id="link_box_back">
	<div id="link_box">
		<h3>ZIP作成に成功しました</h3>
		<a target="_blank" href='/include/zip_shop5/rakuten_download.php?box_name=<?=$box_id_default?>' >楽天ZIPダウンロード</a>
		<a target="_blank" href='/include/zip_shop5/yahoo_download.php?box_name=<?=$box_id_default?>' >ヤフオクZIPダウンロード</a>
	</div>
<?
//完了時のファイル
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//ST変更の。本番化でコメントアウト外す
// include $_SERVER[DOCUMENT_ROOT]."/include/zip_shop5/make_after/last_process.php";
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
?>
</div>


<?
// }

// print $rtf;




























?>

<style type="text/css" media="screen">
	.csv_box {
	    float: left;
	    padding: 15px;
	    border: 1px solid #ccc;
	    margin-right: 15px;
	}
	.green {
	    font-size: 20px;
	    font-weight: bold;
	    background-color: #0f0;
	    padding: 5px;
	}
	#link_box {
	    text-align: center;
	    font-size: 20px;
	    position: fixed;
	    top: 300px;
	    width: 100%;
	    background-color: #333;
	    padding: 50px 0;
	    border-top: 15px solid #fff;
	    border-bottom: 15px solid #fff;
	}
	#link_box a:hover{
		opacity: 0.5;
	}
	#link_box a {
	    color: #111;
	    display: block;
	    padding: 10px;
	    border: 3px solid;
	    width: 500px;
	    margin: 10px auto;
	    background-color: #ccc;
	    text-decoration: none;
	    font-size: 40px;
	    border-radius: 15px;
	}
	#link_box_back{
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-color: rgba(0,0,0,0.7);
	}
	h3 {
	    font-size: 60px;
	    color: #fff;
	}
</style>
</body>
</html>
