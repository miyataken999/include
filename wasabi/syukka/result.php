<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>弊社戻しダウンロード</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header_shop5.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/header.php";
// print "uid ".$uid;

include_once $_SERVER["DOCUMENT_ROOT"]."/include/shouhin_no/dir_menu.php";

mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";
?>


<?


//出力項目の設定
$csv = array();
$csv['倉庫ID'] = "none";
$csv['荷主出荷NO'] = date("YmdHis");
$csv['業務区分ID'] = "none";
$csv['取引先ID'] = "kotei__2";
$csv['出荷指示日'] = "none";
$csv['出荷登録日'] = "none";
$csv['IF送り状ソフトID'] = "kotei__2";
$csv['配達指定日'] = "kotei__".date("Y/m/d",strtotime("+1 day"));
$csv['IF配達時間帯ID'] = "kotei__1";
$csv['実績区分ID'] = "none";
$csv['IF配送決済区分ID'] = "kotei__1";
$csv['IF配送方法ID'] = "none";
$csv['配送先名'] = "kotei__ラウンジデザイナーズ株式会社";
$csv['配送先国コード'] = "none";
$csv['配送先郵便番号'] = "kotei__1700013";
$csv['配送先都道府県'] = "kotei__東京都";
$csv['配送先住所１'] = "kotei__豊島区東池袋1-25-14-4F";
$csv['配送先住所２'] = "none";
$csv['配送先住所３'] = "none";
$csv['配送先電話番号'] = "kotei__0359850388";
$csv['配送先FAX番号'] = "none";
$csv['配送先E-MAIL'] = "none";
$csv['配送先法人名'] = "none";
$csv['配送先所属部署・役職'] = "none";
$csv['箱数'] = "none";
$csv['送り状備考１'] = "none";
$csv['送り状備考２'] = "none";
$csv['送り状備考３'] = "none";
$csv['出荷留フラグ'] = "none";
$csv['サイト受注NO'] = "none";
$csv['優先フラグ'] = "none";
$csv['注文日'] = "kotei__".date("Y/m/d");
$csv['注文時間'] = "kotei__".date("H:i:s");
$csv['顧客ID'] = "kotei__ラウンジデザイナーズ株式会社";
$csv['配送料金'] = "kotei__0";
$csv['代引き手数料金'] = "kotei__0";
$csv['税'] = "kotei__0";
$csv['ポイント使用額'] = "kotei__0";
$csv['ポイントステータス'] = "none";
$csv['獲得ポイント'] = "none";
$csv['使用ポイント'] = "kotei__0";
$csv['合計ポイント'] = "none";
$csv['クーポン金額'] = "none";
$csv['買上金額合計'] = "kotei__0";
$csv['決済方法'] = "kotei__クレジットカード";
$csv['荷主人指定区分'] = "kotei__02";
$csv['購入者氏名'] = "kotei__ラウンジデザイナーズ株式会社";
$csv['購入者国コード'] = "none";
$csv['購入者郵便番号'] = "kotei__1700013";
$csv['購入者都道府県'] = "kotei__東京都";
$csv['購入者住所１'] = "kotei__豊島区東池袋1-25-14-4F";
$csv['購入者住所２'] = "none";
$csv['購入者住所３'] = "none";
$csv['購入者法人名'] = "none";
$csv['購入者電話番号'] = "kotei__0359850388";
$csv['購入者E-MAIL'] = "none";
$csv['顧客コメント'] = "none";
$csv['領収書フラグ'] = "none";
$csv['領収書宛名'] = "none";
$csv['ギフトフラグ'] = "none";
$csv['ギフトメッセージ'] = "none";
$csv['のし'] = "none";
$csv['納品書ヘッダコメント'] = "none";
$csv['納品書フッタコメント'] = "none";
$csv['納品書印字ヘッダ１'] = "none";
$csv['納品書ヘッダ２'] = "none";
$csv['倉庫連絡事項'] = "kotei__弊社戻し";
$csv['ピッキング印字ヘッダ１'] = "none";
$csv['ピッキング印字ヘッダ２'] = "none";
$csv['商品ID'] = "yahoo_sinaban";
$csv['印字商品コード'] = "none";
$csv['印字商品名'] = "raku_title";
$csv['在庫キー１'] = "none";
$csv['印字在庫キー１'] = "none";
$csv['印字在庫キー１名称'] = "none";
$csv['在庫キー２'] = "none";
$csv['印字在庫キー２'] = "none";
$csv['印字在庫キー２名称'] = "none";
$csv['在庫キー３'] = "none";
$csv['印字在庫キー３'] = "none";
$csv['印字在庫キー３名称'] = "none";
$csv['在庫キー４'] = "none";
$csv['印字在庫キー４'] = "none";
$csv['印字在庫キー４名称'] = "none";
$csv['印字商品コード２'] = "none";
$csv['品質区分ID'] = "none";
$csv['ロット'] = "none";
$csv['出荷予定数'] = "kotei__1";
$csv['印字出荷予定数'] = "none";
$csv['単価'] = "kotei__0";
$csv['納品書行備考'] = "none";
$csv['納品書印字明細１'] = "none";
$csv['納品書印字明細２'] = "none";
$csv['倉庫行備考'] = "none";
$csv['ピッキング印字明細１'] = "none";
$csv['ピッキング印字明細２'] = "none";
$csv['引当抽出グループ１'] = "none";
$csv['引当抽出グループ２'] = "none";
$csv['引当抽出グループ３'] = "none";
$csv['包装料１'] = "none";
$csv['包装料２'] = "none";
$csv['包装１'] = "none";
$csv['包装２'] = "none";
$csv['サイト販売価格'] = "kotei__0";
$csv['行価格割引金額'] = "none";
$csv['行価格割引表示'] = "none";
$csv['登録区分'] = "none";
$csv['ステータス区分'] = "none";
$csv['ヘッダ予備項目００１'] = "none";
$csv['ヘッダ予備項目００２'] = "none";
$csv['ヘッダ予備項目００３'] = "none";
$csv['ヘッダ予備項目００４'] = "none";
$csv['ヘッダ予備項目００５'] = "none";
$csv['ヘッダ予備項目００６'] = "none";
$csv['ヘッダ予備項目００７'] = "none";
$csv['ヘッダ予備項目００８'] = "none";
$csv['ヘッダ予備項目００９'] = "none";
$csv['ヘッダ予備項目０１０'] = "none";
$csv['明細予備項目００１'] = "none";
$csv['明細予備項目００２'] = "none";
$csv['明細予備項目００３'] = "none";
$csv['明細予備項目００４'] = "none";
$csv['明細予備項目００５'] = "none";
$csv['明細予備項目００６'] = "none";
$csv['明細予備項目００７'] = "none";
$csv['明細予備項目００８'] = "none";
$csv['明細予備項目００９'] = "none";
$csv['明細予備項目０１０'] = "none";


$koumoku_name = array();
$koumoku_key = array();
$sql_key = "";
foreach ($csv as $key => $value) {
	//CSV反映ありのif
	// if($value != "A_storage"){
		$koumoku_name[] = $key;
		$koumoku_key[] = $value;
	// }

	if(($value == "none") OR ($value == "lounge_no") OR (strstr($value, "kotei__"))){
		//なし
	}else{
		$sql_key ? $sql_key .= ",".$value : $sql_key .= $value;
	}
}




//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★対象のセレクタ指定★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	$hinban = htmlspecialchars($_POST["hinban"]);
	$res_id = "";
	$hinbanArray = explode("\n", $hinban);

	$sql = mysql_query('SET NAMES utf8');

	$count = 0;
	for ($i=0; $i < count($hinbanArray); $i++) {
		$count++;
		$yahoo_sinaban = trim($hinbanArray[$i]);
		if($yahoo_sinaban != ""){
			$res_id ? $res_id .= " OR yahoo_sinaban='{$yahoo_sinaban}'" : $res_id .= "yahoo_sinaban='{$yahoo_sinaban}'";
		}
	}

	$query = "SELECT {$sql_key} FROM shouhin WHERE {$res_id}";

//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★END 対象のセレクタ指定★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■


//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★商品データ取得★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	$csv_array = array($koumoku_name);
	while ($res = mysql_fetch_assoc($sql)) {
		$res_array = "";
		for ($i=0; $i < count($koumoku_key); $i++) {
			//初期化
			$koteiValArray = "";
			$result = "";

			if($koumoku_key[$i] == "none"){
				$result = "";
			}elseif(strstr($koumoku_key[$i],"kotei__")){
				$koteiValArray = explode("__",$koumoku_key[$i]);
				$result = $koteiValArray[1];
			}elseif($koumoku_key[$i] == "lounge_no"){
				$result = "lounge_no";
			}else{
				$result = $res[$koumoku_key[$i]];
			}
			$res_array[$i] = $result;
		}
		array_push($csv_array, $res_array);
	}


//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★END 商品データ取得★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★商品データ CSVへ書き込み★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	// var_dump($csv_array);
	//該当ファイルオープン
	$csv_file_name = './download/syukka.csv';
	$fp = fopen($csv_file_name,'w');
	if ($fp === FALSE) {
		throw new Exception('ファイルの書き込みに失敗しました。');
	}
	$fput_i = 1;

	foreach($csv_array as $csvset){
		for ($i=0; $i < count($csvset); $i++) {
			$csvset[$i] = mb_convert_encoding($csvset[$i],"SJIS");
		}
	  if(fputcsv($fp, $csvset)){
	  	print("syukka.csv{$fput_i}行目完了<br><pre class='result_set_pre'>");
	  	// var_dump($csvset);
	  	print("</pre>");
	  }else{
	  	print("syukka.csv{$fput_i}行目書き込み失敗しました。<br>失敗データ↓<br><pre class='result_set_pre'>");
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




include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";

?>


CSV作成成功しました。ダウンロードページへ移動します(^-^)
<script type="text/javascript">
	window.location = ("./download.php");
</script>


</body>
</html>
