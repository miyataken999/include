<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>

<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/function/keep_price.php";


mb_internal_encoding("utf-8");

$all_res = array();
$res = array();

$res[] = "コントロールカラム";
$res[] = "商品番号";
$res[] = "ヤフオク｜商品名";
$res[] = "楽天｜商品名";
$res[] = "販売価格";
$res[] = "販売開始日時";
$res[] = "販売終了日時";
$res[] = "タイトル文言";
$res[] = "自動値下げ対象外";

$categori_array = array(10,17,18,19,20,21,22,23,24,25,26,27,28,50,51);


$all_res[] = $res;

$res = "";


foreach ($_POST as $key => $value) {
	$value = str_replace("\n","",$value);
	$keyArray = explode("###", $key);
	$key = $keyArray[1];
// print $key."<br>";
	if($key == "product_id"){

		$baihen_kinshi_days = baihen_kinshi_days($value);
		if($baihen_kinshi_days > 0){
			$res[8] = 1;
		}else{
			$res[8] = 0;
		}
		$query = "UPDATE shouhin SET days_keep_price = '{$baihen_kinshi_days}' WHERE product_id='{$value}' AND `status`!=10 limit 1";

		try {
			mysql_query($query);
		} catch (Exception $e) {
			echo "失敗しました。";
			echo $e->getMessage();
			exit();
		}

		continue;
	}elseif($key == "category_id"){
		$category_id = $value;
		continue;
	}elseif($key == "yahoo_sinaban"){
		$res[1] = $value;
	}elseif($key == "Title"){
		$res[2] = $value;
	}elseif($key == "Starting_price"){
		$res[4] = $value;
	}elseif($key == "raku_title"){
		$res[3] = $value;
	}elseif($key == "lastflag"){
		$resres[] = "u";
		$resres[] = $res[1];
		$resres[] = $res[2];

		if($res[8] == 1){
			$res[3] = str_replace("■","★■",$res[3]);
		}
		$resres[] = $res[3];

		$resres[] = $res[4];
		$saleStart = $_POST["saleStart"];
		$saleStart = str_replace("-","/",$saleStart);
		$saleStart = str_replace("T"," ",$saleStart);
		$resres[] = $saleStart;
		$saleEnd = $_POST["saleEnd"];
		$saleEnd = str_replace("-","/",$saleEnd);
		$saleEnd = str_replace("T"," ",$saleEnd);
		$resres[] = $saleEnd;

		//タイトル文言の生成
		if(in_array($category_id,$categori_array)){
			$title_mongon_cate = "h";
		}else{
			$title_mongon_cate = "b";
		}
		$title_mongon = date("Y",strtotime($saleStart))-2000;
		$title_mongon = $title_mongon_cate.$title_mongon.date("md",strtotime($saleStart));
		$resres[] = $title_mongon;

		$resres[] = $res[8];// 空欄【自動値下げ対象外】
		$all_res[] = $resres;
		$res = "";
		$resres = "";
	}else{
		continue;
	}

}

// var_dump($all_res);

// exit();
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★商品データ CSVへ書き込み★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	// var_dump($csv_array);
	//該当ファイルオープン
	$csv_file_name = './shuppin.csv';
	$fp = fopen($csv_file_name,'w');
	if ($fp === FALSE) {
		throw new Exception('ファイルの書き込みに失敗しました。');
	}
	$fput_i = 1;

	foreach($all_res as $csvset){
		for ($i=0; $i < count($csvset); $i++) {
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


?>

ZIP作成成功しました。ダウンロードページへ移動します(^-^)
<script type="text/javascript">
	window.location = ("./download.php");
</script>

</body>
</html>
