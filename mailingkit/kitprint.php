<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>宅配キットロジザード出荷ダウンロード</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?
// include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header_shop5.php";
// include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/header.php";
// print "uid ".$uid;

// include_once $_SERVER["DOCUMENT_ROOT"]."/include/shouhin_no/dir_menu.php";

//権限ファイル
include "./auth.php";



mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";
?>


<?


//出力項目の設定
$csv = array();
$csv['倉庫ID'] = "none";
$csv['荷主出荷NO'] = "syukka_number";
$syukka_number_i = 0;
$csv['業務区分ID'] = "none";
$csv['取引先ID'] = "kotei__7";
$csv['出荷指示日'] = "none";
$csv['出荷登録日'] = "none";
$csv['IF送り状ソフトID'] = "kotei__2";
$csv['配達指定日'] = "arrival_date";
// $csv['配達指定日'] = "kotei__".date("Y/m/d");
$csv['IF配達時間帯ID'] = "arrival_time";
$csv['実績区分ID'] = "none";
$csv['IF配送決済区分ID'] = "kotei__1";
$csv['IF配送方法ID'] = "none";
$csv['配送先名'] = "user_mei";
$csv['配送先国コード'] = "none";
$csv['配送先郵便番号'] = "user_yuubin";
$csv['配送先都道府県'] = "user_todou";
$csv['配送先住所１'] = "user_juusyo";
$csv['配送先住所２'] = "none";
$csv['配送先住所３'] = "none";
$csv['配送先電話番号'] = "user_tel";
$csv['配送先FAX番号'] = "none";
$csv['配送先E-MAIL'] = "none";
$csv['配送先法人名'] = "none";
$csv['配送先所属部署・役職'] = "none";
$csv['箱数'] = "none";
$csv['送り状備考１'] = "delivery_slip_instruction";
$csv['送り状備考２'] = "none";
$csv['送り状備考３'] = "none";
$csv['出荷留フラグ'] = "none";
$csv['サイト受注NO'] = "kit_id";
$csv['優先フラグ'] = "none";
$csv['注文日'] = "kotei__".date("Y/m/d");
$csv['注文時間'] = "kotei__".date("H:i:s");
$csv['顧客ID'] = "user_mei";
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
$csv['購入者氏名'] = "user_mei";
$csv['購入者国コード'] = "none";
$csv['購入者郵便番号'] = "user_yuubin";
$csv['購入者都道府県'] = "user_todou";
$csv['購入者住所１'] = "user_juusyo";
$csv['購入者住所２'] = "none";
$csv['購入者住所３'] = "none";
$csv['購入者法人名'] = "none";
$csv['購入者電話番号'] = "user_tel";
$csv['購入者E-MAIL'] = "user_mail";
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
$csv['倉庫連絡事項'] = "warehouse_instruction";
$csv['ピッキング印字ヘッダ１'] = "none";
$csv['ピッキング印字ヘッダ２'] = "none";
$csv['商品ID'] = "kit_hinban";
$csv['印字商品コード'] = "none";
$csv['印字商品名'] = "kit_name";
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
$csv['出荷予定数'] = "kit_kosuu";
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
$csv['明細予備項目００１'] = "ecc_id";
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
foreach ($csv as $key => $value) {
	$koumoku_name[] = $key;
	$koumoku_key[] = $value;
}



//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★データ取得★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

	// $query = "SELECT * FROM Eoc WHERE ecc_id={$ecc_id}";
	$query = "SELECT * FROM Eoc WHERE kit_flag=1";

	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	$csv_array = array($koumoku_name);
	while ($res = mysql_fetch_assoc($sql)) {
		$ecc_id = $res["ecc_id"];
		if($ecc_id == ""){
			continue;
		}
		$up_query = "UPDATE Eoc SET kit_flag=0 WHERE ecc_id={$ecc_id} LIMIT 1";
		// print $up_query;
		//ゼロ更新はいったん止めとく。
		// $up_sql = mysql_query($up_query);


		$takuhai_query = "SELECT * FROM Eoc_takuhai WHERE ecc_id={$ecc_id} AND `status`=1 order by id desc limit 1";
		$takuhai_sql = mysql_query('SET NAMES utf8');
		$takuhai_sql = mysql_query($takuhai_query);

		$kit_detail_Array = "";

		while ($takuhai_res = mysql_fetch_assoc($takuhai_sql)) {
			$arrival_date = $takuhai_res["arrival_date"];

			$kit_detail = $takuhai_res["kit_detail"];

			$kit_denpyou = $takuhai_res["kit_denpyou"];
			$kit_huutou = $takuhai_res["kit_huutou"];
			$kit_S = $takuhai_res["kit_S"];
			$kit_M = $takuhai_res["kit_M"];
			$kit_L = $takuhai_res["kit_L"];

			$warehouse_instruction = $takuhai_res["warehouse_instruction"];
			$delivery_slip_instruction = $takuhai_res["delivery_slip_instruction"];

			$kit_id = $takuhai_res["id"];

			$kit_time = $takuhai_res["time_select_hidden"];
			$tel = $takuhai_res["user_tel"];
			$mail = $takuhai_res["user_mail"];


			$kit_detail_Array = array();
			if(($kit_denpyou != "") AND ($kit_denpyou > 0)){
				$kit_detail_Array[] = "kit_denpyou";
			}
			if(($kit_huutou != "") AND ($kit_huutou > 0)){
				$kit_detail_Array[] = "kit_huutou";
			}
			if(($kit_S != "") AND ($kit_S > 0)){
				$kit_detail_Array[] = "kit_S";
			}
			if(($kit_M != "") AND ($kit_M > 0)){
				$kit_detail_Array[] = "kit_M";
			}
			if(($kit_L != "") AND ($kit_L > 0)){
				$kit_detail_Array[] = "kit_L";
			}






		}//end takuhai while









		for ($kit_detail_i=0; $kit_detail_i < count($kit_detail_Array); $kit_detail_i++) {
			$kit_detail_gyou = trim($kit_detail_Array[$kit_detail_i]);
			if($kit_detail_gyou == ""){
				continue;
			}

			if($kit_detail_gyou == "kit_denpyou"){
				$kit_hinban = "kit_denpyou";
				$kit_name = "着払い伝票";
				$kit_kosuu = $kit_denpyou;
			}elseif($kit_detail_gyou == "kit_huutou"){
				$kit_hinban = "kit_huutou";
				$kit_name = "クッション封筒";
				$kit_kosuu = $kit_huutou;
			}elseif($kit_detail_gyou == "kit_S"){
				$kit_hinban = "kit_S";
				$kit_name = "段ボールS";
				$kit_kosuu = $kit_S;
			}elseif($kit_detail_gyou == "kit_M"){
				$kit_hinban = "kit_M";
				$kit_name = "段ボールM";
				$kit_kosuu = $kit_M;
			}elseif($kit_detail_gyou == "kit_L"){
				$kit_hinban = "kit_L";
				$kit_name = "段ボールL";
				$kit_kosuu = $kit_L;
			}else{
				$kit_hinban = "";
				$kit_name = "";
			}

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
					if($koumoku_key[$i] == "user_mei"){//配送先名
						$result = $res["name1"]." 様";
					}elseif($koumoku_key[$i] == "user_yuubin"){//配送先名
						$result = $res["zip1"].$res["zip2"];
					}elseif($koumoku_key[$i] == "user_todou"){//配送先名
						$result = $res["address1"];
					}elseif($koumoku_key[$i] == "user_juusyo"){//配送先名
						$result = $res["address2"].' '.$res["address3"];
					}elseif($koumoku_key[$i] == "user_tel"){//配送先名
						if( ($tel == $res["tel2"]) OR ($tel == $res["tel"]) ){
							$result = $tel;
						}elseif($res["tel2"] != ""){
							$result = $res["tel2"];
						}elseif($res["tel"] != ""){
							$result = $res["tel"];
						}
					}elseif($koumoku_key[$i] == "user_mail"){//配送先名
						if( ($mail == $res["mail1"]) OR ($mail == $res["mail2"]) ){
							$result = $mail;
						}elseif($res["mail1"] != ""){
							$result = $res["mail1"];
						}elseif($res["mail2"] != ""){
							$result = $res["mail2"];
						}
					}elseif($koumoku_key[$i] == "kit_hinban"){//配送先名
						$result = $kit_hinban;
					}elseif($koumoku_key[$i] == "kit_name"){//配送先名
						$result = $kit_name;
					}elseif($koumoku_key[$i] == "kit_kosuu"){//配送先名
						$result = $kit_kosuu;
					}elseif($koumoku_key[$i] == "syukka_number"){
						// $syukka_number_i++;
						// $result = date("YmdHis").'-'.$ecc_id.'-'.$syukka_number_i;
						// $result = date("YmdHis").'-'.$ecc_id;
						$result = date("YmdHis").'-'.sprintf('%07d', $ecc_id);
					}elseif($koumoku_key[$i] == "warehouse_instruction"){//配送先名
						$result = $warehouse_instruction;
					}elseif($koumoku_key[$i] == "delivery_slip_instruction"){//配送先名
						$result = $delivery_slip_instruction;
					}elseif($koumoku_key[$i] == "kit_id"){//配送先名
						$result = $kit_id;
					}elseif($koumoku_key[$i] == "arrival_date"){//配送先名
						// var_dump($arrival_date);
						if(($arrival_date != "") AND ($arrival_date != "0000-00-00")){
							$result = date("Y/m/d",strtotime($arrival_date.' 00:00:00'));
						}else{
							$result = date("Y/m/d",strtotime("+1 day"));
						}
					}elseif($koumoku_key[$i] == "arrival_time"){
						if($kit_time == "午前中"){
							$result = '1';
						}elseif($kit_time == "12～14時"){
							$result = '4';
						}elseif($kit_time == "14～16時"){
							$result = '5';
						}elseif($kit_time == "16～18時"){
							$result = '6';
						}elseif($kit_time == "18～21時"){
							$result = '15';
						}else{
							$result = '0';
						}
						// $result = $kit_time;

					}elseif($koumoku_key[$i] == "ecc_id"){//配送先名
						$result = $ecc_id;
					}


				}
				$res_array[$i] = $result;
			}
			array_push($csv_array, $res_array);
		}
	}//end eoc while


//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★END データ取得★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
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
