<?
mb_internal_encoding("utf8");
// ini_set( 'display_errors', 1 );
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";


//------------------------------------------------
//値取得 数字の値は日本語に変換して格納
//------------------------------------------------

//大カテからテンプレート取得
$category_id = $values['category_id'];
$rakujan_sql = mysql_query('SET NAMES utf8');
$rakujan_sql = mysql_query("SELECT remark FROM mst_rakuten_category WHERE parent_id = ".$category_id." ORDER BY sort ");

global $category_name;
global $sub_category;
global $st_yahoo_sex;
global $line;
global $luxury;
global $brand_name;

//大カテ
$category_id_sql = mysql_query("SELECT category_name FROM store_categories WHERE category_id = ".$category_id." LIMIT 1 ");
$category_id_res = mysql_fetch_assoc($category_id_sql);
$category_name = $category_id_res["category_name"];

//中カテ
$sub_category = $values['sub_category_id1'];
$sub_category_sql = mysql_query("SELECT name FROM store_sub_categories WHERE id = ".$sub_category." LIMIT 1 ");
$sub_category_res = mysql_fetch_assoc($sub_category_sql);
$sub_category = $sub_category_res["name"];

//性別
$st_yahoo_sex = $values['st_yahoo_sex'];
$st_yahoo_sex_sql = mysql_query("SELECT sex_name FROM _sex WHERE sex_id = ".$st_yahoo_sex." LIMIT 1 ");
$st_yahoo_sex_res = mysql_fetch_assoc($st_yahoo_sex_sql);
$st_yahoo_sex = $st_yahoo_sex_res["sex_name"];
if($st_yahoo_sex == "男"){
	$st_yahoo_sex = "メンズ";
}elseif($st_yahoo_sex == "女"){
	$st_yahoo_sex = "レディース";
}else{
	$st_yahoo_sex = "★ユニセックス★";
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



$whi_i = 1;
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
		$values['raku_tenponai_'.$whi_i] = $raku_tenpo;
	}else{
		$values['raku_tenponai_'.$whi_i] = "";
	}

	$whi_i++;
	$raku_tenpo = "";
}


//書き換えが終わったら、ユニセックスの処理
if($yuni_pass != ""){
	//空の項目を探す
	for ($i=1; $i <= 5; $i++) {
		if($values['raku_tenponai_'.$i] == ""){
			$values['raku_tenponai_'.$i] = $yuni_pass;
			break;
		}
	}
}



function rakujan_kakikae($str){
global $category_name;
global $sub_category;
global $st_yahoo_sex;
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
		$str = str_replace("★性別★","\\".$st_yahoo_sex,$str);
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



echo '<link rel="stylesheet" href="/include/saisun.css">';
?>

