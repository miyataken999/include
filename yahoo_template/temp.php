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
$koumoku[] = "yahoo_sinaban";
$koumoku[] = "yahoo_junle";
$koumoku[] = "goods_title";
$koumoku[] = "yahoo_condition2";
$koumoku[] = "yahoo_condition1";
$koumoku[] = "yahoo_sozai";
$koumoku[] = "yahoo_color";
$koumoku[] = "yahoo_fuzokuhin";
$koumoku[] = "yahoo_sankou_uwadai";

$koumoku[] = "sales_price";
$koumoku[] = "yahoo_title";
$koumoku[] = "raku_title";

$koumoku[] = "country_of_origin";


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
	}elseif($koumoku[$i] == "yahoo_sankou_uwadai"){
		if($auc_data[$koumoku[$i]]!=''){
		$auc_data[$koumoku[$i]]=number_format($auc_data[$koumoku[$i]])."円";
		}
	}elseif($koumoku[$i] == "sales_price"){
	    $price_sql=mysql_fetch_array(mysql_query("SELECT Starting_price from auctions where product_id=".$auc_data['product_id']." limit 1"));
	    $auc_data[$koumoku[$i]] = $price_sql["Starting_price"];
		$auc_data[$koumoku[$i]] = number_format($auc_data[$koumoku[$i]]);
	}elseif($koumoku[$i] == "country_of_origin"){
		$q = "SELECT name FROM mst_country_of_origin WHERE id={$auc_data['country_of_origin']}";
		$s = mysql_query($q);
		$c = mysql_fetch_array($s);
		if($c["name"] == '--'){
			$auc_data[$koumoku[$i]] = "";
		}else{
			$auc_data[$koumoku[$i]] = $c["name"];
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
$yahoo_size = str_replace("\n","<br>",$yahoo_size);
$yahoo_size = str_replace("<br />","<br>",$yahoo_size);
$main_block=preg_replace($str,$yahoo_size,$main_block);

//★商品説明★置き換え
$str="/(★商品説明★)/i";
$remark=$auc_data['remark'];
$remark = str_replace("\n","<br>",$remark);
$remark = str_replace("<br />","<br>",$remark);
$main_block=preg_replace($str,$remark,$main_block);


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






//採寸者取得
$yahoo_saisun_sha = $auc_data['yahoo_saisun_sha'];
//撮影者取得
$REG_PHOTOGRAPHER = $auc_data['REG_PHOTOGRAPHER'];
$tantou_sha = "";
if($yahoo_saisun_sha != ""){
    $tantou_sha = '<img src="https://brandkaimasu.com/yahoo/img/condition/staff/'.$yahoo_saisun_sha.'.jpg" >';
}
if($REG_PHOTOGRAPHER != ""){
    $tantou_sha .= '<img src="https://brandkaimasu.com/yahoo/img/condition/staff/'.$REG_PHOTOGRAPHER.'.jpg" >';
}
if($tantou_sha != ""){
    $tantou_sha = $tantou_sha.'</td><td bgcolor="#fff" width="557px">こちらの商品は私達が採寸,撮影しました。<br>商品詳細やコンディション、サービスについてなど<br>ご不明な点がございましたらお気軽にお問合せください。';
}

//担当スタッフ置き換え
$str="/(★tantou_sha★)/i";
$main_block=preg_replace($str,$tantou_sha,$main_block);

//結果の出力
print $main_block;
?>

<a id="saisunLink" href="https://rifa.life/shop5/saisun_list.php">採寸待機一覧</a>
<style type="text/css" media="screen">
	#saisunLink{
		display: block;
		padding: 5px 20px;
		font-size: 36px;
		background-color: #ccc;
		border: 2px solid #000;
		width: 250px;
		margin: auto;
	}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
document.onkeydown = function(e) {
    var keyCode = false;

    if (e) event = e;

    if (event) {
        if (event.keyCode) {
            keyCode = event.keyCode;
        } else if (event.which) {
            keyCode = event.which;
        }
    }
    if(keyCode == '13'){
    	window.location.href = "https://rifa.life/shop5/saisun_list.php";
    }


};
</script>
