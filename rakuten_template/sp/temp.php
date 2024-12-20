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

$koumoku[] = "product_id";
$koumoku[] = "yahoo_sinaban";
$koumoku[] = "sales_price";
$koumoku[] = "yahoo_condition1";
$koumoku[] = "yahoo_condition2";
$koumoku[] = "remark";
$koumoku[] = "yahoo_sozai";
$koumoku[] = "yahoo_color";
$koumoku[] = "yahoo_fuzokuhin";
$koumoku[] = "stamp";
$koumoku[] = "yahoo_sankou_uwadai";
$koumoku[] = "yahoo_junle";

$koumoku[] = "title";

for ($i=0; $i < count($koumoku); $i++) {
	if($koumoku[$i] == "yahoo_condition2"){
		if($auc_data[$koumoku[$i]] == "N"){
			$auc_data[$koumoku[$i]] = "n";
		}elseif($auc_data[$koumoku[$i]] == "S"){
			$auc_data[$koumoku[$i]] = "s";
		}elseif($auc_data[$koumoku[$i]] == "A"){
			$auc_data[$koumoku[$i]] = "a";
		}elseif($auc_data[$koumoku[$i]] == "B"){
			$auc_data[$koumoku[$i]] = "b";
		}elseif($auc_data[$koumoku[$i]] == "C"){
			$auc_data[$koumoku[$i]] = "c";
		}
	}elseif($koumoku[$i] == "yahoo_sinaban"){
		if($auc_data[$koumoku[$i]] != ""){
			$auc_data[$koumoku[$i]] = strtolower($auc_data[$koumoku[$i]]);
		}
	}elseif($koumoku[$i] == "sales_price"){
	    $price_sql=mysql_fetch_array(mysql_query("SELECT Starting_price from auctions where product_id=".$auc_data['product_id']." limit 1"));
	    $auc_data[$koumoku[$i]] = $price_sql["Starting_price"];
		$auc_data[$koumoku[$i]] = number_format($auc_data[$koumoku[$i]]);
	}elseif($koumoku[$i] == "remark"){
		$auc_data[$koumoku[$i]] = str_replace("\n","<br>",$auc_data[$koumoku[$i]]);
		$auc_data[$koumoku[$i]] = str_replace("<br />","<br>",$auc_data[$koumoku[$i]]);
	}elseif($koumoku[$i] == "yahoo_sankou_uwadai"){
		if($auc_data[$koumoku[$i]] != ""){
			$auc_data[$koumoku[$i]] = number_format($auc_data[$koumoku[$i]]);
		}else{
			$auc_data[$koumoku[$i]] = "--";
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


//サイズ置き換え
$str="/(★サイズ★)/i";
$yahoo_size=$auc_data['yahoo_size'];
$yahoo_size = str_replace("http://www.rakuten.ne.jp/","https://www.rakuten.ne.jp/",$yahoo_size);
$yahoo_size = str_replace("\n","<br>",$yahoo_size);
$yahoo_size = str_replace("<br />","<br>",$yahoo_size);
$template=preg_replace($str,$yahoo_size,$template);

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
$str="/(★sex★)/i";
$template=preg_replace($str,$sex_name,$template);

//★brand_item★書き換え
$auc_data_cate_id=mysql_fetch_array(mysql_query("SELECT category_name from store_categories where category_id=".$auc_data['category_id']." limit 1"));
$auc_data_sub_cate_id=mysql_fetch_array(mysql_query("SELECT name from store_sub_categories where id=".$auc_data['sub_category_id1']." limit 1"));

$dai_kate = $auc_data_cate_id['category_name'];
$sub_kate = $auc_data_sub_cate_id['name'];
$brand_item = $dai_kate."+".$sub_kate."+";
//カテゴリリンク
$str="/(★brand_item★)/i";
$template=preg_replace($str,$brand_item,$template);


//担当者書き換え
$tantou_sha = "";
//採寸者取得
$yahoo_saisun_sha = $auc_data['yahoo_saisun_sha'];
if($yahoo_saisun_sha != ""){
	$tantou_sha = "<td><img src='https://www.rakuten.ne.jp/gold/rfstore/img/item/raku_1609/sp/staff/{$yahoo_saisun_sha}.jpg' width='70px' ></td>";
}
//撮影者取得
$REG_PHOTOGRAPHER = $auc_data['REG_PHOTOGRAPHER'];
if($REG_PHOTOGRAPHER != ""){
	$tantou_sha .= "<td><img src='https://www.rakuten.ne.jp/gold/rfstore/img/item/raku_1609/sp/staff/{$REG_PHOTOGRAPHER}.jpg' width='70px' ></td>";
}
if($tantou_sha != ""){
	$tantou_sha = "<table><tr>{$tantou_sha}</tr></table>";
	$tantou_sha = "こちらの商品は私達が採寸、撮影しました。<br>商品詳細やコンディション、サービスについてなど<br>ご不明な点はお気軽にお問合せください。<br>".$tantou_sha;
}

//採寸者置き換え
$str="/(★担当スタッフ★)/i";
$template=preg_replace($str,$tantou_sha,$template);




//★出品日★用
$box_id=$auc_data['box_id'];
$box_data = mysql_fetch_array(mysql_query("select * from box where box_id='$box_id'"));

$created_at=$box_data['created_at'];                //★出品日★
$created_at = split(" ",$created_at);
$created_at = $created_at[0];
$created_at = split("-",$created_at);

$created_at_month = $created_at[1];
$created_at_month = str_split($created_at_month);
if($created_at_month[0] == "0"){
    $created_at_month[0] = "";
}
$created_at_month = implode("", $created_at_month);
$created_at_day = $created_at[2];
$created_at_day = str_split($created_at_day);
if($created_at_day[0] == "0"){
    $created_at_day[0] = "";
}
$created_at_day = implode("", $created_at_day);
// $created_at = $created_at_month[0]."月".$created_at_day[0]."日";
$created_at = $created_at_month."月".$created_at_day."日";

//出品日置き換え
// $str="/(★created_at★)/i";
// $template=preg_replace($str,$created_at,$template);




//結果の出力
print $template;
?>
