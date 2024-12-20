<?
header("Content-type: text/html; charset=utf-8");
mb_internal_encoding("utf-8");
// ini_set( 'display_errors', 1 );
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

$template = file_get_contents("./temp.html");
$template = mb_convert_encoding($template,"UTF-8");
//テンプレートの改行を削除
$template = ereg_replace("\r|\n","",$template);
$template = ereg_replace("\t","",$template);

mysql_query("SET NAMES utf8");

$product_id = htmlspecialchars($_GET["product_id"]);
$auc_data=mysql_fetch_array(mysql_query("SELECT * FROM shouhin WHERE product_id={$product_id} LIMIT 1"));



////////////////////////////////////////////////////////
//基本項目の書き換え
////////////////////////////////////////////////////////

$koumoku[] = "yahoo_sinaban";
$koumoku[] = "yahoo_fuzokuhin";
$koumoku[] = "stamp";
$koumoku[] = "yahoo_kataban";
$koumoku[] = "yahoo_junle";
$koumoku[] = "title";
$koumoku[] = "yahoo_sozai";
$koumoku[] = "yahoo_color";
$koumoku[] = "yahoo_size";
$koumoku[] = "yahoo_condition2";
$koumoku[] = "stamp";




for ($i=0; $i < count($koumoku); $i++) {
	if($koumoku[$i] == "yahoo_sinaban"){
		if($auc_data[$koumoku[$i]] != ""){
			$auc_data[$koumoku[$i]] = strtolower($auc_data[$koumoku[$i]]);
		}
	}elseif($koumoku[$i] == "yahoo_size"){
		if($auc_data[$koumoku[$i]] != ""){
			$auc_data[$koumoku[$i]] = str_replace("http://www.rakuten.ne.jp/","https://www.rakuten.ne.jp/",$auc_data[$koumoku[$i]]);
		}
	}

	$str='/({'.$koumoku[$i].'})/i';
	$template=preg_replace($str,$auc_data[$koumoku[$i]],$template);
}

////////////////////////////////////////////////////////
//特殊項目の書き換え
////////////////////////////////////////////////////////


//★katabanstamp★置き換え
$str="/(★katabanstamp★)/i";
$katabanstamp = "";
$stamp=$auc_data['stamp'];
$katabanstamp = $stamp;
$serial_number=$auc_data['serial_number'];
if($serial_number != ""){
	if($katabanstamp != ""){
		$katabanstamp .= "/";
	}
	$katabanstamp .= $serial_number;
}
$yahoo_kataban=$auc_data['yahoo_kataban'];
if($yahoo_kataban != ""){
	if($katabanstamp != ""){
		$katabanstamp .= "/";
	}
	$katabanstamp .= $yahoo_kataban;
}
// if($katabanstamp != ""){
	$template=preg_replace($str,$katabanstamp,$template);
// }


//性別置き換え
$yahoo_sex=$auc_data['yahoo_sex'];
// $sex_data = mysql_fetch_array(mysql_query("select * from _sex where sex_id={$yahoo_sex}"));
// $sex_name=$sex_data['sex_name'];
if($yahoo_sex == 1){
	$sex_name = "メンズ";
}elseif($yahoo_sex == 2){
	$sex_name = "レディース";
}else{
	$sex_name = "ユニセックス";
}
$str="/({sex})/i";
$template=preg_replace($str,$sex_name,$template);



$str="<a href=\"https://www.rakuten.ne.jp/gold/rfstore/store_shouhin.html#7\">⇒サイズ直しの詳細はコチラから</a>";
$template=str_replace($str,"",$template);

$str="<a href=\"http://www.rakuten.ne.jp/gold/rfstore/store_shouhin.html#7\">⇒サイズ直しの詳細はコチラから</a>";
$template=str_replace($str,"",$template);

$str="<br />通常最大±4号前後まで可能ですが、『可能』の場合でもデザインにより前後し、またそれによりお値段も変わります。<br />まずはご利用ガイドをお読み頂き、お問合せとお見積り後にお買い求めください。<br /><a href=\"https://www.rakuten.ne.jp/gold/rfstore/store_shouhin.html#7\">⇒ご利用ガイド『ジュエリー<span class=\"rnr-search-highlight\">サイズ直し</span>』はコチラ</a>";
$template=str_replace($str,"",$template);

$str="(付属品については記載があるもの、お写真に撮っているもののみ付属します。併せてご確認をお願い致します。)";
$template=str_replace($str,"",$template);

$str="(ノンブランド)/Off Brand";
$template=str_replace($str,"",$template);

$str="【お読みください】<br />通常最大±4号前後まで可能ですが、『可能』の場合でもデザインにより前後し、またそれによりお値段も変わります。<br />まずはご利用ガイドをお読み頂き、お問合せとお見積り後にお買い求めください。<br /><a href=\"https://www.rakuten.ne.jp/gold/rfstore/store_shouhin.html#7\">⇒ご利用ガイド『ジュエリーサイズ直し』はコチラ</a>";
$template=str_replace($str,"",$template);




//結果の出力
print $template;
?>
