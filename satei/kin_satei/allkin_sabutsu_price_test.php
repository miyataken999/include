<?
// ini_set("display_errors",1);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>金査全+査物・査定明細</title>
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

$kokyaku = htmlspecialchars($_GET["koSEQ"]);

$tokutei_date = date("Y-m-d");



	// if($title != ""){
	// 	$title = " / ".$title;
	// }

// 金地金・ダイヤ少量による ※規約第8条14項
include './check/syouryou.php';




$sumprice["H"] = 0;
$sumprice["K"] = 0;
$sumprice["W"] = 0;
$sumprice["D"] = 0;
$sumprice["J"] = 0;
$sumprice["B"] = 0;


$write = '';

//NEW 金査
// $query = "SELECT * FROM shouhin WHERE ecc_id={$kokyaku} AND updated_at LIKE'{$tokutei_date}%' AND kinsa_flag=1 AND `status`=126 order by product_id";
$query = "SELECT * FROM shouhin WHERE ecc_id={$kokyaku} AND `status`=126 AND kinsa_flag=1 order by product_id";
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);
$count = 0;
$total_price = 0;
while ($res = mysql_fetch_assoc($sql)) {
	$count++;

	include $_SERVER["DOCUMENT_ROOT"]."/include/satei/kin_satei/create_title_test.php";

	$price = $res["price"];
	$total_price = $total_price+$price;
	$price = number_format($price);

	// print "{$count} {$title} = {$price} 円<br>";
	$write .= "{$count} {$title} = {$price} 円<br>";


	// if(($res["category_id"] == 12) AND (($res["sub_category_id1"] == 838) OR ($res["sub_category_id1"] == 839) OR ($res["sub_category_id1"] == 840))){
	if(($res["category_id"] == 12) AND ($res["sub_category_id1"] == 840)){
		$sumprice["H"] += $res["price"];
	}elseif($res["category_id"] == 10){
		$sumprice["W"] += $res["price"];
	}elseif(($res["category_id"] == 17) AND (($res["sub_category_id1"] == 415) OR ($res["sub_category_id1"] == 420))){
		$sumprice["D"] += $res["price"];
	}elseif($res["category_id"] == 17){
		$sumprice["J"] += $res["price"];
	}else{
		$sumprice["K"] += $res["price"];
	}


}





$query = "SELECT product_id,yahoo_junle,title,yahoo_color,yahoo_kataban,serial_number,price,comment,category_id,sub_category_id1 FROM shouhin WHERE `status`=32 AND ecc_id={$kokyaku}";
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);
while ($shouhin_res = mysql_fetch_assoc($sql)) {
	$count++;
	$yahoo_junle = $shouhin_res["yahoo_junle"];
	$title = $shouhin_res["title"];
	if($title != ""){
		$title = " / ".$title;
	}
	$yahoo_color = $shouhin_res["yahoo_color"];
	if($yahoo_color != ""){
		$yahoo_color = " / ".$yahoo_color;
	}
	// $yahoo_kataban = $shouhin_res["yahoo_kataban"];
	// if($yahoo_kataban != ""){
	// 	$yahoo_kataban = " / ".$yahoo_kataban;
	// }
		$serial_number = $shouhin_res["serial_number"];
	if($serial_number != ""){
		$serial_number = " / ".$serial_number;
	}
	$price = $shouhin_res["price"];
	$total_price = $total_price+$price;
	$price = number_format($price);
	$comment = $shouhin_res["comment"];
	// print $count." ".$yahoo_junle.$title.$yahoo_color.$yahoo_kataban.$serial_number." = ".$price."円 ".$comment."<br>";

	if($title != ""){
		// print $count." ".$yahoo_junle.$title.$yahoo_color.$serial_number." = ".$price."円 ".$comment."<br>";
		$write .= $count." ".$yahoo_junle.$title.$yahoo_color.$serial_number." = ".$price."円 ".$comment."<br>";
	}else{
		// $query = "SELECT * FROM Eoc_chigins2 WHERE product_id={$shouhin_res['product_id']} LIMIT 1";
		// // print $query;
		// $sql = mysql_query($query);
		// $res = mysql_fetch_assoc($sql);
		// include $_SERVER["DOCUMENT_ROOT"]."/include/satei/Eoc_chigins2/create_title.php";
		// print $count." ".$title." = ".$price."円 ".$comment."<br>";

		$res = $shouhin_res;
		include $_SERVER["DOCUMENT_ROOT"]."/include/satei/kin_satei/create_title_test.php";
		// print "{$count} {$title} = {$price} 円<br>";
		$write .= "{$count} {$title} = {$price} 円<br>";


	}



	if($shouhin_res["category_id"] == 10){
		$sumprice["W"] += $shouhin_res["price"];
	}elseif(($shouhin_res["category_id"] == 17) AND (($shouhin_res["sub_category_id1"] == 415) OR ($shouhin_res["sub_category_id1"] == 420))){
		$sumprice["D"] += $shouhin_res["price"];
	}elseif(($shouhin_res["category_id"] == 17) OR ($shouhin_res["category_id"] == 18) OR ($shouhin_res["category_id"] == 19) OR ($shouhin_res["category_id"] == 50) OR ($shouhin_res["category_id"] == 20) OR ($shouhin_res["category_id"] == 51) OR ($shouhin_res["category_id"] == 21) OR ($shouhin_res["category_id"] == 22) OR ($shouhin_res["category_id"] == 23)){
		$sumprice["J"] += $shouhin_res["price"];
	}else{
		$sumprice["B"] += $shouhin_res["price"];
	}

}
// print "合計金額：".number_format($total_price)."円";
$write .= "合計金額：".number_format($total_price)."円";





include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";




$write = str_replace("<br>","\n",$write);
?>
<button id="copyBtn" onclick="copyToClipboard()">Copy!</button>

<textarea id="copyTarget" value="<?=$write?>" readonly><?=$write?></textarea>


<table id="category_table">
	<tr>
		<th colspan="2">カテゴリー別計算</th>
	</tr>
	<tr>
		<th>K</th>
		<td><?=number_format($sumprice["K"])?>円</td>
	</tr>
	<tr>
		<th>D</th>
		<td><?=number_format($sumprice["D"])?>円</td>
	</tr>
	<tr>
		<th>J</th>
		<td><?=number_format($sumprice["J"])?>円</td>
	</tr>
	<tr>
		<th>W</th>
		<td><?=number_format($sumprice["W"])?>円</td>
	</tr>
	<tr>
		<th>B</th>
		<td><?=number_format($sumprice["B"])?>円</td>
	</tr>
	<tr>
		<th>H</th>
		<td><?=number_format($sumprice["H"])?>円</td>
	</tr>
</table>


<strong>合計金額： <?=number_format($sumprice["K"]+$sumprice["D"]+$sumprice["J"]+$sumprice["W"]+$sumprice["B"]+$sumprice["H"])?>円</strong>



<br><br><a id="return_link" href="/shop5/Eoc_list.php?q=(ecc_id~equals~<?=$kokyaku?>)">顧客一覧へ戻る</a>

<style type="text/css">
	#category_table{
		border-bottom: 1px solid #111;
	    border-collapse: collapse;
	    margin-top: 15px;
	}
	#category_table th{
		background-color: #ddd;
	}
	#category_table th, #category_table td{
		padding: 5px;
		border-top: 1px solid #111;
		border-right: 1px solid #111;
		border-left: 1px solid #111;
	}
<?$size = 15;?>
	#copyTarget{
		display: block;
		width: 100%;
		font-size: <?=$size?>px;
		line-height: 1.2;
		height: <?=$size*($count+3)*1.2?>px;
		padding: 10px;
	}
	#copyBtn{
		margin-bottom: 15px;
		width: 300px;
		padding: 10px;
		background-color: #ff0;
		font-size: 15px;
		font-weight: bold;
	}
	#copyBtn:hover{
		cursor: pointer;
		opacity: 0.5;
	}
</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
	function copyToClipboard() {
	    // コピー対象をJavaScript上で変数として定義する
	    var copyTarget = document.getElementById("copyTarget");
	    // コピー対象のテキストを選択する
	    copyTarget.select();
	    // 選択しているテキストをクリップボードにコピーする
	    document.execCommand("Copy");
	    window.location.href = 'https://rifa.life'+$("#return_link").attr("href");
	}

document.getElementById("copyBtn").focus();

	$("#copyTarget").keydown(function(e){
		if(e.keyCode == 13){
			window.location.href = 'https://rifa.life'+$("#return_link").attr("href");
		}
	})

</script>

	</body>
</html>
