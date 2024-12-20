<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>WSデータ出品ZIP作成ページ</title>
	<link rel="stylesheet" href="">
</head>
<body>

<?
// header("content-type:text/csv; charset=utf-8;");
// header("content-type:text/html; charset=utf-8;");
mb_internal_encoding("utf-8");
// ini_set("display_errors",1);

//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";

include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";



//出力項目の設定
$csv = array();
// $csv['ID 連番'] = "product_id";

$csv['コントロールカラム'] = "control";
$csv['在庫数'] = "zaiko";

$csv['商品番号'] = "yahoo_sinaban";
$csv['部門'] = "category_class";
$csv['大カテゴリ名'] = "category_id_wamei";
// $csv['中カテ'] = "sub_category_id1";
$csv['アイテム'] = "sub_category_id1_wamei";
$csv['販売価格'] = "sales_price";
$csv['ブランド'] = "product_num";
$csv['対象'] = "yahoo_sex";

$csv['刻印'] = "stamp";
$csv['型番'] = "yahoo_kataban";
$csv['製造番号'] = "serial_number";
$csv['素材3'] = "yahoo_sozai";
$csv['カラー3'] = "yahoo_color";
$csv['サイズ詳細'] = "yahoo_size";//新規追加した
$csv['ランク'] = "yahoo_condition2";
$csv['全体コンディション詳細'] = "yahoo_condition1";
$csv['詳細備考'] = "remark";
$csv['付属品その他'] = "yahoo_fuzokuhin";
$csv['季節・シーズン'] = "season";
$csv['ヤフオク｜商品名'] = "yahoo_title";
$csv['楽天｜商品名'] = "raku_title";
$csv['ヤフオク｜アイテム名'] = "goods_title";//新規追加した
$csv['保管場所'] = "hokan_place";
$csv['参考上代'] = "yahoo_sankou_uwadai";//新規追加した
$csv['ストア内検索キーワード'] = "search_keyword";//新規追加した
$csv['楽天タグID'] = "raku_tag_result";//新規追加した
$csv['画像ボックス名'] = "raku_image_name";//新規追加した
$csv['SEQ'] = "product_id";//新規追加した
$csv['ラウンジ品番'] = "yahoo_sinaban";//新規追加した
$csv['採寸者'] = "yahoo_saisun_sha";//新規追加した
$csv['撮影者'] = "REG_PHOTOGRAPHER";//新規追加した

$csv['ボックスID'] = "box_id";//新規追加した
$csv['ラウンジ大カテ'] = "category_id";//新規追加した
$csv['仕上'] = "Finish";//新規追加した
$csv['ライン'] = "line_category";//新規追加した
$csv['ライン詳細'] = "line";//新規追加した

$csv['号数'] = "Ring_size";//新規追加した
$csv['石目1カラット'] = "Parent_stone";//新規追加した
$csv['素材1'] = "gold_property";//新規追加した

$csv['関連ワード'] = "related_words";//新規追加した
$csv['カラー検索'] = "yahoo_color_id";//新規追加した

$csv['表記サイズ'] = "notation_size";//新規追加した
$csv['JP靴サイズ'] = "shoe_size_jp";//新規追加した


$csv['図柄'] = "handle";//新規追加した
$csv['生地'] = "cloth";//新規追加した
$csv['襟・ネックライン'] = "collar_neck_line";//新規追加した
$csv['袖丈'] = "Sleeve_Length";//新規追加した
$csv['トゥ'] = "toe";//新規追加した
$csv['モデル'] = "item_name";//新規追加した
$csv['着丈'] = "length";//新規追加した

$csv['母貝'] = "hahakai";//新規追加した
$csv['モチーフ'] = "motif";//新規追加した

$csv['チェーン種類'] = "chain_type_select";//新規追加した

$csv['原産国名'] = "country_of_origin";//新規追加した

$csv['産地'] = "producing_area";//新規追加した
$csv['脇石'] = "side_gem";//新規追加した
$csv['デザイナー'] = "designer";//新規追加した
$csv['鑑定機関'] = "Appraiser";//新規追加した

$csv['１円出品'] = "ichiyen_flag";//新規追加した
$csv['あす楽不可'] = "asuraku_fuka_flag";//新規追加した
$csv['並行輸入品'] = "parallel_import_flag";//新規追加した


$csv['カテゴリーテーブル用名称'] = "product_style";//新規追加した

$csv['店舗別表示非表示'] = "mall_control";//新規追加した


$csv['登録日'] = "up_date";
$up_date = date("Y-m-d");


// あとで 何に合わせたらいいか確認する
$csv['楽天ディレクトリID'] = "raku_dir_result";
$csv['楽天タグID'] = "raku_tag_result";
$csv['楽天店舗内カテゴリ1'] = "raku_hyoujisaki_category";
$csv['楽天店舗内カテゴリ2'] = "raku_hyoujisaki_category2";
$csv['楽天店舗内カテゴリ3'] = "raku_hyoujisaki_category3";
$csv['楽天店舗内カテゴリ4'] = "raku_hyoujisaki_category4";
$csv['楽天店舗内カテゴリ5'] = "raku_hyoujisaki_category5";

//auction
$csv['ヤフオクカテゴリ'] = "Categories";

//CSV反映なし
$csv['A保管'] = "A_storage";

$resDate = date("Y");
$resDate = $resDate-2000;
$resDate = $resDate.date("md");


$koumoku_name = array();
$koumoku_key = array();
$sql_key = "";
foreach ($csv as $key => $value) {
	//CSV反映なしのif
	if($value != "A_storage"){
		$koumoku_name[] = $key;
		$koumoku_key[] = $value;
	}


	// if(($value != "category_id_wamei") AND ($value != "sub_category_id1_wamei")){
	// 	$sql_key ? $sql_key .= ",".$value : $sql_key .= $value;
	// }
	if($value == "category_id_wamei"){
		$sql_key ? $sql_key .= ",shouhin.category_id" : $sql_key .= "shouhin.category_id";
	}elseif($value == "sub_category_id1_wamei"){
		$sql_key ? $sql_key .= ",shouhin.sub_category_id1" : $sql_key .= "shouhin.sub_category_id1";
	}elseif(($value == "hokan_place") OR ($value == "control") OR ($value == "zaiko") OR ($value == "Categories") OR ($value == "raku_image_name") OR ($value == "up_date") OR ($value == "related_words") OR ($value == "chain_type_select") OR ($value == "line_category") OR ($value == "mall_control") OR ($value == "category_class")){
		//なし
	}else{
		$sql_key ? $sql_key .= ",shouhin.".$value : $sql_key .= "shouhin.".$value;
	}
}
$sql_key = $sql_key.",shouhin.initial_included,shouhin.novelty,shouhin.ws_import_date,shouhin.item_name,auctions.raku_goods_name,auctions.Starting_price,products_detail.chain_type_select";
// $csv_array = array($koumoku_name,$koumoku_key);
$csv_array = array($koumoku_name);
// $categori_array = array(10,17,18,19,20,21,22,23,24,25,26,27,28,50,51);
// 大カテ追加 20201215
$categori_array = array(10,17,18,19,20,21,22,23,24,25,26,27,28,50,51,65,66,67,68,69);

//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★対象のセレクタ指定★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	$box_id = htmlspecialchars($_GET["box_id"]);//box_id
	if($box_id == ""){
		// $box_id = 5166;
		$box_id = 5170;
	}
	// $query = "SELECT {$sql_key} FROM shouhin WHERE `status`=107 ORDER BY product_id DESC ";
	$query = "SELECT {$sql_key} FROM (shouhin INNER JOIN auctions ON shouhin.product_id = auctions.product_id) INNER JOIN products_detail ON shouhin.product_id = products_detail.product_id  WHERE box_id={$box_id}";
	// $query = "SELECT {$sql_key} FROM shouhin WHERE `status`=10 ORDER BY product_id DESC LIMIT 100,100";
	// print $query;
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★END 対象のセレクタ指定★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■


//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★商品データ取得★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	$seq_array = array();
	$exclude = "";

		mysql_error();
	while ($res = mysql_fetch_assoc($sql)) {
		$hikakumoji = "";
		$hikakumoji = $res["yahoo_sozai"]." ".$res["item_name"]." ".$res["line"]." ".$res["raku_goods_name"];
		if(
			(strpos($hikakumoji, "象牙") !== false ) OR
			(strpos($hikakumoji, "鼈甲") !== false ) OR
			(strpos($hikakumoji, "べっ甲") !== false ) OR
			(strpos($hikakumoji, "ベッ甲") !== false ) OR
			(strpos($hikakumoji, "ベっ甲") !== false ) OR
			(strpos($hikakumoji, "べッ甲") !== false ) OR
			(strpos($hikakumoji, "タイマイ") !== false ) OR
			($res["sub_category_id1"] == 384) OR
			($res["sub_category_id1"] == 385) OR
			($res["sub_category_id1"] == 386) OR
			($res["sub_category_id1"] == 387) OR
			($res["sub_category_id1"] == 388) OR
			($res["sub_category_id1"] == 389) OR
			($res["sub_category_id1"] == 390) OR
			($res["sub_category_id1"] == 499) OR
			($res["sub_category_id1"] == 500) OR
			($res["sub_category_id1"] == 501) OR
			($res["sub_category_id1"] == 502) OR
			($res["sub_category_id1"] == 503) OR
			($res["sub_category_id1"] == 504) OR
			// ($res["sub_category_id1"] == 505) OR //元々象牙
			($res["sub_category_id1"] == 540) OR
			($res["sub_category_id1"] == 556) OR
			($res["sub_category_id1"] == 591) OR
			($res["sub_category_id1"] == 607)
		){
			$jogai = $res["yahoo_sinaban"];
			if($exclude == ""){
				$exclude .= " -x '{$jogai}*.jpg'";
			}else{
				$exclude .= " '{$jogai}*.jpg'";
			}
print "aaaaaaaaa";
			continue;
		}


		$res_array = "";
		$product_id = $res["product_id"];
		$seq_array[] = $product_id;
		for ($i=0; $i < count($koumoku_key); $i++) {
			$result = "";//初期化
			if($koumoku_key[$i] == "category_id_wamei"){
				$dai_query = "SELECT category_name FROM store_categories WHERE category_id={$res['category_id']} LIMIT 1";
				// print $dai_query;
				$dai_sql = mysqli_query('SET NAMES utf8');
				$dai_sql = mysqli_query($dai_query);
				$dai_res = mysql_fetch_assoc($dai_sql);
				$result = $dai_res['category_name'];
	// mysql_error();
			}elseif($koumoku_key[$i] == "sub_category_id1_wamei"){
				$sub_query = "SELECT name FROM store_sub_categories WHERE id={$res['sub_category_id1']} LIMIT 1";
				// print $sub_query;
				$sub_sql = mysqli_query('SET NAMES utf8');
				$sub_sql = mysqli_query($sub_query);
				$sub_res = mysql_fetch_assoc($sub_sql);
				$result = $sub_res['name'];
			}elseif($koumoku_key[$i] == "category_class"){
				$sub_query = "SELECT category_class FROM store_sub_categories WHERE id={$res['sub_category_id1']} LIMIT 1";
				// print $sub_query;
				$sub_sql = mysqli_query('SET NAMES utf8');
				$sub_sql = mysqli_query($sub_query);
				$sub_res = mysql_fetch_assoc($sub_sql);
				$result = $sub_res['category_class'];
			}elseif($koumoku_key[$i] == "related_words"){
				$sub_query = "SELECT related_words FROM store_sub_categories WHERE id={$res['sub_category_id1']} LIMIT 1";
				// print $sub_query;
				$sub_sql = mysqli_query('SET NAMES utf8');
				$sub_sql = mysqli_query($sub_query);
				$sub_res = mysql_fetch_assoc($sub_sql);
				$resultArray = explode("\n",$sub_res['related_words']);
				$result = "";
				for ($related_words_i=0; $related_words_i < count($resultArray); $related_words_i++) {
					$res_words = trim($resultArray[$related_words_i]);
					if($res_words != ""){
						if($result != ""){
							$result .= ",";
						}
						$result .= $res_words;
					}
				}
			}elseif($koumoku_key[$i] == "hokan_place"){
				// if(in_array($res['category_id'],$categori_array)){
				// 	$result = "社内";
				// }elseif($res['A_storage'] == 1){
				// 	$result = "社内";
				// }else{
				// 	$result = "清長";
				// }
				$result = "清長";
			}elseif($koumoku_key[$i] == "product_num"){
				$brand_query = "SELECT name FROM mst_brand WHERE id={$res['product_num']} LIMIT 1";
				print $brand_query;
				$brand_sql = mysqli_query('SET NAMES utf8');
				$brand_sql = mysqli_query($brand_query);
				$brand_res = mysql_fetch_assoc($brand_sql);
				$brand_name = $brand_res['name'];
				$brand_name_array = explode("/",$brand_name);
				$result = $brand_name_array[0];
				if($res['product_num'] == 631){
					$result = "ノーブランド";
				}
			}elseif($koumoku_key[$i] == "Ring_size"){
				if($res['Ring_size'] != ""){
					$ws_output_query = "SELECT ws_output FROM mst_Ring_size WHERE name='{$res['Ring_size']}' LIMIT 1";
					$ws_output_sql = mysqli_query('SET NAMES utf8');
					$ws_output_sql = mysqli_query($ws_output_query);
					$ws_output_res = mysql_fetch_assoc($ws_output_sql);
					$result = $ws_output_res['ws_output'];
				}else{
					$result = "";
				}
			}elseif($koumoku_key[$i] == "sales_price"){
				$result = $res["Starting_price"];
			}elseif($koumoku_key[$i] == "control"){
				$result = "n";
			}elseif($koumoku_key[$i] == "zaiko"){
				$result = "1";
			}elseif($koumoku_key[$i] == "up_date"){
				$result = $up_date;
			}elseif($koumoku_key[$i] == "yahoo_size"){
				$result = str_replace("\r\n", '<br>', $res["yahoo_size"]);
			}elseif($koumoku_key[$i] == "main_details"){
				$result = str_replace("\r\n", '<br>', $res["main_details"]);
			}elseif($koumoku_key[$i] == "yahoo_condition1"){
				$result = str_replace("\r\n", '<br>', $res["yahoo_condition1"]);
			}elseif($koumoku_key[$i] == "remark"){
				$result = str_replace("\r\n", '<br>', $res["remark"]);
			}elseif($koumoku_key[$i] == "yahoo_sex"){
				if($res[$koumoku_key[$i]] == 1){
					$result = "メンズ";
				}elseif($res[$koumoku_key[$i]] == 2){
					$result = "レディース";
				}else{
					$result = "ユニセックス";
				}
			}elseif($koumoku_key[$i] == "raku_image_name"){
				$box_id = $res["box_id"];
				$box_data = mysql_fetch_array(mysql_query("select raku_image_name,box_name from box where box_id='$box_id'"));
				print("select raku_image_name,box_name from box where box_id='$box_id'");
				$result = $box_data["raku_image_name"];
				$box_name = $box_data["box_name"];
				//print("------/////////////////////////----------------------");
				//print($box_name);

// MySQLi接続を設定
//$mysqli = new mysqli("ホスト名", "ユーザー名", "パスワード", "データベース名");

// 接続が成功しているか確認
//if ($mysqli->connect_error) {
//    die("接続失敗: " . $mysqli->connect_error);
//}

// エラーレポートを表示する設定
ini_set('display_errors', 1);
error_reporting(E_ALL);


// box_idを取得
$box_id = $res["box_id"];
//print("/////////////////////////////////////////////////");
// クエリを実行
$query = "SELECT raku_image_name, box_name FROM box WHERE box_id='$box_id'";
//$result = $mysqli->query($query);



				$listfile = system("cp /var/www/html/shop/services/image/{$box_name}/{$box_name}/{$product_id}_*.jpg ./download/tmp/ ",$ret);				
				print("cp /var/www/html/shop/services/image/{$box_name}/{$box_name}/{$product_id}_*.jpg ./download/tmp/ ");
				//exit();
				//$listfile = system("cp ./../../../shop/services/image/{$box_name}/{$box_name}/{$product_id}_*.jpg ./download/tmp/ ",$ret);
			}elseif($koumoku_key[$i] == "search_keyword"){
				if(in_array($res['category_id'],$categori_array)){
					$result = "h".$resDate.$res[$koumoku_key[$i]];
				}else{
					$result = "b".$resDate.$res[$koumoku_key[$i]];
				}
			}elseif($koumoku_key[$i] == "Categories"){
				$q = "SELECT Categories FROM auctions WHERE product_id={$product_id}";
				$s = mysqli_query($q);
				$c = mysql_fetch_array($s);
				$result = $c["Categories"];
			}elseif($koumoku_key[$i] == "line_category"){
				$line = "'".$res['line']."'";
				$q = "SELECT line_category FROM mst_item WHERE name={$line}";
				$s = mysqli_query($q);
				$c = mysql_fetch_array($s);
				$result = $c["line_category"];
			}elseif($koumoku_key[$i] == "cloth"){
				$q = "SELECT name FROM mst_cloth WHERE id={$res['cloth']}";
				$s = mysqli_query($q);
				$c = mysql_fetch_array($s);
				$result = $c["name"];
			}elseif($koumoku_key[$i] == "collar_neck_line"){
				$q = "SELECT name FROM mst_collar_neck_line WHERE id={$res['collar_neck_line']}";
				$s = mysqli_query($q);
				$c = mysql_fetch_array($s);
				$result = $c["name"];
			}elseif($koumoku_key[$i] == "toe"){
				$q = "SELECT name FROM mst_toe WHERE id={$res['toe']}";
				$s = mysqli_query($q);
				$c = mysql_fetch_array($s);
				$result = $c["name"];
			}elseif($koumoku_key[$i] == "hahakai"){
				$q = "SELECT name FROM mst_hahakai WHERE id={$res['hahakai']}";
				$s = mysqli_query($q);
				$c = mysql_fetch_array($s);
				$result = $c["name"];
			}elseif($koumoku_key[$i] == "country_of_origin"){
				$q = "SELECT name FROM mst_country_of_origin WHERE id={$res['country_of_origin']}";
				$s = mysqli_query($q);
				$c = mysql_fetch_array($s);
				if($c["name"] == '--'){
					$result = "";
				}else{
					$result = $c["name"];
				}
			}elseif($koumoku_key[$i] == "producing_area"){
				$q = "SELECT name FROM mst_producing_area WHERE id={$res['producing_area']}";
				$s = mysqli_query($q);
				$c = mysql_fetch_array($s);
				$result = $c["name"];
			}elseif($koumoku_key[$i] == "side_gem"){
				$q = "SELECT name FROM mst_side_gem WHERE id={$res['side_gem']}";
				$s = mysqli_query($q);
				$c = mysql_fetch_array($s);
				$result = $c["name"];
			}elseif($koumoku_key[$i] == "designer"){
				$q = "SELECT name FROM mst_designer WHERE id={$res['designer']}";
				$s = mysqli_query($q);
				$c = mysql_fetch_array($s);
				$result = $c["name"];
			}elseif($koumoku_key[$i] == "product_style"){
				$result = $res["line"];
				if($result == ''){
					$result = $res["product_style"];
					if((stristr($result, "ペンダントトップ")) OR (stristr($result, "ペンダントヘッド"))){
						$result = "ペンダントヘッド・トップ";
					}
				}
			}elseif($koumoku_key[$i] == "mall_control"){
				// 楽天市場店（ID:1）
				// eBay店（ID:4）
				// Amazon店（ID:5）
				// リファオク（ID:6）
				// ヤフーショッピング店（ID:8）
				// Reebonz店（ID:9）
				// 店内カテゴリ（ID:11）
				// ブラモ（ID:12）
				// Wowma!（ID:13）
				if(($res["initial_included"] == 1) OR ($res["novelty"] == 1)){
					// $result = '1,4,5,6,8,11,12,13';
					$result = '1,4,6,8,11,12,14,15,16,17,18,22';
				}else{
					// $result = '1,4,5,6,8,9,11,12,13';
					$result = '1,4,6,8,11,12,14,15,16,17,18,22';
				}
			}else{
				$result = $res[$koumoku_key[$i]];
			}
			$res_array[$i] = $result;
		}
		array_push($csv_array, $res_array);
		$ws_import_date = $res["ws_import_date"];
		if($ws_import_date == ""){
			if($product_id != ""){
				// $up_query = "UPDATE shouhin SET ws_import_date='{$up_date}' WHERE product_id={$product_id}";
				// mysqli_query($up_query);
			}
		}
	}


//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★END 商品データ取得★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■


//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★画像パーミッション、リネーム処理★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

//パーミッション変更
$chmod = system("chmod 777 ./download/tmp/*.jpg ",$ret);
//ファイル名をSEQ⇒品番に変更。管理番号をSEQにしたら戻す。
// ディレクトリのパス
$dir = "./download/tmp/" ;
if( is_dir( $dir ) && $handle = opendir( $dir ) ) {
	while( ($file = readdir($handle)) !== false ) {
		if( filetype( $path = $dir . $file ) == "file" ) {
			$fileNameArray = "";
			$fileId = "";

			// $fileNameArray = explode("-", $file);
			$fileNameArray = explode("_", $file);
			$fileId = $fileNameArray[0];
			$query = " SELECT yahoo_sinaban FROM shouhin WHERE product_id={$fileId} LIMIT 1";
			$sql = mysqli_query('SET NAMES utf8');
			$sql = mysqli_query($query);
			$result = mysql_fetch_assoc($sql);
			$yahoo_sinaban = $result["yahoo_sinaban"];


			print("{$yahoo_sinaban} ./download/tmp/{$fileId}_*.jpg");
			$rename = system("rename {$fileId} {$yahoo_sinaban} ./download/tmp/{$fileId}_*.jpg ",$ret);
		  // $file: ファイル名
		  // $path: ファイルのパス
		}
	}
}

//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★END 画像パーミッション、リネーム処理★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■




//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★商品データ CSVへ書き込み★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	// var_dump($csv_array);
	//該当ファイルオープン
	$csv_file_name = './download/item_edit.csv';
	$fp = fopen($csv_file_name,'w');
	if ($fp === FALSE) {
		throw new Exception('ファイルの書き込みに失敗しました。');
	}
	$fput_i = 1;

	foreach($csv_array as $csvset){
		for ($i=0; $i < count($csvset); $i++) {
			$csvset[$i] = str_replace('㎜','mm',$csvset[$i]);
			$csvset[$i] = str_replace('㏄','cc',$csvset[$i]);
			$csvset[$i] = str_replace('㎏','kg',$csvset[$i]);
			$csvset[$i] = str_replace('㎎','mg',$csvset[$i]);
			$csvset[$i] = str_replace('㎞','km',$csvset[$i]);
			$csvset[$i] = str_replace('㎝','cm',$csvset[$i]);
			$csvset[$i] = str_replace('K','K',$csvset[$i]);
			$csvset[$i] = mb_convert_encoding($csvset[$i],"SJIS");
		}
	  if(fputcsv($fp, $csvset)){
	  	print("item_edit.csv{$fput_i}行目完了<br><pre class='result_set_pre'>");
	  	// var_dump($csvset);
	  	print("</pre>");
	  }else{
	  	print("item_edit.csv{$fput_i}行目書き込み失敗しました。<br>失敗データ↓<br><pre class='result_set_pre'>");
	  	// var_dump($csvset);
	  	print "環境依存文字が使われている可能性があります。";
	  	// print "失敗SEQ　".$csvset[8];
	  	print("</pre>");
	  	fclose($fp);
	  	exit();
	  }
	  $fput_i++;
	}
	fclose($fp);

	//リセット
	$fput_i = 0;
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★END 商品データ CSVへ書き込み★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■





//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//★★----------危険 削除コマンド-----★★
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
// ZIP削除
$path_file = "./download/*.zip";
$listfile = system("rm {$path_file}", $rtf);
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//★★----------危険 削除コマンド-----★★
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★

//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★CSV ZIPに追加★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
$zip_name = "ws";
$zip_path  = "./download/{$zip_name}.zip";
//print($zip_path);
//exit();
$zip = system("zip {$zip_path} ./download/*.csv ./download/tmp/*.jpg {$exclude} ", $re_rakuten_zip); //{$box_name}/
$zip = system("chmod -R 777 download/{$zip_name}.zip ", $re_rakuten_zip_mod);


//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★END CSV ZIPに追加★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//★★----------危険 削除コマンド-----★★
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//一時退避した画像を削除
$path_file = "./download/tmp/*.jpg";
$listfile = system("rm {$path_file}", $rtf);
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//★★----------危険 削除コマンド-----★★
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★



















include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";


?>

ZIP作成成功しました。ダウンロードページへ移動します(^-^)
<script type="text/javascript">
	window.location = ("./download.php");
</script>

</body>
</html>
