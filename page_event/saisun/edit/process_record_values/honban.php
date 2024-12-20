<?

//機番を保管用にコピー
$values['serial_number_for_storage'] = $values['serial_number'];


if($values['product_num'] == ""){
	$values['product_num'] = 631;
}

if($values['stamp'] != ""){
	$values['stamp'] .= "(※シリアルナンバー等は番号の下数桁にモザイクをかけております)";
}


//型番・シリアルナンバー結合
// $values['yahoo_kataban'] = $values['yahoo_kataban']."/".$values['serial_number'];

//アイテム名は、査物のアイテム名をそのまま出す
$values['goods_title'] = $values['item_name'];

$values['saisun_start'] = date("Y/m/d H:i:s");


//$values['goods_title'] = $values['title']."■".$values['product_id'];


//newshop3のテスト用コード
$current_page_pass = $_SERVER["REQUEST_URI"];
// if(stristr($current_page_pass, "/newshop3/")){
// 	echo "current_page_pass".$current_page_pass;
// }



//大カテゴリ取得
$category_id = $values['category_id'];
//title取得
$title = $values['title'];
$title = str_replace("・","･",$title);





if(
($category_id == 18)
OR ($category_id == 19)
OR ($category_id == 20)
OR ($category_id == 21)
OR ($category_id == 22)
OR ($category_id == 23)
OR ($category_id == 50)
OR ($category_id == 51)
){
	if(
		($values['Finish'] == "JB(通常)")
		OR ($values['Finish'] == "JB(メッキ)")
		OR ($values['Finish'] == "JB(特殊)")
		OR ($values['Finish'] == "JB(横持ち)")
		OR ($values['Finish'] == "ブティック(宝飾)")
		OR ($values['Finish'] == "ブティック(服飾)")
	){
		// $siage = "新品仕上済★";
		$siage = "";
	}elseif($values['Finish'] == "ブティック(時計)"){
		$siage = "正規店オーバーホール済★";
	}else{
		$siage = "";
	}
	if($values['product_num'] == 631){
		$values['yahoo_title'] = $siage.$title;
		$values['raku_title'] = $siage.$title;
	}else{
		$junle_jn = explode("/",$values['yahoo_junle']);
		$values['yahoo_title'] = $siage.$junle_jn[0]." ".$title;
		$values['raku_title'] = $siage.$junle_jn[0]." ".$title;
	}
}else{
	if($values['product_num'] == 631){
		$values['yahoo_title'] = $title;
		$values['raku_title'] = $title;
	}else{
		$junle_jn = explode("/",$values['yahoo_junle']);
		$values['yahoo_title'] = $junle_jn[0]." ".$title;
		$values['raku_title'] = $junle_jn[0]." ".$title;
	}
}



	//中カテにコンディション詳細テンプレートがあれば、それを優先する。なければ大カテ基準のテンプレートを取得
	$sql = "SELECT condition_details FROM store_sub_categories WHERE id = ".$values['sub_category_id1'];
	$rs = CustomQuery($sql);
	$data = db_fetch_array($rs);
	$condition_details = $data["condition_details"];

if($condition_details == ""){
	$sql = "SELECT condition_tmp_id FROM store_categories WHERE category_id = {$category_id}";
	$rs = CustomQuery($sql);
	$data = db_fetch_array($rs);
	$condition_tmp_id = $data["condition_tmp_id"];

	if($condition_tmp_id != ""){
		$sql = "SELECT condition_details FROM mst_condition_details WHERE condition_detail_id = {$condition_tmp_id}";
		$rs = CustomQuery($sql);
		$data = db_fetch_array($rs);
		$condition_details = $data["condition_details"];
	}
}

if($values['yahoo_condition1'] == ""){
	$values['yahoo_condition1'] = $condition_details;
}







//楽ジャン
mb_internal_encoding("utf8");
// ini_set( 'display_errors', 1 );
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";


//------------------------------------------------
//値取得 数字の値は日本語に変換して格納
//------------------------------------------------

//大カテからテンプレート取得
$rakujan_sql = mysql_query('SET NAMES utf8');
$rakujan_sql = mysql_query("SELECT remark FROM mst_rakuten_category WHERE parent_id = ".$category_id." ORDER BY sort ");

global $category_name;
global $sub_category;
global $yahoo_sex;
global $line;
global $luxury;
global $brand_name;

//大カテ
$category_id_sql = mysql_query("SELECT category_name FROM store_categories WHERE category_id = ".$category_id." LIMIT 1 ");
$category_id_res = mysql_fetch_assoc($category_id_sql);
$category_name = $category_id_res["category_name"];

//中カテ
$sub_category = $values['sub_category_id1'];
$sub_category_sql = mysql_query("SELECT name,related_words FROM store_sub_categories WHERE id = ".$sub_category." LIMIT 1 ");
$sub_category_res = mysql_fetch_assoc($sub_category_sql);
$sub_category = $sub_category_res["name"];
if($values['search_keyword'] == ""){
	$resultArray = explode("\n",$sub_category_res['related_words']);
	$result = "";
	for ($related_words_i=0; $related_words_i < count($resultArray); $related_words_i++) {
		$res_words = trim($resultArray[$related_words_i]);
		if($res_words != ""){
			if($result != ""){
				$result .= " ";
			}
			$result .= $res_words;
		}
	}
	$values['search_keyword'] = $result;
}


//性別
$yahoo_sex = $values['yahoo_sex'];
$st_yahoo_sex_sql = mysql_query("SELECT sex_name FROM _sex WHERE sex_id = ".$yahoo_sex." LIMIT 1 ");
$st_yahoo_sex_res = mysql_fetch_assoc($st_yahoo_sex_sql);
$yahoo_sex = $st_yahoo_sex_res["sex_name"];
if($yahoo_sex == "男"){
	$yahoo_sex = "メンズ";
}elseif($yahoo_sex == "女"){
	$yahoo_sex = "レディース";
}else{
	$yahoo_sex = "★ユニセックス★";
}

//ライン
$line = $values['line'];
$line_sql = mysql_query("SELECT line_category FROM mst_item WHERE name = '".$line."' LIMIT 1 ");
$line_res = mysql_fetch_assoc($line_sql);
$line = $line_res["line_category"];

//ラグジュアリー
$product_num = $values['product_num'];
$luxury_sql = mysql_query("SELECT luxury , name FROM mst_brand WHERE id = '".$product_num."' LIMIT 1 ");
$luxury_res = mysql_fetch_assoc($luxury_sql);
$luxury = $luxury_res["luxury"];
$brand_name = $luxury_res["name"];
$brand_name = explode("/",$brand_name);
$brand_name = $brand_name[1];



$whi_i = "";
while ($rakujan_result = mysql_fetch_assoc($rakujan_sql)) {
	$raku_tenpo = rakujan_kakikae($rakujan_result["remark"]);
	//ユニセックスの文字列を探す
	if(preg_match("/★ユニセックス★/",$raku_tenpo)){
		$yuni_pass = $raku_tenpo;
		$yuni_pass = str_replace("★ユニセックス★","メンズ",$yuni_pass);
		$yuni_pass = ltrim($yuni_pass,'\\');
		$raku_tenpo = str_replace("★ユニセックス★","レディース",$raku_tenpo);
	}

	if($raku_tenpo != ""){
		$raku_tenpo = ltrim($raku_tenpo,'\\');
		$values['raku_hyoujisaki_category'.$whi_i] = $raku_tenpo;
	}else{
		$values['raku_hyoujisaki_category'.$whi_i] = "";
	}

	if($whi_i == ""){
		$whi_i = 2;
	}else{
		$whi_i++;
	}
	$raku_tenpo = "";
}


//書き換えが終わったら、ユニセックスの処理
if($yuni_pass != ""){
	//空の項目を探す
	for ($i=1; $i <= 5; $i++) {
		if($i == 1){
			$raku_i = "";
		}else{
			$raku_i = $i;
		}
		if($values['raku_hyoujisaki_category'.$raku_i] == ""){
			$values['raku_hyoujisaki_category'.$raku_i] = $yuni_pass;
			break;
		}
	}
}



function rakujan_kakikae($str){
global $category_name;
global $sub_category;
global $yahoo_sex;
global $line;
global $luxury;
global $brand_name;
	if(preg_match("/★大カテ★/",$str)){
		$str = str_replace("★大カテ★","\\".$category_name,$str);
	}
	if(preg_match("/★中カテ★/",$str)){
		$str = str_replace("★中カテ★","\\".$sub_category,$str);
	}
	if(preg_match("/★性別★/",$str)){
		$str = str_replace("★性別★","\\".$yahoo_sex,$str);
	}
	if(preg_match("/★ライン★/",$str)){
		$str = str_replace("★ライン★","\\".$line,$str);
	}
	if(preg_match("/★\[ラグジュアリー\]ブラジャン半角英語のみ★/",$str)){
		if($luxury == 1){
			$str = str_replace("★[ラグジュアリー]ブラジャン半角英語のみ★","\\ラグジュアリー\\".$brand_name,$str);
		}else{
			$str = "";
		}
	}
	if(preg_match("/★ブラジャン半角英語のみ★/",$str)){
		if($luxury == 1){
			$str = str_replace("★ブラジャン半角英語のみ★","\\".$brand_name,$str);
		}else{
			$str = "";
		}
	}


	return $str;
}



?>

