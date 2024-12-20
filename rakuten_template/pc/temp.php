<?
header("Content-type: text/html; charset=utf-8");
mb_internal_encoding("utf-8");
// ini_set( 'display_errors', 1 );
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

$main_block = file_get_contents("./temp.html");
$main_block = mb_convert_encoding($main_block,"UTF-8");

mysql_query("SET NAMES utf8");

$product_id = htmlspecialchars($_GET["product_id"]);
$auc_data=mysql_fetch_array(mysql_query("SELECT * FROM shouhin WHERE product_id={$product_id} LIMIT 1"));



////////////////////////////////////////////////////////
//基本項目の書き換え
////////////////////////////////////////////////////////


$koumoku[] = "product_id";
$koumoku[] = "yahoo_junle";
$koumoku[] = "title";
$koumoku[] = "yahoo_sinaban";
$koumoku[] = "sales_price";
$koumoku[] = "yahoo_condition2";
$koumoku[] = "yahoo_condition1";
$koumoku[] = "remark";
$koumoku[] = "yahoo_sozai";
$koumoku[] = "yahoo_color";
$koumoku[] = "yahoo_fuzokuhin";
$koumoku[] = "yahoo_sankou_uwadai";

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
		if($auc_data[$koumoku[$i]] != ""){
		    $price_sql=mysql_fetch_array(mysql_query("SELECT Starting_price from auctions where product_id=".$auc_data['product_id']." limit 1"));
		    $auc_data[$koumoku[$i]] = $price_sql["Starting_price"];
			$auc_data[$koumoku[$i]] = number_format($auc_data[$koumoku[$i]]);
		}
	}elseif($koumoku[$i] == "yahoo_sankou_uwadai"){
		if($auc_data[$koumoku[$i]] != ""){
			$auc_data[$koumoku[$i]] = number_format($auc_data[$koumoku[$i]]);
		}else{
			$auc_data[$koumoku[$i]] = "--";
		}
	}


	$str='/({'.$koumoku[$i].'})/i';
	$main_block=preg_replace($str,$auc_data[$koumoku[$i]],$main_block);
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
	$main_block=preg_replace($str,$katabanstamp,$main_block);
// }


//サイズ置き換え
$str="/(★サイズ★)/i";
$yahoo_size=$auc_data['yahoo_size'];
$yahoo_size = str_replace("http://www.rakuten.ne.jp/","https://www.rakuten.ne.jp/",$yahoo_size);
$yahoo_size = str_replace("\n","<br>",$yahoo_size);
$yahoo_size = str_replace("<br />","<br>",$yahoo_size);
$main_block=preg_replace($str,$yahoo_size,$main_block);

//サイズ置き換え
$str="/(★brand_junle★)/i";
$brand_junle=urlencode($auc_data['yahoo_junle']);
$main_block=preg_replace($str,$brand_junle,$main_block);

//★brand_item★用
$raku_tenponai=$auc_data['raku_hyoujisaki_category'];
$raku_tenponai = str_replace("\\"," ",$raku_tenponai);
if($raku_tenponai == ""){
    $auc_data_cate_id=mysql_fetch_array(mysql_query("SELECT category_name from store_categories where category_id=".$box_data['category_id']." limit 1"));
    $auc_data_sub_cate_id=mysql_fetch_array(mysql_query("SELECT name from store_sub_categories where id=".$box_data['sub_category_id1']." limit 1"));
    $raku_tenponai = $auc_data_cate_id["category_name"]." ".$auc_data_sub_cate_id["name"];
}
//検索リンク置き換え
$str="/(★brand_item★)/i";
$main_block=preg_replace($str,$raku_tenponai,$main_block);


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
$main_block=preg_replace($str,$sex_name,$main_block);


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
// $main_block=preg_replace($str,$created_at,$main_block);

//raku_image_name置き換え
$raku_image_name = $box_data["raku_image_name"];
$str="/({raku_image_name})/i";
$main_block=preg_replace($str,$raku_image_name,$main_block);


//楽天タイトルから【】以降を消して、商品説明文のタイトルとして出力

//★出品日★用
$raku_goods_name_data=mysql_fetch_array(mysql_query("SELECT raku_goods_name from auctions where product_id=".$auc_data['product_id']." limit 1"));
$raku_goods_name = $raku_goods_name_data['raku_goods_name'];
$raku_goods_name_array = explode("【",$raku_goods_name);
$raku_goods_name = $raku_goods_name_array[0];
$str="/(★raku_goods_name★)/i";
$main_block=preg_replace($str,$raku_goods_name,$main_block);





//採寸者取得
$yahoo_saisun_sha = $auc_data['yahoo_saisun_sha'];
//撮影者取得
$REG_PHOTOGRAPHER = $auc_data['REG_PHOTOGRAPHER'];
$tantou_sha = "";
if($yahoo_saisun_sha != ""){
    $tantou_sha = "<img src='https://www.rakuten.ne.jp/gold/rfstore/img/item/raku_1609/staff/{$yahoo_saisun_sha}.jpg' >";
}
if($REG_PHOTOGRAPHER != ""){
    $tantou_sha .= "<img src='https://www.rakuten.ne.jp/gold/rfstore/img/item/raku_1609/staff/{$REG_PHOTOGRAPHER}.jpg' >";
}
if($tantou_sha != ""){
    $tantou_sha = "<tr><th>担当スタッフ</th><td ><span>{$tantou_sha}</span><div>こちらの商品は私達が採寸、撮影しました。<br>商品詳細やコンディション、サービスについてなど<br>ご不明な点がございましたらお気軽にお問合せください。</div></td></tr>";
}

//担当スタッフ置き換え
$str="/(★tantou_sha★)/i";
$main_block=preg_replace($str,$tantou_sha,$main_block);

//結果の出力
print $main_block;
?>
